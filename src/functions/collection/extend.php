<?php

namespace thorin;

/**
 * Extend an array or an object either deeply or not
 * @param 		{Array|Object} 		$a 				The source object to extend
 * @param 		{Array|Object} 		$b 				The object to extend the source one
 * @param 		{Boolean} 			[$deep=true]	If want to extend the source recursively
 * @param    	{Boolean} 			[$extendNonAssociativeArrays=true]    If we want to extend non associative arrays in place of replace it
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function extend($a, $b, $deep = true, $extendNonAssociativeArrays = true) {

	// ensure that we have a $b parameter
	if ( ! $b) return $a;

	// save if the $a item is an object
	// to restore it as is after processing
	$is_object = is_object($a);
	$a = (array) $a;

	// merge the items
    foreach($b as $k=>$v) {
		if( is_array($v) || is_object($v) ) {
            if( ! isset($a[$k])) {
				$a[$k] = $v;
			}
			else if ( ! $extendNonAssociativeArrays && is_array($v) && ! \Thorin::array_is_assoc($v)) {
				$a[$k] = $v;
			}
			else {

				$is_v_object = is_object($v);
				$is_ak_object = is_object($a[$k]);
				$v = (array) $v;
				$a[$k] = (array) $a[$k];

				if ($deep) {
					$a[$k] = \array_merge($a[$k], \Thorin::extend($a[$k], $v, $deep));
				} else {
					$a[$k] = $v;
				}

				if ($is_ak_object) $a[$k] = (object) $a[$k];
			}
        } else if ( ! isset($a[$k]) || ! is_null($v)) {
			$a[$k] = $v;
        }
	}

	// cast the element again in object if
	// it was at the start
	if ($is_object) $a = (object) $a;

	// return the merged array/object
    return $a;
}
