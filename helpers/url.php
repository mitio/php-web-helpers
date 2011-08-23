<?php

function url_for($url_or_params) {
	if (is_array($url_or_params)) {
		if (isset($url_or_params[0])) {
			$path = $url_or_params[0];
			unset($url_or_params[0]);
		} else {
			$path = $_SERVER['PHP_SELF'];
		}

		if (!empty($url_or_params)) {
			if (strpos($path, '?') === false) {
				$path .= '?';
			}
			$path .= http_build_query($url_or_params);
		}

		return $path;
	}
	return (string) $url_or_params;
}

function redirect_to($url_or_params, $options = array()) {
	if (!empty($options) && is_array($options) && function_exists('add_flash')) {
		foreach (array('error', 'success', 'info') as $flash_type) {
			if (isset($options[$flash_type])) {
				add_flash($flash_type, $options[$flash_type]);
			}
		}
	}

	$url = url_for($url_or_params);
	if (!headers_sent()) {
		header("Location: $url");
	} else {
		echo '<script> document.location.href = ' . json_encode($url) . '; </script>';
	}
	exit;
}

?>