<?php

 // Definition for a singly-linked list.
  class ListNode {
      public $val = 0;
      public $next = null;
      function __construct($val) { $this->val = $val; }
  }
 
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {


    	$newL = new ListNode(0);

    	if(empty($l1)){
    		return $l2;
    	}
    	if(empty($l2)){
    		return $l1;
    	}
    	$h1 = new ListNode(0);
    	$h2 = new ListNode(0);
    	$h1->next = $l1;
    	$h2->next = $l2;
    	$head = $newL;
    	while(true) {
    		$d1 = $h1->next;
    		$d2 = $h2->next;
    		if(($d1 ==null || $d1->val >= $d2->val) && $d2 <> null){
					$head->next = $d2;
					$h2->next = $d2->next;
					$head = $head->next;
    		}elseif($d1 <> null){
					$head->next = $d1;
					$h1->next = $d1->next;
					$head = $head->next;
    		}
    		
    		if($d1 == null && $d2==null){
    			return $newL->next;
    		}
    	}
    }
}

// $obj = new Solution;
// $l1 = new ListNode(1);
// $l2 = new ListNode(2);
// $ret = $obj->mergeTwoLists($l1,$l2);

// var_dump($ret);