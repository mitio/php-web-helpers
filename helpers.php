<?php

	$helpers = dirname(__FILE__) . '/helpers';

	foreach (glob("$helpers/*.php") as $helper) {
		require_once($helper);
	}

?>