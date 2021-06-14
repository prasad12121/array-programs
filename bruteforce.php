<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $map = array_flip($nums);
    //   print_r($map);
       // $map = array(0, 1, 2);
        foreach ($nums as $key => $v) {
            $diff = $target - $v;
          print_r($map[$diff]);//4,5,3
    //     die;
      /*      if (isset($map[$diff]) ) {
                return [$key, $map[$diff]];
            }*/
        }
    }
}
$s=new Solution();
$nums=array(3,2,4);
$test=$s->twoSum($nums,7);
print_r($test);