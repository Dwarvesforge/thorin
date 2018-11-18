# array

- [Thorin::array_all](#Thorin_array_all)
- [Thorin::array_any](#Thorin_array_any)
- [Thorin::array_chunk](#Thorin_array_chunk)
- [Thorin::array_compact](#Thorin_array_compact)
- [Thorin::array_concat](#Thorin_array_concat)
- [Thorin::array_deep_flatten](#Thorin_array_deep_flatten)
- [Thorin::array_difference_by](#Thorin_array_difference_by)
- [Thorin::array_difference_with](#Thorin_array_difference_with)
- [Thorin::array_difference](#Thorin_array_difference)
- [Thorin::array_drop_right_while](#Thorin_array_drop_right_while)
- [Thorin::array_drop_right](#Thorin_array_drop_right)
- [Thorin::array_drop_while](#Thorin_array_drop_while)
- [Thorin::array_drop](#Thorin_array_drop)
- [Thorin::array_find_index](#Thorin_array_find_index)
- [Thorin::array_find_last_index](#Thorin_array_find_last_index)
- [Thorin::array_find_last](#Thorin_array_find_last)
- [Thorin::array_first](#Thorin_array_first)
- [Thorin::array_flatten_deep](#Thorin_array_flatten_deep)
- [Thorin::array_flatten_depth](#Thorin_array_flatten_depth)
- [Thorin::array_flatten](#Thorin_array_flatten)
- [Thorin::array_from_pairs](#Thorin_array_from_pairs)
- [Thorin::array_group_by](#Thorin_array_group_by)
- [Thorin::array_has_duplicates](#Thorin_array_has_duplicates)
- [Thorin::array_head](#Thorin_array_head)
- [Thorin::array_index_of](#Thorin_array_index_of)
- [Thorin::array_intersection_by](#Thorin_array_intersection_by)
- [Thorin::array_intersection_with](#Thorin_array_intersection_with)
- [Thorin::array_intersection](#Thorin_array_intersection)
- [Thorin::array_is_assoc](#Thorin_array_is_assoc)
- [Thorin::array_last_index_of](#Thorin_array_last_index_of)
- [Thorin::array_last](#Thorin_array_last)
- [Thorin::array_nth](#Thorin_array_nth)
- [Thorin::array_order_by](#Thorin_array_order_by)
- [Thorin::array_pluck](#Thorin_array_pluck)
- [Thorin::array_pull_all_by](#Thorin_array_pull_all_by)
- [Thorin::array_pull_all_with](#Thorin_array_pull_all_with)
- [Thorin::array_pull_all](#Thorin_array_pull_all)
- [Thorin::array_pull_at](#Thorin_array_pull_at)
- [Thorin::array_pull](#Thorin_array_pull)
- [Thorin::array_range](#Thorin_array_range)
- [Thorin::array_reject](#Thorin_array_reject)
- [Thorin::array_remove_empty](#Thorin_array_remove_empty)
- [Thorin::array_slice](#Thorin_array_slice)
- [Thorin::array_tail](#Thorin_array_tail)
- [Thorin::array_take_right_while](#Thorin_array_take_right_while)
- [Thorin::array_take_right](#Thorin_array_take_right)
- [Thorin::array_take_while](#Thorin_array_take_while)
- [Thorin::array_take](#Thorin_array_take)
- [Thorin::array_union_by](#Thorin_array_union_by)
- [Thorin::array_union_with](#Thorin_array_union_with)
- [Thorin::array_union](#Thorin_array_union)
- [Thorin::array_uniq_by](#Thorin_array_uniq_by)
- [Thorin::array_uniq_with](#Thorin_array_uniq_with)
- [Thorin::array_uniq](#Thorin_array_uniq)
- [Thorin::array_unzip_with](#Thorin_array_unzip_with)
- [Thorin::array_unzip](#Thorin_array_unzip)
- [Thorin::array_without](#Thorin_array_without)
- [Thorin::array_zip_object_deep](#Thorin_array_zip_object_deep)
- [Thorin::array_zip_object](#Thorin_array_zip_object)
- [Thorin::array_zip_with](#Thorin_array_zip_with)
- [Thorin::array_zip](#Thorin_array_zip)
<a name="Thorin_array_all"></a>
## Thorin::array_all
Returns true if the provided function returns true for all elements of an array, false otherwise
```php
if (Thorin::array_all([1,2,3,4], function($item) {
  return $item < 10;
})) {
   // do something
}
```

[Full documentation](/doc/src/functions/array/array_all.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_any"></a>
## Thorin::array_any
Returns true if the provided function returns true for at least one element of an array, false otherwise.
```php
if (Thorin::array_any([1,10,15,20], function($item) {
  return $item < 10;
})) {
  // do something
}
```

[Full documentation](/doc/src/functions/array/array_any.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_chunk"></a>
## Thorin::array_chunk
Chunks an array into smaller arrays of a specified size
```php
Thorin::array_chunk([1,2,3,4,5], 2);
// [[1, 2], [3, 4], [5]]
```

[Full documentation](/doc/src/functions/array/array_chunk.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_compact"></a>
## Thorin::array_compact
Creates an array with all falsey values removed. The values `false`, `null`,
`0`, `""`, `undefined`, and `NaN` are falsey.

```php
Thorin::array_compact([0, 1, false, 2, '', 3]);
// [1, 2, 3]
```

[Full documentation](/doc/src/functions/array/array_compact.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/compact.php)

<a name="Thorin_array_concat"></a>
## Thorin::array_concat
Creates a new array concatenating `array` with any additional arrays
and/or values.

```php
Thorin::array_concat([1], 2, [3], [[4]])
// [1, 2, 3, [4]]
```

[Full documentation](/doc/src/functions/array/array_concat.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/concat.php)

<a name="Thorin_array_deep_flatten"></a>
## Thorin::array_deep_flatten
Deep flattens an array
```php
Thorin::array_deep_flatten([1, [2], [[3], 4], 5]);
// [1, 2, 3, 4, 5]
```

[Full documentation](/doc/src/functions/array/array_deep_flatten.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_difference_by"></a>
## Thorin::array_difference_by
This method is like `array_difference` except that it accepts `iteratee` which
is invoked for each element of `array` and `values` to generate the criterion
by which they're compared. The order and references of result values are
determined by the first array. The iteratee is invoked with one argument:
(value).

**Note:** Unlike `array_pull_all_by`, this method returns a new array.

```php
Thorin::array_difference_by([2.1, 1.2], [2.3, 3.4], 'floor');
// [1.2]
```

[Full documentation](/doc/src/functions/array/array_difference_by.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/differenceBy.php)

<a name="Thorin_array_difference_with"></a>
## Thorin::array_difference_with
This method is like `Thorin::array_difference` except that it accepts `comparator`
which is invoked to compare elements of `array` to `values`. The order and
references of result values are determined by the first array. The comparator
is invoked with two arguments: (arrVal, othVal).

**Note:** Unlike `Thorin::pull_all_with`, this method returns a new array.

```php
Thorin::array_difference_with(
  [[ 'x' => 1, 'y' => 2 ], [ 'x' => 2, 'y' => 1 ]],
  [[ 'x' => 1, 'y' => 2 ]],
  'Thorin::is_equal'
);
// [[ 'x' => 2, 'y' => 1 ]]
```

[Full documentation](/doc/src/functions/array/array_difference_with.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/differenceWith.php)

<a name="Thorin_array_difference"></a>
## Thorin::array_difference
Creates an array of `array` values not included in the other given arrays
using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons. The order and references of result values are
determined by the first array.

**Note:** Unlike `Thorin::array_pullAll`, this method returns a new array.

```php
Thorin::array_difference([2, 1], [2, 3]);
// [1]
```

[Full documentation](/doc/src/functions/array/array_difference.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/difference.php)

<a name="Thorin_array_drop_right_while"></a>
## Thorin::array_drop_right_while
Creates a slice of `array` excluding elements dropped from the end.
Elements are dropped until `predicate` returns falsey. The predicate is
invoked with three arguments: (value, index, array).

```php
$users = [
  [ 'user' => 'barney',  'active' => false ],
  [ 'user' => 'fred',    'active' => true ],
  [ 'user' => 'pebbles', 'active' => true ]
]
Thorin::array_drop_right_while($users, function($user) { return $user['active']; })
// objects for ['barney']
```

[Full documentation](/doc/src/functions/array/array_drop_right_while.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/dropRightWhile.php)

<a name="Thorin_array_drop_right"></a>
## Thorin::array_drop_right
Returns a new array with n elements removed from the right
```php
Thorin::array_drop_right([1,2,3], 2) // [1]
```

[Full documentation](/doc/src/functions/array/array_drop_right.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_drop_while"></a>
## Thorin::array_drop_while
Creates a slice of `array` excluding elements dropped from the beginning.
Elements are dropped until `predicate` returns falsey. The predicate is
invoked with three arguments: (value, index, array).

```php
$users = [
  [ 'user' => 'barney',  'active' => true ],
  [ 'user' => 'fred',    'active' => true ],
  [ 'user' => 'pebbles', 'active' => false ]
]
Thorin::array_drop_left_while($users, function($user) { return $user['active']; })
// objects for ['pebbles']
```

[Full documentation](/doc/src/functions/array/array_drop_while.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/dropWhile.php)

<a name="Thorin_array_drop"></a>
## Thorin::array_drop
Returns a new array with n elements removed from the left
```php
Thorin::array_drop([1,2,3], 2) // [3]
```

[Full documentation](/doc/src/functions/array/array_drop.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_find_index"></a>
## Thorin::array_find_index
This method is like `Thorin::array_find` except that it returns the index of the first element predicate returns truthy for instead of the element itself.

```php
$users = [
    ['user' => 'barney',  'active' => false],
    ['user' => 'fred',    'active' => false],
    ['user' => 'pebbles', 'active' => true],
];
Thorin::array_find_index($users, function($o) { return $o['user'] == 'barney'; });
// 0
Thorin::array_find_index($users, ['user' => 'fred', 'active' => false]);
// 1
Thorin::array_find_index($users, ['active', false]);
// 0
Thorin::array_find_index($users, 'active');
// 2
```

[Full documentation](/doc/src/functions/array/array_find_index.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/findIndex.php)

<a name="Thorin_array_find_last_index"></a>
## Thorin::array_find_last_index
Returns the index of the last element for which the provided function returns a truthy value.
```php
Thorin::array_find_last_index([1, 2, 3, 4], function($n) {
  return ($n % 2) === 1;
});
// 2
```

[Full documentation](/doc/src/functions/array/array_find_last_index.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code#findlastindex)

<a name="Thorin_array_find_last"></a>
## Thorin::array_find_last
Returns the last element for which the provided function returns a truthy value.
```php
Thorin::array_find_last([1, 2, 3, 4], function($item) {
  return ($n % 2) === 1;
});
// 3
```

[Full documentation](/doc/src/functions/array/array_find_last.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_first"></a>
## Thorin::array_first
Returns the first item of a list.
```php
Thorin::array_first([1,2,3,4]);
// 1
```

[Full documentation](/doc/src/functions/array/array_first.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_flatten_deep"></a>
## Thorin::array_flatten_deep
Recursively flattens `array`.

```php
Thorin::array_flatten_deep([1, [2, [3, [4]], 5]]);
// [1, 2, 3, 4, 5]
```

[Full documentation](/doc/src/functions/array/array_flatten_deep.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/flattenDeep.php)

<a name="Thorin_array_flatten_depth"></a>
## Thorin::array_flatten_depth
Recursively flatten `array` up to `depth` times.

```php
$array = [1, [2, [3, [4]], 5]]
Thorin::array_flatten_depth($array, 1);
// [1, 2, [3, [4]], 5]
```

[Full documentation](/doc/src/functions/array/array_flatten_depth.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/flattenDepth.php)

<a name="Thorin_array_flatten"></a>
## Thorin::array_flatten
Flattens an array up to the one level depth.
```php
Thorin::array_flatten([1, [2], 3, 4]);
// [1, 2, 3, 4]
```

[Full documentation](/doc/src/functions/array/array_flatten.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_from_pairs"></a>
## Thorin::array_from_pairs
The inverse of `Thorin::array_to_pairs`, this method returns an object composed
from key-value `pairs`.

```php
Thorin::array_from_pairs([['a', 1], ['b', 2]]);
// {'a':1, 'b': 2}
```

[Full documentation](/doc/src/functions/array/array_from_pairs.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/fromPairs.php)

<a name="Thorin_array_group_by"></a>
## Thorin::array_group_by
Groups the elements of an array based on the given function.
```php
Thorin::array_group_by(['one','two','three'], 'strlen');
// [3 => ['one', 'two'], 5 => ['three']]
```

[Full documentation](/doc/src/functions/array/array_group_by.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_has_duplicates"></a>
## Thorin::array_has_duplicates
Checks a flat list for duplicate values. Returns true if duplicate values exists and false if values are all unique.
```php
Thorin::array_has_duplicates([1,2,3,1,2]);
// true
```

[Full documentation](/doc/src/functions/array/array_has_duplicates.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_head"></a>
## Thorin::array_head
Returns all elements in an array except for the last one.
```php
Thorin::array_head([1,2,3]);
// [1,2]
```

[Full documentation](/doc/src/functions/array/array_head.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_index_of"></a>
## Thorin::array_index_of
Gets the index at which the first occurrence of `value` is found in `array`
using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons. If `fromIndex` is negative, it's used as the
offset from the end of `array`.

```php
Thorin::array_index_of([1, 2, 1, 2], 2);
// 1
```

[Full documentation](/doc/src/functions/array/array_index_of.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/indexOf.php)

<a name="Thorin_array_intersection_by"></a>
## Thorin::array_intersection_by
This method is like `Thorin::array_intersection` except that it accepts `iteratee`
which is invoked for each element of each `arrays` to generate the criterion
by which they're compared. The order and references of result values are
determined by the first array. The iteratee is invoked with one argument:
(value).

```php
Thorin::array_intersection_by([2.1, 1.2], [2.3, 3.4], Math.floor);
// [2.1]
```

[Full documentation](/doc/src/functions/array/array_intersection_by.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/intersectionBy.php)

<a name="Thorin_array_intersection_with"></a>
## Thorin::array_intersection_with
This method is like `Thorin::array_intersection` except that it accepts `comparator`
which is invoked to compare elements of `arrays`. The order and references
of result values are determined by the first array. The comparator is
invoked with two arguments: (arrVal, othVal).

```php
$objects = [[ 'x' => 1, 'y' => 2 ], [ 'x' => 2, 'y' => 1 ]]
$others = [[ 'x' => 1, 'y' => 1 ], [ 'x' => 1, 'y' => 2 ]]
Thorin::array_intersection_with($objects, $others, 'Thorin::is_equal');
// [[ 'x' => 1, 'y' => 2 ]]
```

[Full documentation](/doc/src/functions/array/array_intersection_with.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/intersectionWith.php)

<a name="Thorin_array_intersection"></a>
## Thorin::array_intersection
Creates an array of unique values that are included in all given arrays
using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons. The order and references of result values are
determined by the first array.

```php
Thorin::array_intersection([2, 1], [2, 3]);
// [2]
```

[Full documentation](/doc/src/functions/array/array_intersection.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/intersection.php)

<a name="Thorin_array_is_assoc"></a>
## Thorin::array_is_assoc
Check if array is assocative or not
```php
Thorin::array_is_assoc(['a' => 1, 'b' => 2]);
// true
```

[Full documentation](/doc/src/functions/array/array_is_assoc.md)

<a name="Thorin_array_last_index_of"></a>
## Thorin::array_last_index_of
This method is like `Thorin::array_index_of` except that it iterates over elements of
`array` from right to left.

```php
Thorin::array_last_index_of([1, 2, 1, 2], 2);
// 3
```

[Full documentation](/doc/src/functions/array/array_last_index_of.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/lastIndexOf.php)

<a name="Thorin_array_last"></a>
## Thorin::array_last
Returns the last element in an array.
```php
Thorin::array_last([1,2,3,4]);
// 4
```

[Full documentation](/doc/src/functions/array/array_last.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_nth"></a>
## Thorin::array_nth
Gets the element at index `n` of `array`. If `n` is negative, the nth
element from the end is returned.

```php
Thorin::array_nth(['a', 'b', 'c', 'd'], 2);
// b
```

[Full documentation](/doc/src/functions/array/array_nth.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/nth.php)

<a name="Thorin_array_order_by"></a>
## Thorin::array_order_by
Sorts a collection of arrays or objects by key.
```php
Thorin::array_order_by([
   ['id' => 2, 'name' => 'Joy'],
   ['id' => 3, 'name' => 'Khaja'],
   ['id' => 1, 'name' => 'Raja']
], 'id', 'desc');
// [['id' => 3, 'name' => 'Khaja'], ['id' => 2, 'name' => 'Joy'], ['id' => 1, 'name' => 'Raja']]
```

[Full documentation](/doc/src/functions/array/array_order_by.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_pluck"></a>
## Thorin::array_pluck
Retrieves all of the values for a given key.
```php
Thorin::array_pluck([
  ['product_id' => 'prod-100', 'name' => 'Desk'],
  ['product_id' => 'prod-200', 'name' => 'Chair'],
], 'name');
// ['Desk','Chair']
```

[Full documentation](/doc/src/functions/array/array_pluck.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_pull_all_by"></a>
## Thorin::array_pull_all_by
This method is like `Thorin::array_pull_all` except that it accepts `iteratee` which is
invoked for each element of `array` and `values` to generate the criterion
by which they're compared. The iteratee is invoked with one argument: (value).

```php
$array = [[ 'x' => 1 ], [ 'x' => 2 ], [ 'x' => 3 ], [ 'x' => 1 ]];
Thorin::array_pull_all_by($array, [[ 'x' => 1 ], [ 'x' => 3 ]], 'x');
var_dump($array);
// [[ 'x' => 2 ]]
```

[Full documentation](/doc/src/functions/array/array_pull_all_by.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAllBy.php)

<a name="Thorin_array_pull_all_with"></a>
## Thorin::array_pull_all_with
This method is like `Thorin::array_pull_all` except that it accepts `comparator` which
is invoked to compare elements of `array` to `values`. The comparator is
invoked with two arguments: (arrVal, othVal).

```php
$array = [[ 'x' => 1, 'y' => 2 ], [ 'x' => 3, 'y' => 4 ], [ 'x' => 5, 'y' => 6 ]];
Thorin::array_pull_all_with($array, [[ 'x' => 3, 'y' => 4 ]], 'Thorin::is_equal');
// [[ 'x' => 1, 'y' => 2 ], [ 'x' => 5, 'y' => 6 ]]
```

[Full documentation](/doc/src/functions/array/array_pull_all_with.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAllWith.php)

<a name="Thorin_array_pull_all"></a>
## Thorin::array_pull_all
This method is like `Thorin::array_pull` except that it accepts an array of values to remove.

```php
$array = ['a', 'b', 'c', 'a', 'b', 'c'];
Thorin::array_pull_all($array, ['a', 'c']);
var_dump($array);
// ['b', 'b']
```

[Full documentation](/doc/src/functions/array/array_pull_all.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAll.php)

<a name="Thorin_array_pull_at"></a>
## Thorin::array_pull_at
Removes elements from `array` corresponding to `indexes` and returns an
array of removed elements.

```php
$array = ['a', 'b', 'c', 'd'];
Thorin::array_pull_at($array, [1, 3]);
// ['b', 'd']
```

[Full documentation](/doc/src/functions/array/array_pull_at.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAt.php)

<a name="Thorin_array_pull"></a>
## Thorin::array_pull
Removes all given values from `array` using
[`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons.

```php
$array = ['a', 'b', 'c', 'a', 'b', 'c'];
Thorin::array_pull($array, 'a', 'c');
var_dump($array);
// ['b', 'b']
```

[Full documentation](/doc/src/functions/array/array_pull.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/pull.php)

<a name="Thorin_array_range"></a>
## Thorin::array_range
Create an array with a range from, to.
```php
$ranges = Thorin::array_range(0,10);
// [0,1,2,3,4,5,6,7,8,9,10]
```

[Full documentation](/doc/src/functions/array/array_range.md)

[See more](https://www.jonasjohn.de/snippets/php/array-range.htm)

<a name="Thorin_array_reject"></a>
## Thorin::array_reject
Filters the collection using the given callback.
```php
Thorin::array_reject(['Apple', 'Pear', 'Kiwi', 'Banana'], function($item) {
  return strlen($item) > 4;
});
// ['Pear','Kiwi']
```

[Full documentation](/doc/src/functions/array/array_reject.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_remove_empty"></a>
## Thorin::array_remove_empty
Remove empty entries in an array
```php
$newArray = Thorin::array_remove_empty(['','hello','','world']);
// ['hello','world']
```

[Full documentation](/doc/src/functions/array/array_remove_empty.md)

<a name="Thorin_array_slice"></a>
## Thorin::array_slice
Creates a slice of `array` from `start` up to, but not including, `end`.

```php
$array = [1,2,3,4,5];
Thorin::array_slide($array, 1, 3);
// [2,3,4]
```

[Full documentation](/doc/src/functions/array/array_slice.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/slice.php)

<a name="Thorin_array_tail"></a>
## Thorin::array_tail
Returns all elements in an array except for the first one.
```php
Thorin::array_tail([1,2,3]);
// [2,3]
```

[Full documentation](/doc/src/functions/array/array_tail.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_take_right_while"></a>
## Thorin::array_take_right_while
Creates a slice of `array` with elements taken from the end. Elements are
taken until `predicate` returns falsey. The predicate is invoked with
three arguments: (value, index, array).

```php
$users = [
  [ 'user' => 'barney',  'active' => false ],
  [ 'user' => 'fred',    'active' => true ],
  [ 'user' => 'pebbles', 'active' => true ]
];
Thorin::array_take_right_while($users, function($value) { return $value['active']; });
// objects for ['fred', 'pebbles']
```

[Full documentation](/doc/src/functions/array/array_take_right_while.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/takeRightWhile.php)

<a name="Thorin_array_take_right"></a>
## Thorin::array_take_right
Creates a slice of `array` with `n` elements taken from the end.

```php
Thorin::array_take_right([1, 2, 3], 2);
// [2,3]
```

[Full documentation](/doc/src/functions/array/array_take_right.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/takeRight.php)

<a name="Thorin_array_take_while"></a>
## Thorin::array_take_while
Creates a slice of `array` with elements taken from the beginning. Elements
are taken until `predicate` returns falsey. The predicate is invoked with
three arguments: (value, index, array)

```php
$users = [
  [ 'user' => 'barney',  'active' => true ],
  [ 'user' => 'fred',    'active' => true ],
  [ 'user' => 'pebbles', 'active' => false ]
];
Thorin::array_take_while($users, function($value) { return $value['active']; });
// objects for ['barney', 'fred']
```

[Full documentation](/doc/src/functions/array/array_take_while.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/takeWhile.php)

<a name="Thorin_array_take"></a>
## Thorin::array_take
Returns an array with n elements taken from the beginning
```php
Thorin::array_take([1,2,3,4,5], 2);
// [1,2]
```

[Full documentation](/doc/src/functions/array/array_take.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_union_by"></a>
## Thorin::array_union_by
This method is like `Thorin::array_union` except that it accepts `iteratee` which is
invoked for each element of each `arrays` to generate the criterion by
which uniqueness is computed. Result values are chosen from the first
array in which the value occurs. The iteratee is invoked with one argument:
(value).

```php
Thorin::array_union_by([2.1], [1.2, 2.3], 'floor');
// [2.1, 1.2]
```

[Full documentation](/doc/src/functions/array/array_union_by.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/unionBy.php)

<a name="Thorin_array_union_with"></a>
## Thorin::array_union_with
This method is like `Thorin::array_union` except that it accepts `comparator` which
is invoked to compare elements of `arrays`. Result values are chosen from
the first array in which the value occurs. The comparator is invoked
with two arguments: (arrVal, othVal).

```php
$objects = [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1]];
$others = [['x' => 1, 'y' => 1], ['x' => 1, 'y' => 2]];
Thorin::array_union_with($objects, $others, 'Thorin::is_equal')
// => [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1], ['x' => 1, 'y' => 1]]
```

[Full documentation](/doc/src/functions/array/array_union_with.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/unionWith.php)

<a name="Thorin_array_union"></a>
## Thorin::array_union
Creates an array of unique values, in order, from all given arrays using
[`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons.

```php
Thorin::array_union([2], [1, 2]);
// [2, 1]
```

[Full documentation](/doc/src/functions/array/array_union.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/union.php)

<a name="Thorin_array_uniq_by"></a>
## Thorin::array_uniq_by
This method is like `Thorin::array_uniq` except that it accepts `iteratee` which is
invoked for each element in `array` to generate the criterion by which
uniqueness is computed. The order of result values is determined by the
order they occur in the array. The iteratee is invoked with one argument:
(value).

```php
Thorin::array_uniq_by([2.1, 1.2, 2.3], 'floor');
// [2.1, 1.2]
```

[Full documentation](/doc/src/functions/array/array_uniq_by.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/uniqBy.php)

<a name="Thorin_array_uniq_with"></a>
## Thorin::array_uniq_with
This method is like `Thorin::array_uniq` except that it accepts `comparator` which
is invoked to compare elements of `array`. The order of result values is
determined by the order they occur in the array.The comparator is invoked
with two arguments: (arrVal, othVal).

```php
$objects = [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1], ['x' => 1, 'y' => 2]];
Thorin::array_uniq_with($objects, 'Thorin::is_equal');
// [['x' => 1, 'y' => 2], ['x' => 2, 'y' => 1]]
```

[Full documentation](/doc/src/functions/array/array_uniq_with.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/uniqWith.php)

<a name="Thorin_array_uniq"></a>
## Thorin::array_uniq
Creates a duplicate-free version of an array, using
[`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
for equality comparisons, in which only the first occurrence of each element
is kept. The order of result values is determined by the order they occur
in the array.

```php
Thorin::array_uniq([2, 1, 2]);
// [2,1]
```

[Full documentation](/doc/src/functions/array/array_uniq.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/uniq.php)

<a name="Thorin_array_unzip_with"></a>
## Thorin::array_unzip_with
This method is like `Thorin::array_unzip` except that it accepts `iteratee` to specify
how regrouped values should be combined. The iteratee is invoked with the
elements of each group: (...group).

```php
$zipped = Thorin::array_zip([1, 2], [10, 20], [100, 200]);
// [[1, 10, 100], [2, 20, 200]]
Thorin::array_unzip_with($zipped, 'Thorin::add');
// [3, 30, 300]
```

[Full documentation](/doc/src/functions/array/array_unzip_with.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/unzipWith.php)

<a name="Thorin_array_unzip"></a>
## Thorin::array_unzip
This method is like `Thorin::array_zip` except that it accepts an array of grouped
elements and creates an array regrouping the elements to their pre-zip
configuration.

```php
$zipped = Thorin::array_zip(['a', 'b'], [1, 2], [true, false])
// [['a', 1, true], ['b', 2, false]]
Thorin::array_unzip($zipped);
// [['a', 'b'], [1, 2], [true, false]]
```

[Full documentation](/doc/src/functions/array/array_unzip.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/unzip.php)

<a name="Thorin_array_without"></a>
## Thorin::array_without
Filters out the elements of an array, that have one of the specified values.
```php
Thorin::array_without([1,2,3,4,5], 1, 3);
// [2,4,5]
```

[Full documentation](/doc/src/functions/array/array_without.md)

[See more](https://github.com/appzcoder/30-seconds-of-php-code)

<a name="Thorin_array_zip_object_deep"></a>
## Thorin::array_zip_object_deep
This method is like `Thorin::array_zip_object` except that it supports property paths.

```php
Thorin::array_zip_object_deep(['a.b[0].c', 'a.b[1].d'], [1, 2]);
/**
class stdClass#20 (1) {
 public $a => class stdClass#19 (1) {
     public $b =>
         array(2) {
             [0] => class stdClass#17 (1) {
                     public $c => int(1)
                 }
            [1] => class stdClass#18 (1) {
                 public $d => int(2)
                 }
         }
     }
 }
*/
```

[Full documentation](/doc/src/functions/array/array_zip_object_deep.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/zipObjectDeep.php)

<a name="Thorin_array_zip_object"></a>
## Thorin::array_zip_object
This method is like `Thorin::array_from_pairs` except that it accepts two arrays,
one of property identifiers and one of corresponding values.

```php
Thorin::array_zip_object(['a', 'b'], [1, 2]);
/* => object(stdClass)#210 (2) {
  ["a"] => int(1)
  ["b"] => int(2)
}
*/
```

[Full documentation](/doc/src/functions/array/array_zip_object.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/zipObject.php)

<a name="Thorin_array_zip_with"></a>
## Thorin::array_zip_with
This method is like `Thorin::array_zip` except that it accepts `iteratee` to specify
how grouped values should be combined. The iteratee is invoked with the
elements of each group: (...group).

```php
Thorin::array_zip_with([1, 2], [10, 20], [100, 200], function($a, $b, $c) { return $a + $b + $c; });
// [111, 222]
```

[Full documentation](/doc/src/functions/array/array_zip_with.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/zipWith.php)

<a name="Thorin_array_zip"></a>
## Thorin::array_zip
Creates an array of grouped elements, the first of which contains the
first elements of the given arrays, the second of which contains the
second elements of the given arrays, and so on.

```php
Thorin::array_zip(['a', 'b'], [1, 2], [true, false]);
// [['a', 1, true], ['b', 2, false]]
```

[Full documentation](/doc/src/functions/array/array_zip.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Array/zip.php)
