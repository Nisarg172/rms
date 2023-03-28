<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['Enrollment_ID'])){
    ?>

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
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Result Management System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Study Material</a>
              </li>
            
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <a href="logout.php" class="btn btn-outline-primary mx-2">Logout</a>
          </div>
        </div>
      </nav>

      <p class="name" >Hello 🖐 <?php echo $_SESSION['Enrollment_ID'];?></p>
      <div class="main-div ">
        
        <div class="card mx-3" style="width: 18rem;">
            <img  src="https://www.wikihow.com/images/thumb/f/f2/Prepare-for-an-Exam-Step-2-Version-2.jpg/aid696296-v4-728px-Prepare-for-an-Exam-Step-2-Version-2.jpg.webp" class="card-img-top" alt="...">
            <div class="card-body">

              <a href="#" class="btn btn-primary">Start Exame</a>
            </div>
          </div>

          <div class="card mx-3" style="width: 18rem;">
            <img  src="view result.png" alt="...">
            <div class="card-body">

              <a href="#" class="btn btn-primary">View Result</a>
            </div>
            
          </div>

          
          <div class="card mx-3" style="width: 18rem;">
            <img  src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_497254373_155996.jpg" alt="...">
            <div class="card-body">

                <input type="text" class="form-control mb-2"  id="inputPassword2" placeholder=" Ask question ?">
              <a href="#" class="btn btn-primary">Ask question</a>
            </div>
            
          </div>
      </div>

</body>
</html>

<?php
}
else{
    header("Location: index.php");
    exit();
}
?>