<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
// 3442. Maximum Difference Between Even and Odd Frequency

    function maxDifference($s) {
        $arr = [];
        [$par, $impar] = [0, 0];

        for ($i = 0; $i < strlen($s); $i++){
            $char = $s[$i];
            if (isset($arr[$char])){
                $arr[$char] += 1;
            }else{
                $arr[$char] = 1;
            }
        }

        foreach ($arr as $_ => $v){
            if (!($v % 2)){
                if (!$par || $v < $par){
                    $par = $v;
                }
            }else {
                if (!$impar || $v > $impar){
                    $impar = $v;
                }
            }
        }
        return $impar - $par;
    }
}
