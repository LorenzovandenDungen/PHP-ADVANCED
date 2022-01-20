<?php
$leeftijd = 0;

echo '<ul>';

while($leeftijd < 18){
    echo "<li> Ik ben: $leeftijd jaar, dus ik mag nog niet stemmen </li>";
    $leeftijd++;
}


if($leeftijd = 18){
    echo "<li> ik ben: $leeftijd jaar, dus ik mag stemmen! </li>";
}

echo '</ul>';

?>