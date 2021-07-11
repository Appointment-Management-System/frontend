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

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Insert Data into Database</title>
	
</head>
<body >

			<style>
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

			<!--.cancelbtn {
			  width: auto;
			  padding: 10px 18px;
			  background-color: #f44336;
			}-->
			.container {
			  padding: 16px;
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
			input[type=submit] {
			  margin: 20px auto;
			  margin-left: 65%;
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
			<form action = "" method = "POST">
			<div >
				<h1 style="color:Brown" align = "center">PLEASE FILL THE DETAILS OF NEW ENTRY</h1>
				<hr><br><br>
				
				<b>1. Employee's Full Name :</b><br>
				<input type="text" id = "full_name" name="full_name" placeholder = "Enter Full Name" >
				<br><br>
				<b>2. Contact Number :</b><br>
				<input type="text" id = "contact" name="contact" placeholder = "Enter the contact no" >
				<br><br>
				
				<input type="submit" name = "submit" value="Submit" id = "submit">
			
		</form>
		<?php
			if(isset($_POST['submit']))
			{
				//$db_sno = $_REQUEST['sno'];
				$db_full_name = $_REQUEST['full_name'];
				$db_contact = $_REQUEST['contact'];
				
				
				$id_q = "SELECT COUNT(*) FROM emp";
				$result = mysqli_query($mysqli, $id_q);
				$row = mysqli_fetch_array($result);
				//echo $row['COUNT(*)'];
				$id = $row['COUNT(*)'];
				$db_sno = $id + 1;
				
				if($db_full_name!= "" && $db_contact!= "" )
				{
					$sql="SELECT contact FROM emp WHERE contact=$db_contact";
					$result=mysqli_query($mysqli, $sql);
					if($result -> num_rows > 0)
					{ ?>
						<!--echo "<h3> <font color=red> Your contact is already in our database, try with another number </font></h3>";-->
						<script> alert('Your contact is already in our database, try with another number'); </script>
					<?php
					}
					else
					{
						$query = "INSERT INTO emp VALUES ('$db_sno', '$db_full_name', '$db_contact')";
						$data = mysqli_query($mysqli, $query);
						
						if($data)
						{?>
							<!--echo "<h3> <font color=blue> Data inserted into Database </font></h3>";-->
							<script> alert('Data inserted into Database'); </script>
						<?php
						}
					}
				}
				else
				{ ?>
					<script> alert('All fields are required '); </script>
				<?php
				}	
			}
		?>	
		</div>
		<a href="temp.php" class="backbutton">Back</a>
</body>
	<!--<br><br><p align = "center" ><a href = "temp.php"><button type = "submit" name = "back"  >Back</button></a></p>-->
</html>
