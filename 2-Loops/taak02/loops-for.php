<?php
$x = 0;

echo "<ul>";

for ($x = 0; $x <= 18; $x++){
    if ($x == 18){
        echo "<li>Ik ben $x jaar oud, dus ik heb stemrecht!</li>"; 
        break;
    }
    echo "<li>ik ben $x jaar, dus ik mag nog niet stemmen</li>";
}


echo "</ul>";
?>