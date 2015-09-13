<?php
class QHOnline
{
    public static $counter = 0;
    public static $instance;
    protected function __construct()
    {
        echo 'QHOnline class call';
        self::$counter++;
    }

    protected function __clone()
    {

    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            $qho = self::$instance = new QHOnline();
            return $qho;
        }
    }

    public function test()
    {
        echo 'Hello';
    }
}

/*$qho = new QHOnline();
  $qho2 = new QHOnline();*/
$qho = QHOnline::getInstance();
$qho->test();
//$qho = QHOnline::getInstance();

$qho2 = clone qho;

echo '<br/>' . QHOnline::$counter;