<?php

namespace thorin;

/**
 * Return a filesystem [Flysystem](http://flysystem.thephpleague.com/docs/) instance of the requested disk
 * @param    {String}    $name    The disk name requested
 * @return    {League\Flysystem\Filesystem}    A filesystem instance to work with
 *
 * @example    php
 * $disk = Thorin::fs_disk('local');
 * $disk->listContents();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com>
 */
function fs_disk($name) {
	return \Thorin::fs_disk_factory($name);
}
