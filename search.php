<?php

require_once('root.inc.php');
require_once($ROOT . 'vinsearch/vehicledata.php');
require_once($ROOT . 'vinsearch/result.php');

$user = 'sai';
$password = "S@ikrishnan1";
$database = "vehicle_details";
$table = "vehicle_listings";
try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  $num = $_POST['zip'];

  #Getting corresponding details for VIN
  $vehicleObj = new VehicleData();
  $row = $vehicleObj->searchDetail($num,$db,$table);

  #Showing result
  $resultObj = new Result();
  $resultObj->getResult($row);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
  }
