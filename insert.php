<?php
/**
 * Created by PhpStorm.
 * User: cxmii
 * Date: 2018/1/12
 * Time: 16:45
 */
require_once "core/test.class.php";
require_once "common/common.php";
require_once "mysql/mysql.class.php";
header("Content-type:text/html;charset=utf-8");
$result=$_POST['send'];
echo $result;
//我在这个页面输出了一个hello world,这个页面的内容就为hello world然后ajax显示的内容就为hellow world
//这个页面的输出为ajax的返回值，get it?


/*$database=mysql::newDb();
$sql="delete from user_speed_test where id>0";
$database->delete($sql);
for($i=0;$i<20;$i++){
    $time=now_time();
    $sql="insert into user_speed_test VALUES('','monkey-{$i}','oldChen','{$time}')";
    $res=$database->insert($sql);
    if(!$res){
        echo "插入第{$i}+1条数据出错";
        break;
    }
}*/

