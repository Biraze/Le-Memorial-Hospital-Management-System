<?php
    session_start();
    include ('../../DBconnection.php');
   
    if(isset($_POST['submit']))
    {
        $i=$_POST['id'];
        $date=$_POST['dateofad'];
        $r=$_POST['room'];
        $test = mysqli_query($conn,"select id from patientreg where id='$i'");
        $r0 = mysqli_fetch_row($test);
        $check1=mysqli_query($conn,"select id from casualty where id='$i'");			
        $check2=mysqli_query($conn,"select id from icu where id='$i'");
        $check3=mysqli_query($conn,"select id from general where id='$i'");
        $check4=mysqli_query($conn,"select id from vip where id='$i'");

        if(!empty($r0))
        {	
            $r1 = mysqli_fetch_row($check1);
            $r2 = mysqli_fetch_row($check2);
            $r3 = mysqli_fetch_row($check3);
            $r4 = mysqli_fetch_row($check4);
            if(!empty($r1))
                    {echo '<script>alert("Already Exist in casualty")</script>';}
            elseif(!empty($r2))
                    {echo '<script>alert("Already Exist in icu")</script>';}
            elseif(!empty($r3))
                    {echo '<script>alert("Already Exist in generalroom")</script>';}
            elseif(!empty($r4))
                    {echo '<script>alert("Already Exist in vip")</script>';}
            else{
                        //
                            $ck=mysqli_query($conn,"select roomno from wroom where roomno='$r'");
                            $r5 = mysqli_fetch_row($ck);
                            if(empty($r5)&&(mysqli_query($conn,"select roomno1,section from totalroom where roomno1='$r' and section='ICU BED'")))
                            {
                                $rm="insert into wroom(id,roomno)values('$i','$r')";
                                if(mysqli_query($conn,$rm))
                                {
                                    $sql="insert into ward(id,date)values('$i','$date')";
                                    if(mysqli_query($conn,$sql))
                                    {
                                        echo '<script>alert("Successful")</script>';
                                    }
                                    else
                                    {
                                        $s="select id from ward where id='$i'";
                                        if(mysqli_query($conn,$s))
                                        {echo '<script>alert("Already Exist")</script>';}
                                    }
                                
                                }
                            }
                            else
                            {
                            echo '<script>alert("Room is not available")</script>';
                            }
                    }
                
        }
        else	
        {echo '<script>alert("ID not registered")</script>';}
            
    }

    if(isset($_POST['delete']))
    {
            $i=$_POST['id'];
            $date=$_POST['dateofad'];
            $dep='WARD';
            $test = mysqli_query($conn,"select id from patientreg where id='$i'");
            $test1 = mysqli_query($conn,"select id from ward where id='$i'");
            $r0 = mysqli_fetch_row($test);
            $r1=mysqli_fetch_row($test1);

            if(!empty($r0))
            {	
                if(!empty($r1))
                {
                $getinfo = "select date from ward where id='$i'";
                $query = mysqli_query($conn,$getinfo);

                    while ($row = mysqli_fetch_array($query)) 
                    {
                        $re = $row['date'];
                    }
                    $date1 = $re;
                    $date2 = $date; 
                    $diff = abs(strtotime($date2) - strtotime($date1)); 
                    $years   = floor($diff / (365*60*60*24)); 
                    $months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
                    $days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                    $rate=$days*300;
                    $s="insert into deletetable(id,indate,outdate,department,count,rate)values('$i','$re','$date','$dep',$days,$rate)";
                    if(mysqli_query($conn,$s))
                    {
                        mysqli_query($conn,"delete from wroom where id='$i'");
                        
                        if(mysqli_query($conn,"delete from ward where id='$i'"))
                        {
                            {echo '<script>alert("Successful")</script>';}
                        }
                        else{echo '<script>alert("Not deleted")</script>';}					
                    }
                    else
                    {echo '<script>alert("Something went wrong")</script>';}
                }			
                else{echo '<script>alert("ID not found")</script>';}
                
            }
        else	
            {echo '<script>alert("ID not registered")</script>';}
                
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../patient/patientstyle.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <title>WARD</title>
    </head>

    <body>
        <input class="button" type="button" value="Exit" onclick="location.href='patientmenu.php'" style="float: right;">
        <form action='ward.php' method='post'>
        <h1>Ward Registration Form</h1>
            <p>
            <label>ID</label>
            <input type='text' name='id' placeholder="Patientfirstletter,year,formno eg:N20201">
            <label>Date of Admission:</label>
            <input type="date"  name="dateofad">
            <label>Room/Bed NO:</label>
            <input type="number"  name="room"><br>
            <input class="button" type="submit" name='submit' value="SUBMIT">
            </p>
        </form>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <form action='ward.php' method='post'>
        <br><h2 id="ward-discharge">Discharging</h2>
            <p>
            <label>ID</label>
            <input type='text' name='id' placeholder="Patientfirstletter,year,formno eg:N20201">
            <label>Date of Discharge:</label>
            <input type="date"  name="dateofad"><br>
            <input class="button" type="submit" name="delete" value="DELETE">
            </p>
        </form>

            <form action='ward.php' method='post'>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div id="ward-btns">
            <input class="button" type="submit" name='view' value="VIEW">
            <input class="button" type="submit" name='hide' value="CHECK AVAILABLE ROOM">
            </div>
        </form>

    </body>
</html>
<?php
if(isset($_POST['view']))
{
	$result = mysqli_query($conn,"select patientreg.id,patientreg.name,wroom.roomno from patientreg join ward on patientreg.id=ward.id join wroom on ward.id=wroom.id");

	echo"<table>

    <tr>
        <th>ID</th>
        <th>ROOM/BED NO</th>
        <th>NAME OF PATIENT</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" .$row['id']. "</td>";
        echo "<td>" .$row['roomno']. "</td>";
        echo "<td class='b'>" . $row['name'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";


    }
    if(isset($_POST['hide']))
    {
        $result = mysqli_query($conn,"SELECT * FROM `totalroom` WHERE roomno1 not in(SELECT roomno FROM wroom) AND section='WARD BED'");

        echo"<table>

    <tr>
        <th>ROOM NO</th>
        <th>SECTION</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td class='b'>" .$row['roomno1']. "</td>";
        echo "<td>" . $row['section'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";


    }
?>
