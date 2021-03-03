<?php
$dong = 10;
$cot =9;
echo "<table border='1'>";
for($i=1;$i<=$dong; $i++)
{
    echo "<tr>";
    for($j=2;$j<=$cot;$j++)
        echo "<td>  $j x $i =". $j*$i ."</td>";

    echo "</tr>";
}
echo "</table>";


?>