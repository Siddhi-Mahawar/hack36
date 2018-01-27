<?php include('server.php');
if(empty($_SESSION['username'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
       <title>User Registration</title>
       <link rel ="stylesheet" type ="text/css" href="style.css">
<body>
	<div class="header">
		<h2> Home page</h2>
	</div>
	
	<div class="content">
		<?php if(isset($_SESSION['success'])):?>
			<div class ="error success">
				<h3>
					<?php
					   
					   unset($_SESSION['success']);
					?>
			    </h3>
			</div> 
		<?php endif?>

       <?php if(isset($_SESSION["username"])):?>
       <p> Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
       <p><a href="index.php?logout='1'" style="color:red;">Logout</a></p>
       <?php endif ?>	     
	</div>
</body>
	</head>
</html>