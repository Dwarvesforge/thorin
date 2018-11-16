<?php

/**
 * Removes all given values from `array` using
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons.
 *
 * **Note:** Unlike `Thorin::array_without`, this method mutates `array`. Use `Thorin::array_remove`
 * to remove elements from an array by predicate.
 *
 * @param    {Array}   $array   The array to modify
 * @param    {Array,String,Integer}   ...$values    The values to remove
 * @return    {Array}    The modified array
 *
 * @example    php
 * $array = ['a', 'b', 'c', 'a', 'b', 'c'];
 * Thorin::array_pull($array, 'a', 'c');
 * var_dump($array);
 * // ['b', 'b']
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://github.com/lodash-php/lodash-php/blob/master/src/Array/pull.php
 */
function t_array_pull(array $array, ...$values): array {
	return _::pull($array, ...$values);
}
