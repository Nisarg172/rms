<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['Enrollment_ID']))?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>



<body>

    <div class="main_div flex">
        <?php
  include "left_nevbar.php";
  ?>



        <div class="right_div">


            <div class="container p-3 flex">
            <h2 style="text-align: center;">Faculty Details</h2>
                <div class="form_container">
                    
                <form>
                   
                    <div class="input_group">
                    <label >User Name : </label>
                    <input type="text" name="userName" placeholder="User Name">
                    </div>

                    <div class="input_group">
                    <label >First Name : </label>
                    <input type="text" name="firstName" placeholder="First Name">
                    </div>

                    <div class="input_group">
                    <label >Last Name : </label>
                    <input type="text" name="lastName" placeholder="Last Name">
                    </div>

                    <div class="input_group">
                    <label >Gender : </label>
                    <input type="radio" name="gender" value="Male"><label> Male </label>
                    <input type="radio" name="gender" value="Male"><label> Female </label>
                    </div>
                    
                    <div class="input_group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div><

            </div>
        </div>





    </div>

</body>

</html>