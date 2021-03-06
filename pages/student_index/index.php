<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){  

	  Header("Location: ../../login.php"); 

}else{?>
<?php include '../../conn.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
    <?php include '../title.php';?>

    <?php include '../../meta.php';?>


    <!-- Fontawesome -->
    <link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="../../css/volt.css" rel="stylesheet">
    <link href='../../lib/main.css' rel='stylesheet' />
    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <script src='../../lib/main.js'></script>
    <script src='../../lib/locales-all.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var initialLocaleCode = 'th';
            var localeSelectorEl = document.getElementById('locale-selector');
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                initialDate: '<?php echo date("Y-m-d") ?>',
                locale: initialLocaleCode,
                buttonIcons: false, // show the prev/next text
                weekNumbers: false,
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                dayMaxEvents: true, // allow "more" link when too many events
                events: [
                    
                    <?php
                    $id_ptojrct =$_SESSION["ProjectID"];
					$sql = "SELECT
                    appoint.appoint_id,
                    appoint.appoint_comment,
                    appoint.appoint_date_start,
                    appoint.appoint_date_end,
                    teacher.teacher_name,
                    appoint.appoint_status,
                    appoint_status.appoint_status_name,
                    appoint_status.color_calendar
                    FROM 
                    appoint
                    INNER JOIN teacher ON appoint.teacher_id = teacher.teacher_id
                    INNER JOIN appoint_status ON appoint.appoint_status = appoint_status.appoint_status_id
                    WHERE
                    appoint.project_id = '$id_ptojrct' AND
                    appoint.appoint_status  NOT IN (3);";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                    
                    echo"
                    
                    {
                        title: '" . $row["teacher_name"]. " [" . $row["appoint_status_name"]. "]',
                        start: '" . $row["appoint_date_start"]. "',
                        end: '" . $row["appoint_date_end"]. "',
                        color: '" . $row["color_calendar"]. "',
                    },

                    ";
							 
						}
					}
					$con->close();
					?> 




                ]
            });

            calendar.render();

            // build the locale selector's options
            calendar.getAvailableLocaleCodes().forEach(function (localeCode) {
                var optionEl = document.createElement('option');
                optionEl.value = localeCode;
                optionEl.selected = localeCode == initialLocaleCode;
                optionEl.innerText = localeCode;
                localeSelectorEl.appendChild(optionEl);
            });

            // when the selected option changes, dynamically change the calendar option
            localeSelectorEl.addEventListener('change', function () {
                if (this.value) {
                    calendar.setOption('locale', this.value);
                }
            });

        });
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #top {
            background: #eee;
            border-bottom: 1px solid #ddd;
            padding: 0 10px;
            line-height: 40px;
            font-size: 12px;
        }

        #calendar {
            max-width: 700px;

            margin: 20px auto;
            padding: 0 5px;
        }
    </style>
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

    <?php include '../menu_stu.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="index.php"><span class="fas fa-home"></span></a></li>
                               
                                <li class="breadcrumb-item active" aria-current="page">หน้าหลัก</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar.php';?>
                </div>
            </div>
        </nav>



        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
                <!--  <div id='top'>

                    Locales:
                    <select id='locale-selector'></select>

                </div> -->

                <div class="row">


                    <div class="col-lg-8 col-sm-12">

                        <div id='calendar'></div>

                    </div>


                    <div class="col-lg-4 col-sm-12">
                        <form action="appoint_ac.php" method="post">

                            <div class="mb-2">
                                <h6>แบบฟอร์มนัดพบอาจารย์ที่ปรึกษาโครงงาน</h6>
                            </div>
                            <!-- Form -->
                            <div class="mb-2">
                                <label for="present">สิ่งที่นำเสนอ</label>
                                <textarea maxlength="255" class="form-control" id="present" name="present"
                                    aria-describedby="present-describ"></textarea>
                                <small id="present-describ"
                                    class="form-text text-muted">กรอกรายละเอียดที่ขอเข้าพบอาจารย์ที่ปรึกษา</small>
                            </div>
                            <div class="mb-2">
                                <label class="my-1 mr-2" for="teacher">อาจารย์ที่ปรึกษา</label>
                                <select class="form-select" id="teacher" name="teacher" aria-label="Default select example">
                                    <option selected>เลือกอาจารย์</option>
                                    <?php include '../../conn.php';?>
                                    <?php
                                    $id_ptojrct =$_SESSION["ProjectID"];
					$sql = "SELECT
                    project.project_id,
                    project.project_name,
                    project.project_adviser1,
                    teacher.teacher_name
                    FROM
                    project
                    INNER JOIN teacher ON  project.project_adviser1 = teacher.teacher_id
                    WHERE
                    project.project_id = '$id_ptojrct' ";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<option value="'. $row["project_adviser1"].'">'. $row["teacher_name"].'</option>';
                            
                          
							 
						}
					}
					$con->close();
					?>
                                    <?php include '../../conn.php';?>
                                    <?php
                                     $id_ptojrct =$_SESSION["ProjectID"];
					$sql = "SELECT
                    project.project_id,
                    project.project_name,
                    project.project_adviser2,
                    teacher.teacher_name
                    FROM
                    project
                    INNER JOIN teacher ON  project.project_adviser2 = teacher.teacher_id
                    WHERE
                    project.project_id = '$id_ptojrct'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $t = $row["project_adviser2"];

                                if ($t == 3) {
                            echo '';
                        }  else {
                            echo '<option value="'. $row["project_adviser2"].'">'. $row["teacher_name"].'</option>';
                        }
                            
                          
							 
						}
					}
					$con->close();
					?>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label for="date_start">วันที่และเวลาที่เข้าพบ (เริ่มต้น)</label>
                                <input type="datetime-local" class="form-control" id="date_start" name="date_start"
                                    aria-describedby="date_start-describ">
                                <small id="date_start-describ"
                                    class="form-text text-muted">เลือกวันที่และเวลาที่ต้องการเข้าพบ (เริ่มต้น)</small>
                            </div>
                            <div class="mb-2">
                                <label for="date_end">ใช้เวลาในการเข้าพบกี่นาที</label>
                                <input type="number" min="1" max="59" class="form-control" id="date_end" name="date_end" placeholder="จำนวนนาที"
                                    aria-describedby="date_end-describ" >
                                <small id="date_end-describ"
                                    class="form-text text-muted">กรอกจำนวนระยะเวลานาทีที่เข้าพบ</small>
                            </div>


                            <input type="text" class="form-control" id="id_project" name="id_project"
                                    aria-describedby="date_end-describ"  value="<?php echo  $_SESSION["ProjectID"]; ?>" hidden>
                            <input type="text" class="form-control" id="record" name="record"
                                    aria-describedby="date_end-describ"  value="<?php echo  $_SESSION["UserID"]; ?>" hidden>

                            <button class="btn btn-block btn-success" type="submit">บันทึก</button>






                        </form>

                    </div>

                </div>

            </div>
        </div>



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