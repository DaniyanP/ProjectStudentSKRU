
  <?php include '../../conn.php';?>
<?php




$project_id  = $_POST['project_id'];
$project_name  = $_POST['project_name'];
$project_type  = $_POST['project_type'];
$project_adviser1  = $_POST['project_adviser1'];
$project_adviser2  = $_POST['project_adviser2'];

$project_record  = $_POST['project_record'];



$sql ="INSERT INTO project

  ( `project_id`, `project_name`, `project_type`, `project_adviser1`, `project_adviser2`, `project_record`)

    VALUES 

    ('$project_id','$project_name','$project_type','$project_adviser1','$project_adviser2','$project_record')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());






    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('บันทึกข้อมูลโครงงานเรียบร้อย');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    }
?>