<?php

/**
 * Generate a slug from a string like a title or whatever
 * @param    {String}    $string    The string to convert into a slug
 * @return    {String}    The created slug
 *
 * @example    php
 * print Thorin::slug('Hello world and universe');
 * // hello-world-and-universe
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_slug($string) {
	$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
    return strtolower($slug);
}
