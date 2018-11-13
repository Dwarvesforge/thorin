<?php

/**
 * Return the extension of the file path passed
 * @param    {String}    $filepath    The file path to get the extension from
 * @return    {String}    The extension without the dot
 *
 * @example    php
 * $ext = Thorin::ext('my/cool/file.jpg');
 * // jpg
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function t_ext($filepath) {
	$fileinfo = pathinfo($filepath);
	return $fileinfo['extension'];
}
