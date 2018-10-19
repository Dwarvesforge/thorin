# t_normalize_path

Return a normalized version of the passed path.
1. Resolve all the ../
2. Replace backslashes with forwardslashes
3. Combine multiple slashes into a single slash


Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$path  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The path to process  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The normalized path

### Example
```php
	$path = Thorin::normalize_path('hello/world/../universe');
```