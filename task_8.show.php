<?php 

$conn = mysqli_connect("localhost" , "root" , "" , "task"); 
if(!$conn){
    die("connection lost");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<body>
    
<div class="frame-wrap">
   <table class="table m-0">
     <thead>
      <tr>
      <th>#</th>
      <th>First Name</th>
       <th>Last Name</th>
        <th>Username</th>
        <th>Actions</th>
          </tr>
          </thead>
          <tbody>
   <?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id=$id";
    $result=mysqli_query($conn , $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
    }
}

 ?>
                                        <tr>
      <th scope="row"><?php echo $id; ?></th>
      <td><?php echo $row['first']; ?></td>
      <td><?php echo $row['last']; ?> </td>
      <td><?php echo $row['user']; ?></td>
     <td><a href="task_8.php" class="btn btn-info">Главная</a></td> 
    </tr>
                    
          </tr>
       </tbody>
  </table>
</div>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
 // default list filter
initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
// custom response message
initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
 </body>
</html>


