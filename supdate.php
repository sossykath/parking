<?php
 	require_once('db.php');

 if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $sql = "select * from avail where id=".$id;
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
 $row = mysqli_fetch_assoc($result);
 }else {
 $errorMsg = 'Could not Find Any Record';

}

}
 if (isset($_POST['submit'])) {
 $slot = $_POST['slot'];
 $status = $_POST['status'];
 $time = $_POST['time'];




if(!isset($errorMsg)){
$sql = "update avail set slot = '".$slot."',status = '".$status."',time = '".$time."' where id=".$id;
$result = mysqli_query($conn, $sql);
if($result){
$successMsg = 'New record updated successfully';
header("Location:adminslot.php");
}else{
$errorMsg = 'Error '.mysqli_error($conn);
}
}
}
?>
