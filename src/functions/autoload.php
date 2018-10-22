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

// strings
t_require_functions_folder('strings');

// time
t_require_functions_folder('time');

// utils
t_require_functions_folder('utils');

// vendor
t_require_functions_folder('vendor');

// views
t_require_functions_folder('views');
