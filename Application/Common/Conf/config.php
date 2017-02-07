<?php
return array(
    //'TMPL_FILE_DEPR'=>'_',//
	'TMPL_TEMPLATE_SUFFIX'=>'.php',//默认文件后缀
	'URL_HTML_SUFFIX'=>'',//伪静态
	//'SHOW_PAGE_TRACE'=>true,// 显示页面Trace信息
	'URL_PARAMS_BIND'       =>  true, // URL变量绑定到操作方法作为参数
	'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
	'URL_ROUTER_ON'   => true, // 开启路由


	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'sc_sd', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PARAMS' =>  array(), // 数据库连接参数
	'DB_PREFIX' => '', // 数据库表前缀
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
);