<?php session_start();?>
<?php 

if (!$_SESSION["TeacherID"]){  

	  Header("Location: ../../login_te.php"); 

}else{?>
<?php include '../../conn.php';

$id_project = $_REQUEST["ID"];?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <?php include '../title.php';?>

    <?php include '../../meta.php';?>

    <!-- Fontawesome -->
    <link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="../../css/volt.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <?php include '../dateth.php';?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>


</head>

<body>

    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
        <a class="navbar-brand mr-lg-5" href="../../index.html">
            <img class="navbar-brand-dark" src="../../assets/img/brand/light.svg" alt="Volt logo" /> <img
                class="navbar-brand-light" src="../../assets/img/brand/dark.svg" alt="Volt logo" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <?php include '../menu_te.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="../student_index"><span
                                            class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bootstrap tables</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar_te.php';?>
                </div>
            </div>
        </nav>

        <!-- <div class="py-0">

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">หัวข้อ</h1>

                </div>

            </div>
        </div> -->

        <div class="row">

            <div class="col-12 col-xl-8">
                <div class="card border-light shadow-sm mb-4 lg-8">
                    <div class="card-body">

                    <?php
           
               
					$sql = "SELECT
                    project.project_id,
                    project.project_name,
                    project.project_type,
                    project_type.project_type_name
                    FROM
                    project
                    INNER JOIN project_type ON project.project_type = project_type.project_type_id
                    WHERE
                    project.project_id = '$id_project'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<p>รหัสโครงงาน : '. $row["project_id"].'</p>
                        <p>ชื่อโครงงาน : '. $row["project_name"].'</p>
                        <p>ประเภทโครงงาน : '. $row["project_type_name"].'</p>';       
                    }
                    }
                    $con->close();
                    ?> 
                        <p>ผู้จัดทำ :  <?php
           include '../../conn.php';
           $id_project = $_REQUEST["ID"];
               
					$sql = "SELECT
                    student.student_project,
                    student.student_id,
                    student.student_name
                    FROM
                    student
                    WHERE
                    student.student_project ='$id_project'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '' . $row["student_id"].' ' . $row["student_name"].' , ';       
            }
            }
            $con->close();
            ?> </p>
                        <p>อาจารย์ที่ปรึกษาโครงงาน :

                        <?php
           include '../../conn.php';
           $id_ptojrct = $_REQUEST["ID"];
               
					$sql = "SELECT
                    project.project_id,
                    project.project_adviser1,
                    teacher.teacher_name
                    FROM
                    project
                    INNER JOIN teacher ON project.project_adviser1 = teacher.teacher_id 
                    WHERE
                    project.project_id ='$id_ptojrct'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '' . $row["teacher_name"].',';       
                        }
                        }
                        $con->close();
                        ?> 



<?php
           include '../../conn.php';
           $id_ptojrct = $_REQUEST["ID"];
               
					$sql = "SELECT
                    project.project_id,
                    project.project_adviser2,
                    teacher.teacher_name
                    FROM
                    project
                    INNER JOIN teacher ON project.project_adviser2 = teacher.teacher_id 
                    WHERE
                    project.project_id ='$id_ptojrct'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            
                            
                            if ($row["project_adviser2"]==3){
                                echo '';    
                            }else{
                                echo '' . $row["teacher_name"].''; 
                            };
                            
                               
                        }
                        }
                        $con->close();
                        ?> 

</p>

                    </div>
                </div>
            </div>



            <!-- start sec3 -->
            <div class="col-12 px-0 mb-4 col-xl-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between border-bottom border-light pb-3">
                            <div>
                                <h6 class="mb-0"><span class="icon icon-xs mr-3"><span
                                            class="fas fa-bookmark"></span></span>จำนวนนัดหมาย</h6>
                            </div>
                            <div>
                            <a href="#" class="text-primary font-weight-bold">
                            <?php
           include '../../conn.php';
           $id_project = $_REQUEST["ID"];
               
					$sql = "SELECT
                    Count(appoint.appoint_id) as C_appoint,
                    appoint.project_id
                    FROM
                    appoint
                    WHERE
                    appoint.project_id = '$id_project'
                    GROUP BY
                    appoint.project_id";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo $row["C_appoint"];       
                        }
                        }
                        $con->close();
                        ?> 
                            <span class="fas fa-chart-line ml-2"></span></a>
                                
                                    
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom border-light py-3">
                            <div>
                                <h6 class="mb-0"><span class="icon icon-xs mr-3"><span
                                            class="fas fa-calendar-check"></span></span>สำเร็จ</h6>

                            </div>
                            <div>
                            <a href="#" class="text-primary font-weight-bold">
                            <?php
           include '../../conn.php';
           $id_project = $_REQUEST["ID"];
               
					$sql2 = "SELECT
                    Count(appoint.appoint_id) AS C_appoint01,
                    appoint.project_id
                    FROM
                    appoint
                    WHERE
                    appoint.project_id = '$id_project' AND
                    appoint.appoint_status = 4
                    GROUP BY
                    appoint.project_id";
					$result = $con->query($sql2);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo $row["C_appoint01"];       
                        }
                        }
                        $con->close();
                        ?> 
                            <span class="fas fa-chart-line ml-2"></span></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom border-light py-3">
                            <div>
                                <h6 class="mb-0"><span class="icon icon-xs mr-3"><span
                                            class="fas fa-star"></span></span>คะแนน</h6>

                            </div>
                            <div>
                            <a href="#" class="text-primary font-weight-bold">
                            <?php
           include '../../conn.php';
           $id_project = $_REQUEST["ID"];
               
					$sql2 = "SELECT
                    com05.com05_id,
                    com05.project_id,
                    Sum(score.score_score) as s_sum
                    FROM
                    com05
                    INNER JOIN score ON com05.score = score.score_id
                    WHERE
                    com05.project_id
                    GROUP BY
                    com05.com05_id,
                    com05.project_id
                    ";
					$result = $con->query($sql2);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo $row["s_sum"];       
                        }
                        }
                        $con->close();
                        ?> 
                            <span class="fas fa-chart-line ml-2"></span></a>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between pt-3">
                            <div>
                                <h6 class="mb-0"><span class="icon icon-xs mr-3"><span
                                            class="fas fa-calendar-times"></span></span>มาสาย</h6>

                            </div>
                            <div>
                                <a href="#" class="text-primary font-weight-bold">16<span
                                        class="fas fa-chart-line ml-2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end sec3 -->






        </div>



        <style>
            a:hover,
            a:focus {
                outline: none;
                text-decoration: none;
            }

            .tab .nav-tabs {
                position: relative;
                border-bottom: none;
            }

            .tab .nav-tabs li {
                text-align: center;
                margin-right: 3px;
            }

            .tab .nav-tabs li a {
                display: block;
                font-size: 15px;
                font-weight: 600;
                color: #231123;
                text-transform: uppercase;
                padding: 15px;
                background: #fff;
                margin-right: 0;
                border-radius: 0;
                border: none;
                position: relative;
                transition: all 0.5s ease 0s;
            }

            .tab .nav-tabs li a:before {
                content: "";
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: transparent;
                position: absolute;
                margin-left: -20px;
                bottom: 0;
                left: 50%;
                transition: all 0.2s ease 0s;
            }

            .tab .nav-tabs li a:hover:before,
            .tab .nav-tabs li.active a:before {
                background: #00cad5;
            }

            .tab .nav-tabs li a:after {
                content: "";
                width: 0;
                height: 1px;
                background: #00cad5;
                margin-left: -15px;
                position: absolute;
                bottom: 6%;
                left: 50%;
                transition: all 0.2s ease 0s;
            }

            .tab .nav-tabs li a:hover:after,
            .tab .nav-tabs li.active a:after {
                width: 35px;
            }

            .nav-tabs li.active a,
            .nav-tabs li.active a:focus,
            .nav-tabs li.active a:hover,
            .nav-tabs li a:hover {
                border: none;
                color: blue;
            }

            .tab .tab-content {
                font-size: 14px;
                color: #6f6c6c;
                line-height: 26px;
                padding: 20px 20px 20px 15px;
            }

            .tab .tab-content h3 {
                font-size: 24px;
                margin-top: 0;
            }

            @media only screen and (max-width: 479px) {
                .tab .nav-tabs li {
                    width: 100%;
                    margin-bottom: 5px;
                }
            }
        </style>


        <!-- nav start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" ><a href="#Section1" aria-controls="home" role="tab"
                                    data-toggle="tab">ประวัติการนัดพบ</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab"
                                    data-toggle="tab">COM-05</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab"
                                    data-toggle="tab">เอกสารที่เกี่ยวข้อง</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" table table-dark table-hover">

                                            <tr>

                                                <td>#</td>
                                                <td>วันที่เข้าพบ</td>
                                                <td>เวลา</td>
                                                <td>นัดพบอาจารย์</td>
                                                <td>สถานะ</td>
                                                <td>เพิ่มเติม</td>

                                            </tr>
                                        </thead>
                                        <tbody>


                                        <?php
           include '../../conn.php';
           $id_ptojrct = $_REQUEST["ID"];
               
					$sql = "SELECT
                    appoint.appoint_id,
appoint.project_id,
appoint.appoint_date_start,
appoint.appoint_date_end,
appoint.apooint_minute,
appoint.appoint_comment,
appoint.teacher_id,
appoint.appoint_status,
appoint.recorder,
teacher.teacher_name,
appoint_status.appoint_status_name,
appoint_status.appoint_status_class,
                    appoint.project_id
FROM
appoint
INNER JOIN project ON appoint.project_id = project.project_id
INNER JOIN teacher ON appoint.teacher_id = teacher.teacher_id
INNER JOIN appoint_status ON appoint.appoint_status = appoint_status.appoint_status_id
WHERE
appoint.project_id = '$id_ptojrct'
ORDER BY
appoint.appoint_id DESC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $strDate = $row["appoint_date_start"];
                            $strDatetoHourMinute = $row["appoint_date_start"];
                            $strDatetoHourMinute1 = $row["appoint_date_end"];
                            $newDate = date('Y-m-d\TH:i', strtotime($strDatetoHourMinute));
                            echo '<tr>                                                
                                            <td>' . $row["appoint_id"].'</td>
                                                <td>'.DateThai($strDate).'</td>
                                                <td>'. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.</td>
                                                <td>' . $row["teacher_name"].'</td>
                                                <td><h6><span class="badge bg-'. $row["appoint_status_class"].'">'. $row["appoint_status_name"].'</span></h6></td>
                                                <td><a class="btn btn-warning btn-sm" type="button"
                                                data-toggle="modal" data-target="#myModal'. $row["appoint_id"].'"><span class="fas fa-eye mr-2"
                                                            herf="#"></span>เพิ่มเติม</a></td>
                                            </tr>

                                            <div class="modal fade" id="myModal'. $row["appoint_id"].'" role="dialog">
                                        <div class="modal-dialog">
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">';
                                            
                                            $ider = $row["appoint_id"]; 
                                            $query2 = mysqli_query($con, "SELECT
                                            appoint.appoint_id,
                                            appoint.appoint_date_start,
                                            appoint.apooint_minute
                                            FROM
                                            appoint
                                            INNER JOIN project ON appoint.project_id = project.project_id
                                            WHERE
                                            appoint.appoint_id = '$ider'");
                                            while ($row1 = mysqli_fetch_array($query2)) { 

                                              
                                           
                                              echo'<h5 class="modal-title">หมายเลขการนัดพบ : ' . $row["appoint_id"].' </h5>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">

                                            
                                               
                                            <p>ต้องการเข้าพบ : '.DateThai($strDate).'   เวลา '. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.
                                            <p> อาจารย์ที่ปรึกษาโครงงาน : ' . $row["teacher_name"].'
                                            <p> รายละเอียด : ' . $row["appoint_comment"].'
                                           
                                            
                                            
                                            ';
                                            }
                                           
                                              echo'
                                            </div>
                                          </div>
                                        </div>
                                      </div>'; 
                                        };
                                        
                                           
                                    }
                                    
                                    $con->close();
                                    ?> 

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section2">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" table table-dark table-hover">

                                            <tr>

                                                <td>#</td>
                                                <td>วันที่เข้าพบ</td>
                                                <td>นัดหมายอาจารย์</td>
                                                <td>ตรงต่อเวลา</td>
                                                <td>คะแนน</td>
                                                <td>เพิ่มเติม</td>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>

                                                <td>#</td>
                                                <td>วันที่เข้าพบ</td>
                                                <td>นัดหมายอาจารย์</td>
                                                <td>ตรงต่อเวลา</td>
                                                <td>คะแนน</td>
                                                <td><a class="btn btn-warning btn-sm" type="button"
                                                        href="project_adviser.php"><span class="fas fa-eye mr-2"
                                                            herf="#"></span>เพิ่มเติม</a></td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">

                                <div class="btn-group mr-2 mb-2">
                                    <a href="' . $row[" file_link"].'" type="button" class="btn btn-primary"><span
                                            class="' . $row[" file_type_icon"].' mr-2"></span> ' .
                                        $row["file_type_name"].'</a>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fas fa-angle-down dropdown-arrow"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="file_edit.php?act=edit&ID=' . $row["
                                            file_id"].'"><span class="fas fa-edit mr-2"></span>แก้ไขไฟล์</a>
                                        <a class="dropdown-item" href="file_del.php?act=edit&ID=' . $row["
                                            file_id"].'"><span class="fas fa-trash-alt mr-2"></span>ลบ</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  nav end -->



        <?php include '../footer.php';?>

    </main>

    <!-- Core -->
    <script src="../../vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>

    <!-- Jarallax -->
    <script src="../../vendor/jarallax/dist/jarallax.min.js"></script>

    <!-- Smooth scroll -->
    <script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Count up -->
    <script src="../../vendor/countup.js/dist/countUp.umd.js"></script>

    <!-- Notyf -->
    <script src="../../vendor/notyf/notyf.min.js"></script>

    <!-- Charts -->
    <script src="../../vendor/chartist/dist/chartist.min.js"></script>
    <script src="../../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Simplebar -->
    <script src="../../vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="../../assets/js/volt.js"></script>


</body>

</html>
<?php }?>