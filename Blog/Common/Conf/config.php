<?php
return array (
		
		// '配置项'=>'配置值'
		// 数据库配置
		'DB_TYPE'   => 'mysql',
		'DB_HOST'   => 'localhost',
		'DB_NAME'   => 'BLog',
		'DB_USER'   => 'root',
		'DB_PWD'    => '123456',
		'DB_PORT'   => '3306',
		'DB_PREFIX' => '',
		
		// 开启日志 记录日志
		'LOG_RECORD' => true,
		'LOG_EXCEPTION_RECORD' => true,
		
		// 开启URL伪静态
		'URL_HTML_SUFFIX' => 'html',
		
		// 默认模块
		'DEFAULT_MODULE' => 'index',
		
		// url 模式
		'URL_MODEL' => '0',
		
		// 自动开启session
		'SESSION_AUTO_START' => true,
		
		// 设置左右结束标志
		// 'TMPL_L_DELIE' => '[{',
		// 'TMPL_R_DELIE' => '}]'
		
		// 改变变量
		'TMPL_PARSE_STRING' => array (
				'__PUBLIC__' => './Blog/Public',
				'__JS__' => './Blog/Public/js',
				'__CSS__' => './Blog/Public/css',
				'__IMG__' => './Blog/Public/img',
				'__HTML__' => './Blog/Public/html'
		) 
);