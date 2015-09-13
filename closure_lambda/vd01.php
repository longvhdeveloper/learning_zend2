<?php
$e = function($number){
    if ($number % 2 == 0) {
        return 'Chan<br/>';
    } else {
        return "Le<br/>";
    }
};
$test = function($param, $param2, $param3=300) use ($e) {
//$e = 999;
    echo $e($param);
    echo 'QHOnline.info. Param :'.$param. $param2 . $param3  .'<br/>';
};
$test(100, 200);