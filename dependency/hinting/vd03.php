<?php
class Demo
{
    public $content;
    public function __construct()
    {
        $this->content = "call data";
    }
}

function test(Demo $qho)
{
    echo $qho->content;
}
test(new Demo());