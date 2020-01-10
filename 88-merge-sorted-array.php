<?php

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n)
    {
        $nums1 = array_slice($nums1, 0, $m);
        $nums2 = array_slice($nums2, 0, $n);
        array_walk($nums2,function($val) use (&$nums1){
            array_push($nums1,$val);
        });
        sort($nums1);
    }
}