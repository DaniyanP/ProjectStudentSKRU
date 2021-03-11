
  <?php include '../../conn.php';?>
<?php




$project_id  = $_POST['project_id'];
$project_name  = $_POST['project_name'];
$project_type  = $_POST['project_type'];
$project_adviser1  = $_POST['project_adviser1'];
$project_adviser2  = $_POST['project_adviser2'];
$project_status  = $_POST['project_status'];


if ($project_status == 3) {

  $sql2 ="UPDATE student SET

student_type = 2
    
    
    
    
          WHERE student.student_project='$project_id'";

$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());



  $sql ="UPDATE project SET

project_name ='$project_name',
project_type ='$project_type',
project_adviser1 ='$project_adviser1',
project_adviser2 ='$project_adviser2',
project_status = '$project_status'
    
    
    
    
          WHERE project.project_id='$project_id'";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
}

if ($project_status == 2) {
  $sql ="UPDATE project SET

project_name ='$project_name',
project_type ='$project_type',
project_adviser1 ='$project_adviser1',
project_adviser2 ='$project_adviser2',
project_status = '$project_status'
    
    
    
    
          WHERE project.project_id='$project_id'";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
}

if ($project_status == 1) {
  $sql ="UPDATE project SET

project_name ='$project_name',
project_type ='$project_type',
project_adviser1 ='$project_adviser1',
project_adviser2 ='$project_adviser2',
project_status = '$project_status'
    
    
    
    
          WHERE project.project_id='$project_id'";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
}




    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('แก้ไขข้อมูลโครงงานเรียบร้อย');";
      echo "window.location = history.back(1); ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    }
?>