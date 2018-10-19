<?php

return [
	/**
	 * @name 		T_LANG_PATH
	 * Specify where the lang files are stored relative to the server root folder.
	 * Need to end with a trailing /
	 * This is bein used in functions like "t_lang", etc...
	 * @type 		{String}
	 * @default 	${app.ROOT_PATH}app/lang/
	 */
	'LANG_PATH' =>  '${app.ROOT_PATH}app/lang/',

	/**
	 * @name		T_AVAILABLE_LANGUAGES
	 * Specify the available languages in two characters format like "fr, en, etc..."
	 * Need to be an array of two characters language code
	 * @type 		{Array}
	 * @default 	['en','fr','de']
	 */
	'AVAILABLE_LANGUAGES' =>  ['en','fr','de'],

	/**
	 * @name 		T_DEFAULT_LANGUAGE
	 * Specify the default language in two characters format like "fr, en, etc..."
	 * Need to be a two characters language code
	 * @type 		{String}
	 * @default 	en
	 */
	'DEFAULT_LANGUAGE' =>  'en'
];
