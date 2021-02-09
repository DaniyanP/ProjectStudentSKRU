
  <?php include '../../conn.php';?>
<?php


function random_id($len)
           {
               srand((double)microtime()*10000000);
               $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
               $ret_str = "";
               $num = strlen($chars);
               for($i = 0; $i < $len; $i++)
               {
                   $ret_str.= $chars[rand()%$num];
                   $ret_str.=""; 
               }
               return $ret_str; 
           }
           // echo random_password(8); 
           $passw = random_id(6); 




$subject_id  = $passw;
$subject_id2  = $_POST['subject_id2'];
$subject_classroom  = $_POST['subject_classroom'];
$subject_name  = $_POST['subject_name'];
$subject_semester  = $_POST['subject_semester'];
$subject_year  = $_POST['subject_year'];
$subject_sec  = $_POST['subject_sec'];
$subject_time  = $_POST['subject_time'];
$subject_teacher  = $_POST['subject_teacher'];





$sql ="INSERT INTO subject_project

  ( `subject_id`, `subject_id2`, `subject_classroom`, `subject_name`, `subject_semester`, `subject_year`, `subject_sec`, `subject_time`, `subject_teacher`)

    VALUES 

    ('$subject_id','$subject_id2','$subject_classroom','$subject_name','$subject_semester','$subject_year','$subject_sec','$subject_time','$subject_teacher')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('เพิ่มข้อมูลกลุ่มเรียนเรียบร้อยแล้ว');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    }
?>