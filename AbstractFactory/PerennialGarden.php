<?php

/**
 *  多年生植物园
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/4/23
 * Time: 15:03
 */
include_once 'Garden.php';
include_once 'Plant.php';
class PerennialGarden extends Garden
{
    public function __construct()
    {
        $this->center= new Plant('苹果树');
        $this->shade= new Plant("车前草");
        $this->border = new Plant("灌木丛");
    }
}