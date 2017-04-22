<?php

/**
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/3/26
 * Time: 19:44
 */
abstract class Sorter
{
    //排序后得到的数组
    private $array;

    /**
     * Sorter constructor.
     * @param $array 待排序数组
     */
    function __construct($array)
    {
        $this->array=$this->sorting($array);

    }

    /**
     * Desc: 所有子类都有的方法，获取排序后的数组，子类无需实现
     * User: AppDays
     * Time: 2017-3-26 19:47:12
     * @return array
     */
    public  function getArray(){
        return $this->array;
    }

    /**
     * Desc: 所有子类必须实现的方法，用来对数组进行排序，并返回排序后的数组
     * User: AppDays
     * Time: 2017-3-26 19:51:33
     * @param $array
     * @return array
     */
    protected abstract function sorting($array);
}