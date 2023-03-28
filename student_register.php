<!DOCTYPE html>
<html>
    <head>
        <title>RMS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
   <div class="container-fluid">
    <div class="main-div">

   
    <div class="box">
    <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }?>
        <form action="register.php" method="GET">
       
            <div class="img">
            <i class="fa-solid fa-user fa-5x"></i>
            </div>

            

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="fname"
                id="floatingInput" placeholder="First Name">
                <label for="floatingInput">First Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="lname" placeholder="Last Name"
                id="floatingInput" >
                <label for="floatingInput">Last Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="eno" placeholder="Enrollment Number"
                id="floatingInput" >
                <label for="floatingInput">Enrollment Number</label>
            </div>
    
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="password" placeholder="Password"
                id="floatingInput" >
                <label for="floatingInput">Password</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password"
                id="floatingInput" >
                <label for="floatingInput">confirm Password</label>
            </div>


            <div class="form-floating mb-3 " style="display:flex">
                Gender : 
                <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="gender" name="Male" value="Male"> Male
                </div>
                
                <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" name="Female" value="Female"> Female
               
            </div>
            </div>
            


            <div class="d-grid gap-2 mt-3 ">
                <input type="submit" class="btn btn-primary btn-lg" value="Register" >
                
            </div>

            <div class="form-floating mt-2"  >
                <p id="link" >Already have Account ? <a href="/RAHULPROJECT/index.php"> sign up now</a></p>
            </div>
          
        </form>
    </div>
   </div>

   </div>
</body>

</html>