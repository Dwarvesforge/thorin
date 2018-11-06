# `app/config/app.php`

```php
return [
	/**
	 * @name 	protocol
	 * Specify the protocol used to request the script. This is usually automatically setting up
	 * @type 		{String}
	 * @default 	http:// | https://
	 */
	'protocol' => (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://',

	/**
	 * @name 	domain
	 * Specify the domain under which the script has been requested. This is usually automatically setting up
	 * @type 		{String}
	 * @default 	$_SERVER['HTTP_HOST']
	 */
	'domain' => @$_SERVER['HTTP_HOST'],

	/**
	 * @name    name
	 * Specify the name of the app used in some others configs like email, etc...
	 * @type    {String}
	 * @default    Thorin Application
	 */
	'name' => Thorin::env('APP_NAME', 'Thorin Application'),

	/**
	 * @name 	root_url
	 * Specify the root url under which the script has been requested. This is usually automatically setting up
	 * @type 		{String}
	 * @default 	${app.protocol}${app.domain}
	 */
	'root_url' =>  '${app.protocol}${app.domain}',

	/**
	 * @name    	environment
	 * Specify the environment to return in function like `t_environment`, `t_is_environment`, etc...
	 * @type  		{String}
	 * @default 	(getenv('ENVIRONMENT')) ? getenv('ENVIRONMENT') : 'production'
	 */
	'environment' => Thorin::env('ENVIRONMENT', 'production')
];
```
