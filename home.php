<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['Enrollment_ID'])){
    ?>
    
    <!DOCTYPE>
    <html>
    <<head>
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <<body>
        <H1>Hello,<?php echo $_SESSION['Enrollment_ID'];?>
        <a href="logout.php">Logout</a>
    </body>
    </html>
    
    <?php
}
else{
    header("Location: index.php");
    exit();
}
?>