# protocol

Specify the protocol used to request the script. This is usually automatically setting up

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **http:// | https://**



## Public properties


### domain

Specify the domain under which the script has been requested. This is usually automatically setting up

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **$_SERVER['HTTP_HOST']**


### name

Specify the name of the app used in some others configs like email, etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **Thorin Application**


### root_url

Specify the root url under which the script has been requested. This is usually automatically setting up

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **${app.protocol}${app.domain}**


### environment

Specify the environment to return in function like `t_environment`, `t_is_environment`, etc...

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **(getenv('ENVIRONMENT')) ? getenv('ENVIRONMENT') : 'production'**