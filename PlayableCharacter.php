
<?php
class PlayableCharacter{
    private $id;
    protected $name;
	protected $strength;
    protected $agility;
    protected $intelligence;
    protected $class;




 
	function __construct($id,  $name, $strength, $agility, $intelligence, $class ) {
        $this->id = $id;
		$this->name = $name;
		$this->strength = $strength;
        $this->agility = $agility;
        $this->intelligence = $intelligence;
        $this->class = $class;
	}

    function getId() {
		return $this->id;
	}
    function getName() {
		return $this->name;
	}

    function getSTrength() {
		return $this->strength;
	}
    function getAgility() {
		return $this->agility;
	}
    function getIntelligence() {
		return $this->intelligence;
	}
    function getclass() {
		return $this->class;
	}
}

?>