<?php

return [
	/**
	 * @name 		ASSETS
	 * Specify where the assets (images, etc...) are stored relative to the server root folder.
	 * Need to end with a trailing /
	 * This is bein used in functions like "t_asset_url", "t_asset_path", etc...
	 * @type 		{String}
	 * @default 	${app.ROOT_PATH}dist/
	 */
	'ASSETS' => '${app.ROOT_PATH}dist/',

	/**
	 * @name 		CACHE
	 * Specify where to store the filesystem cache
	 * Need to end with a trailing /
	 * This is bein used in functions like "t_cache", etc...
	 * @type 		{String}
	 * default 		${appROOT_PATH}app/cache/filesystem/
	 */
	'CACHE' => '${app.ROOT_PATH}app/cache/filesystem/',

	/**
	 * @name 		LANG
	 * Specify where the lang files are stored relative to the server root folder.
	 * Need to end with a trailing /
	 * This is bein used in functions like "t_lang", etc...
	 * @type 		{String}
	 * @default 	${app.ROOT_PATH}app/lang/
	 */
	'LANG' => '${app.ROOT_PATH}app/lang/',

	/**
	 * @name 		IMAGES_CACHE
	 * Specify where the cache are stored relative to the server root folder
	 * Need to end with a trailing /
	 * This is bein used in functions like "t_optimize_image", etc...
	 * @type 		{String}
	 * @default 	${app.ROOT_PATH}app/cache/views/images/
	 */
	'IMAGES_CACHE' => '${app.ROOT_PATH}app/cache/images/',

	/**
	 * @name 		VIEWS
	 * Specify where the views are stored relative to the server root folder.
	 * Need to end with a trailing /
	 * This is bein used in functions like "t_render_blade", "t_render", etc...
	 * @type 		{String}
	 * @default 	${app.ROOT_PATH}app/views/
	 */
	'VIEWS' => '${app.ROOT_PATH}app/views/',

	/**
	 * @name 		CACHE_PATH
	 * Specify where the cache are stored relative to the server root folder
	 * Need to end with a trailing /
	 * This is bein used in functions like "t_render_blade", etc...
	 * @type 		{String}
	 * @default 	${app.ROOT_PATH}app/cache/views/
	 */
	'VIEWS_CACHE' => '${app.ROOT_PATH}app/cache/views/'
];
