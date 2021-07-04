<?php
     include('db.php');
         if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = "select * from avail where id = ".$id;
        $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $image = $row['image'];
            unlink($upload_dir.$image);
            $sql = "delete from avail where id=".$id;
        if(mysqli_query($conn, $sql)){
        header('location:adminsched.php');
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="parkqueen.css" rel="stylesheet">
<link href="bootstrap.css" rel="stylesheet" />
<link rel="stylesheet" href="style.css">
<link href="fontawesome/css/all.css" rel="stylesheet" />

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Available Slots</title>
</head>
<body>
<div class="row">
<div class="col-sm-4">
<nav id="sidebar" class="k-sidebar" >
            <div class="sidebar-header">
                <h3>PARKQUEEN PARKING</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                        <a href="admindash.php">Home</a>
                
                </li>
               <li>
                    <a href="account.php">Registered Accounts</a>
                </li>
                <li>
					<a href="grant.php">Request Reservations</a>                 
                </li>
                <li>
                    <a href="adminslot.php">Available Slots</a>
                </li>
                <li>
                    <a href="admin.php">Logout</a>
                </li>
            </ul>

          
        </nav>
</div>
<div>
  <hr>
    <table class="table table-striped"  style="background-color:white; margin-left: 1%; margin-right: 10%; margin:auto; text-align: center;">
    <thead class="thead-dark">
        <thead>
            <tr>
                <th>Slot</th>
                <th>Status</th>
                <th>Time</th>
                <th><i class="fas fa-edit"></i></th>
            </tr>
        </thead>
        
            <tbody>
                <?php
                             $sql = "select * from avail";
                             $result = mysqli_query($conn, $sql);
                             if(mysqli_num_rows($result)){
                             while($row = mysqli_fetch_assoc($result)){
                             ?>
                <tr>
                    <td><?php echo $row['slot'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td><?php echo $row['time'] ?></td>
                    <td><button class="btn btn-success" name="submit"><a href="update.php?id=<?php echo $row['id'] ?>"> Update</a></button></td>
                </tr>
                <?php
                             }
                             }
                             ?>
            </tbody>
       
    </table>
 </div>
</body>
</html>