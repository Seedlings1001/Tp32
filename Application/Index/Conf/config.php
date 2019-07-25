<?php
return array(
    'DB_TYPE' => 'pdo', // 数据库类型
    'DB_DSN' => 'odbc:driver={microsoft access driver (*.mdb)};dbq=' . realpath(__DIR__ .'/../../Database/access.mdb'), // 数据库位置
    'DB_NAME' => null, // 数据库名
    'DB_USER' => null, // 用户名
    'DB_PWD' => null, // 密码
    'DB_PORT' => null, // 端口
    'DB_PREFIX' => '', // 数据库表前缀
    'DEFAULT_MODULE'        =>  'Index',  // 默认模块
    'ERROR_PAGE'            => 'http://m.bjsdly.com/index.php',	// 错误定向页面
);