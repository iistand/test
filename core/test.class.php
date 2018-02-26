<?php
/**
 * Created by PhpStorm.
 * User: cxmii
 * Date: 2018/1/16
 * Time: 16:36
 */

class test{
    function __construct(){
        return 1;die;
        $result=self::test();
        return $result;
    }
    private static function test(){
        return "I'm oldWang";
    }
}
