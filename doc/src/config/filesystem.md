# DEFAULT_DRIVER

Specify the default adapter to use when using the filesystem factory with no arguments
Can be local, ftp, sftp, s3 or memory

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**



## Public properties


### LOCAL

Local filesystem configuration

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**


### LOCAL.PATH

Path to the filesystem root

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### FTP

FTP filesystem configuration

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**


### FTP.HOST

Server host

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### FTP.USERNAME

Username to connect to FTP with

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### FTP.PASSWORD

Password to connect to FTP with

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### FTP.PORT

Port on which to connect

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**


### FTP.ROOT

Root folder on the ftp server

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### FTP.PASSIVE

Enable or not the passive mode

Type : **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**


### FTP.SSL

Enable or not the ssl mode

Type : **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**


### FTP.TIMEOUT

Specify the timeout to use in seconds

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**


### SFTP

SFTP filesystem configuration

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**


### FTP.HOST

Server host

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### FTP.USERNAME

Username to connect to FTP with

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### FTP.PASSWORD

Password to connect to FTP with

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### PRIVATEKEY

Specify a private key to connect with

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### FTP.PORT

Port on which to connect

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**


### FTP.ROOT

Root folder on the ftp server

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### FTP.TIMEOUT

Specify the timeout to use in seconds

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**


### S3

Amazon s3 adapter configuration

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**


### KEY

The key connexion

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### SECRET

The secret connexion

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### REGION

The region to connect to

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### BUCKET

The bucket name to connect to

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**


### ROOT

The root folder in the bucket

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**