<?php 
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="mx-5">
        <div class="signupform mx-5 h-75 mb-3">
            <a class="navbar-brand fs-4" href="#"><span>You</span>connect</a>
            <div class="my-2 mx-5">
            <form>
            <div class="mb-3 ">
                <label for="exampleInputUsername" class="form-label">User Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="d-flex justify-content-between">
            <p>You don't have an account ?<a class="text-warning" href="signup.php">sign up</a></p>
            <button type="submit" class="btn btn-warning rounded-pill text-light fw-semibold px-4">Log up</button></div>
            </form>
        </div>
        </div>
    </section>
<?php 
include "footer.php";
?>
</body>
</html>