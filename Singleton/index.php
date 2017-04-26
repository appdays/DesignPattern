<?php
/**
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/4/26
 * Time: 21:20
 */
include_once "Singleton.php";
/**
 * 获取单实例
 */
$instance = Singleton::getInstance();
/*
 * 打印实例创建时间
 */
echo $instance->getCreateTime();
echo '</br>';
/*
 * 阻塞线程3秒
 */
sleep(3);
/**
 * 重新获取实例
 */
$instance = Singleton::getInstance();
/*
 * 打印实例创建时间
 */
echo $instance->getCreateTime();