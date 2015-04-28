<?php
/**
 * @param $string
 *
 * @return mixed
 */
function clean($string)
{
	$string = preg_replace('/^[\W_]+|[\W_]+$/', '', $string);
	return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

/**
 * @param $url
 *
 * @return string
 */
function addHttp($url)
{
	if (!preg_match("~^(?:f|ht)tps?://~i", $url) && $url != '') {
		$url = "http://" . $url;
	}
	return $url;
}
