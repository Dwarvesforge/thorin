<?php
/**
 * Get or set a configuration depending on the arguments passed
 * @param    {String}    $path    The configuration path to get
 * @param    {Mixed}    $value    The value to set
 *
 * @example    php
 * print Thorin::config('app.environment');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
$t_configs = [];
function t_config($path) {
	global $t_configs;
	// split the path using the . as separator
	$splits = explode('.', $path);
	// file to load is the first value in the splits stack
	$filename = array_shift($splits);
	// check if a config file exist with this filename
	$filepath = Thorin::sanitize_path(Thorin::config_path()) . $filename . '.php';
	$basefilepath = __DIR__ . '/../../config/' . $filename . '.php';
	if ( ! file_exists($filepath) && ! file_exists($basefilepath)) {
		throw new Exception('The config file "' . $filename . '" does not exist');
	}
	// load this file
	if (!isset($t_configs[$filepath])) {
		if ( file_exists($filepath)) {
			$config = require($filepath);
		} else {
			$config = [];
		}
		if (file_exists($basefilepath)) {
			$baseConfig = require($basefilepath);
			// merge the configs
			$config = Thorin::extend($baseConfig, $config);
		}
		// cache config
		$t_configs[$filepath] = $config;
	} else {
		$config = $t_configs[$filepath];
	}
	// transform the dot path to an array like one
	$path = implode("']['", $splits);
	$path = "['".$path."']";
	$path = strtoupper($path);
	// return the value from the languages stack
	$value = eval('return $config'.$path.';');
	// process tokens
	if (is_string($value)) {
		preg_match_all('#\$\{[a-zA-Z0-9._-]+\}#', $value, $matches);
		foreach($matches[0] as $token) {
			$tokenPath = str_replace('${','',$token);
			$tokenPath = str_replace('}','',$tokenPath);
			$tokenValue = Thorin::config($tokenPath);
			$value = str_replace($token, $tokenValue, $value);
		}
	}
	// return the value
	return $value;
}
