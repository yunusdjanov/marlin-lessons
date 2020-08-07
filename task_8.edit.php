<?php 

$conn = mysqli_connect("localhost" , "root" , "" , "task"); 
if(!$conn){
    die("connection lost");
}
?>

<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn ,$query);

  


    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $name = $row['first'];
        $surname = $row['last'];
        $username = $row['user'];
    }



}

if(isset($_POST['edit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $query = "UPDATE users SET first = '$name' , last = '$surname' , user = '$username' WHERE id = $id";
    mysqli_query($conn , $query);
    header("Location:task_8.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head>
<body>
    
<div class="container p-4">
<form action="task_8.edit.php?id=<?php echo $_GET['id'] ?>" method="POST">
  <div class="form-group">
    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
  </div>
  <div class="form-group">
    <input type="text" name="surname" class="form-control"  value="<?php echo $surname; ?>">
  </div>
  <div class="form-group">
    <input type="text" name="username" class="form-control"  value="<?php echo $username; ?>">
  </div>
  <button type="submit" name="edit" class="btn btn-primary">EDIT</button>
    </form>
    </div>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>