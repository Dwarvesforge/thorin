<?php

use duncan3dc\Sessions\Session;

function t_session_id() {
	$instance = Session::getInstance();
	return $instance->getId();
}
