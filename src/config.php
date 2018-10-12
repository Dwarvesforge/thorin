<?php

/**
 * @name 	Config constants
 * Define some configs using constants. These configs will be used across the thorin toolkit functions, etc...
 */

/**
 * @name 	T_PROTOCOL
 * Specify the protocol used to request the script. This is usually automatically setting up
 * @type 		{String}
 * @default 	http:// | https://
 */
t_define('T_PROTOCOL',(!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://',true);

/**
 * @name 	T_DOMAIN
 * Specify the domain under which the script has been requested. This is usually automatically setting up
 * @type 		{String}
 * @default 	$_SERVER['HTTP_HOST']
 */
t_define('T_DOMAIN',@$_SERVER['HTTP_HOST']);

/**
 * @name 	T_ROOT_PATH
 * Specify the root path where your app is stored absolute to the server root folder.
 * This is usually automatically setting up using the $_SERVER['DOCUMENT_ROOT'] variable
 * Need to end with a trailing /
 * @type 		{String}
 * @default 	rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/'
 */
t_define('T_ROOT_PATH', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/');

/**
 * @name 	T_ROOT_URL
 * Specify the root url under which the script has been requested. This is usually automatically setting up
 * @type 		{String}
 * @default 	T_PROTOCOL . T_DOMAIN
 */
t_define('T_ROOT_URL', T_PROTOCOL . T_DOMAIN);

/**
 * @name 		T_LANG_PATH
 * Specify where the lang files are stored relative to the server root folder.
 * Need to end with a trailing /
 * This is bein used in functions like "t_lang", etc...
 * @type 		{String}
 * @default 	rtrim(T_ROOT_PATH, '/') . '/app/lang/'
 */
t_define('T_LANG_PATH', rtrim(T_ROOT_PATH, '/') . '/app/lang/');

/**
 * @name		T_AVAILABLE_LANGUAGES
 * Specify the available languages in two characters format like "fr, en, etc..."
 * Need to be an array of two characters language code
 * @type 		{Array}
 * @default 	['en','fr','de']
 */
t_define('T_AVAILABLE_LANGUAGES', ['en','fr','de']);

/**
 * @name 		T_DEFAULT_LANGUAGE
 * Specify the default language in two characters format like "fr, en, etc..."
 * Need to be a two characters language code
 * @type 		{String}
 * @default 	en
 */
t_define('T_DEFAULT_LANGUAGE', 'en');

/**
 * @name 		T_VIEWS_PATH
 * Specify where the views are stored relative to the server root folder.
 * Need to end with a trailing /
 * This is bein used in functions like "t_render_blade", "t_render", etc...
 * @type 		{String}
 * @default 	rtrim(T_ROOT_PATH, '/') . '/app/views/'
 */
t_define('T_VIEWS_PATH', rtrim(T_ROOT_PATH, '/') . '/app/views/');

/**
 * @name 		T_CACHE_PATH
 * Specify where the cache are stored relative to the server root folder
 * Need to end with a trailing /
 * This is bein used in functions like "t_render_blade", "t_optimize_image", etc...
 * @type 		{String}
 * @default 	rtrim(T_ROOT_PATH, '/') . '/app/cache/'
 */
t_define('T_CACHE_PATH', rtrim(T_ROOT_PATH, '/') . '/app/cache/');

/**
 * @name 		T_ASSETS_PATH
 * Specify where the assets (images, etc...) are stored relative to the server root folder.
 * Need to end with a trailing /
 * This is bein used in functions like "t_asset_url", "t_asset_path", etc...
 * @type 		{String}
 * @default 	rtrim(T_ROOT_PATH, '/') . '/dist/'
 */
t_define('T_ASSETS_PATH', rtrim(T_ROOT_PATH, '/') . '/dist/');

/**
 * @name 	T_IMAGES_QUALITY
 * Specify the default image quality to use across the toolkit.
 * This is bein used in functions like "t_optimize_image", etc...
 * @type 		{Integer}
 * @default 	60
 */
t_define('T_IMAGES_QUALITY', 60);

/**
 * @name 	T_IMAGES_MAX_WIDTH
 * Specify the default max image width to use across the toolkit.
 * This is bein used in functions like "t_optimize_image", etc...
 * @type 		{Integer}
 * @default 	null
 */
t_define('T_IMAGES_MAX_WIDTH', null);

/**
 * @name 	T_IMAGES_MAX_HEIGHT
 * Specify the default max image height to use across the toolkit.
 * This is bein used in functions like "t_optimize_image", etc...
 * @type 		{Integer}
 * @default 	null
 */
t_define('T_IMAGES_MAX_HEIGHT', null);
