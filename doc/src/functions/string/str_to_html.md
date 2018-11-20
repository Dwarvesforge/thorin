# str_to_html

Format a simple passed text into a nice formated html one.
This will transform the new line into <br>, as well as the line breaks into paragraphs



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$text  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The text to format  |  required  |

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The newly formated html

### Example
```php
	Thorin::str_to_html('Hello world');
// <p>Hello world</p>
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com)