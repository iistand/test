<?php
/**
 * Created by PhpStorm.
 * User: cxmii
 * Date: 2018/1/22
 * Time: 16:30
 */
class indexControl{
    public function index(){
        return "hello world";
    }

    public function api(){
        return '123';
        exit;

        require_once "mysql/mysql.class.php";
        $mysql=mysql::newDb();

        $sql='select * from user_speed_test where id>42';
        $result=$mysql->select($sql);
        $result=json_encode($result);
        return $result;
    }
}
