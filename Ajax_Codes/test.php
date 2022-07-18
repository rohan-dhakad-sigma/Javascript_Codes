<?php
    $name = $_POST['Fname']." ".$_POST['Lname'];
    $address = $_POST['address'];
    $company = $_POST['company'];

    echo "<br>";
    $html = "";
    $html.= "<table border='1'>";
        $html.= "<tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Company</th>
                </tr>";

    $html.= "<tr><td>".$name."</td>";
    $html.= "<td>".$address."</td>";
    $html.= "<td>".$company."</td></tr>";
    $html.= "</table>";
    echo $html;
    exit;
?>