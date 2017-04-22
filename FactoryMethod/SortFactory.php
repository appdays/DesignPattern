<?php

/**
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/3/26
 * Time: 19:14
 */
abstract class SortFactory
{
    protected $array;
    function __construct($array){
        $this->array=$array;
    }

    /**
     * Desc: 子类必须实现的方法，返回一个排序对象
     * User: AppDays
     * Time: 2017-3-26 19:41:29
     * @return sorter
     */
   protected abstract function getSorter();

    /**
     * Desc: 子类必须实现的方法，返回是否是升序排序
     * User: AppDays
     * Time: 2017-3-26 19:39:18
     * @return bool
     */
   protected abstract function isASC();

    /**
     * Desc: 子类必须实现的方法，返回是否是降序排序
     * User: AppDays
     * Time: 2017-3-26 19:43:16
     * @return bool
     */
    protected abstract function isDESC();
}