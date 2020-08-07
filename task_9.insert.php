<?php $conn = mysqli_connect("localhost" , "root" , "" , "task"); ?>




<?php 
  $text= "";
  if (isset($_POST['save'])) {
  	$text = $_POST['text'];
  	
    if(empty($text)){
      header("Location:task_9-10.php?empty");
    }else{
  	$sql_u = "SELECT * FROM text WHERE txt='$text'";
  	$res_u = mysqli_query($conn, $sql_u);


  	if (mysqli_num_rows($res_u) > 0) {
  	  header("Location:task_9-10.php?error=error")	;
    }else{
           $query = "INSERT INTO text (txt) 
      	    	  VALUES ('$text')";
           $results = mysqli_query($conn, $query);
           header("Location:task_9-10.php?success");
    }
  	}
  }

  
?>