<?php

/**
 * 分割姓名的基类
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/2/12
 * Time: 23:03
 */
class Namer
{
    //名字
    protected $frName;
    //姓氏
    protected $lName;
    //返回名字
    public function getFrname(){
        return $this->frName;
    }
    //返回姓氏
    public function getLname(){
        return $this->lName;
    }


}