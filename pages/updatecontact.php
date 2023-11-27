<?php 
require "connectDB.php";
include "navbar.php";
$id=$_GET['id'];
$username=$_POST['username'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['emailuser'];
$useraddress=$_POST['address'];
$requete = "SELECT * FROM `contacts` WHERE id='$id'";
$query=mysqli_query($connect,$requete);
$showdata = mysqli_fetch_assoc($query);

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
    <link rel="stylesheet" href="addcontact.css">
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body >
    
    <section class="h-100 border-0">
        <div class="signupform h-100">
            <p class="fw-bold ">Welcome to Youconnect, Let's grow your network</p>
            <div class="my-2 mx-5">
            <form>
            <div class="mb-3 ">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control" <?php echo $showdata['User Name'] ?>>
            </div>
            <div class="mb-3 ">
                <label  class="form-label">Phone number</label>
                <input type="text" class="form-control" value="<?php echo $showdata['phone_number'] ?>">
            </div>
            <div class="mb-3 ">
                <label  class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                value="<?php echo $showdata['email']?>">
            </div>
            <div class="mb-3 ">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" value="<?php echo $showdata['addresse'] ?>" >
            </div>
            <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-warning rounded-pill text-light fw-semibold px-4">Edit</button></div></div>
            </form>
        </div>
        </div>
    </section>
<?php 
include "footer.php";
?>
</body>
</html>