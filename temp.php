<?php
session_start();
if($_SESSION['status']==FALSE)
{
	header('location:loginpage.html');
}
/*if((session_status()==PHP_SESSION_DISABLED) || session_id() == ){
  header('location: myappn.php');
}
else{
session_start();   // session starts with the help of this function 
if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 

{
  $display_name = $_SESSION['use'];
  $_SESSION['status'] = 1;
}

else
	{
		$_SESSION['status'] = 0;
	}
}*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="bootstrap.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style = "background-color:#4dffff">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">RT-PCR TEST</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          
		  <li><a class="nav-link scrollto" href="empdetail.php">Employee List</a></li>
          <li><a class="nav-link scrollto" href="showAppointment.php">Appointment List</a></li>
		  <li><a class="nav-link scrollto" href="date.php">Select Date</a></li>
          <li class="dropdown"><a href="#"><span>Add New Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="insert.php">Single</a></li>
              <li><a href="mulinsert.php">Multiple</a></li>
              
            </ul>
          </li>
          <!--<li><a class="nav-link scrollto" href="#">Contact</a></li>-->
		  <li><a class="nav-link scrollto" href="delete.php">Delete Data</a></li>
          <li><a class="getstarted scrollto" href="logout.php">Log Out</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  
  <h1>Welcome</h1>
 
   
	  
</body>
</html>