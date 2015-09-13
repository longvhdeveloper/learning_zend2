<?php
class Teacher{
    public function teach() {
        echo "Teaching";
        return $this;
    }

    public function training() {
        echo "Training";
        return $this;
    }
}

$teach = new Teacher();
$teach->teach()->training();