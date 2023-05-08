<?php
    session_start();
    include ('../../DBconnection.php');
   
    if(isset($_POST['submit']))
    {
        $room=$_POST['room'];
        $dept=$_POST['department'];
        $r1 = mysqli_fetch_row(mysqli_query($conn,"select * from totalroom where roomno1=$room"));
        if(!empty($r1))
        {
            echo '<script>alert("Room no already exist")</script>';
        }
        else
        {
            if(mysqli_query($conn,"select * from totalroom where section='$dept'"))
            {
                if(mysqli_query($conn,"insert into totalroom (roomno1,section) values($room,'$dept')"))
                {
                    echo '<script>alert("Successful")</script>';
                    mysqli_close($conn);
                }
                else{echo '<script>alert("Error!! in adding new room")</script>';}
            }
            else
            {echo '<script>alert("No deparment in that name")</script>';}
        }

    }

    if(isset($_POST['search']))
    {
    $data=$_POST['data'];
    $opt=$_POST['option'];
    if($opt=="name")
    {
        $r0 = mysqli_fetch_row(mysqli_query($conn,"select id from patientreg where name='$data'"));
        $r1 = implode(',',$r0);
        if(empty($r1))
            {
                echo '<script>alert("No such patient found")</script>';
            }
            else
            {
            $r2=mysqli_fetch_row(mysqli_query($conn,"select roomno from icuroom where id='$r1' union all select roomno from casroom where id='$r1' union all select roomno from vroom where id='$r1' union all select roomno from groom where id='$r1' union all select roomno from wroom where id='$r1'"));
            $row = implode(',',$r2);
            
            echo '<script type="text/javascript">alert("Room No :' . $row . '")</script>';
            
            }
    }
    else
    {
        $result=mysqli_fetch_row(mysqli_query($conn,"select roomno from icuroom where id='$data' union all select roomno from casroom where id='$data' union all select roomno from vroom where id='$data' union all select roomno from groom where id='$data' union all select roomno from wroom where id='$data'"));
        $row = implode(',',$result);
        echo '<script type="text/javascript">alert("Room No :' . $row . '")</script>';
        
    }

    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="room.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <title>Rooms</title>
    </head>

    <body>
        
        <input class="button" type="button" value="Exit" onclick="location.href='../indexAdmin.php'" style="float: right;">

        <div class="container">
        <form action="room.php" method='post'>
            <h1>Find</h1>
            <label>Search by : </label><br>
            <select name="option">
            <option value="name">NAME</option>
            <option value="id">ID</option>
            </select>

            <input type="text"name="data" placeholder="Search"><br>
            <input  type='submit' name='search' value='FIND'>
            
            </form>
        <form action="room.php" method='post'>
            <h1>Add New Room</h1>
            <label>Room No</label><br>
            <input type="text"  name="room" placeholder="Roomno"><br>
            <label>Department</label><br>
            <select name="department">
            <option value="GENERALROOM">GENERALROOM_(100)</option>
            <option value="ICU BED">ICU BED_(200)</option>
            <option value="VIP">VIP_(300)</option>
            <option value="WARD BED">WARD BED_(400)</option>
            <option value="CASUALTY BED">CASUALTY BED_(500)</option>
            </select><br>
                
            <input type='submit' name='submit' value='SUBMIT'>
        </form>
        </div>
    </body>
</html>