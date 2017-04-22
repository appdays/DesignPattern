<?php

/**
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/3/26
 * Time: 20:55
 */
include_once "SortFactory.php";
include_once "AscSorter.php";
class AscSortFactory extends SortFactory
{

    /**
     * AscSortFactory constructor.
     * @param $array 待排序数组
     */
    public function __construct($array)
    {
        parent::__construct($array);
    }

    /**
     * Desc: 实现父类获取排序器的方法，这里返回一个升序排序器的实例
     * User: AppDays
     * Time: 2017-3-26 20:59:08
     * @return AscSorter
     */
    public function getSorter()
    {
        return new AscSorter($this->array);
        // TODO: Implement getSorter() method.
    }

    /**
     * Desc: 实现父类获取排序器的方法，返回是否是升序工厂
     * User: AppDays
     * Time: 2017-3-26 21:04:23
     * @return bool
     */
    public function isASC()
    {
        return true;
        // TODO: Implement isASC() method.
    }

    /**
     * Desc: 实现父类获取排序器的方法，返回是否是降序工厂
     * User: AppDays
     * Time: 2017-3-26 21:07:56
     * @return bool
     */
    public function isDESC()
    {
        return false;
        // TODO: Implement isASC() method.
    }
}