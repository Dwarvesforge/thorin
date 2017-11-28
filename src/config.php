<?php

t_define('T_PROTOCOL',(!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://',true);
t_define('T_DOMAIN',$_SERVER['HTTP_HOST']);
t_define('T_ROOT_URL', T_PROTOCOL . T_DOMAIN);
t_define('T_ROOT_PATH', '/');
t_define('T_VIEWS_PATH', '/app/views');
t_define('T_CACHE_PATH', '/app/cache');
t_define('T_ASSETS_PATH', '/dist');

// default settings for images processing like t_optimize_image, etc...
t_define('T_IMAGES_QUALITY', 60);
t_define('T_IMAGES_MAX_WIDTH', null);
t_define('T_IMAGES_MAX_HEIGHT', null);
