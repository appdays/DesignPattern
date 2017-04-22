<?php
/**
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/2/13
 * Time: 21:00
 */
include "NameFactory.php";
//创建一个工厂类的实例
$nameFactory = new NameFactory();
//firstfirst
$name1 = 'App Days';
//lastfirst
$name2 ='Days,App';

$namer1= $nameFactory->getName($name1);

$namer2 =$nameFactory->getName($name2);

echo "Enter name :$name1;First name:{$namer1->getFrname()};Last name:{$namer1->getLname()};</br>";
echo "Enter name :$name2;First name:{$namer2->getFrname()};Last name:{$namer2->getLname()};</br>";