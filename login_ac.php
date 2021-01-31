<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("conn.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = md5($_POST['Password']);
				//query 
                  $sql="SELECT * FROM student Where student_id='".$Username."' and student_password	='".$Password."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["student_id"];
                      $_SESSION["User"] = $row["student_name"];
                      $_SESSION["ProjectID"] = $row["student_project"];
                      $_SESSION["Userlevel"] = $row["student_type"];
                      $_SESSION["UserIMG"] = $row["student_photo"];

                     

                      if ($_SESSION["Userlevel"]=="A"){  

                        Header("Location: pages/student_index");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: login.php"); //user & password incorrect back to login again

        }
?>