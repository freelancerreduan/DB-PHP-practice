
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>


<div class="container">

    <h1 class="text-center text-danger">Hello Freelancer Reduan</h1>
    <h3 class="text-danger text-center">Student Id Card From </h3>

    <form action="connectDB.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Name </label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <textarea name="des" id="" cols="30" rows="10" class="form-control" required></textarea>
            <!-- <input type="text" class="form-control" id="des" name="des" > -->
        </div>

        <input type="file" name="img" id="img" class="form-control"> <br>
        <!-- <input type="submit" name="create_ac" value="Login Now"> -->
        <button type="submit" name = "submit" class="btn btn-primary">Submit Login</button>
    </form>
</div>





</body>
</html>