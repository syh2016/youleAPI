<?php
return array(
	//'配置项'=>'配置值'
	// 'URL_ROUTER_ON '=>true,  
 //    'URL_MODEL'     => 2, 
 //    'VAR_PATHINFO'=> 's',
	'DEFAULT_MODULE'        =>  'Home',  // 默认模块
	'DEFAULT_CONTROLLER'    =>  'Index',//默认控制器
	'DEFAULT_ACTION'        =>  'index', // 默认操作名称
	'DB_TYPE'               =>  'Mysql',     // 数据库类型
	'DB_HOST'               =>  '182.92.157.126', // 服务器地址
	'DB_NAME'               =>  'youlehai',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  'root',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>  'table_',    // 数据库表前缀
	'AUTH_CODE'             =>  'youle',    // 秘钥
	'VALID_TIME'            =>   3600*24*7,    // token有效时间为7天
	'IS_REDIS'              =>   false,    // redis是否开启
	'API_DEBUG'              =>  true,    // api调试关闭

);


 