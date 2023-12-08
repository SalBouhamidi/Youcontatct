<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="contact.css">

    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
<?php 
    include "navbar.php";
?>
    <section class="contactpage d-flex justify-content-evenly">
    <div class="w-100 mt-5 ms-4" ><a href="addcontact.php"><button type="button" class=" btn btn-warning rounded-pill text-light fw-semibold ">Add contact</button></a></div>
    <div class="d-flex justify-content-start me-5">
        <img class="img-fluid w-75"src="../images/contact.png" alt="">
    </div>
    <div class="w-75 mt-5 me-4 d-flex justify-content-end"><a href="viewcontact.php"><button type="button" class="btn btn-warning rounded-pill text-light fw-semibold ">View contacts</button></a></div>


    </section>





    <?php 
    include "footer.php"
    ?>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>