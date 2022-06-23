<?php include"connection.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Renting</title>
</head>
<body>
    <center>
        <div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">House Renting</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <center>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="add_house.php">ADD House</a>
        <a class="nav-link" href="all_houses.php">All Houses</a>
        <a class="nav-link" href="rented.php">Rented</a>
        <a class="nav-link" href="logout.php">Logout</a>
        <a class="nav-link disabled"><b>User Online: <?php echo $_SESSION['username']; ?> </b></a>
      </div>
    </div>
    </center>  
  </div>
</nav>
<br>
<h2>All houses</h2>
<?php 

if(isset($_GET['delete'])){
    
    $delete = $_GET['delete'];
    $delete_query = mysqli_query($connection, "DELETE FROM houses WHERE id = '$delete' ");

    if($delete_query == true){
       header("Location: all_houses.php");
    }
}

?>
<?php
if(isset($_GET['unrent'])){
    
    $delete = $_GET['unrent'];
    $delete_query = mysqli_query($connection, "UPDATE houses SET status = 0 WHERE id = '$delete' ");

    if($delete_query == true){
       header("Location: all_houses.php");
    }
}

?>
<table class="table table-hover">
    <tr>
    <th>ID</th>
    <th>Picture</th>
    <th>Name</th>
    <th>Price</th>
    <th>Locatoin</th>
    <th>Rooms</th>
    <th>Type</th>
    <th>Owner</th>
    <th>Phone</th>
    <th>Status</th>
    <th colspan="2">Action</th>
    </tr>
    <?php
    
    $query = mysqli_query($connection, "SELECT * FROM houses");

    while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><img width="100" src="house_pics/<?php echo $row['house_pic']?>" alt="House: <?php echo $row['name']?>"></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['location']?></td>
            <td><?php echo $row['no_rooms']?></td>
            <td><?php echo $row['house_type']?></td>
            <td><?php echo $row['owner']?></td>
            <td><?php echo $row['owner_phone']?></td>
            
            <?php
            if($row['status'] == 1){
                ?>
                <td><a class="btn btn-warning" href="all_houses.php?unrent=<?php echo $row['id']?>">UNRENT</a></td>
            <?php  }else{ ?>
                <td>FREE</td>
            <?php  } ?>
            <td><a class="btn btn-success" href="update_house.php?update=<?php echo $row['id']?>">UPDATE</a></td>
            <td><a class="btn btn-danger" href="all_houses.php?delete=<?php echo $row['id']?>">DELETE</a></td>
        </tr>
        <?php  } ?>
</table>
    </div>
    </center>
</body>
<script src="js/bootstrap.min.js"></script>

</html>