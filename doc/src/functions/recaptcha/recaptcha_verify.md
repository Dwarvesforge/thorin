# recaptcha_verify

Verify that the recaptcha has been checked.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$response  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The `g-recaptcha-response` string to verify. If null, take the `$_POST["g-recaptcha-response"]` default variable  |  optional  |  null
$secret  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The recaptcha secret. Taken from config if null  |  optional  |  null
$sitekey  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The recaptcha sitekey. Taken from config if null  |  optional  |  null
$lang  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The language wanted for the recaptcha. Taken from config if null  |  optional  |  null
$attributes  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  An attribute array with data-theme, data-type and data-size attibutes. Taken from config if null  |  optional  |  null

### Example
```php
	if (Thorin::recaptcha_verify()) {
   // recaptcha verified!
} else {
   // recaptcha verification failed
}
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/ARCANEDEV/noCAPTCHA](https://github.com/ARCANEDEV/noCAPTCHA)