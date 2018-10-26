<?php
/**
 * Return a filesystem [Flysystem]() instance of the requested disk
 * @param    {String}    $name    The disk name requested
 * @return    {League\Flysystem\Filesystem}    A filesystem instance to work with
 *
 * @example    php
 * $disk = Thorin::disk('local');
 * $disk->listContents();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com>
 */
function t_disk($name) {
	return Thorin::filesystem_factory($name);
}
