<?php 
// include('connectDB.php');
include_once("connectDB.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>




    <div class="container">        
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                <th scope="col">ID No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                </tr>
            </thead>

            <!-- php query loop start hear -->
            <?php 
                $query = mysqli_query($conn," select * from registration");
                while ($row = mysqli_fetch_all($query)) 
                {}
                    
            ?>


            <tbody>
                <tr>
                    <th scope=""> <?php echo $row['id']; ?> </th>
                    <th scope=""> <?php echo $row['name']; ?> </th>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <!-- <td> <img src="upload/<?php echo $row['$img_name']; ?>" alt=""> </td> -->
                </tr>
            </tbody>
            <?php ?>
        </table>
    </div>










</body>
</html>



