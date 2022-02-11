<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$persoon = array(
    "voornaam"=>"Willem Alexander" ,
    "achternaam"=>" van oranje",
    "leeftijd"=>" 53",
    "opleiding"=>" Software ontwikkeling"
);
echo $persoon ["voornaam"]. $persoon ["achternaam"]. " is". $persoon ["leeftijd"]. " jaar oud en is student aan het ROC van Amsterdam aan de opleiding". $persoon ["opleiding"];
?>


</body>
</html>
