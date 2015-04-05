<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

$buyer = new User;
$buyer->setfirstName("Prashant");

$carrier = new User;
$carrier->setfirstName("Nischal");

echo $buyer->getfirstName();
echo "<br/>";
echo $carrier->getfirstName();
echo "<br/>";


?>