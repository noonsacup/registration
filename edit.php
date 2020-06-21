<?php 

    require_once("connection.php");
    $UserID = $_GET['GetID'];
    $query = "select * from records where User_ID='".$UserID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['User_ID'];
        $UserName = $row['User_Name'];
        $UserEmail = $row['User_Email'];
        $UserTel = $row['User_Tel'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> แก้ไขข้อมูล</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $UserID ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" ชื่อ-นามสกุล " name="name" value="<?php echo $UserName ?>">
                                <input type="email" class="form-control mb-2" placeholder=" อีเมล " name="email" value="<?php echo $UserEmail ?>">
                                <input type="text" class="form-control mb-2" placeholder=" เบอร์โทรศัพท์ " name="tel" value="<?php echo $UserTel ?>">
                                <button class="btn btn-primary" name="update">บันทึก</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>