<?php


class Filter{
	const RG_MD5 = '/^[a-zA-Z0-9]{32}$/';

	static public function get_str($str,$filter = FILTER_SANITIZE_STRING){
		return addslashes(filter_var($str,FILTER_SANITIZE_STRING));
	}
}