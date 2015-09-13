<?php
class Demo
{
    public function __construct(array $qho)
    {
        //call_user_func($qho, 0);
        echo '<pre>';
        print_r($qho);
        echo '</pre>';
    }
}

// $demo = new Demo(function(){
//     echo 'Callback function';
// });
$demo = new Demo(array(1, 'two', 'three'));