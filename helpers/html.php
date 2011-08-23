<?php

function params_to_html_attributes($params) {
	$attrs = array();

	foreach ($params as $name => $value) {
		$attrs[] = htmlspecialchars($name) . '="' . htmlspecialchars($value) . '"';
	}

	return join(' ', $attrs);
}

function link_to($text, $url_or_params, $html_attributes = array()) {
	$html_attributes['href'] = function_exists('url_for') ? url_for($url_or_params) : (string) $url_or_params;
	return '<a ' . params_to_html_attributes($html_attributes) . '>' . $text . '</a>';
}

?>