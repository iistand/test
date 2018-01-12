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
$result=mysqli_query($mysql->connectDb(), "insert into user_speed_test VALUES ('oldWang','老王',time())");
if($mysql->connectDb()){
    echo "插入成功";
}else{
    echo "fault";
}
