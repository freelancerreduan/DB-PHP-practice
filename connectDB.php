<?php 

//  Add to variable name  
 $name = $_POST['name'];
 $email =$_POST['email'];
 $phone = $_POST['phone'];
 $des = $_POST['des'];

  // img upload code
  $img_name = $_FILES['img']['name'];
  $tmp_name =$_FILES['img']['tmp_name'];
  move_uploaded_file($tmp_name , "upload/".$img_name);




//   Conncet Databage with My-SQL (Simple Code For Connect DB)

// $conn = new mysqli('localhost','root','','test'); // DB-Connection SQL-Command Main ('domin-name','parmetion','password','Database-Name')
// if ($conn -> connect_error) {
//     die('Connect faild : '.$conn-> connect_error);
// }else{
//     $stmt = $conn->prepare(" insert into registration(name,email,phone,des) values (?,?,?,?)"); // insert into (COLOM NAME+this table data store) + (table colum name ,Example: name .email . password etc) valuse (fild onojayi ??? mark dite hobe) ;
//     $stmt->bind_param("ssis",$name,$email,$phone,$des); // bind_param(",ssis ar jaigai,srting,int,double dite hobe ", variable name dite hobe, );
//     $stmt->execute();
//     echo "Registration Successful , Tomi aita korte peroso ,tomi Developer hote parba ."; // Data inport Successe Massege show korate hoi
//     $stmt->close();
//     $conn->close();
// }







// Fresh Code for database sent to data from user this website 
// Simple Change this code for workable ... use and Injoy your life  Simple

   // Condition hear 
   if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email =$_POST['email'];
    $phone = $_POST['phone'];


    $hostName = 'localhost'; // Domin Name hear
    $userName = 'root'; // hosting username
    $password =''; // hosing password
    $dbName = 'firstdb'; // database name hear

    // connect tha database
    // $conn = mysqli_connect($hostName, $userName , $password , $dbName);
    $conn = new mysqli($hostName, $userName , $password , $dbName);
    $sql = "INSERT INTO registration(name,email,phone) values ('$name','$email','$phone')";

    mysqli_query($conn,$sql);
    echo "Data Submited Successfullu";
}



?>