<?php

return [
	/**
	 * @name 	QUALITY
	 * Specify the default image quality to use across the toolkit.
	 * This is bein used in functions like "t_optimize_image", etc...
	 * @type 		{Integer}
	 * @default 	60
	 */
	'QUALITY' =>  60,

	/**
	 * @name 	MAX_WIDTH
	 * Specify the default max image width to use across the toolkit.
	 * This is bein used in functions like "t_optimize_image", etc...
	 * @type 		{Integer}
	 * @default 	2048
	 */
	'MAX_WIDTH' =>  2048,

	/**
	 * @name 	MAX_HEIGHT
	 * Specify the default max image height to use across the toolkit.
	 * This is bein used in functions like "t_optimize_image", etc...
	 * @type 		{Integer}
	 * @default 	2048
	 */
	'MAX_HEIGHT' =>  2048,

	/**
	 * @name 		CACHE_PATH
	 * Specify where the cache are stored relative to the server root folder
	 * Need to end with a trailing /
	 * This is bein used in functions like "t_optimize_image", etc...
	 * @type 		{String}
	 * @default 	${app.ROOT_PATH}app/cache/views/images/
	 */
	'CACHE_PATH' =>  '${app.ROOT_PATH}app/cache/views/images/'
];
