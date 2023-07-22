<?php 
 $name = $_POST['name'];
 $email =$_POST['email'];
 $phone = $_POST['phone'];
 $des = $_POST['des'];





//   Conncet Databage with My-SQL

$conn = new mysqli('localhost','root','','test');
if ($conn -> connect_error) {
    die('Connect faild : '.$conn-> connect_error);
}else{
    $stmt = $conn->prepare(" insert into registration(name,email,phone,des) values (?,?,?,?)");
    $stmt->bind_param("ssis",$name,$email,$phone,$des);
    $stmt->execute();
    echo "Registration Successful , Tomi aita korte peroso ,tomi Developer hote parba .";
    $stmt->close();
    $conn->close();
}

?>