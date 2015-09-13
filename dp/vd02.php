<?php
interface khudulich
{
    public function lichtrinh();
}

class VungTau implements khudulich
{
    public function lichtrinh()
    {
        echo 'Lich trinh di Vung Tau';
    }
}

class Dalat implements khudulich
{
    public function lichtrinh()
    {
        echo 'Lich trinh di Da Lat';
    }
}

class Nhatrang implements khudulich
{
    public function lichtrinh()
    {
        echo 'Lich trinh di Nha Trang';
    }
}

class Nghile
{
    public $picnic;
    public function setPicnic(khudulich $dipic)
    {
        $this->picnic = $dipic;
    }
    public function getPicnic()
    {
        return $this->picnic;
    }
}

$dalat = new Dalat();
$nghiLe = new Nghile();
$nghiLe->setPicnic($dalat);
$nghiLe->getPicnic()->lichtrinh();
echo '<hr/>';

$nhatrang = new Nhatrang();
$nghiLe = new Nghile();
$nghiLe->setPicnic($nhatrang);
$nghiLe->getPicnic()->lichtrinh();