<?php

/**
 *  植物园
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/4/23
 * Time: 14:42
 */
include_once 'Plant.php';
abstract class Garden
{
    /**
     * @var Plant
     */
    protected  $center,$shade,$border;
    /**
     * @var bool
     */
    protected $showCenter,$showShade,$showBorder;

    public function setCenter(){
        $this->showCenter=true;
    }
    public function setShade(){
        $this->showShade=true;
    }
    public function setBorder(){
        $this->showBorder=true;
    }

    /**
     * Desc:  显示各个区域的植物名称
     * User: AppDays
     * Time: 2017-4-23 14:53:45
     */
    public function showPlant(){
        if($this->showCenter){
            $this->center->showName();
        }
        if($this->showShade){
            $this->shade->showName();
        }
        if($this->showBorder){
            $this->border->showName();
        }
    }
}