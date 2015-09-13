<?php
class Event
{
    public static $event = array();

    public function attach($name, $callback, $param =0)
    {
        self::$event[$name] = array(
            'callback' => $callback,
            'param' => $param
        );
    }

    public function trigger($name)
    {
        if (isset(self::$event[$name])) {

            call_user_func(self::$event[$name]['callback'],self::$event[$name]['param']);
        } else {
            echo 'Event is not exists<br/>';
        }
    }
}

$event = new Event();
$event->attach('created', function($param){
    echo 'Event create call with param:' . $param;
}, 999);

$event->trigger('created2');
$event->trigger('created');