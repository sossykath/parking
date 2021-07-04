<?php
     include('db.php');
         if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = "select * from user where id = ".$id;
        $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $image = $row['image'];
            unlink($upload_dir.$image);
            $sql = "delete from user where id=".$id;
        if(mysqli_query($conn, $sql)){
        header('location:adminsched.php');
        }
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="parkqueen.css" rel="stylesheet">
<link href="bootstrap.css" rel="stylesheet" />
<link rel="stylesheet" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Registered Accounts</title>
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
 <style>
    table{
        margin-left:1%;
        margin-right:10%;
        margin:auto;
        text-align:center;
    }
    h4{
        text-align:center;
    }
</style>
<div>
<br><br><br>
<h4>Registered Accounts</h4>
<hr>
    <table class="table table-striped">
    <thead class="thead-dark">
        <thead>
            <tr>
                <th>Email</th>
                <th>Full Name</th>
                <th>Contact</th>
                <th>Username</th>
                <th>Plate No.</th>
                <th>Car Type</th>
                
            </tr>
        </thead>
            <tbody>
                <?php
                             $sql = "select * from user";
                             $result = mysqli_query($conn, $sql);
                             if(mysqli_num_rows($result)){
                             while($row = mysqli_fetch_assoc($result)){
                             ?>
                <tr>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['cno'] ?></td>
                    <td><?php echo $row['uname'] ?></td>
                    <td><?php echo $row['pno'] ?></td>
                    <td><?php echo $row['ctype'] ?></td>
                    
                </tr>
                <?php
                             }
                             }
                             ?>
            </tbody>
    </table>
</div>
 </div>
</body>
</html>