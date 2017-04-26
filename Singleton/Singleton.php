<?php

/**
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/4/26
 * Time: 21:04
 */
class Singleton
{
    /*
     * 私有静态变量，指定唯一实例
     */
    private static $instance;
    /*
     * 构造函数设为私有
     */
    private function __construct(){}
    /*
     * 实例创建时间，用来检测是否为同一个实例
     */
    private $create_time;

    /**
     * Desc: 获取单实例唯一入口
     * User: AppDays
     * Time: 2017-4-26 21:10:59
     * @return Singletom
     */
    public static function getInstance(){
        if(empty(self::$instance)){//如果变量为空，则实例化一个对象
            self::$instance = new Singleton();
            //实例创建时间
            self::$instance->create_time=time();
        }
        //返回单实例
        return self::$instance;
    }

    /*
     * 获取实例创建时间，测试单实例
     */
    public function getCreateTime(){
        return $this->create_time;
    }

}