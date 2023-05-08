<?php
    session_start();
    include ('../../DBconnection.php');
   ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="staff.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <title>Staff</title>
    </head>

    <body>

    <input class="button" type="button" value="Exit" onclick="location.href='../indexAdmin.php'" style="float: right;">

    <?php
        //one
        $result = mysqli_query($conn,"select * from staff");
        echo "<table>

        <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Shift</th>
            <th>Operation</th>
        </tr>";

        $row=null;
        while($row = mysqli_fetch_array($result))
        {
            $e = "Remove";
            $f="+Add";
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['department'] . "</td>";
            echo "<td contenteditable='true'>" . $row['shift'] . "</td>";
            echo "<td> <a href='edit.php?edit=$row[name]'>Edit<br></td>";
            echo "</tr>";
        }
        echo "</table>";

    ?>
    <input class="button" type="button" value="Add +" onclick="location.href='insertstaff.php'" style="float: left;">

    </body>
        