<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

$buyer = new User;
$buyer->setfirstName("Prashant");

$carrier = new User;
$carrier->setfirstName("Nischal");

$carrierAddress = new Address;
$carrierAddress->setline1NumberBuilding("744 Girard St");


echo $buyer->getfirstName();
echo "<br/>";
echo $carrier->getfirstName();
echo "<br/>";


?>