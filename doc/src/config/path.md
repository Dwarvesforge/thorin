# document_root

Specify the root path where your app is stored absolute to the server root folder.
This is usually automatically setting up using the $_SERVER['DOCUMENT_ROOT']|$_SERVER['PWD'] variable
Need to end with a trailing /

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **rtrim((isset($_SERVER['PWD'])) ? $_SERVER['PWD'] : $_SERVER['DOCUMENT_ROOT'], '/') . '/'**



## Public properties


### base

Specify where the base folder of the project is stored absolute to the server root folder.
This is not the DOCUMENT_ROOT. It represent the root of the files. The DOCUMENT_ROOT can be a subfolder of this one.
Need to end with a trailing /

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${path.document_root}../**


### app

Specify where the app files are stored absolute to the server root folder.
Need to end with a trailing /

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${path.base}app/**


### assets

Specify where the assets (images, etc...) are stored absolute to the server root folder.
Need to end with a trailing /
This path MUST be inside of the DOCUMENT_ROOT path
This is bein used in functions like "url_asset", "path_asset", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${path.document_root}dist/**


### cache_filesystem

Specify where to store the filesystem cache
Need to end with a trailing /
This is bein used in functions like "cache", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### i18n

Specify where the lang files are stored absolute to the server root folder.
Need to end with a trailing /
This is bein used in functions like "i18n", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${path.app}i18n/**


### views

Specify where the views are stored absolute to the server root folder.
Need to end with a trailing /
This is bein used in functions like "render_blade", "render", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${path.app}views/**


### cache_path

Specify where the cache are stored absolute to the server root folder
Need to end with a trailing /
This is bein used in functions like "render_blade", etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${path.app}cache/views/**