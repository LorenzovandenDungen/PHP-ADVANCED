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
       echo "Mijn favoriete artiest heet ". $_GET["artiest"]. "Mijn favoriete lied is ".$_GET["titel"]. "Jaar van uitkomst is ".$_GET["jaarvanuitkomst"]. "en muzieksoort is ". $_GET["muzieksoort"];
       //http://localhost/phptest/mijnmuziek.php?artiest=Burna%20boy&titel=On%20The%20Low&uitkomst=2019&muzieksoort=pop
    ?>


    
</body>
</html>