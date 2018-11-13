# t_autolink

Automaticaly transform urls into links in the passed text.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$text  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The text to process  |  required  |
$options  |  **{ [Array](http://php.net/manual/en/language.types.array.php) }**  |  The option to pass to the [Autolink](https://packagist.org/packages/asika/autolink) class  |  optional  |  []

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The processed text

### Example
```php
	$text = 'Hello world this is a nice http://google.com sample of text.';
$newText = Thorin::autolink($text);
// Hello world this is a nice <a href="http://google.com">http://google.com</a> sample of text.
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)