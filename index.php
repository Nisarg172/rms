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
    <div class="logo">
       <img src="images/logo.png" alt="logo" style="height: 100px;width: 280px;">
    </div>
       <div class="main-div">
  
    <div class="box">
    <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }?>
        <form action="login.php" method="GET">
       
            <div class="img">
            <i class="fa-solid fa-user fa-5x"></i>
            </div>

            <div >
            <select class="form-select mb-3" aria-label="Default select example" id="role" name="role" onclick="handelSelect(this.value)">
                <option selected>select role</option>
                <option value="Student">Student</option>
                <option value="Faculty">Faculty</option>
                <option value="Admin">Admin</option>
            </select>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="uname" id="floatingInput" placeholder="User Name">
                <label for="floatingInput">User Name</label>
            </div>
    
            

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="d-grid gap-2 mt-3 ">
                <input type="submit" class="btn btn-primary btn-lg" value="Login" >
                
            </div>

            <div class="form-floating mt-2"  >
                <p style="display:none" id="link" >Don't have account <a href="/RAHULPROJECT/student_register.php"> Register now</a></p>
            </div>
        </form>
    </div>
   </div>

   </div>
</body>

<script>

    const handelSelect = (value)=>{
        var link = document.getElementById("link");
        if(value=="Student")
        {
            
            link.style.display = 'block';
        }
        else{
            link.style.display = 'none';
        }

    }

</script>

</html>
