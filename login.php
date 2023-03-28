<?php
session_start();
include "db_connection.php";


if(isset($_GET['uname']) && isset($_GET['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $en_no = validate($_GET['uname']);
    $password = validate($_GET['password']);
    if(empty($en_no) || empty($password)){
        header("Location: index.php?error=Please Fill Both Fields");
        exit();
    }
    $role = $_GET['role'];

    if($role=="select role"){header("Location: index.php?error=Please Select Role");}
    if($role=='Admin')
    {
        $sql = "SELECT * FROM admin_tab WHERE  user_name='$en_no' AND password='$password'";
    }
    if($role=='Student')
    {
        $sql = "SELECT * FROM student_tab WHERE  user_name='$en_no' AND password='$password'";
    }
    if($role=='Faculty')
    {
        $sql = "SELECT * FROM faculty_tab WHERE  user_name='$en_no' AND password='$password'";
    }
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if($row['user_name']===$en_no && $row['password']===$password){
            echo "Logged In!";
            $_SESSION['Enrollment_ID']=$row['user_name'];
            $_SESSION['password']=$row['password'];
            $_SESSION['id']=$row['id'];
            $_SESSION['first_name']=$row['first_Name'];
            $_SESSION['last_name']=$row['last_Name'];
            $_SESSION['gender']=$row['gender'];
            if($role=='Admin')
            {
                header("Location: Admin_deshboard.php");
            }
            else{

                header("Location: deshboard.php");
            }
            exit();
        }
    }
    else{
        header("Location: index.php?error=Incorrect UserName or Password");
        exit();
    }
}
else{
    header("Location: index.php?error=Please Enter UserName and Password");
    exit();
}
