<?php

/**
 *  工厂生成器
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/4/23
 * Time: 15:12
 */
include_once 'PerennialGarden.php';
include_once 'VeggieGarden.php';
class GardenMaker
{
    /*
     * 根据植物园类型返回植物园
     *
     */
    public static function getGarden($gardenType){
        switch($gardenType){
            case 'veggie':
                return new VeggieGarden();
                break;
            case 'perennial':
                return new PerennialGarden();
                break;
        }
    }
}