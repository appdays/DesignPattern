<?php

/**
 * 用来处理LastFirst类型的姓名
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/2/13
 * Time: 20:54
 */
include_once "Namer.php";
class LastFirst extends Namer
{
    function __construct($name){
        $name =trim($name);
        $i = strpos($name,',');
        if($i>0){
            $this->lName = substr($name,0,$i);
            $this->frName=substr($name,$i+1);
        }else{
            $this->lName=$name;
            $this->frName='';
        }
    }

}