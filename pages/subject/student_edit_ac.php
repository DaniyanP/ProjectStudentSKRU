<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php




$student_id  = $_POST['student_id'];
$student_name  = $_POST['student_name'];
$student_major  = $_POST['student_major'];
$student_email  = $_POST['student_email'];
$student_phone  = $_POST['student_phone'];

$student_project  = $_POST['student_project'];

$check = "select * from project  where project_id = '$student_project'";
$result11 = mysqli_query($con, $check)  or die(mysql_error());
  
  if($result11->num_rows > 0)   		
  {
  $sql = "UPDATE student SET


student_name='$student_name',
student_major='$student_major',
student_email='$student_email',
student_phone='$student_phone',
student_project='$student_project'



      WHERE student_id='$student_id' 
      ";





$result = mysqli_query($con, $sql);
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าแรก
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข้อมูลนักศึกษาเสร็จแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "window.location = history.back(1); ";
  echo "</script>";
}

}else{
    echo "<script type='text/javascript'>";
    echo "alert('รหัสโครงงานนี้ไม่มีในระบบ ตรวจสอบอีกครั้ง');";
    echo "window.location = history.back(1); ";
    echo "</script>";

}
?>

