<?php 

$fila = 1;
define("TAM", 10);
define("COLOR_IMPAR", "#FFFFFF");
define("COLOR_PAR", "#CCCCCC");

echo "<html>";
echo "<table border='1'>";
echo "<tr bgcolor=".COLOR_IMPAR.">";


for ($i=1; $i<101; $i++){
    echo "<td>" . $i. "</td>";
    if ($i % TAM === 0){
        if ($fila % 2 === 0){
            echo "</tr><tr bgcolor=".COLOR_IMPAR.">";
        }else{
            echo "</tr><tr bgcolor=".COLOR_PAR.">";
        }
        $fila++;
    }
}
    
echo "</tr>";
echo "</table>";
echo "</html>";

?>