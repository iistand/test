<?php
/**
 * Created by PhpStorm.
 * User: cxmii
 * Date: 2018/1/22
 * Time: 15:31
 */

require_once "path.php";

$route=path::assignment();
$res=$route->method();
die ($res);