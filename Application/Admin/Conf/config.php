<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'=> 'mysql',// 数据库类型 
	'DB_HOST'=>'localhost', // 服务器地址
    'DB_NAME'=>'twoway',          // 数据库名
    'DB_USER'=>'root',      // 用户名
    'DB_PWD'=>'root',          // 密码
	SHOW_PAGE_TRACE=>true,
	'VAR_URL_PARAMS'=> '_URL_',

	//模版变量替换
    'TMPL_PARSE_STRING'  =>array(
        '__IMAGES__' => __ROOT__.'/Public/upload',
        
    )
);