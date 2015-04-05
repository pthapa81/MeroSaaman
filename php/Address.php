<?php

	class Address{

	public $line1NumberBuilding;
	public $line2NumberStreet;
	public $line3AreaLocality;
	public $city;
	public $zipPostcode;
	public $stateProvinceCounty;
	public $country;

	public function printValues(){
		echo $this->line1NumberBuilding . "<br />";
		echo $this->line2NumberStreet . "<br />";
		echo $this->line3AreaLocality . "<br />";
		echo $this->city . "<br />";
		echo $this->zipPostcode . "<br />";
		echo $this->stateProvinceCounty . "<br />";
		echo $this->country . "<br />";

	}

}

?>