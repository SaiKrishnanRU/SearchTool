<?php

class Result {
  function getResult($row) {
    $this->row = $row;
    if (count($row) > 1) {
      foreach ($row as $value => $detail) {
        echo "<hr style='height:2px;border-width:0.5;color:gray;background-color:lightcyan'><br>";
        echo "$value  =  $detail";
        echo '<br><br>';
      }
    }else
      echo 'NO VEHICLES FOUND FOR THE PROVIDED VIN';
  }
}
