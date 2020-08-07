<?php 

$conn = mysqli_connect("localhost" , "root" , "" , "task"); 
if(!$conn){
    die("connection lost");
}
?>


<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id=$id";
    $result=mysqli_query($conn , $query);
    header("Location:task_8.php?deleted");
}else{
    die("error");
}

 ?>