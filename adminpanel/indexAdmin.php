<?php
 session_start();
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminstyles.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Admin Panel</title>
</head>

<body>

   <?php include 'side-menu.php'; ?>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="images/search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <img src="images/notifications.png" alt="">
                    <div class="img-case">
                        <img src="images/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>127</h1>
                        <h3>New Patients</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>77</h1>
                        <h3>Appointments</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>13</h1>
                        <h3>Operations</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>10777</h1>
                        <h3>Earnings</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Last Appointments</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Doctor</th>
                            <th>Condition</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>Joseph Kizza</td>
                            <td>Dr Ronah</td>
                            <td>Fracture</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Latif Smith</td>
                            <td>Dr Angella</td>
                            <td>Depression</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Phionah Talen</td>
                            <td>Dr Ambrose</td>
                            <td>Antenatal</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Joan Kent</td>
                            <td>Dr Everyn</td>
                            <td>Flu</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Sophia Smith</td>
                            <td>Dr Evarist</td>
                            <td>Blood Tests</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Emma Lorin</td>
                            <td>Dr Magoba</td>
                            <td>Child care</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Doctor Visiting</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Visit time</th>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>Magoba</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>Angella</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>Evarist</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>Ambrose</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>