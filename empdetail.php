<?php
session_start();
if($_SESSION['status']==FALSE)
{
	header('location:loginpage.html');
}

$mysqli = new mysqli("localhost", "root", "","rtemployee");
// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .$mysqli->connect_errno . ') '.$mysqli->connect_error);
}
?>
 
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Employee Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	
	<p align = "right"><button onclick = "window.print()">Print</button>
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		
		* {
						box-sizing: border-box;
					}

					body {
						font-family: 'Ubuntu', sans-serif;
					}


					input[type=text], select {
					  width: 100%;
					  padding: 12px 20px;
					  margin: 8px 0;
					  display: inline-block;
					  border: 1px solid #ccc;
					  border-radius: 4px;
					  box-sizing: border-box;
					}
					
					input[type=submit] {
						width: 100%;
						background-color: #4CAF50;
						color: white;
						padding: 14px 20px;
						margin: 8px 0;
						border: none;
						border-radius: 4px;
						cursor: pointer;
					}
			button:hover {
			  opacity: 0.8;
			}

			.container {
			  padding: 16px;
			}

			input[type=submit] {
			  margin: 20px auto;
			  margin-left: 35%;
			  width: 30%;
			  border: 3px solid #73AD21;
			  padding: 10px;
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

<body >

		<form action = "" method = "POST">
			<!--<div id = "time" align = "center">-->
			<div>
				<h1 style ="color:Brown" align = "center" >Employee Details</h1><br>
				<hr>
				<input type="submit" name = "submit" value="See Full Database" id = "submit">
			</div>
		</form>
		<?php
			if(isset($_POST['submit']))
			{
				$sql = "SELECT * FROM emp";
				$result = $mysqli->query($sql);
				$mysqli->close();
		?>
	<div >
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>SN</th>
				<th>Full Name</th>
				<th>Contact</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while(($rows = $result->fetch_assoc()) !== null)
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['sno'];?></td>
				<td><?php echo $rows['full_name'];?></td>
				<td><?php echo $rows['contact'];?></td>
			</tr>
			<?php
			 }
			?>
		</table>
	</div>
	
		<?php } ?>
			
	<a href="temp.php" class="backbutton">Back</a>
	
</body>

	<!--<p align = "center" ><a href = "temp.php"><button type = "submit" name = "back"  >Back</button></a></p>-->

</html>
