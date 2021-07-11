<?php
session_start();
if($_SESSION['status']==FALSE)
{
	header('location:loginpage.html');
}

if(isset($_POST['delete']))
{
    $_SESSION['id'] = $_POST['id'];
    
    // connect to mysql
    
    
    // mysql delete query 
    
    ?>
	<script>
	var r = confirm("Are you sure to delete the data?");
	if(r == true)
	{
		location.href = 'result.php';	
		alert('Data Deleted');
	}
	else{
		alert('Data Not Deleted');	
	}
	</script>
	<?php
    
    
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> DELETE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
	<style>
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
	
	input[type=text], select {
          width: 80%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
	
	input[type=submit] {
            width: 25%;
            background-color: #ef5350;
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
		
        <form action="" method="post">
		<div align="center"> 
            <h1 style ="color:Black" align = "center" >Enter Contact Number To Delete</h1>
			<hr><br>
			<input type="text" name="id" placeholder = "Enter contact number to Delete" required><br><br>

            <input type="submit" name="delete" value="Delete Data">

		</div>
        </form>
		 <a href="temp.php" class="backbutton">Back</a>	
    </body>

</html>
