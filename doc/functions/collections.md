# collections

- [Thorin::col_count_by](#Thorin_col_count_by)
- [Thorin::col_each_right](#Thorin_col_each_right)
- [Thorin::col_each](#Thorin_col_each)
- [Thorin::col_every](#Thorin_col_every)
- [Thorin::col_filter](#Thorin_col_filter)
- [Thorin::col_find](#Thorin_col_find)
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

[Full documentation](/doc/src/functions/collections/col_count_by.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/countBy.php)

<a name="Thorin_col_each_right"></a>
## Thorin::col_each_right
This method is like `Thorin::col_each` except that it iterates over elements of
`collection` from right to left.

```php
Thorin::col_each_right([1, 2], function($value) { echo $value; })
// Echoes `2` then `1`
```

[Full documentation](/doc/src/functions/collections/col_each_right.md)

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

[Full documentation](/doc/src/functions/collections/col_each.md)

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

[Full documentation](/doc/src/functions/collections/col_every.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/every.php)

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

[Full documentation](/doc/src/functions/collections/col_filter.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/filter.php)

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

[Full documentation](/doc/src/functions/collections/col_find.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Collection/find.php)

<a name="Thorin_collect"></a>
## Thorin::collect
Create a [collection instance](https://laravel.com/docs/5.7/collections#available-methods) to work with from the passed array.
```php
Thorin::collect(['taylor', 'abigail', null])
->reject(function ($name) {
  return empty($name);
})
```

[Full documentation](/doc/src/functions/collections/collect.md)

[See more](https://packagist.org/packages/tightenco/collect)
