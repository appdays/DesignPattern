<?php
/**
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/4/23
 * Time: 15:29
 */
header("Content-type: text/html; charset=utf-8");
include_once 'GardenMaker.php';
$garden = GardenMaker::getGarden('veggie');
$garden->setBorder();
$garden->setCenter();
$garden->setShade();
$garden->showPlan();

$garden = GardenMaker::getGarden('perennial');
$garden->setBorder();
$garden->setCenter();
$garden->setShade();
$garden->showPlan();
