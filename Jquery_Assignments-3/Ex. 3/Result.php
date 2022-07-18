<?php

$conn = new mysqli("localhost","admin","admin","Table_records");

// Check Connection
if ($conn->connect_error)
{
    die("Connection failed: " .$conn->connect_error);
}

echo "connected successfully";
echo "</br> </br>";

$sql = "SELECT * FROM Students ORDER BY `Id`";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $html="";
    $html.= "<table border='1'>";
    $html.= "<tr>
                <th>Id</th>
                <th>Name</th>
                <th>City</th>
             </tr>";

    // output data of each row
    while($row = $result->fetch_assoc())
    {
        $html.= "<tr><td>". $row["Id"] ."</td>";
        $html.= "<td>". $row["Name"] ."</td>";
        $html.= "<td>". $row["City"] ."</td>";
    }
    $html.= "</tr> </table>";
    echo $html;
} else
{
    echo "0 results";
}

?>