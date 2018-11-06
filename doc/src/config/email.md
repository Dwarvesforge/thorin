# default_mailer

Set the default mailer to use if none is passed to the `t_mailer` function

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **mail**



## Public properties


### from

Specify the from address to use if none is specified at mailer level

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **Thorin::env('EMAIL_FROM', 'postmaster@${app.domain},${app.name}')**


### reply

Specify the reply address to use if none is specified at mailer level

Type : **{ [String](http://php.net/manual/en/language.types.string.php) }**

Default : **Thorin::env('EMAIL_REPLY', 'no-reply@${app.domain},No reply')**


### smtp_debug

Specify the debug level to set to phpmailer SMTPDebug property.
Can be:
0: no debug at all
1: Output messages sent by the client
2: as 1, plus responses received from the server (this is the most useful setting).

Type : **{ [Integer](http://php.net/manual/en/language.types.integer.php) }**

Default : **0**


### mailers

Register some mailers to be used by the `t_mailer` function.

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**


### gmail

Gmail mailer

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**


### mailgun

Mailgun mailer

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**


### mail

PHP mail mailer

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**


### sendmail

Sendmail mailer

Type : **{ [Array](http://php.net/manual/en/language.types.array.php) }**