# Config constants

Define some configs using constants. These configs will be used across the thorin toolkit functions, etc...






## Properties


### T_PROTOCOL

Specify the protocol used to request the script. This is usually automatically setting up

Type : **{ String }**

Default : **http:// | https://**


### T_DOMAIN

Specify the domain under which the script has been requested. This is usually automatically setting up

Type : **{ String }**

Default : **$_SERVER['HTTP_HOST']**


### T_ROOT_URL

Specify the root url under which the script has been requested. This is usually automatically setting up

Type : **{ String }**

Default : **T_PROTOCOL . T_DOMAIN**

T_ROOT_PATH
Specify the root path to use across the toolkit. Usually, this is set to '/' but it can happen that you need to change this
to reflect your server pathes structure

Type : **{ String }**

Default : **/**


### T_VIEWS_PATH

Specify where the views are stored relative to the document root.
This is bein used in functions like "t_render_blade", "t_render", etc...

Type : **{ String }**

Default : **/app/views**


### T_CACHE_PATH

Specify where the cache are stored relative to the document root.
This is bein used in functions like "t_render_blade", "t_optimize_image", etc...

Type : **{ String }**

Default : **/app/cache**


### T_ASSETS_PATH

Specify where the assets (images, etc...) are stored relative to the document root.
This is bein used in functions like "t_asset_url", "t_asset_path", etc...

Type : **{ String }**

Default : **/dist**


### T_IMAGES_QUALITY

Specify the default image quality to use across the toolkit.
This is bein used in functions like "t_optimize_image", etc...

Type : **{ Integer }**

Default : **60**


### T_IMAGES_MAX_WIDTH

Specify the default max image width to use across the toolkit.
This is bein used in functions like "t_optimize_image", etc...

Type : **{ Integer }**

Default : **null**


### T_IMAGES_MAX_HEIGHT

Specify the default max image height to use across the toolkit.
This is bein used in functions like "t_optimize_image", etc...

Type : **{ Integer }**

Default : **null**