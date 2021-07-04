<?php
 	require_once('db.php');

 if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $sql = "select * from request where id=".$id;
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
 $row = mysqli_fetch_assoc($result);
 }else {
 $errorMsg = 'Could not Find Any Record';

}

}
 if (isset($_POST['submit'])) {
 $fname = $_POST['fname'];
 $udate = $_POST['udate'];
 $toa = $_POST['toa'];
 $hour = $_POST['hour'];
 $gslot = $_POST['gslot'];




if(!isset($errorMsg)){
$sql = "update request set fname = '".$fname."',udate = '".$udate."',toa = '".$toa."',hour = '".$hour."',gslot = '".$gslot."' where id=".$id;
$result = mysqli_query($conn, $sql);
if($result){
$successMsg = 'New record updated successfully';
header("Location:grant.php");
}else{
$errorMsg = 'Error '.mysqli_error($conn);
}
}
}
?>
