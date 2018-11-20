# collection

- [Thorin::col_count_by](#Thorin_col_count_by)
- [Thorin::col_each_right](#Thorin_col_each_right)
- [Thorin::col_each](#Thorin_col_each)
- [Thorin::col_every](#Thorin_col_every)
- [Thorin::col_extend](#Thorin_col_extend)
- [Thorin::col_filter](#Thorin_col_filter)
- [Thorin::col_find_last](#Thorin_col_find_last)
- [Thorin::col_find](#Thorin_col_find)
- [Thorin::col_flat_map_deep](#Thorin_col_flat_map_deep)
- [Thorin::col_flat_map_depth](#Thorin_col_flat_map_depth)
- [Thorin::col_flat_map](#Thorin_col_flat_map)
- [Thorin::col_group_by](#Thorin_col_group_by)
- [Thorin::col_invoke_map](#Thorin_col_invoke_map)
- [Thorin::col_key_by](#Thorin_col_key_by)
- [Thorin::col_map](#Thorin_col_map)
- [Thorin::col_order_by](#Thorin_col_order_by)
- [Thorin::col_partition](#Thorin_col_partition)
- [Thorin::col_reduce_right](#Thorin_col_reduce_right)
- [Thorin::col_reduce](#Thorin_col_reduce)
- [Thorin::col_reject](#Thorin_col_reject)
- [Thorin::col_size](#Thorin_col_size)
- [Thorin::col_some](#Thorin_col_some)
- [Thorin::col_sort_by](#Thorin_col_sort_by)
- [Thorin::collect](#Thorin_collect)
<a name="Thorin_col_count_by"></a>
## Thorin::col_count_by
Creates an array composed of keys generated from the results of running
each element of `collection` through `iteratee`. The corresponding value of
each key is the number of times the key was returned by `iteratee`. The
iteratee is invoked with one argument: (value).

```php
Thorin::col_count_by([6.1, 4.2, 6.3], 'floor'));
// ['6' => 2, '4' => 1]
```

[Full documentation](/doc/src/functions/collection/col_count_by.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/countBy.php)

<a name="Thorin_col_each_right"></a>
## Thorin::col_each_right
This method is like `Thorin::col_each` except that it iterates over elements of
`collection` from right to left.

```php
Thorin::col_each_right([1, 2], function($value) { echo $value; })
// Echoes `2` then `1`
```

[Full documentation](/doc/src/functions/collection/col_each_right.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/eachRight.php)

<a name="Thorin_col_each"></a>
## Thorin::col_each
Iterates over elements of `collection` and invokes `iteratee` for each element.
The iteratee is invoked with three arguments: (value, index|key, collection).
Iteratee functions may exit iteration early by explicitly returning `false`.

**Note:** As with other "Collections" methods, objects with a "length"
property are iterated like arrays. To avoid this behavior use `forIn`
or `forOwn` for object iteration.

```php
Thorin::col_each([1, 2], function ($value) { echo $value; });
// Echoes `1` then `2`.
```

[Full documentation](/doc/src/functions/collection/col_each.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/each.php)

<a name="Thorin_col_every"></a>
## Thorin::col_every
Checks if `predicate` returns truthy for **all** elements of `array`.
Iteration is stopped once `predicate` returns falsey. The predicate is
invoked with three arguments: (value, index, array).

**Note:** This method returns `true` for
[empty arrays](https://en.wikipedia.org/wiki/Empty_set) because
[everything is true](https://en.wikipedia.org/wiki/Vacuous_truth) of
elements of empty arrays.

```php
Thorin::col_every([true, 1, null, 'yes'], function ($value) { return is_bool($value);});
// false
```

[Full documentation](/doc/src/functions/collection/col_every.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/every.php)

<a name="Thorin_col_extend"></a>
## Thorin::col_extend
Extend an array or an object either deeply or not

[Full documentation](/doc/src/functions/collection/col_extend.md)

<a name="Thorin_col_filter"></a>
## Thorin::col_filter
Iterates over elements of `array`, returning an array of all elements
`predicate` returns truthy for. The predicate is invoked with three
arguments: (value, index, array).

```php
$users = [
    [ 'user' => 'barney', 'age' => 36, 'active' => true],
    [ 'user' => 'fred',   'age' => 40, 'active' => false]
];
Thorin::col_filter($users, function($o) { return !$o['active']; });
// objects for ['fred']
```

[Full documentation](/doc/src/functions/collection/col_filter.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/filter.php)

<a name="Thorin_col_find_last"></a>
## Thorin::col_find_last
This method is like `Thorin::col_find` except that it iterates over elements of
`collection` from right to left.

```php
$users = [
    ['user' => 'barney',  'age' => 36, 'active' => true],
    ['user' => 'fred',    'age' => 40, 'active' => false],
    ['user' => 'pebbles', 'age' => 1,  'active' => true]
];
Thorin::col_find($users, function($o) { return $o['age'] < 40; });
// object for 'pebbles'
```

[Full documentation](/doc/src/functions/collection/col_find_last.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/find.php)

<a name="Thorin_col_find"></a>
## Thorin::col_find
Iterates over elements of `collection`, returning the first element
`predicate` returns truthy for. The predicate is invoked with three
arguments: (value, index|key, collection).

```php
$users = [
    ['user' => 'barney',  'age' => 36, 'active' => true],
    ['user' => 'fred',    'age' => 40, 'active' => false],
    ['user' => 'pebbles', 'age' => 1,  'active' => true]
];
Thorin::col_find($users, function($o) { return $o['age'] < 40; });
// object for 'barney'
```

[Full documentation](/doc/src/functions/collection/col_find.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/find.php)

<a name="Thorin_col_flat_map_deep"></a>
## Thorin::col_flat_map_deep
This method is like `flatMap` except that it recursively flattens the
mapped results.

```php
function duplicate($n) {
  return [[[$n, $n]]];
}
Thorin::col_flat_map_deep([1, 2], 'duplicate');
// [1, 1, 2, 2]
```

[Full documentation](/doc/src/functions/collection/col_flat_map_deep.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/flatMapDeep.php)

<a name="Thorin_col_flat_map_depth"></a>
## Thorin::col_flat_map_depth
This method is like `flatMap` except that it recursively flattens the
mapped results up to `depth` times.

```php
function duplicate($n) {
  return [[[$n, $n]]];
}
Thorin::flat_map_depth([1, 2], 'duplicate', 2);
// [[1, 1], [2, 2]]
```

[Full documentation](/doc/src/functions/collection/col_flat_map_depth.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/flatMapDepth.php)

<a name="Thorin_col_flat_map"></a>
## Thorin::col_flat_map
Creates a flattened array of values by running each element in `collection`
through `iteratee` and flattening the mapped results. The iteratee is invoked
with three arguments: (value, index|key, collection).

```php
function duplicate($n) {
  return [$n, $n]
}
Thorin::col_flat_map([1, 2], 'duplicate');
// [1, 1, 2, 2]
```

[Full documentation](/doc/src/functions/collection/col_flat_map.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/flatMap.php)

<a name="Thorin_col_group_by"></a>
## Thorin::col_group_by
Creates an array composed of keys generated from the results of running
each element of `collection` through `iteratee`. The order of grouped values
is determined by the order they occur in `collection`. The corresponding
value of each key is an array of elements responsible for generating the
key. The iteratee is invoked with one argument: (value).

```php
Thorin::col_group_by([6.1, 4.2, 6.3], 'floor');
// ['6' => [6.1, 6.3], '4' => [4.2]]
```

[Full documentation](/doc/src/functions/collection/col_group_by.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/groupBy.php)

<a name="Thorin_col_invoke_map"></a>
## Thorin::col_invoke_map
Invokes the method at `path` of each element in `collection`, returning
an array of the results of each invoked method. Any additional arguments
are provided to each invoked method. If `path` is a function, it's invoked
for, and `this` bound to, each element in `collection`.

```php
Thorin::col_invoke_map([[5, 1, 7], [3, 2, 1]], function($result) { sort($result); return $result;});
// [[1, 5, 7], [1, 2, 3]]
```

[Full documentation](/doc/src/functions/collection/col_invoke_map.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/invokeMap.php)

<a name="Thorin_col_key_by"></a>
## Thorin::col_key_by
Creates an object composed of keys generated from the results of running
each element of `collection` through `iteratee`. The corresponding value of
each key is the last element responsible for generating the key. The
iteratee is invoked with one argument: (value).

```php
$array = [
  ['direction' => 'left', 'code' => 97],
  ['direction' => 'right', 'code' => 100],
];
Thorin::col_key_by($array, function ($o) { return \chr($o['code']); });
// ['a' => ['direction' => 'left', 'code' => 97], 'd' => ['direction' => 'right', 'code' => 100]]
```

[Full documentation](/doc/src/functions/collection/col_key_by.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/keyBy.php)

<a name="Thorin_col_map"></a>
## Thorin::col_map
Creates an array of values by running each element in `collection` through
`iteratee`. The iteratee is invoked with three arguments:
(value, index|key, collection).

```php
function square(int $n) {
  return $n * $n;
}
Thorin::col_map([4, 8], 'square');
// [16, 64]
```

[Full documentation](/doc/src/functions/collection/col_map.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/map.php)

<a name="Thorin_col_order_by"></a>
## Thorin::col_order_by
This method is like `Thorin::col_sort_by` except that it allows specifying the sort
orders of the iteratees to sort by. If `orders` is unspecified, all values
are sorted in ascending order. Otherwise, specify an order of "desc" for
descending or "asc" for ascending sort order of corresponding values.

```php
$users = [
  ['user' => 'fred',   'age' => 48],
  ['user' => 'barney', 'age' => 34],
  ['user' => 'fred',   'age' => 40],
  ['user' => 'barney', 'age' => 36]
];
Thorin::col_order_by($users, ['user', 'age'], ['asc', 'desc']);
// [['user' => 'barney', 'age' => 36], ['user' => 'barney', 'age' => 34], ['user' => 'fred', 'age' => 48], ['user' => 'fred', 'age' => 40]]
```

[Full documentation](/doc/src/functions/collection/col_order_by.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/orderBy.php)

<a name="Thorin_col_partition"></a>
## Thorin::col_partition
Creates an array of elements split into two groups, the first of which
contains elements `predicate` returns truthy for, the second of which
contains elements `predicate` returns falsey for. The predicate is
invoked with one argument: (value).

```php
$users = [
  ['user' => 'barney',  'age' => 36, 'active' => false],
  ['user' => 'fred',    'age' => 40, 'active' => true],
  ['user' => 'pebbles', 'age' => 1,  'active' => false]
];
Thorin::col_partition($users, function($user) { return $user['active']; });
// objects for [['fred'], ['barney', 'pebbles']]
```

[Full documentation](/doc/src/functions/collection/col_partition.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/partition.php)

<a name="Thorin_col_reduce_right"></a>
## Thorin::col_reduce_right
This method is like `Thorin::col_reduce` except that it iterates over elements of
`collection` from right to left.

```php
Thorin::col_reduce_right(['a' => 1, 'b' => 2, 'c' => 1], function ($result, $value, $key) {
    if (!isset($result[$value])) {
        $result[$value] = [];
    }
    $result[$value][] = $key;
    return $result;
 }, []);
// ['1' => ['c', 'a'], '2' => ['b']] (iteration order is not guaranteed)
```

[Full documentation](/doc/src/functions/collection/col_reduce_right.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/reduceRight.php)

<a name="Thorin_col_reduce"></a>
## Thorin::col_reduce
Reduces `collection` to a value which is the accumulated result of running
each element in `collection` thru `iteratee`, where each successive
invocation is supplied the return value of the previous. If `accumulator`
is not given, the first element of `collection` is used as the initial
value. The iteratee is invoked with four arguments:
(accumulator, value, index|key, collection).

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

[Full documentation](/doc/src/functions/collection/col_reduce.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/reduce.php)

<a name="Thorin_col_reject"></a>
## Thorin::col_reject
The opposite of `Thorin::col_filter` this method returns the elements of `collection`
that `predicate` does **not** return truthy for.

```php
$users = [
  ['user' => 'barney', 'active' => true],
  ['user' => 'fred',   'active' => false]
];
Thorin::col_reject($users, 'active');
// objects for ['fred']
```

[Full documentation](/doc/src/functions/collection/col_reject.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/reject.php)

<a name="Thorin_col_size"></a>
## Thorin::col_size
Gets the size of `collection` by returning its length for array
values or the number of public properties for objects.

```php
Thorin::col_size([1, 2, 3]);
// 3
```

[Full documentation](/doc/src/functions/collection/col_size.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/size.php)

<a name="Thorin_col_some"></a>
## Thorin::col_some
Checks if `predicate` returns truthy for **any** element of `collection`.
Iteration is stopped once `predicate` returns truthy. The predicate is
invoked with three arguments: (value, index|key, collection).

```php
Thorin::col_some([null, 0, 'yes', false], , function ($value) { return \is_bool($value); }));
// true
```

[Full documentation](/doc/src/functions/collection/col_some.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/some.php)

<a name="Thorin_col_sort_by"></a>
## Thorin::col_sort_by
Creates an array of elements, sorted in ascending order by the results of
running each element in a collection through each iteratee. This method
performs a stable sort, that is, it preserves the original sort order of
equal elements. The iteratees are invoked with one argument: (value).

```php
$users = [
  [ 'user' => 'fred',   'age' => 48 ],
  [ 'user' => 'barney', 'age' => 36 ],
  [ 'user' => 'fred',   'age' => 40 ],
  [ 'user' => 'barney', 'age' => 34 ],
];
Thorin::col_sort_by($users, [function($o) { return $o['user']; }]);
// [['user' => 'barney', 'age' => 36], ['user' => 'barney', 'age' => 34], ['user' => 'fred', 'age' => 48], ['user' => 'fred', 'age' => 40]]

Thorin::col_sort_by($users, ['user', 'age']);
// [['user' => 'barney', 'age' => 34], ['user' => 'barney', 'age' => 36], ['user' => 'fred', 'age' => 40], ['user' => 'fred', 'age' => 48]]
```

[Full documentation](/doc/src/functions/collection/col_sort_by.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/sortBy.php)

<a name="Thorin_collect"></a>
## Thorin::collect
Create a [collection instance](https://laravel.com/docs/5.7/collections#available-methods) to work with from the passed array.
```php
Thorin::collect(['taylor', 'abigail', null])
->reject(function ($name) {
  return empty($name);
})
```

[Full documentation](/doc/src/functions/collection/collect.md)

[See more](https://packagist.org/packages/tightenco/collect)
