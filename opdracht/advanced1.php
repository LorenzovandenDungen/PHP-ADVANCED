<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="invoer" action="advanced2.php" method="post"><br/>
    Tabelranddikte (px): <input type="text" name="tabelrand" id="tabelrand"><br>
    Celpadding (px): <input type="text" name="celpadding" id="celpadding"><br>
    Achtergrondkleur: <select name="achtergrondkleur" id="achtergrondkleur">

    <?php  
    $kleuren = array("red", "blue", "green", "black", "brown");
    foreach ($kleuren as $achtergrond){
        echo "<option value='$achtergrond'>$achtergrond</option>";
    }
    ?>
    </select><br>
    <input type="submit" value="verstuur">

    
</body>
</html>