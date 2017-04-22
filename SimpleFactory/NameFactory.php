<?php

/**
 * 工厂类
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/2/13
 * Time: 20:57
 */
include_once "LastFirst.php";
include_once "FirstFirst.php";
class NameFactory
{
    public function getName($name){
        $i = strpos($name,',');
        if($i){
            return new LastFirst($name);
        }else{
            return new FirstFirst($name);
        }
    }

}