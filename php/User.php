<?php

function __autoload($class_name) {
    include $class_name . '.php';
}

/**
 * A User Class
 *
 * User can be a buyer or a carrier. User may have multiple addresses
 * User can add a request
 * User can add their travel info if interested to participate in the service as a carrier
 * User can bid for product Requests of other various buyers
 *
 *
 * User basic info's gets  stored in the User table of MeroSaaman Database
 * Address info populates the userAddress Table of MeroSaaman
 *
 *
 * @author Prashant Thapa <prashant.thapa@bison.howard.edu>
 * @copyright 2015 MeroSaaman
 * 
 */


class User{

	/**
	 * Private variable for User's Basic Info
	 * @var fuId string stores facebook id of the user in session
	 * @var firstName string stores the firstname of the user
	 * @var lastName string stores the lastname of the user
	 * @var ratingScore int stores the current rating of the user
	 * @var cellPhone string stores the cellPhone no of the user
	 * @var homePhone string stores the home phone no of the user
	 *
	 *Private variable for User's Address Info 
	 * @var line1NumberBuilding string stores building no of the user 
	 * @var line2NumberStreet string stores the no of the street
	 * @var line3AreaLocality string stores the 
	 * @var city stores the city of the user
	 * @var zipCode string
	 * @var stateProvinceCounty string 
	 * @var country string
   	 */
	private $fuId;
	private $firstName;
	private $lastName;
	private $ratingScore;
	private $cellPhone;
	private $homePhone;

	public $address;

/*
	private $line1NumberBuilding;
	private $line2NumberStreet;
	private $line3AreaLocality;
	private $city;
	private $zipPostcode;
	private $stateProvinceCounty;
	private $country;
*/

	/**
   * Sets User Class attributes to $newValue
   *
   * @param string||int $newvalue a value required for the class
   * @return void
   */

	public function setfuId($newvalue){
		$this->fuId = $newvalue;
	}

	public function setfirstName($newvalue){
		$this->firstName = $newvalue;
	}

	public function setlastName($newvalue){
		$this->lastName = $newvalue;
	}

	public function setratingScore($newvalue){
		$this->ratingScore = $newvalue;
	}

	public function setcellPhone($newvalue){
		$this->cellPhone = $newvalue;
	}

	public function sethomePhone($newvalue){
		$this->homePhone = $newvalue;
	}


/*
	public function setline1NumberBuilding($newvalue){
		$this->line1NumberBuilding = $newvalue;
	}

	public function setline2NumberStreet($newvalue){
		$this->line2NumberStreet= $newvalue;
	}

	public function setline3AreaLocality($newvalue){
		$this->line3AreaLocality = $newvalue;
	}

	public function setcity($newvalue){
		$this->city = $newvalue;
	}

	public function setzipPostCode($newvalue){
		$this->zipPostcode = $newvalue;
	}

	public function setstateProvinceCounty($newvalue){
		$this->stateProvinceCounty = $newvalue;
	}

	public function setcountry($newvalue){
		$this->country = $newvalue;
	}
*/

	/**
   * Sets User Class attributes to $newValue
   *
   * @param string||int $newvalue a value required for the class
   * @return the attribute
   */
	public function getfuId(){
		return $this->fuId;
	}

	public function getfirstName(){
		return $this->firstName;
	}

	public function getlastName(){
		return $this->lastName;
	}

	public function getratingScore(){
		return $this->ratingScore;
	}

	public function getcellPhone(){
		return $this->cellPhone;
	}

	public function gethomePhone(){
		return $this->homePhone;
	}


/*
	public function getline1NumberBuilding(){
		return $this->line1NumberBuilding;
	}

	public function getline2NumberStreet(){
		return $this->line2NumberStreet;
	}

	public function getline3AreaLocality(){
		return $this->line3AreaLocality;
	}

	public function getcity(){
		return $this->city;
	}

	public function getzipPostCode(){
		return $this->zipPostcode;
	}

	public function getstateProvinceCounty(){
		return $this->stateProvinceCounty;
	}

	public function getcountry(){
		return $this->country;
	}
*/
}

?>