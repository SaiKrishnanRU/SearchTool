<?php

class VehicleData {
  function searchDetail($num,$db,$table) {
    $this->num = $num;
    $this->db = $db;
    $this->table = $table;
    $sth = $db->prepare("SELECT * FROM $table WHERE VinNumber = :vinNum" );
    $sth->bindParam(':vinNum', $num, PDO::PARAM_STR);
    $sth->execute();
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    return $row;
  }
}
