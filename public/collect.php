<?php

require_once 'bootstrap.php';

$collect = Thorin::collect(['taylor', 'abigail', null])->reject(function ($name) {
    return empty($name);
});
print Thorin::pre($collect);
