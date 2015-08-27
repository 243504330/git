<?php

namespace Org\Filter;

class Salt{
	const RG_MD5 = '/^[a-zA-Z0-9]{32}$/';

	static public function get_str($str,$filter = FILTER_SANITIZE_STRING){
		return addslashes(filter_var($str,FILTER_SANITIZE_STRING));
	}

	static public function get_salt_pwd($pwd){
		return md5(md5(md5($pwd).SECRET_KEY));
	}
}