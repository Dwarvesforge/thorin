# t_slug

Generate a slug from a string like a title or whatever


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$string  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The string to convert into a slug  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The created slug

### Example
```php
	print Thorin::slug('Hello world and universe');
// hello-world-and-universe
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)