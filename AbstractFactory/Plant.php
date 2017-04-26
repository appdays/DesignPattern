<?php

/**
 *  植物
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
     * @param $name 植物名称
     */
    public function __construct($name)
    {
        $this->name=$name;
    }

    /**
     * Desc: 返回植物名称
     * User: AppDays
     * Time: 2017-4-23 14:41:26
     * @return 植物名称
     */
    public function showName(){
        echo $this->name.'</br>';
    }
}