<?php
$leeftijd = 0;

echo '<ul>';

while($leeftijd <= 18){
    if($leeftijd == 18){
        echo "<li> ik ben: $leeftijd jaar, dus ik mag stemmen! </li>";
        break;
    }
    echo "<li> Ik ben: $leeftijd jaar, dus ik mag nog niet stemmen </li>";
    $leeftijd++;
}

echo '</ul>';

?>