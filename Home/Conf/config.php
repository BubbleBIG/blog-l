<?php
return array(
    'APP_DEBUG' => true, // 是否开启调试模式
   'DB_TYPE' => 'mysql', // 数据库类型
   'DB_HOST' => 'localhost', // 服务器地址
   'DB_NAME' => 'myblog', // 数据库名
   'DB_USER' => 'root', // 用户名
   'DB_PWD' => '', // 密码
   'DB_PORT' => 3306, // 端口
   'DB_PREFIX' => '', // 数据库表前缀
   'DB_SUFFIX' => '', // 数据库表后缀
   'DB_FIELDTYPE_CHECK' => false, // 是否进行字段类型检查
   'DB_FIELDS_CACHE' => true, // 启用字段缓存
   'DB_CHARSET' => 'utf8', // 数据库编码默认采用utf8
   'DB_DEPLOY_TYPE' => 0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
   'DB_RW_SEPARATE' => false, // 数据库读写是否分离 主从式有效
   'TMPL_VAR_IDENTIFY' => 'array',
   'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg|js|css',
);
?>