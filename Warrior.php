<?php
require_once('PlaybaleCharacter.php');
class Warrior extends PlayableCharacter{
    private $tribe;

    public function __construct($id,  $name, $strength, $agility, $intelligence, $tribe, $class)
    {
        parent::__construct($id,  $name, $strength, $agility, $intelligence, $tribe, $class);
        $this->tribe = $tribe;
    }

    public function setStrength($strength){
        if ($strength > $this->strength){
            $this->strength = $strength;
        }
    }
}

?>