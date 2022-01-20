<?php
$x = 0;

echo "<ul>";

for ($x = 0; $x <= 17; $x++){
    echo "<li>ik ben $x jaar, dus ik mag nog niet stemmen</li>";
}

if($x = 18){
    echo "<li>Ik ben $x jaar oud, dus ik heb stemrecht!</li>";
}

echo "</ul>";
?>