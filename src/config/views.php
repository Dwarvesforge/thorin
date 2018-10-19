<?php

return [
	/**
	 * @name 		VIEWS_PATH
	 * Specify where the views are stored relative to the server root folder.
	 * Need to end with a trailing /
	 * This is bein used in functions like "t_render_blade", "t_render", etc...
	 * @type 		{String}
	 * @default 	${app.ROOT_PATH}app/views/
	 */
	'VIEWS_PATH' =>  '${app.ROOT_PATH}app/views/',

	/**
	 * @name 		CACHE_PATH
	 * Specify where the cache are stored relative to the server root folder
	 * Need to end with a trailing /
	 * This is bein used in functions like "t_render_blade", etc...
	 * @type 		{String}
	 * @default 	${app.ROOT_PATH}app/cache/views/
	 */
	'CACHE_PATH' =>  '${app.ROOT_PATH}app/cache/views/'
];
