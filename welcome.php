<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: index.php");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-school"></span><span>Prashnottar</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../welcome.php" class="active">
                        <span class="las la-user-circle"></span>
                        <span>Details</span>
                    </a>
                </li>

                <li>
                    <a href="html/courses.php">
                        <span class="las la-clipboard-list"></span>
                        <span>Courses</span>
                    </a>
                </li>

                <li>
                    <a href="html/class.php">
                        <span class="las la-video"></span>
                        <span>Classes</span>
                    </a>
                </li>

                <li>
                    <a href="html/test.php">
                        <span class="las la-chalkboard-teacher"></span>
                        <span>Mock Test</span>
                    </a>
                </li>

                <li>
                    <a href="html/payment.php">
                        <span class="las la-donate"></span>
                        <span>Payments</span>
                    </a>
                </li>

                <li>
                    <a href="html/attendence.php">
                        <span class="las la-chart-bar"></span>
                        <span>Attendence</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Details
            </h2>

            <div class="user-wrapper">
                <img src="images/profile.png" height="40px" width="40px" alt="">
                <div>
                    <h4><?php echo "Welcome ". $_SESSION['username']?></h4>
                    <small>Student</small>
                </div>
            </div>

        </header>

        <main>
            <center>
                <div class="profile-img">
                    <img src="images/profile.png" width="120px" height="120px" alt="">
                </div>
            </center>

                <div class="detail">
                    <h3>User Name: <?php echo $_SESSION['username']?></h3>
                    <h3>Address: <?php echo $_SESSION['address']?></h3>
                    <h3>Gender: <?php echo $_SESSION['gender']?></h3>
                    <h3>D.O.B: <?php echo $_SESSION['dob']?></h3>
                </div>
        </main>

        <div class="end">
            <a href="logout.php"><span class="logoutbtn">Logout</span></a>
        </div>

    </div>
    
</body>
</html>