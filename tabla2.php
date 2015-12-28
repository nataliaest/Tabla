<?php

echo "<html>";
echo "<table border='1'>";

$valores = array(1,2,3,4);

foreach ($valores as $dato){
    potencia($dato);
    echo "</tr>";
}

function potencia($valor){
    for ($i=1; $i < 5; $i++){
        echo "<td>" . pow($valor,$i). "</td>";
    }
}

//for ($i=1; $i<5; $i++){
    
//}
?>