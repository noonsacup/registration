<?php
 
    require_once("connection.php");
    $query = " select * from records ";
    $result = mysqli_query($con,$query);
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>รายชื่อผู้ลงทะเบียน</title>
</head>
<body class="bg-dark">
 
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                      <center>  <a href="index.php">กลับ </a></center>
                            <tr>
                                <td> ลำดับที่ </td>
                                <td> ชื่อ-นามสกุล </td>
                                <td> อีเมล </td>
                                <td> เบอร์โทร </td>
                                <td> แก้ไข    </td>
                                <td> ลบ </td>
                                
                            </tr>
                            
                            <?php
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['User_ID'];
                                        $UserName = $row['User_Name'];
                                        $UserEmail = $row['User_Email'];
                                        $UserTel = $row['User_Tel'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><?php echo $UserTel ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $UserID ?>">แก้ไข</a></td>
                                        <td><a href="delete.php?Del=<?php echo $UserID ?>">ลบ</a></td>
                                        
                                    </tr>        
                            <?php
                                    }  
                            ?>                                                                    
                                  
 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>