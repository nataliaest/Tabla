<?php 
echo "<html>";
echo "<table border='1'>";
echo "<tr>";
for ($i=1; $i<101; $i++){
    echo "<td>" . $i. "</td>";
    if ($i % 10 === 0){
        echo "</tr><tr>";
    }
}
    
echo "</tr>";
echo "</table>";
echo "</html>";

?>