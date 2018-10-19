<?php

return [
	/**
	 * @name 		T_ASSETS_PATH
	 * Specify where the assets (images, etc...) are stored relative to the server root folder.
	 * Need to end with a trailing /
	 * This is bein used in functions like "t_asset_url", "t_asset_path", etc...
	 * @type 		{String}
	 * @default 	${app.ROOT_PATH}dist/
	 */
	'ASSETS_PATH' =>  '${app.ROOT_PATH}dist/'
];
