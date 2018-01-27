<?php include('serve.php');?>
<!DOCTYPE html>
<html>
<head>
       <title>User Registration</title>
       <link rel ="stylesheet" type ="text/css" href="style.css">
<body>
	<div class="header">
		<h2> Sell </h2>
	</div>
	<form  method="post" action="sell.php">
		<?php include('errors.php');?>
		<div class="input-group">
			<label>name</label>
			<input type="text" name="name" value="<?php echo $name1;?>">
		</div>
		<div class="input-group">
			<label>contactno</label>
			<input type="number" name="contact" value="<?php echo $contact;?>">
		</div>
		<div class="input-group">
			<label>Roomno</label>
			<input type="text" name="room" value="<?php echo $room;?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email;?>">
		</div>
		<div class="input-group">
			<label>Description</label>
			<input type="text" name="description" value="<?php echo $description;?>">
		</div>
			<button type="submit" name="register" class="btn">Register</button>
		</div>
	</form>
</body>
	</head>
</html>