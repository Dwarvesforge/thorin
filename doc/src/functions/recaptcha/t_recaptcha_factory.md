# t_recaptcha_factory

Create a Arcanedev\NoCaptcha\NoCaptcha nocaptcha instance to work with.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$secret  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The recaptcha secret. Taken from config if null  |  optional  |  null
$sitekey  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The recaptcha sitekey. Taken from config if null  |  optional  |  null
$lang  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The language wanted for the recaptcha. Taken from config if null  |  optional  |  null
$attributes  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  An attribute array with data-theme, data-type and data-size attibutes. Taken from config if null  |  optional  |  null

Return **{ Arcanedev\NoCaptcha\NoCaptcha }** A nocaptcha instance to work with

### Example
```php
	$nocaptcha = Thorin::nocaptcha_factory();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/ARCANEDEV/noCAPTCHA](https://github.com/ARCANEDEV/noCAPTCHA)