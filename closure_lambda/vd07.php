<?php
function demo()
{
    $param = func_get_args();
    echo func_num_args();
    echo '<pre>';
    print_r($param);
    echo '</pre>';
    //echo "Gia tri : $a1, $a2, $a3, $a4";
}
demo(5, 10, 15, 20);