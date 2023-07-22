<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email =$_POST['email'];
    $phone = $_POST['phone'];
    $des = $_POST['des'];

    // img upload code
    $img_name = $_FILES['img']['name'];
    $tmp_name =$_FILES['img']['tmp_name'];
    move_uploaded_file($tmp_name , "upload/".$img_name);
}

if (isset($_POST['download'])) {
    // Download File Code Hear
    $fileURL = 'upload/ <?php echo $img_name; ?>';
    $fileName = 'file.png';
    
    // Set the headers for force download
    header('Content-Type: application/octet-stream');
    header('Content-Transfer-Encoding: Binary');
    header("Content-disposition: attachment; filename=\"".$fileName."\"");
    
    // Download the file
    readfile($fileURL);
    
}



// 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    
<div class="container">
    <div class="card-area">
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="upload/<?php if (isset($img_name)) {
                echo $img_name;
            } ?> " alt="Card image" style="width:100%">


        <!-- <img src="upload/<?php if(isset($img_name)){ echo $img_name; } ?>" alt="" class="img-fluid card-img-top"> -->
        <form action="from.php" method="post" enctype="multipart/form-data">

            <div class="card-body">
                <h5 class="card-title"> Name: <?php if (isset($name)) { echo $name; } ?> </h5>
    
                <p class="text-danger text-bold">Email: <?php if (isset($email)) { echo $email; } ?> </p>
    
                <p class="text-fa-bold">Phone: <?php if (isset($phone)) { echo $phone; } ?> </p>
    
                <p class="card-text"> Title: <?php if(isset($des)){ echo $des; } ?></p>
    
                <!-- <a href="#" class="btn btn-primary">download</a> -->
                <button type="submit" name="download"> Download Now 2 </button>
                <input type="submit" name="download" value="Download Now">
            </div>
            </form>
    </div>
    </div>
</div>




















<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>