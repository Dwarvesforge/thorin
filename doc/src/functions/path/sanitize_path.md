# sanitize_path

Sanitize a path for example like "/my/cool/../path/." to "/my/path/"
It will do these actions:
1. Normalize the path (resolve all ../, remove double slashed, etc...)
2. Remove a trailing "."
3. Make sure the path finish with a "/" if it's not a file



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$path  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The path to sanitize  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The sanitize path

Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)