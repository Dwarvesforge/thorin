# ASSETS

Specify where the assets (images, etc...) are stored relative to the server root folder.
Need to end with a trailing /
This is bein used in functions like "t_asset_url", "t_asset_path", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.ROOT_PATH}dist/**



## Public properties


### LANG

Specify where the lang files are stored relative to the server root folder.
Need to end with a trailing /
This is bein used in functions like "t_lang", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.ROOT_PATH}app/lang/**


### IMAGES_CACHE

Specify where the cache are stored relative to the server root folder
Need to end with a trailing /
This is bein used in functions like "t_optimize_image", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.ROOT_PATH}app/cache/views/images/**


### VIEWS

Specify where the views are stored relative to the server root folder.
Need to end with a trailing /
This is bein used in functions like "t_render_blade", "t_render", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.ROOT_PATH}app/views/**


### CACHE_PATH

Specify where the cache are stored relative to the server root folder
Need to end with a trailing /
This is bein used in functions like "t_render_blade", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.ROOT_PATH}app/cache/views/**