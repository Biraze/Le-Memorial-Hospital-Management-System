<?php
    session_start();
    include ('../../DBconnection.php');
    if(isset($_POST['submit']))
    {
        $i=$_POST['id'];
        $test = mysqli_query($conn,"select id from patientreg where id='$i'");
        $r0 = mysqli_fetch_row($test);
        $check5=mysqli_query($conn,"select id from icu where id='$i'");
        $check1=mysqli_query($conn,"select id from casualty where id='$i'");			
        $check2=mysqli_query($conn,"select id from ward where id='$i'");
        $check3=mysqli_query($conn,"select id from general where id='$i'");
        $check4=mysqli_query($conn,"select id from vip where id='$i'");    
        if(!empty($r0))
            {	
                $r1 = mysqli_fetch_row($check1);
                $r2 = mysqli_fetch_row($check2);
                $r3 = mysqli_fetch_row($check3);
                $r4 = mysqli_fetch_row($check4);
                $r5 = mysqli_fetch_row($check5);
                if(!empty($r1))
                        {echo '<script>alert("Already Exist in casualty")</script>';}
                elseif(!empty($r2))
                        {echo '<script>alert("Already Exist in ward")</script>';}
                elseif(!empty($r3))
                        {echo '<script>alert("Already Exist in generalroom")</script>';}
                elseif(!empty($r4))
                        {echo '<script>alert("Already Exist in vip")</script>';}
                elseif(!empty($r5))
                        {echo '<script>alert("Already Exist in ICU")</script>';}        
                else{
                if(mysqli_query($conn,"insert into bigreg select *from patientreg where id='$i'"))
                    {
                    $result1 = mysqli_query($conn,"select * from bigreg where id='$i'");
                    echo"<table class='table1'>
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
                    
                    while($row = mysqli_fetch_array($result1))
                    {
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
                        
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td>" . $row['department'] . "</td>";
                            echo "<td>" .$row['indate']. "</td>";
                            echo "<td>" .$row['outdate']. "</td>";
                            echo "<td>" . $row['count'] . "</td>";
                            echo "<td>" . $row['rate'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        mysqli_query($conn,"delete from patientreg where id='$i'");
                            
                            }					
                          else{echo '<script>
                                        alert("Encounter problem in displaying patient status")
                                    </script>';}					
                    
                }
            }
        else {
            echo '<script>
                    alert("ID not registered")
                  </script>';
            }
                
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="billing.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">

    </head>

    <body>
       
    </body>
</html>