# reduce_right

This method is like `Thorin::col_reduce` except that it iterates over elements of
`collection` from right to left.



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Iterable }**  |  The collection to iterate over  |  required  |
$iteratee  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The function invoked per iteration  |  required  |
$accumulator  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The initial value  |  optional  |  null

Return **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }** The accumulated value

### Example
```php
	Thorin::reduce_right(['a' => 1, 'b' => 2, 'c' => 1], function ($result, $value, $key) {
    if (!isset($result[$value])) {
        $result[$value] = [];
    }
    $result[$value][] = $key;
    return $result;
 }, []);
// ['1' => ['c', 'a'], '2' => ['b']] (iteration order is not guaranteed)
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/reduceRight.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/reduceRight.php)