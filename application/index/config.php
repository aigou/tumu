<?php 
	return[
		// 视图输出字符串内容替换
    	'view_replace_str'       => [
            '__STATIC__'  => dirname($_SERVER['SCRIPT_NAME']) .'/static',
            '__INDEX__'  => dirname($_SERVER['SCRIPT_NAME']) .'/static/index',
    	],
	];