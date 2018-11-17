<?php

/**
 * This method is like `Thorin::array_pull` except that it accepts an array of values to remove.
 *
 * **Note:** Unlike `Thorin::array_difference`, this method mutates `array`.
 * @param    {Array}    $array    The array to modify
 * @param    {Array}    $values    The values to exclude
 * @return    {Array}    The mutated array
 *
 * @example    php
 * $array = ['a', 'b', 'c', 'a', 'b', 'c'];
 * Thorin::array_pull_all($array, ['a', 'c']);
 * var_dump($array);
 * // ['b', 'b']
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://github.com/lodash-php/lodash-php/blob/master/src/Array/pullAll.php
 */
function t_array_pull_all(array $array, array $values): array {
	return _::pullAll($array, $values);
}
