<?php

$file_idd = $_REQUEST["ID"];



$sql = "SELECT
filee.file_id,
filee.project_id,
filee.file_type,
file_type.file_type_name,
filee.file_link
FROM
filee
INNER JOIN file_type ON filee.file_type = file_type.file_type_id
WHERE
filee.file_id = '$file_idd'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
                <form action="file_edit_ac.php" method="post">
                    <div class="row">
                        
                            <div class="form-group">
                                <label for="filee">ประเภทไฟล์</label>
                                <select class="form-select" id="filee" name="filee">
                                    <option value="<?php echo $file_type; ?>"><?php echo $file_type_name; ?></option>

                                   <?php
                                  include '../../conn.php'; 
					$sql = "SELECT
                    file_type.file_type_id,
                    file_type.file_type_name
                    FROM
                    file_type
                    ORDER BY
                    file_type.file_type_id ASC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<option value="'. $row["file_type_id"].'">'. $row["file_type_name"].'</option>';
                            
                          
							 
						}
					}
					$con->close();
					?>
                                   
                                </select>
                            </div>
                        
                    </div>
                    <div class="row">
                      
                            <div class="form-group">
                                <label for="filee_url">URL ไฟล์เอกสาร</label>
                                <input class="form-control" id="filee_url" name="filee_url" type="url"
                                    placeholder="กรอกลิงค์เอกสาร" value="<?php echo $file_link; ?>" required>
                            </div>
                        
                        
                            <input type="text" name="file_id" id="file_id"
                            value="<?php echo  $file_id; ?>" hidden>
                    </div>
                    <div class="mt-3">
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                            </div>
                </form>