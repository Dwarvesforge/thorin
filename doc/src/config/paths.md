# DOCUMENT_ROOT

Specify the root path where your app is stored absolute to the server root folder.
This is usually automatically setting up using the $_SERVER['DOCUMENT_ROOT']|$_SERVER['PWD'] variable
Need to end with a trailing /

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **rtrim((isset($_SERVER['PWD'])) ? $_SERVER['PWD'] : $_SERVER['DOCUMENT_ROOT'], '/') . '/'**



## Public properties


### BASE

Specify where the base folder of the project is stored absolute to the server root folder.
This is not the DOCUMENT_ROOT. It represent the root of the files. The DOCUMENT_ROOT can be a subfolder of this one.
Need to end with a trailing /

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.ROOT_PATH}../**


### APP

Specify where the app files are stored absolute to the server root folder.
Need to end with a trailing /

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${paths.BASE}app/**


### ASSETS

Specify where the assets (images, etc...) are stored absolute to the server root folder.
Need to end with a trailing /
This path MUST be inside of the DOCUMENT_ROOT path
This is bein used in functions like "t_asset_url", "t_asset_path", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.ROOT_PATH}dist/**


### FILESYSTEM_CACHE

Specify where to store the filesystem cache
Need to end with a trailing /
This is bein used in functions like "t_cache", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### LANG

Specify where the lang files are stored absolute to the server root folder.
Need to end with a trailing /
This is bein used in functions like "t_lang", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.ROOT_PATH}app/lang/**


### IMAGES_CACHE

Specify where the cache are stored absolute to the server root folder
Need to end with a trailing /
This is bein used in functions like "t_optimize_image", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.ROOT_PATH}app/cache/views/images/**


### VIEWS

Specify where the views are stored absolute to the server root folder.
Need to end with a trailing /
This is bein used in functions like "t_render_blade", "t_render", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.ROOT_PATH}app/views/**


### CACHE_PATH

Specify where the cache are stored absolute to the server root folder
Need to end with a trailing /
This is bein used in functions like "t_render_blade", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.ROOT_PATH}app/cache/views/**