<?php

  $student = array(
      "voornaam"=>"Jan",
      "achternaam"=>"Janssen",
      "klas"=>"9A",
      "leeftijd"=>17,
      "woonplaats"=>"Amstelveen"
  );

foreach($student as $key => $value){
    echo "$key = $value<br>";
}
?>