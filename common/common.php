<?php
/**
 * Created by PhpStorm.
 * User: cxmii
 * Date: 2018/1/16
 * Time: 15:53
 */
function dump($paramter){
    echo "<pre>";
    var_dump($paramter);
    exit;
}

function now_time(){
    //获取当前时间
    date_default_timezone_set('Asia/Shanghai');
    return date("Y.m.d H:i:s",time())."<br>";
}