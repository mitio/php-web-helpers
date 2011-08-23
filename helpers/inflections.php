<?php

function camelcase($text) {
	return str_replace(' ', '', ucwords(trim(preg_replace('/([_\-\.\s]+)/', ' ', $text))));
}

?>