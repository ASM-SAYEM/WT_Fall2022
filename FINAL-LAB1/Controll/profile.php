<?php
include("../Model/database.php");
$mydb=new database();
$conObj=$mydb->openCon();
$result=$mydb->showAll($conn,"patient");
if($result->num_rows>0)
{
    echo "<table>";

    foreach($result as $row)
    {
        echo "<tr>FirstNAme<td>" .$row["fname"]. "</tr></td>";
        echo  $row["lname"];
        echo  $row["Fname"];
        echo  $row["Mname"];
        echo  $row["Gender"];
        echo  $row["no"];
        echo  $row["eno"];

    }
    echo "</table>";
}

?>