<?php

/**
 * @name    t_esc_attr
 * Escape the passed string to ensure it will not break any html when printed inside an attribute
 * 
 * @param       {String}        $string         The string to process
 * @return      {String}                        The safe string to put inside any html attribute
 */
function t_esc_attr($string) {
    return htmlspecialchars($string, ENT_QUOTES);
}