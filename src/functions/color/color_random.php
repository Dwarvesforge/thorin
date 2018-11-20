<?php

namespace thorin;

/**
 * Generate a randon hexadecimal color like "F4A342"
 * @return    {String}    The random color generated
 *
 * @example    php
 * Thorin::color_random();
 * // F4A342
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function color_random(){
    mt_srand((double)microtime()*1000000);
    $c = '';
    while(strlen($c)<6){
        $c .= sprintf("%02X", mt_rand(0, 255));
    }
    return $c;
}
