<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$teacher_id = $_REQUEST["teacher_id"];
$password = $_REQUEST["password"];
$set_password = md5($password);

  
  $sql = "UPDATE teacher SET

teacher_password ='$set_password'




      WHERE teacher_id='$teacher_id' 
      ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขรหัสผ่านเรียบร้อยแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>