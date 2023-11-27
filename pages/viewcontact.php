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
    <link rel="stylesheet" href="viewcontact.css">
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
    
    <?php 
    require "connectDB.php";
    $requete = "SELECT contacts.id, contacts.name , contacts.addresse, contacts.email, contacts.phone_number FROM `contacts` ";
    $query=mysqli_query($connect,$requete);
    while($data=mysqli_fetch_assoc($query)) { 
        ?>
        <section class=" border-0">
        <div class="card mt-3 mb-5 mx-4 border border-0 d-flex flex-row-reverse ">
            <div class="w-25  d-flex justify-content-end">
                <a href="updatecontact.php?<?php $data['id'] ?>"><i class="fa-solid fa-pen-to-square " style="color: #132d4f;"></i></a>
                <a href="delete.php?id=<?= $data['id'] ?>"> <i class="fa-solid fa-trash mx-2" style="color: #132d4f;"></i></a>
            </div>
        <div class="w-100">
        <button type="submit" class="card_btn btn btn-warning rounded-pill text-light fw-semibold text-start    px-3"><?php echo $data['name'] ?></button>
            <div class="card-body mx-5 fw-bold">
                    <p> <?php echo $data['addresse'] ?> </p>
                    <p> <?php echo $data['email']?> </p>
                    <p> <?php echo $data['phone_number']?></p>
            </div>
        </div></div>
        <?php } ?>
<?php 
include "footer.php";
?>
</body>
</html>
