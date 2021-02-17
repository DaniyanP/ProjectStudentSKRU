
  <?php include '../../conn.php';?>
<?php





$student_id  = $_POST['student_id'];
$student_name  = $_POST['student_name'];
$student_major  = $_POST['student_major'];
$student_email  = $_POST['student_email'];
$student_phone  = $_POST['student_phone'];
$set_password = $student_id;
$student_password = md5($set_password);
$student_project  = $_POST['student_project'];


		

$check = "select * from project  where project_id = '$student_project'";
$result11 = mysqli_query($con, $check)  or die(mysql_error());
  
  if($result11->num_rows > 0)   		
  {
 $sql = "INSERT INTO student
		(student_id, student_name, student_major, student_phone, student_email, student_password, student_project)
		
 		VALUES
		('$student_id', '$student_name', '$student_major', '$student_phone', '$student_email', '$student_password','$student_project') "; 
	$result = mysqli_query($con, $sql);
 
 

    mysqli_close($con);
    
    if($result){
      echo "<script>";
   
      echo "window.location = 'index.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ไม่สามารถบันทึกได้ เนื่องจากรหัสนักศึกษามีในระบบแล้ว');";
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