<?php
return array(
	//'配置项'=>'配置值'
    //url 模式设置 0,1,2,3
    'URL_MODEL' =>2,
    //show page trace
    'SHOW_PAGE_TRACE'  =>true,
    //地址大小敏感设置
    'URL_CASE_INSENSITIVE' => true,
    //导入css、js
//    'TMPL_PARSE_STRING' => array(
//        '_PUBLIC_' => __ROOT__ .'/' . APP_NAME .'Punlic'
//    ),
    'URL_ROUTER_ON' => true,
    'URL_ROUTE_RULES' => array(
        '1/:1' => 'Admin/Index/index' ,
        ),
    'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg|js|css',
);