<?php

// quick function to require all files inside a specific folder
function t_require_functions_folder($folder) {
    foreach (scandir(dirname(__FILE__) . '/' . $folder) as $filename) {
        $path = dirname(__FILE__) . '/' . $folder . '/' . $filename;
        if (is_file($path)) {
			// require the file
			require $path;
        }
    }
}

// array
t_require_functions_folder('array');

// cache
t_require_functions_folder('cache');

// cast
t_require_functions_folder('cast');

// config
t_require_functions_folder('config');

// email
t_require_functions_folder('email');

// filesystem
t_require_functions_folder('filesystem');

// html
t_require_functions_folder('html');

// i18n
t_require_functions_folder('i18n');

// images
t_require_functions_folder('images');

// medias
t_require_functions_folder('medias');

// objects
t_require_functions_folder('objects');

// paths
t_require_functions_folder('paths');

// random
t_require_functions_folder('random');

// security
t_require_functions_folder('security');

// session
t_require_functions_folder('session');

// strings
t_require_functions_folder('strings');

// time
t_require_functions_folder('time');

// urls
t_require_functions_folder('urls');

// utils
t_require_functions_folder('utils');

// vendor
t_require_functions_folder('vendor');

// views
t_require_functions_folder('views');
