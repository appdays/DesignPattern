<?php

/**
 *  庄稼
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/4/23
 * Time: 14:36
 */
class Plant
{
    private $name;

    /**
     * Plant constructor.
     * @param $name 庄稼名称
     */
    public function __construct($name)
    {
        $this->name=$name;
    }

    /**
     * Desc: 返回庄稼名称
     * User: AppDays
     * Time: 2017-4-23 14:41:26
     * @return 庄稼名称
     */
    public function showName(){
        echo $this->name.'</br>';
    }
}