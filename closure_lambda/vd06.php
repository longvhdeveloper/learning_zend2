<?php
namespace QHOnline;
class Demo
{
    public function test()
    {
        $param = func_get_args();
        echo '<pre>';
        print_r($param);
        echo '</pre>';
    }
}

call_user_func_array(array('QHOnline\Demo', 'test'), array('one', 'two'));