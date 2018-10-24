# PROTOCOL

Specify the protocol used to request the script. This is usually automatically setting up

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **http:// | https://**



## Public properties


### DOMAIN

Specify the domain under which the script has been requested. This is usually automatically setting up

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **$_SERVER['HTTP_HOST']**


### ROOT_URL

Specify the root url under which the script has been requested. This is usually automatically setting up

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.PROTOCOL}${app.DOMAIN}**


### ENVIRONMENT

Specify the environment to return in function like `t_environment`, `t_is_environment`, etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **(getenv('ENVIRONMENT')) ? getenv('ENVIRONMENT') : 'production'**