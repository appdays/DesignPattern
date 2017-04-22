<?php

/**
 * 用来处理FirstFirst类型的姓名
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/2/12
 * Time: 23:15
 */
include_once "Namer.php";
class FirstFirst extends Namer
{

    function __construct($name){
        $name =trim($name);
        $i = strpos($name,' ');
        if($i>0) {
            $this->frName = substr($name, 0, $i);
            $this->lName = substr($name, $i+1);
        }else{
            $this->lName=$name;
            $this->frName="";
        }
    }

}