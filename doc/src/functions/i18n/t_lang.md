# t_lang

Return a value from the lang files.


Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$path  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The doted path relative to the root of the lang file to get the value from  |  required  |
$file  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The lang filename in which to get the value from  |  optional  |  "default"
$lang  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The language in which you want the value. If not set, will be getted using the t_get_language function depending on your configuration  |  optional  |  null

### Example
```php
	$myCoolString = Thorin::lang('newsletter.title');
```
Author : Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)