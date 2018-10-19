<?php

return [

	/**
	 * @name 	T_PROTOCOL
	 * Specify the protocol used to request the script. This is usually automatically setting up
	 * @type 		{String}
	 * @default 	http:// | https://
	 */
	'PROTOCOL' => (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://',

	/**
	 * @name 	T_DOMAIN
	 * Specify the domain under which the script has been requested. This is usually automatically setting up
	 * @type 		{String}
	 * @default 	$_SERVER['HTTP_HOST']
	 */
	'DOMAIN' => @$_SERVER['HTTP_HOST'],

	/**
	 * @name 	$root_path
	 * Specify the root path where your app is stored absolute to the server root folder.
	 * This is usually automatically setting up using the $_SERVER['DOCUMENT_ROOT']|$_SERVER['PWD'] variable
	 * Need to end with a trailing /
	 * @type 		{String}
	 * @default 	rtrim((isset($_SERVER['PWD'])) ? $_SERVER['PWD'] : $_SERVER['DOCUMENT_ROOT'], '/') . '/'
	 */
	'ROOT_PATH' =>  rtrim((isset($_SERVER['PWD'])) ? $_SERVER['PWD'] : $_SERVER['DOCUMENT_ROOT'], '/') . '/',

	/**
	 * @name 	T_ROOT_URL
	 * Specify the root url under which the script has been requested. This is usually automatically setting up
	 * @type 		{String}
	 * @default 	${app.PROTOCOL}${app.DOMAIN}
	 */
	'ROOT_URL' =>  '${app.PROTOCOL}${app.DOMAIN}',

	/**
	 * @name 		T_CONFIG_PATH
	 * Specify where the lang files are stored relative to the server root folder.
	 * Need to end with a trailing /
	 * This is bein used in functions like "t_lang", etc...
	 * @type 		{String}
	 * @default 	rtrim($root_path, '/') . '/app/config/'
	 */
	'CONFIG_PATH' =>  '${app.ROOT_PATH}app/config/',

	/**
	 * @name    	T_ENVIRONMENT
	 * Specify the environment to return in function like `t_get_environment`, `t_is_environment`, etc...
	 * @type  		{String}
	 * @default 	(getenv('ENVIRONMENT')) ? getenv('ENVIRONMENT') : 'production'
	 */
	'ENVIRONMENT' =>  (getenv('ENVIRONMENT')) ? getenv('ENVIRONMENT') : 'production'
];
