<?php
    session_start();
    include ('../../DBconnection.php');
  
    if(isset($_POST['submit']))
    {
        $i=$_POST['id'];
        $n=$_POST['name'];
        $d=$_POST['dep'];
        $s=$_POST['shift'];
        $sql="insert into staff(id,name,department,shift)values('$i','$n','$d','$s')";
            if(mysqli_query($conn,$sql))
            {
                echo '<script>alert("Successful")</script>';
                echo "<meta http-equiv='refresh' content='0;url=staff.php'>";
            }
            else
            {
                echo '<script>alert("Failed")</script>';
            }
                            
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="staff.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <title>Insert Staff</title>

    </head>

    <body>
    <input class="button" type="button" value="Exit" onclick="location.href='staff.php'" style="float: right;">
        <form action='insertstaff.php' method='post'>
            <br><h2>New Member</h2>
            <p>
                <label>ID</label>
                <input type='text' name='id' placeholder="dep+no"><br>

                <label>Name:</label>
                <input type="text"  name="name"><br>

                <label>Department</label>
                    <select name="dep">
                    <option value="General">GENERAL</option>
                    <option value="Icu ">ICU </option>
                    <option value="Vip">VIP</option>
                    <option value="Ward">WARD </option>
                    <option value="Casualty">CASUALTY </option>                 
                    <option value="Admin">ADMIN </option>
                    </select>
                <label>Shift:</label>
            <input type="text"  name="shift"><br>

            <input class="button" type="submit" name="submit" value="SUBMIT">
            </p>
        </form>
    </body>
</html>

