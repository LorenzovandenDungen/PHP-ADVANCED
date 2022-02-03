<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            border: <?php echo $_POST["tabelrand"]?>px solid black;
            padding: <?php echo $_POST["celpadding"]?>px;
            background-color: <?php echo $_POST["achtergrondkleur"]?>;
         }
</head>
<body>
        <?php
            $student = array("naam"=>"Lorenzo", "leeftijd"=>17, "muzieksmaak"=>"rap", "woonplaats"=>"Amstelveen", "sport"=>"kickboksen"); 
         ?>


</body>
</html>