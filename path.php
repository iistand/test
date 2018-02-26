<?php
/**
 * Created by PhpStorm.
 * User: cxmii
 * Date: 2018/1/22
 * Time: 15:35
 */
class path{
    public static $assignment;
    public function __construct(){
        $this->auto_load();
        $this->method();
    }

    //静态方法，实例化这个路由
    public function method(){
        //控制器跟方法，默认进入首页
        //contral：哪个控制器
        //action：执行哪个方法
        $contral=$_POST['control']?$_POST['control']: 'index.class';
        $action=$_POST['action']?$_POST['action']: 'index';
        $controller= $contral."Control";
        $controller = new  $controller();
        return $controller->$action();
    }

    public  function auto_load(){
        spl_autoload_register(
            array(__CLASS__,'load')
        );
    }

    public static function assignment(){
        if(self::$assignment==null){
            self::$assignment=new path();
        }
        return self::$assignment;
    }

    public  function load($className){
        //加上文件判断
        require 'application/controller/'.$className.".class.php";
    }

}