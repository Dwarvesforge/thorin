# col_reduce

Reduces `collection` to a value which is the accumulated result of running
each element in `collection` thru `iteratee`, where each successive
invocation is supplied the return value of the previous. If `accumulator`
is not given, the first element of `collection` is used as the initial
value. The iteratee is invoked with four arguments:
(accumulator, value, index|key, collection).



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$collection  |  **{ Iterable }**  |  The collection to iterate over  |  required  |
$iteratee  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The function invoked per iteration  |  required  |
$accumulator  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  The initial value  |  optional  |  null

Return **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }** The accumulated value

### Example
```php
	Thorin::col_reduce(['a' => 1, 'b' => 2, 'c' => 1], function ($result, $value, $key) {
    if (!isset($result[$value])) {
        $result[$value] = [];
    }
    $result[$value][] = $key;
    return $result;
 }, []);
// ['1' => ['a', 'c'], '2' => ['b']] (iteration order is not guaranteed)
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [https://github.com/lodash-php/lodash-php/blob/master/src/Collection/reduce.php](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/reduce.php)