# t_recaptcha_display

Display a recaptcha using the configured secret, sitekey, lang and attributes


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$secret  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The recaptcha secret. Taken from config if null  |  optional  |  null
$sitekey  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The recaptcha sitekey. Taken from config if null  |  optional  |  null
$lang  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The language wanted for the recaptcha. Taken from config if null  |  optional  |  null
$attributes  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  An attribute array with data-theme, data-type and data-size attibutes. Taken from config if null  |  optional  |  null

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The recaptcha code to display it

### Example
```php
	print Thorin::recaptcha_display();
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/ARCANEDEV/noCAPTCHA](https://github.com/ARCANEDEV/noCAPTCHA)