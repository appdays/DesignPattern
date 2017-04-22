<?php

/**
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/3/26
 * Time: 20:36
 */
include_once "SortFactory.php";
include_once "DescSorter.php";
class DescSortFactory extends SortFactory
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
     * Desc: 实现父类获取排序器的方法，这里返回一个降序排序器的实例
     * User: AppDays
     * Time: 2017-3-26 20:42:06
     * @return AscSorter
     */
    public function getSorter()
    {
        return new DescSorter($this->array);
        // TODO: Implement getSorter() method.
    }

    /**
     * Desc: 实现父类方法，只是个例子
     * User: AppDays
     * Time: 2017-3-26 20:47:45
     * @return bool
     */
    public function isASC()
    {
        return false;
        // TODO: Implement isASC() method.
    }

    /**
     * Desc: 实现父类方法，只是个例子
     * User: AppDays
     * Time: 2017-3-26 20:50:06
     * @return bool
     */
    public function isDESC()
    {
        return true;
        // TODO: Implement isASC() method.
    }
}