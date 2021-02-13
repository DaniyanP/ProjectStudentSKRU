
  <?php include '../../conn.php';?>
<?php




$project_id  = $_POST['project_id'];
$project_name  = $_POST['project_name'];
$project_type  = $_POST['project_type'];
$project_adviser1  = $_POST['project_adviser1'];
$project_adviser2  = $_POST['project_adviser2'];



$sql ="UPDATE project SET

project_name ='$project_name',
project_type ='$project_type',
project_adviser1 ='$project_adviser1',
project_adviser2 ='$project_adviser2'
    
    
    
    
          WHERE project.project_id='$project_id'";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());


    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('แก้ไขข้อมูลโครงงานเรียบร้อย');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    }
?>