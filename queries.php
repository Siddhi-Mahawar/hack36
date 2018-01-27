
<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
       <link rel ="stylesheet" type ="text/css" href="style.css">
<body>
<?php
  $db=mysqli_connect('localhost','root','','registration');
    $query="SELECT * FROM qwery";
  
            $result=mysqli_query($db,$query);
            
         
      while($row = mysqli_fetch_array($result)){  
      	$t=$row['queryid'];
      	echo "QUERY";
      	echo "<br>";
        echo  $name = $row['query'];
        echo "<br>";
        echo "<br>";
        echo "COMMENTS";
        echo "<br>";
        $qwer="SELECT comment.comment FROM comment INNER JOIN qwery ON comment.queryid=qwery.queryid where qwery.queryid='$t'";
        $res=mysqli_query($db,$qwer);
        while($row=mysqli_fetch_array($res)){
        	echo $nam=$row['comment'];
        	echo "<br>";
        	echo "<br>";
        }


      }
      ?>
  </body>
</head>
</html>
