<?php
class Character
{
    public $name ;
    public $atk;
    public $rank;
    public function __construct($name, $atk)
    {
        $this->name = $name;
        $this->atk = $atk;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAtk()
    {
        return $this->atk;
    }

    public function getRank()
    {
        return $this->rank;
    }
}
class WarriorCharacter extends Character
{
    public $rank = 'Warrior';

}

class BishopCharacter extends Character
{
    public $rank = 'Bishop';
}

class CharacterBuilder
{
    public $character;
    public function register($name, $atk, $rank)
    {
        $this->character = CharacterFactory::create($name, $atk, $rank);
    }

    public function getCharacter()
    {
        return $this->character;
    }
}

class CharacterFactory
{
    public static function create($name, $atk, $rank)
    {
        $rankClass = $rank . 'Character';
        if (class_exists($rankClass)) {
           return new $rankClass($name, $atk);
        } else {
            die('Class is not exist');
        }
    }
}

//$warrior = new WarriorCharacter('Jackie', 90);
$character = new CharacterBuilder();
$character->register('Jackie', '90', 'Bishop');
echo 'Name : ' . $character->getCharacter()->getName() . '<br/>';
echo 'Atk : ' . $character->getCharacter()->getAtk() . '<br/>';
echo 'Rank : ' . $character->getCharacter()->getRank() . '<br/>';
echo '<hr/>';