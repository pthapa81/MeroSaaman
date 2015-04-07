<?php

function __autoload($class_name) {
	include $class_name . '.php';
}

/**
 * A ProductRequest Class
 *
 * ProductRequest is issued by a user or a buyer
 * 
 * A user || buyer may have multiple product requests
 * A user may have a pending product request without 
 * A user may have a product request that has been matched with a carrier
 * A product Request when created will last for 24 hours if any carriers have expressed
 * interest for the request. 
 * Product request timestamp will be tracked and once created will be place in the bid pool so that carriers can express their interest to take the product with them
 *
 *
 *
 * @author Prashant Thapa <prashant.thapa@bison.howard.edu>
 * @copyright 2015 MeroSaaman
 * 
 */


class ProductRequest{

	/**
	 * Private variable for Product Request Logistic Info
	 * @var productLink string stores the ecommerce url of the product, is provided by the user
	 * @var preferredDate Date value is the desired date that the requester wants the product to be delivered (It is a tentative date)
	 *
	 * Private variable for Product Request score metrics for the carrier ranking algorithm
	 * @var desiredSpeedScore fractional value that determines the weight or the importance of the Speed of delivery for the buyer
	 * @var desiredQualityScore is similar to desiredSpeedScore for quality of the service provided by the carrier
	 * @var desiredTrustScore is similar to desiredQualityScore, but to determine the reliability factor of a carrier
	 *
	 * Private variable for identifying Product Request's buyer and matched carrier
	 * @var buyerId string the userId of the user who added the request
	 * @var carrierId with the matched carrier (the best possible carrier's Id)
   	 */

	private $productLink;
	private $requestDate;

	private $desiredSpeedScore;
	private $desiredQualityScore;
	private $desiredTrustScore;
	
	private $buyerId;
	private $carrierId;


  /**
   * Sets User Class attributes to $newValue
   *
   * @param string||int $newvalue a value required for the class
   * @return void
   */

	public function setproductLink($newvalue){
		$this->productLink = $newvalue;
	}

	public function setrequestDate($newvalue){
		$this->requestDate = $newvalue;
	}

	public function setdesiredSpeedScore($newvalue){
		$this->desiredSpeedScore = $newvalue;
	}

	public function setdesiredQualityScore($newvalue){
		$this->desiredQualityScore = $newvalue;
	}

	public function setdesiredTrustScore($newvalue){
		$this->desiredTrustScore = $newvalue;
	}

	public function setbuyerId($newvalue){
		$this->buyerId = $newvalue;
	}

	public function setcarrierId($newvalue){
		$this->carrierId = $newvalue;
	}

	/* Function to convert the buyers preferred scores to a fractional weight value
		in order to use for the carrier ranking algorithm      */

	public function setWeightValues($dSScore, $dQScore, $dTScore){
		$total = $dSScore + $dQScore + $dTScore;
		$dSScore = $dSScore/$total;
		$dQScore = $dQScore/$total;
		$dTScore = $dTScore/$total;

		$this->setdesiredSpeedScore($dSScore);
		$this->setdesiredQualityScore($dQScore);
		$this->setdesiredTrustScore($dTScore);

	}


	/**
   * Returns the Product Request's attribute Class attributes to $newValue
   *
   * @param string||int $newvalue a value required for the class
   * @return the attribute
   */
	public function getproductLink(){
		return $this->productLink;
	}

	public function getrequestDate(){
		return $this->requestDate;
	}

	public function getdesiredSpeedScore(){
		return $this->desiredSpeedScore;
	}

	public function getdesiredQualityScore(){
		return $this->desiredQualityScore;
	}

	public function getdesiredTrustScore(){
		return $this->desiredTrustScore;
	}

	public function getbuyerId(){
		return $this->buyerId;
	}

	public function getcarrierId(){
		return $this->carrierId;
	}

}

	/*
	$sampleRequest = new ProductRequest;

	$sampleRequest->setproductLink("Ipad 4");
	$sampleRequest->setbuyerId("100");
	$sampleRequest->setcarrierId("200");
	$sampleRequest->setWeightValues(3,4,5);

	var_dump($sampleRequest);
	*/


?>