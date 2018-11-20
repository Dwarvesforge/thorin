# language

Return the two character language code found in the browser language or in
a $_GET parameter using the $gerParam variable name.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$available  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  An array of available languages (ex: ['fr','en'])  |  optional  |  Thorin::config('i18n.available_languages')
$default  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The default language if none is found  |  optional  |  Thorin::config('i18n.default_language')
$getParam  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The name of the $_GET parameter to check for the language  |  optional  |  "lang"

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The two character language code found

### Example
```php
	$lang = Thorin::language(['en','fr'], 'en');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)