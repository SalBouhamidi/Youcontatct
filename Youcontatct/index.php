<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
<nav class=" ournavbar d-flex justify-content-between">
  <div class="container-fluid py-3">
    <a class="navbar-brand fs-4" href="#"><span>You</span>connect</a>
   </div>
    <div class="ournavbar_button d-flex w-25 justify-content-evenly py-3">
        <a href="pages/login.php"><button type="button" class=" btn btn-warning rounded-pill text-light fw-semibold px-4">Log in </button></a>
        <a href="pages/signup.php"><button type="button" class="btn btn-warning rounded-pill text-light fw-semibold px-3">Sign up </button></a>
        
    </div>
</nav>

<style>
    
    .ournavbar{
        background-color: rgba(16, 69, 121, 1);
        color:white;
    }
    .navbar-brand span{
        color:rgba(240, 188, 2, 1);
    }
    .navbar-brand{
        font-family: 'Inknut Antiqua', serif;
    }

</style>
    <section class="herosection d-flex w-100 ">
        <div class="w-50 container d-flex align-items-center ps-5 mb-5">
            <p class="herosection_paragraph f fs-2 align-itmes-center"> Save Your  Network with <span>You</span>contact.<br>
                The website that saves and help you to 
                growth your network.
            </p>
        </div>
        <div class="w-50">
          <img class="img-fluid"src="images/homepage.png" alt="image of people working with each other">
        </div>
       
    </section>
    <?php 
    include "pages/footer.php"
    ?>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>