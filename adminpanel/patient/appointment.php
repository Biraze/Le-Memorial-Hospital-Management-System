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
    <link rel="stylesheet" href="../patient/patientstyle.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>View Patients</title>

</head>

<body>
 <div id="view-patient-header">
        <h1>VIEW PATIENTS</h1>
 </div>
</body>
</html>
<?php
        $result = mysqli_query($conn,"select * from patientreg ");
        echo "<table>
            <style>
                table{
                    font-family: Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                    margin-top: 30px;
                    margin-left: auto;
                    margin-right: auto;
                }

                td,th {
                    border: 3px solid #ddd;
                    padding: 8px;
                }

                th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: center;
                    background-color: #78d66bc2;
                    color: white;
                }

                tr { 
                    text-align:center}
                tr:nth-child(even){
                    background-color: rgba(255, 255, 255, 0.356);}
                tr:hover {
                    background-color: #ddd;}

        </style>

        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>GENTER</th>
            <th>BLOOD GROUP</th>
            <th>ADDRESS</th>
            <th>CONTACT</th>
            <th>DATE OF ADMISSION</th>
            <th>DOCTOR IN CHARGE</th>
            <th>OPERATION</th>
        </tr>";

        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['sex'] . "</td>";
            echo "<td>" . $row['bloodgroup'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['contactno'] . "</td>";
            echo "<td>" . $row['dateofad'] . "</td>";
            echo "<td>" . $row['doctor'] . "</td>";
            echo "<td> <a href='editpatient.php?id=$row[id]'>Edit<br></td>";
            echo "</tr>";
        }
    echo "</table>";

    mysqli_close($conn);
?>
