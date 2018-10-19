# PROTOCOL

Specify the protocol used to request the script. This is usually automatically setting up

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **http:// | https://**



## Public properties


### DOMAIN

Specify the domain under which the script has been requested. This is usually automatically setting up

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **$_SERVER['HTTP_HOST']**


### ROOT_PATH

Specify the root path where your app is stored absolute to the server root folder.
This is usually automatically setting up using the $_SERVER['DOCUMENT_ROOT']|$_SERVER['PWD'] variable
Need to end with a trailing /

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **rtrim((isset($_SERVER['PWD'])) ? $_SERVER['PWD'] : $_SERVER['DOCUMENT_ROOT'], '/') . '/'**


### ROOT_URL

Specify the root url under which the script has been requested. This is usually automatically setting up

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.PROTOCOL}${app.DOMAIN}**


### ENVIRONMENT

Specify the environment to return in function like `t_environment`, `t_is_environment`, etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **(getenv('ENVIRONMENT')) ? getenv('ENVIRONMENT') : 'production'**