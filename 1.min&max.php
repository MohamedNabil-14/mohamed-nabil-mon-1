<?php

// answer of question 1 is

$nums =[2,5,9,12];

function maxNum($nums){

    $max =0;

    foreach($nums as $num){
        if ($num > $max){
            $max=$num;
        }
        }
        return $max;
    }

echo  "Max Number = ".maxNum($nums). "<br>";

function minNum($nums){
    $min =[];
    foreach($nums as $num){
        if ($num < $min) {
            $min=$num;
        }
    }
    return $min;
}

echo "Min Number = ". minNum($nums)."<br>";

?>