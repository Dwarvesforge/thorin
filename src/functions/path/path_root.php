<?php

namespace thorin;

/**
 * Return the document root path depending on the `path.document_root` config
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @return      {String}                    The corresponding root url
 *
 * @example    php
 * Thorin::path_root('my/cool/file.pdf');
 * // /app/root/public/my/cool/file.pdf
 *
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
function path_root($slug = '') {
	// remove the root path to be sure we don't sens back
	// a path from the server root if it's not the wanted behavior
	$slug = \str_replace(\Thorin::path_sanitize(\Thorin::config('path.document_root')), '', $slug);
	return \Thorin::path_sanitize(\Thorin::config('path.document_root')) . ltrim($slug, '/');
}
