<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['Enrollment_ID']))?>


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    
    
<body>

  <div class="main_div flex">
  <?php
  include "left_nevbar.php";
  ?>


  
    <div class="right_div">

      
      <div class="container p-3">
         
      
      <a class="btn btn-primary mb-2" href="addFaculty.php">
        Add new faculty
      </a>

      
         
         
         <?php
            include "db_connection.php";
            $sql = "SELECT * FROM faculty_tab";

            $result = mysqli_query($conn,$sql);
            echo "<table class='table table-success table-striped'>";
            echo "<tr> 
            <th>id</th>
            <th>User_name</th>
            <th>First_name</th>
            <th>Last_name</th>
            <th>gender</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>";
            foreach($result as $row)
            {
            
              echo "<tr> 
              <td>$row[id]</td>
              <td>$row[user_name]</td>
              <td>$row[first_Name]</td>
              <td>$row[last_Name]</td>
              <td>$row[gender]</td>
              <td><i style='color:blue' class='fa-regular fa-pen-to-square fa-2x'></i></td>
              <td><i style='color:red' class='fa-sharp fa-solid fa-trash fa-2x'></i></td>
              </tr>";
            }

            echo "</table>";
        ?>
      </div>
    </div>


   


  </div>  

</body>
</html>




