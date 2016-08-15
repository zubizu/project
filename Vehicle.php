<?php 

class Vehicle {
	public $speed = "";
	public $wheel = " 4";
	

}

class Auto extends Vehicle {
	
	public $country = "";

		public function __construct($country)
	 {
		$this->country = $country;
	 }


	public function drive() 
		{
			echo "drive " .$this->speed;
		}
	}
class Nissan extends Auto {
	public $speed = 210;
	

	public function drive() 
		{
			echo "drive with a speed of " .$this->speed;
		}
	
	}


class Ford extends Auto 
{
	public $speed = 240;
}

class Mersedes extends Auto 
{
	public $speed = 250;
}

class Audi extends Auto {
	public $speed = 220;
}



class Plane extends Vehicle {

	public $speed = 500;
	public $wheel = 2;
	public $wings = 2;
	public $seat = "";
	public function fly() {
		echo "fly with a speed of " .$this->speed;

	}
}

class Boeing extends Plane {
	public $speed = 550; 
	
	public $seat = 250;
} 

class Airbus extends Plane {
	public $speed =  510;
	
	public $seat = 300;
} 


class Dornier extends Plane {
	
	public $seat = 150;
} 

class Superjet extends Plane {
	public $seat = 200;
	public $speed = 450; 
	
} 


class Ship extends Vehicle {
	public $speed = 100;
	public $wheel = " 0";
	public $name = "";
	public function swim() {
		echo "swim with a speed of " .$this->speed;
	}
}

class Cruiser extends Ship {
	public $speed = 0;
	public $name = "Avrora";

}

class Icebreaker extends Ship {
	
	public $speed = 120;
	public $name = "Krasin";
}
class Yacht extends Ship {
	public $speed = 220;
	public $name = "Victor";

}
class  Barge extends Ship {
	public $speed = 90;
	public $name = "noname";

}

$nissan = new Nissan(" Japan");
$mersedes = new Mersedes(" Germany");
$ford = new Ford(" USA ");
$audi = new Audi(" Germany");

$boeing = new Boeing;
$airbus = new Airbus;
$dornier = new Dornier;
$superjet = new Superjet;

$cruiser = new Cruiser;
$barge = new Barge;
$icebreaker = new Icebreaker;
$yacht = new Yacht;

echo "Nissan" . $nissan->country . " car"; echo "<br/>";
echo "Nissan" . $nissan->wheel  . " wheels "; $nissan->drive(); echo"<br/>";

echo "Mersedes" . $mersedes->country . " car"; echo "<br/>";
echo "Mersedes" . $mersedes->wheel  . " wheels "; $mersedes->drive(); echo"<br/>";

echo "Ford" . $ford->country . " car"; echo "<br/>";
echo "Ford" . $ford->wheel  . " wheels "; $ford->drive(); echo"<br/>";

echo "Audi" . $audi->country . " car"; echo "<br/>";
echo "Audi" . $audi->wheel  . " wheels "; $audi->drive(); echo"<br/>"; echo"<br/>";



echo "Boeing " . $boeing->wheel . " wheels " . $boeing->wings . " wings"; echo"<br/>";
echo "Boeing "  .$boeing->seat .  " passengers "; $boeing->fly(); echo"<br/>";

echo "Airbus " . $airbus->wheel . " wheels " . $airbus->wings . " wings"; echo"<br/>";
echo "Airbus "  .$airbus->seat .  " passengers "; $airbus->fly(); echo"<br/>";

echo "Dornier " . $dornier->wheel . " wheels " . $dornier->wings . " wings"; echo"<br/>";
echo "Dornier "  .$dornier->seat .  " passengers "; $dornier->fly(); echo"<br/>";

echo "Superjet " . $superjet->wheel . " wheels " . $superjet->wings . " wings"; echo"<br/>";
echo "Superjet "  .$superjet->seat .  " passengers "; $superjet->fly(); echo"<br/>";echo"<br/>";


echo "Cruiser " . $cruiser->name . $cruiser->wheel. "  wheels, no wheels " ; echo"<br/>";
echo "Cruiser " . $cruiser->name . " very slow "; $cruiser->swim();   echo"<br/>";

echo "Icebreaker " . $icebreaker->name . $icebreaker->wheel. "  wheels, no wheels " ; echo"<br/>";
echo "Icebreaker " . $icebreaker->name . " very slow "; $icebreaker->swim();   echo"<br/>";

echo "Yacht " . $yacht->name . $yacht->wheel. "  wheels, no wheels " ; echo"<br/>";
echo "Yacht " . $yacht->name . " very slow "; $yacht->swim();   echo"<br/>";

echo "Barge " . $barge->name . $barge->wheel. "  wheels, no wheels " ; echo"<br/>";
echo "Barge " . $barge->name . " very slow "; $barge->swim();   echo"<br/>";