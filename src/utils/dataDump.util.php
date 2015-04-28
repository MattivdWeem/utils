<?php
/* helpers Utils*/

/**
 * Short hand - clean print_r
 */
function _r()
{
	$args = func_get_args();
	echo'<pre>';
	if (is_array($args)) {
		print_r(arrayClean($args));
	} else {
		print_r($args);
	}
	echo'</pre>';
}

/**
 * Dump and Die
 * basicly _r die;
 */
function dd()
{
	_r(func_get_args());
	die;
}

/**
 * @param $array
 *
 * @return array
 */
function arrayClean(array $array)
{
	if (is_array($array) && count($array) === 1) {
		$array = array_shift($array);
		if (is_array($array)) {
			$array = arrayClean($array);
		}
	}
	return $array;
}
