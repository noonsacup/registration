<?php
 
    require_once("connection.php");
 
    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['tel']))
        {
            echo ' กรุณากรอกข้อมูล ';
        }
        else
        {
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $UserTel = $_POST['tel'];
 
            $query = "insert into records(User_Name, User_Email, User_Tel) values('$UserName','$UserEmail','$UserTel')";
            $result = mysqli_query($con,$query);
 
            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }
 
 
 
?>