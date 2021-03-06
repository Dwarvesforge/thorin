<?php

// quick function to require all files inside a specific folder
function t_require_functions_folder($folder) {
    foreach (scandir(dirname(__FILE__) . '/' . $folder) as $filename) {
        $path = dirname(__FILE__) . '/' . $folder . '/' . $filename;
        if (is_file($path) && $filename !== '.DS_Store') {
			// require the file
			require $path;
        }
    }
}

// app
t_require_functions_folder('app');

// array
t_require_functions_folder('array');

// cache
t_require_functions_folder('cache');

// cast
t_require_functions_folder('cast');

// collection
t_require_functions_folder('collection');

// color
t_require_functions_folder('color');

// config
t_require_functions_folder('config');

// datetime
t_require_functions_folder('datetime');

// db
t_require_functions_folder('db');

// email
t_require_functions_folder('email');

// event
t_require_functions_folder('event');

// filesystem
t_require_functions_folder('filesystem');

// function
t_require_functions_folder('function');

// hook
t_require_functions_folder('hook');

// i18n
t_require_functions_folder('i18n');

// image
t_require_functions_folder('image');

// is
t_require_functions_folder('is');

// media
t_require_functions_folder('media');

// number
t_require_functions_folder('number');

// object
t_require_functions_folder('object');

// path
t_require_functions_folder('path');

// recaptcha
t_require_functions_folder('recaptcha');

// routes
t_require_functions_folder('routes');

// security
t_require_functions_folder('security');

// session
t_require_functions_folder('session');

// string
t_require_functions_folder('string');

// url
t_require_functions_folder('url');

// util
t_require_functions_folder('util');

// vendor
t_require_functions_folder('vendor');

// view
t_require_functions_folder('view');
