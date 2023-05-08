<?php
    session_start();
    include ('../../DBconnection.php');
   
    if(isset($_POST['submit'])) {
                $i=$_POST['id'];
                $d=$_POST['doctor'];
                $n=$_POST['name'];
                $a=$_POST['age'];
                $s=$_POST['gender'];
                $b=$_POST['bloodgroup'];
                $ad=$_POST['address'];
                $c=$_POST['contactno'];
                $date=$_POST['dateofad'];

        if(empty($i)) {   
            echo '<script>alert("Id not entered")</script>';}
        else {
            $check=mysqli_query($conn,"select id from deletetable where id='$i'");
            $r1=mysqli_fetch_row($check);

            if(empty($r1)) {
                $sql="insert into patientreg(id,name,age,sex,bloodgroup,address,contactno,dateofad,doctor)values('$i','$n',$a,'$s','$b','$ad',$c,'$date','$d')";
                    if(mysqli_query($conn,$sql)) {
                            echo '<script>alert("Successful.")</script>';
                            echo "<meta http-equiv='refresh' content='0'>";
                        }
                        else {
                            echo '<script>alert("Something went wrong.")</script>';
                                        }
                mysqli_close($conn);
            }
            else{echo '<script>alert("Patient with id already registered")</script>';}
        }
        
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
    <title>Add patient</title>

</head>

<body>
    <div id="form-container">
            <form action='insertpatient.php' method='post'>
            <h1>Patient Registration Form</h1>
            <input class="button" type="button" value="X" onclick="location.href='patientmenu.php'" style="float: right;">
            
            <p>
            <label><b>ID:</b></label>
            <input type='text' name='id' placeholder="Patientfirstletter,year,formno eg:N20201">
        
            <label><b>Doctor Name:</b></label>
                <select name="doctor">
                <option value="select">Select doctor/ department</option>
                <option value="Dr Ronah">Dr Husnah - Family physician</option>
                <option value="Dr Ambrose">Dr Berna - Psychatrist</option>
                <option value="Dr Evarist">Dr Latif - Obstterician</option>
                <option value="Dr Angella">Dr Angella - Internist</option>
                <option value="Dr Hosea">Dr Hosea - Radiologist</option>
                <option value="Dr Bwana">Dr Bwana - Epidemiologist</option>
                <option value="Dr Kenald">Dr Kenald - Audiologist</option>
                </select>

            <label><b>Name:</b></label>
            <input type='text' name='name' placeholder = "Patient's name">

            <label><b>Age:</b></label>
            <input type='text' name='age' placeholder = "Patient's age">

            <label for="Gender"><b>Gender</b></label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male"><b>Male</b></label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female"><b>Female</b></label><br><br>
            
            <label><b>Blood group:</b></label>
            <input type='text' name='bloodgroup' placeholder = "Patient's bloodgroup">

            <label><b>Address:</b></label>
            <textarea id="subject" name="address" placeholder = "Patient's address" style="height:100px"></textarea>
            
            <label><b>Contact No:</b></label>
            <input type="text"  name="contactno" placeholder = "Patient's contact">

            <label><b>Date of Admission:</b></label>
            <input type="date"  name="dateofad" placeholder = "Date Of Admission"><br>
            
            <input class="button" type="submit" name='submit' value="SUBMIT">
            </p>
        <form>
    </div>

</body>

</html>