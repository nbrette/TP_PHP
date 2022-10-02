<?php
require_once('PlaybaleCharacter.php');
class Magician extends PlayableCharacter{
    private $power;

    public function __construct($id,  $name, $strength, $agility, $intelligence, $class)
    {
        parent::__construct($id,  $name, $strength, $agility, $intelligence, $class);
        $this->power = (($this->agility + $this->intelligence)/1.75);
    }

    public function getPower(){
        return $this->power;
    }

}

?>