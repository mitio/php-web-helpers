<?php

function singularize($word) {
	$inflections = array(
		'/\b(people)\s*$/i' => 'person',
		'/(ies)\s*$/i' => 'y',
		'/(s)\s*$/i' => '',
	);

	foreach ($inflections as $search => $replace) {
		$singular = preg_replace($search, $replace, $word, -1, $count);
		if ($count > 0) {
			return $singular;
		}
	}

	return $word; // Failed, we have.
}

?>