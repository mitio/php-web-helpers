<?php

/**
 * Returns the first !is_null() argument of the function
 */
function notnull() {
	$args = func_get_args();
	foreach ($args as $arg) {
		if (!is_null($arg)) {
			return $arg;
		}
	}
	return null;
}

/**
 * Returns the first !empty() argument of the function
 */
function notempty() {
	$args = func_get_args();
	foreach ($args as $arg) {
		if (!empty($arg)) {
			return $arg;
		}
	}
	return null;
}

?>