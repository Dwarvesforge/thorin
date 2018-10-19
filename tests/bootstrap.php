<?php

define('T_PROTOCOL','http://');
define('T_DOMAIN','thorin.io');

define('T_CACHE_PATH', __DIR__ . '/app/cache/');
define('T_VIEWS_PATH', __DIR__ . '/app/views/');

define('T_CONFIG_PATH', __dir__ . '/app/config/');

define('T_LANG_PATH', __dir__ . '/app/lang/');
define('T_AVAILABLE_LANGUAGES', ['en','fr']);
define('T_DEFAULT_LANGUAGE', 'en');

require_once 'vendor/autoload.php';
require_once 'src/autoload.php';
