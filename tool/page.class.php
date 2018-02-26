<?php
/**
 * Created by PhpStorm.
 * User: cxmii
 * Date: 2018/1/17
 * Time: 16:15
 */

class page{
    public $count;//总条数
    public $limit;//每页显示个数
    public $now_page;//当前页面

    public $all_page;//一共几页
    public $start_page;//起始页码

    function __construct($count,$limit,$now_page){
        $this->count=$count;
        $this->limit=$limit;
        $this->now_page=$now_page;
    }

    //计算分页的各个内容
    function page_calcu(){
        //一共有几个分页
        $this->all_page=ceil($this->count/$this->limit);
        //起始小页码，是1
        $this->start_page=1;

    }

    //实例分页按钮
    function page_btn(){

    }


}