<?php

define('URL_CALLBACK', "http://www.lookwhatlook.com/sadmin");
return array(

	'LAYOUT_ON'=>true,
	'LAYOUT_NAME'=>'layout',

	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'localhost',
	'DB_NAME'=>'product',
	'DB_USER'=>'root',
	'DB_PWD'=>'root',
	'DB_PORT'=>3306,
	'DB_PREFIX'=>'jr_',
	'DB_CHARSET'=>'utf8',
	'DB_BUG'=>TRUE,


	'THINK_SDK_QQ' => array(
		'APP_KEY' => '101246284',
		
		'APP_SECRET'=>'98bc89880d7070494a92ab06738df496',
		'CALLBACK' =>URL_CALLBACK,
	),


); 