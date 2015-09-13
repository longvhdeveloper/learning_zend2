<?php
class Demo
{
    public $name ="jackie";
    public $job = "developer";
    public $output;
    public function test($string)
    {
        $this->output = function() use ($string){
            return "Name: " . $this->name . ", Job : " . $this->job . ', String : ' . $string;
        };
        return $this->output();
    }

    public function __call($method, $param)
    {
        if (is_callable(array($this, $method))) {
            return call_user_func_array($this->$method, $param);
        }
    }

    public function __invoke($param)
    {
        return 'Call object as function with param: '.$param.'<br/>';
    }
}

$demo = new Demo();
echo $demo->test('QHOnline.info'). '<br/>';

echo $demo(999);