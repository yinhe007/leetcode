<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        if($k<=0){
        	return true;
        }
        $len = count($nums);
        while($k>0){
        	$d = $nums[$len-1];
        	unset($nums[$len-1]);
        	array_unshift($nums, $d);
        	$k--;
        }

    }
}
?>