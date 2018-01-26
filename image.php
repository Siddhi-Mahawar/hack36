<!DOCTYPE html>
<html>
<head>
	<title>Multiple upload</title>
</head>
<body>
	<form action="image.php" method="post" enctype="multipart/form-data">
		<input type="file" name="img[]" mutiple="multiple" />
		<input type="submit" name="submit" />
	</form>
	<?php
    $db=mysqli_connect('localhost','root','','registration');
    if(isset($_POST['submit'])){
    	$filename=$_FILES['img']['name'];
    	$tmpname=$_FILES['img']['tmp_name'];
    	$filename=$_FILES['img']['type'];   
    	for($i=0;$i<=count($tmpname)-1;$i++){
    		$name=addslashes($filename[$i]);
    		$tmp=addslashes(file_get_contents($tmpname[$i]));
            if(empty($name){
              echo "No file added";
            }
            else{
            mysqli_query($db,"INSERT INTO img(name,image) VALUES('$name','$tmp')");
    	} 	
    }
    $res=mysqli_query($db,"SELECT * from img");
    while($row = mysqli_fetch_array($res)){
     echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="250" height="250">';
    }
    ?>
</body>
</html>
