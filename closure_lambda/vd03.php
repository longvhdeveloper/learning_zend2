<?php
$a = range(1, 5);
$data = array();
/*foreach ($a as $value) {
    $data[] = $value * 3;
    }*/


$data = array_map(function($item){
    return $item * 3;
}, $a);

echo '<pre>';
print_r($data);
echo '</pre>';