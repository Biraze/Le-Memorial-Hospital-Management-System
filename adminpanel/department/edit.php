<?php  
    session_start();
    include ('../../DBconnection.php');
    $row1=null; 
    $name=null; 
    if( isset($_GET['edit']) )  
    {  
    $name = $_GET['edit'];
    $res= mysqli_query($conn,"select*from staff where name='$name'");  
    $row1= mysqli_fetch_array($res); 
    $r1 = implode(',',$row1); 
    }  
    
    if( isset($_POST['shift']))  
    {
        $shift   = $_POST['shift'];
        $id   = $_POST['id'];  
        $res  = mysqli_query($conn,"update staff set shift='$shift'where id='$id' ");   
        echo "<meta http-equiv='refresh' content='0;url=staff.php'>";  
    }
    if( isset($_POST['delete']))  
    {
        $delete   = $_POST['delete'];
        $res  = mysqli_query($conn,"delete from staff where id='$delete'");   
        echo "<meta http-equiv='refresh' content='0;url=staff.php'>";  
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
        <title>Edit Staff</title>

    </head>

  <body>

   <input class="button" type="button" value="Exit" onclick="location.href='insertstaff.php'" style="float: right;">
    <form action="edit.php" method="POST">
        <h2>Change shift</h2> 
        <div class="editform-box">
            ID: <input type="text" name="id" value="<?php echo $row1[0]; ?>"><br />
            Shift: <input type="text" name="shift" value="<?php echo $row1[3]; ?>"><br />
            <input type="submit" name="submit" value=" Update "> 
        </div>
    </form> 

    <form action="edit.php" method="POST">
        <h2>Remove</h2>
        <div class="editform-box">
            ID: <input type="text" name="delete" value="<?php echo $row1[0]; ?>"><br />
            Name: <input type="text" name="n" value="<?php echo $row1[1]; ?>"><br />
            Department: <input type="text" name="d" value="<?php echo $row1[2]; ?>"><br />
            <input type="submit" name="remove" value=" Remove "> 
        </div>
    </form> 
  </body>
