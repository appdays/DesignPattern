<?php

/**
 * Created by PhpStorm.
 * User: AppDays
 * Date: 2017/3/26
 * Time: 19:56
 */
include_once "Sorter.php";
class DescSorter extends Sorter
{
    /**
     * AscSorter constructor.
     * @param $array 待排序数组
     */
    public function __construct($array)
    {
        parent::__construct($array);
    }

    /**
     * Desc: 实现父类排序方法，降序排序，使用快速排序算法
     * User: AppDays
     * Time: 2017-3-26 20:01:31
     * @param $array
     * @return array
     */
    protected function sorting($array)
    {
        if(is_array($array) == false){
            return array($array);
        }
        $length =count($array);
        if($length <= 1){
            return $array;
        }
        $leftArr=array();
        $rightArr=array();
        for($i=1;$i<$length;$i++){
            if($array[$i]>$array[0]){
                $leftArr[]=$array[$i];
            }else{
                $rightArr[]=$array[$i];
            }
        }
        $leftArr=$this->sorting($leftArr);
        $rightArr=$this->sorting($rightArr);
        return array_merge($leftArr,array($array[0]),$rightArr);
    }


}