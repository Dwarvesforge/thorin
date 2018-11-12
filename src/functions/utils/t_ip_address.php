<?php
/**
 * Return the ip address of the user
 * @return     {String}    The ip address of the user
 *
 * @example    php
 * $ip = Thorin::ip_address();
 *
 * @author    Paul Balanche <pb@buzzbrothers.ch>
 */
function t_ip_address() {
	$ip = null;
	if( isset($_SERVER['HTTP_X_FORWARDED_FOR']) ){
		$ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
		$ip = trim(end($ipAddresses));
	}
	elseif( isset($_SERVER['REMOTE_ADDR']) ){
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return filter_var($ip, FILTER_VALIDATE_IP) ?: false;
}
