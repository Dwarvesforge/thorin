<?php

namespace thorin;

/**
 * Return the document root path depending on the `path.document_root` config
 *
 * @param       {String}        $slug       An optional slug to add to the root url
 * @return      {String}                    The corresponding root url
 *
 * @example    php
 * Thorin::path_document_root('my/cool/file.pdf');
 * // /app/root/public/my/cool/file.pdf
 *
 * @author 		Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function path_document_root($slug = '') {
	return \Thorin::path_root($slug);
}
