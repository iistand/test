<?php
/**
 * Created by PhpStorm.
 * User: cxmii
 * Date: 2018/1/12
 * Time: 16:49
 */

class mysql{
    function connectDb(){
        $host="localhost";
        $userName="iistand";
        $passWord="546647867";
        $dataBase="mysql_speed_test";
        $conn=mysqli_connect($host,$userName,$passWord,$dataBase,'3306');
        return $conn;
    }
}