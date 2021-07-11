<?php
session_start();
if($_SESSION['status']==FALSE)
{
	header('location:loginpage.html');
}

$mysqli = mysqli_connect("localhost", "root", "","rtemployee");
// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .$mysqli->connect_errno . ') '.$mysqli->connect_error);
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid rgb(33, 41, 156);
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
div{
	width: 600px;
	padding: 10PX;
	border: 3px solid purple;
	background-color: rgb(250, 226, 205);
	margin: 33px auto;
	border-top-left-radius: 30px;
	border-top-right-radius: 30px;
	border-bottom-left-radius: 8px;
	border-bottom-right-radius: 8px;
	} 

.backbutton {
			  background-color: #ef5350;
			  border-radius: 15px;
			  color: white;
			  padding: 10px 25px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  font-size: 16px;
			  margin: 4px 2px;
			  cursor: pointer;
			}
</style>
</head>
<body>


<div align = "center">
    <form action="" method = "POST">
		<h1 style = "color:brown">SELECT NEW DATE</h1>
        <hr><br>
        <label for="date1"><b>First Date :</b></label>&nbsp;
        <input type="date" id="date1" name="firstdate">
        <br><br>
        <label for="date2"><b>Second Date :</b></label>&nbsp;
        <input type="date" id="date2" name="seconddate">
        <br><br><br>
        <input type="submit" name = "d_submit" value="Submit" id="submit"><br><br>
      </form>
</div>

<?php
			if(isset($_POST['d_submit']))
			{
				
				$d_date1 = $_REQUEST['firstdate'];
				$d_date2 = $_REQUEST['seconddate'];
				
				if($d_date1!= "" && $d_date2!= "" )
				{
					$query = "UPDATE seldate SET dated1 = '$d_date1', dated2 = '$d_date2'";
					$data = mysqli_query($mysqli, $query);
						
					if($data)
					{
						echo '<script type ="text/javascript">alert("Date selected successfully"); location = "temp.php";</script>';
					}
				}
				else
				{
					echo "<h3> <font color=red> Please select all dates";
				}	
			}
		?>	
		
		<a href="temp.php" class="backbutton">Back</a>

</body>
	<!--<p align = "center" ><a href = "temp.php"><button type = "submit" name = "back"  >Back</button></a></p>-->
</html>
