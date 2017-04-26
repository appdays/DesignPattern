<?php

/**
 *  菜园
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/4/23
 * Time: 14:54
 */
include_once 'Garden.php';
include_once 'Plant.php';
class VeggieGarden extends Garden
{
    public function __construct()
    {
        $this->center= new Plant('玉米');
        $this->shade= new Plant("西蓝花");
        $this->border = new Plant("豌豆");
    }

}