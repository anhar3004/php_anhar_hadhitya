<?php

$jml = $_GET['jml'];
$total = 0;
echo "<table border=1>";
for ($a = $jml; $a > 0; $a--)
{   
    for ($b = $a; $b > 0; $b--)
    {
        $total = $total + $b;
    }

    echo "<thead>";
        echo "<tr>";
            echo "<th colspan= $jml >";
                echo "Total : $total ";
            echo "</th>";
        echo "</tr>";
    echo "</thead>";
   
    echo "<tbody>";
        echo "<tr>";
            for ($b = $a; $b > 0; $b--)
            { 
                 echo "<td>$b</td>";
            }
        echo "</tr>";
    echo "</tbody>";

    $total = 0;  
}
echo "</table>";
?>