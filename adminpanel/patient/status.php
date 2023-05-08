<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../patient/patientstyle.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Status</title>

</head>

<body>
    <form action='status.php' method='post'>
    <h1>Status</h1>
    <p>
        <label>ID</label>
        <input type='text' name='id' placeholder="Patientfirstletter,year,formno eg:N20201">
        <input class="button" type="submit" name='submit' value="SUBMIT">
        <input class="button" type="button" value="Exit" onclick="location.href='patientmenu.php'" style="float: right;">
    </p>
    </form>
</body>

</html>

<?php
    session_start();
    include ('../../DBconnection.php');
  
    if(isset($_POST['submit'])) {
            $i=$_POST['id'];
            $test = mysqli_query($conn,"select id from patientreg where id='$i'");
            $r0 = mysqli_fetch_row($test); 

        if(!empty($r0)) {	
                $result1 = mysqli_query($conn,"select * from patientreg where id='$i'");
                    echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <table class='table1'>
                    <tr>
                        <th>ID</th>
                        <th>NAME </th>
                        <th>AGE </th>
                        <th>GENDER </th>
                        <th>BLOOD GROUP </th>
                        <th>ADDRESS </th>
                        <th>CONTACT NO: </th>
                        <th>DATE OF ADMISSION </th>
                        <th>DOCTOR </th>
                    </tr>";
                    
                    while($row = mysqli_fetch_array($result1)) {
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
                        echo "</tr>";
                    }
                    echo "</table>";
                    
                        $result = mysqli_query($conn,"select department,indate,outdate,count,rate from deletetable where id='$i'");
                                
                            echo"<table class='table2'>
                            <tr>
                                <th>DEPARTMENT</th>
                                <th>INDATE</th>
                                <th>OUTDATE</th>
                                <th>DAYS</th>
                                <th>RATE</th>
                            </tr>";
                            
                            while($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['department'] . "</td>";
                                echo "<td>" .$row['indate']. "</td>";
                                echo "<td>" .$row['outdate']. "</td>";
                                echo "<td>" . $row['count'] . "</td>";
                                echo "<td>" . $row['rate'] . "</td>";
                                echo "</tr>";
                            }
                     echo "</table>";                                                   
                    
        }
        else	
            {echo '<script>alert("ID not registered")</script>';}
                
    }
?>