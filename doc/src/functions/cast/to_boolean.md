# to_boolean

Convert variable to boolean



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$var  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The var to be convert in boolean  |  required  |

Return **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }** true or false

### Example
```php
	Thorin::to_boolean('true');
// true
Thorin::to_boolean(0);
// false
```
Author : Paul Balanche [pb@buzzbrothers.ch](mailto:pb@buzzbrothers.ch)