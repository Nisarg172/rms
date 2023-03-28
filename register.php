<?php
session_start();
include "db_connection.php";

if(isset($_GET['fname']) && isset($_GET['password']) && isset($_GET['lname']) && isset($_GET['eno']) && isset($_GET['gender'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $fname = validate($_GET['fname']);
    $lname = validate($_GET['lname']);
    $pass = validate($_GET['password']);
    $en_no = validate($_GET['eno']);
    $Gender = validate($_GET['gender']);
    if(strlen($pass)<=15 && strlen($pass)>=8 && strlen($en_no)==12)
    {
        $sql = "INSERT INTO student_tab (first_Name,last_Name,gender,user_name,password)
        VALUES ('$fname', '$lname', '$Gender','$en_no','$pass')";
        // $sql = "INSERT INTO student_tab (First_Name,Last_Name,Gender,Enrollment_ID,Password)
        // VALUES ('nisarg', 'rakholiya', 'male','200160116517','12345678')";
        // $result = mysqli_query($conn,$sql);
        if ($conn->query($sql) === TRUE)
        {   
        //     echo '<<script>alert("Your Data Added Successfully..!")</script>';
            header("Location: login.php");
        }
        else{
            header("Location: student_register.php?error=User already exits..!");
        }   
    }
    else{
        header("Location: student_register.php?error=Password Must Be 8 letter long and en_no 12");
    }
}
else{
    header("Location: student_register.php?error=Something else");
}