<?php
/**
 * Created by PhpStorm.
 * User: cxmii
 * Date: 2018/1/12
 * Time: 16:49
 */

class mysql{
    private static $dbName;
    private static $connectDb;
    private static $Db;
    private function __construct($databaseName="mysql_speed_test"){
        $this->databaseName=$databaseName;
        //$this->connectDb($databaseName);
    }

    private static function connectDb($connect_db){
        $host="localhost";
        $userName="root";
        $passWord="root";

        @$conn=mysqli_connect($host,$userName,$passWord,$connect_db);
        if($conn){
            return $conn;
        }else{
            die("mysql connect default:".mysqli_connect_error());
        }
    }

    public function select($sql){
        $sources=mysqli_query(self::connectDb($this->databaseName),$sql);
        $arr[]="";
        while($res=mysqli_fetch_array($sources)){
            if($arr[0]==""){
                $arr[0]=$res;
            }else{
                array_push($arr,$res);
            }
        }
        return $arr;
    }

    public function insert($sql){
        $sources=mysqli_query(self::connectDb($this->databaseName),$sql);
        return $sources;
    }
    public function updata($sql){
        $sources=mysqli_query(self::connectDb($this->databaseName),$sql);
        return $sources;
    }
    public function delete($sql){
        $sources=mysqli_query(self::connectDb($this->databaseName),$sql);
        return $sources;
    }

    //单例连接数据库
    public static function newDb(){
        if(self::$Db==null){
            self::$Db=new mysql;
        }
        return self::$Db;
    }
}

