<?php

t_define('T_PROTOCOL',(!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://',true);
t_define('T_DOMAIN',$_SERVER['HTTP_HOST']);
t_define('T_ROOT_URL', T_PROTOCOL . T_DOMAIN);
t_define('T_ROOT_PATH', '/');
t_define('T_VIEWS_PATH', $_SERVER['DOCUMENT_ROOT'] . '/app/views/');
t_define('T_CACHE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/app/cache/views/');
t_define('T_ASSETS_PATH', 'dist/');