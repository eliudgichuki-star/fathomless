<?php
	session_start();
	// if($_SESSION['login_user']==null){
	// 	header('location:home_page.php');
	// }
?>

<!DOCTYPE html>
<html>
<head>
<title>
View Pet Details
</title>
</head>
<body>

		
		
		
	</head>
	<body>
		
  <h1 style="text-align:center;">Pet management system</h1>
  




<h3 style="color:#841b2d;"><center>Pet Related Info</center></h3></td>

<?php
include "db.php";

$query=mysqli_query($db,"select* from users");

while($row=mysqli_fetch_array($query))
	{
	?>
	<tr style="color:#841b2d;">

     
      <td align="center"><?php echo $row['name'];?></td>
	   

      
	   
	   
	 </tr>
	<?php } 
	?>

		</body>
			
</html>
		
		
	

