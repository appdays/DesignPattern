<?php
/**
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/3/26
 * Time: 21:15
 */
include "AscSortFactory.php";
include "DescSortFactory.php";
//待排序数组
$array=array(3,9,8,4,1,10);
//升序排序工厂
$factory = new AscSortFactory($array);
//通过工厂获取一个升序排序器
$sorter= $factory->getSorter();
//通过排序器获取排序结果
$arr=$sorter->getArray();
print_r($arr);
echo '</br>';
//降序排序工厂
$factory = new DescSortFactory($array);
//通过工厂获取一个降序排序器
$sorter= $factory->getSorter();
//通过排序器获取排序结果
$arr=$sorter->getArray();
print_r($arr);
