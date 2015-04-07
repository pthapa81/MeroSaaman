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


}

?>