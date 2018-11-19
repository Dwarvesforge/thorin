# path_normalize

Return a normalized version of the passed path.
1. Resolve all the ../
2. Replace backslashes with forwardslashes
3. Combine multiple slashes into a single slash


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$path  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The path to process  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The normalized path

### Example
```php
	$path = Thorin::path_normalize('hello/world/../universe');
// hello/universe
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)