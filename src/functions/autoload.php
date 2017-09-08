<?php

// quick function to require all files inside a specific folder
function require_folder($folder) {
    foreach (scandir(dirname(__FILE__) . '/' . $folder) as $filename) {
        $path = dirname(__FILE__) . '/' . $folder . '/' . $filename;
        if (is_file($path)) {
            require $path;
        }
    }
}

// html
require_folder('html');

// paths
require_folder('paths');

// strings
require_folder('strings');

// utils
require_folder('utils');

// views
require_folder('views');