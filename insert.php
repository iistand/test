<?php
/**
 * Created by PhpStorm.
 * User: cxmii
 * Date: 2018/1/12
 * Time: 16:45
 */
require_once "mysql/mysql.class.php";
header("Content-type:text/html;charset=utf-8");
$mysql=new mysql;
if($mysql->connectDb()){
    echo "数据库连接成功";
}else{
    echo "fault";
}