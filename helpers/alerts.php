<?php

function add_flash($type, $message) {
	@$_SESSION['flashes'][$type][] = $message;
}

function clear_flashes() {
	unset($_SESSION['flashes']);
}

function get_flashes($type = null, $clear = true) {
	$flashes = (array) ($type !== null ? @$_SESSION['flashes'][$type] : @$_SESSION['flashes']);
	if ($clear) {
		clear_flashes();
	}

	return $flashes;
}

?>