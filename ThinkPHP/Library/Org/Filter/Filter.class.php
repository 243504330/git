<?php

namespace Org\Filter;

class Filter{
	const RG_MD5 = '/^[a-zA-Z0-9]{32}$/';
	const RG_CHAR = '/^[a-zA-Z_]{1,20}$/';
	const RG_YMD = '/^\d{4}-\d{2}-\d{2}$/';

	static public function get_str($str,$filter = FILTER_SANITIZE_STRING){
		return addslashes(filter_var($str,FILTER_SANITIZE_STRING));
	}

	static public function check_str($str,$regex){
		if(!preg_match($regex,$str)){
			return false;
		}
		return true;
	}

	static public function get_salt_pwd($pwd){
		return md5(md5(md5($pwd).SECRET_KEY));
	}
}