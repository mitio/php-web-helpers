<?php

function camelcase($text) {
	return str_replace(' ', '', ucwords(trim(preg_replace('/([_\-\.\s]+)/', ' ', $text))));
}

function underscore($text) {
	return strtolower(preg_replace('/(\w)([A-Z])/', '\1_\2', $text));
}

function humanize($str) {
	return trim(str_replace('_', ' ', underscore($str)));
}

?>