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
 * @name 	T_ROOT_URL
 * Specify the root url under which the script has been requested. This is usually automatically setting up
 * @type 		{String}
 * @default 	T_PROTOCOL . T_DOMAIN
 */
t_define('T_ROOT_URL', T_PROTOCOL . T_DOMAIN);

/**
 * T_ROOT_PATH
 * Specify the root path to use across the toolkit. Usually, this is set to '/' but it can happen that you need to change this
 * to reflect your server pathes structure
 * @type 		{String}
 * @default 	/
 */
t_define('T_ROOT_PATH', '/');

/**
 * @name 		T_VIEWS_PATH
 * Specify where the views are stored relative to the document root.
 * This is bein used in functions like "t_render_blade", "t_render", etc...
 * @type 		{String}
 * @default 	/app/views
 */
t_define('T_VIEWS_PATH', '/app/views');

/**
 * @name 		T_CACHE_PATH
 * Specify where the cache are stored relative to the document root.
 * This is bein used in functions like "t_render_blade", "t_optimize_image", etc...
 * @type 		{String}
 * @default 	/app/cache
 */
t_define('T_CACHE_PATH', '/app/cache');

/**
 * @name 		T_ASSETS_PATH
 * Specify where the assets (images, etc...) are stored relative to the document root.
 * This is bein used in functions like "t_asset_url", "t_asset_path", etc...
 * @type 		{String}
 * @default 	/dist
 */
t_define('T_ASSETS_PATH', '/dist');

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
