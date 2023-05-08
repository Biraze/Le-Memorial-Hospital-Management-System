<?php
    include ('../../DBconnection.php');
    session_start();
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../patient/patientstyle.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Patient Menu</title>

 
</head>

<body>

    <h1>PATIENT MANAGEMENT</h1><br>

    <div>
        <input class="button" type="button" value="Exit" onclick="location.href='../index.php'" style="float: right;">
        
        <table>
            <tr>
                <td><h3>Patient Registration</td>
                <td><a href="insertpatient.php">Register</a></td>
            </tr>
            <tr>
                <td><h3>View Registration<h3></td>
                <td><a href="viewpatient.php">View Registration</a></td>
            </tr>
            <tr>
                <td><h3>View Status</td>
                <td><a href="status.php">View status</a></td>
            </tr>
            <tr>
                <td><h3>ICU Management</td>
                <td><a href="icu.php">Admit</a></td>
            </tr>
            <tr>
                <td><h3>Casualty Management</td>
                <td><a href="casualty.php">Admit</a></td>
            </tr>
            <tr>
                <td><h3>Ward Management</td>
                <td><a href="ward.php">Admit</a></td>
            </tr>
            <tr>
                <td><h3>General Room Management</td>
                <td><a href="generalroom.php">Admit</a></td>
            </tr>
            <tr>
                <td><h3>Vip Room Management</td>
                <td><a href="viproom.php">Admit</a></td>
            </tr>
        </table>
    </div>
    
</body>

</html>