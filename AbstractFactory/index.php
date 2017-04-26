<?php
/**
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/4/23
 * Time: 15:29
 */
header("Content-type: text/html; charset=utf-8");
include_once 'GardenMaker.php';
//根据菜园类型获取菜园工厂对象
$garden = GardenMaker::getGarden('veggie');
$garden->setBorder();
$garden->setCenter();
$garden->setShade();
//显示种植的植物
$garden->showPlant();
//根据多年生植物园类型获取多年生植物园工厂对象
$garden = GardenMaker::getGarden('perennial');
$garden->setBorder();
$garden->setCenter();
$garden->setShade();
//显示种植的植物
$garden->showPlant();
