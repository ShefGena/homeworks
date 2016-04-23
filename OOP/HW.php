<?php
class Car
{
	public $name;
	//public $color;
	public $speed;
	public $dvizok;
	public $time_0_to_100;
	public function drive(){
		echo "Na $this->name ustanovlen $this->dvizok dvizok, razgon ot 0 do 100 km/h za $this->time_0_to_100 <br>";
	}
}

class Jiguli extends  Car{
	public $name = "VAZ2101";
	public $color = "RED-DEVIL";
	public $speed = "140";
	public $dvizok = "standartnyi";
	public $time_0_to_100 = "23 sec.";
}

class Ferrari extends  Car{
	public $name = "Ferrari 550 Maranello";
	public $color = "RED-DEVIL";
	public $speed = "340";
	public $dvizok = "prodvinutyi";
	public $time_0_to_100 = "3 sec.";
}

$vaz = new Jiguli;
$maranello = new Ferrari;
$vaz->drive();
$maranello->drive();


?>