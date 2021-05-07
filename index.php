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




<$sql =<<<EOF
      SELECT * from users;
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } 
   while($row = pg_fetch_row($ret)) {
      
      echo "NAME = ". $row[1] ."\n";
      
   }
   echo "Operation done successfully\n";
   pg_close($db);



		</body>
			
</html>
		
		
	

