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





  // ======================== Step 1 Way=========================

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






  // ======================== Step 2 Way=========================
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








  // ======================== Step 3 Way=========================

  // $conn = mysqli_connect($hostName, $userName , $password , $dbName);  // jaikhane jei variable bosano ase ,oijai just oigola direk dilei hobe,,,
  $conn = mysqli_connect("localhost","root" , "" , "firstdb");
  if (!$conn) {
    die("Connection Faild , So Very Sad!!! ");
  }






  // ======================== Step 4 Way=========================
  $hostName = 'localhost'; // Domin Name hear
  $userName = 'root'; // hosting username
  $password =''; // hosing password
  $dbName = 'firstdb'; // database name hear

  // connect tha database
  // $conn = mysqli_connect($hostName, $userName , $password , $dbName);
  $conn = mysqli_connect($hostName, $userName , $password , $dbName);

  // echo "Data Submited Successfullu";



 // ======================== Step 5 Best Way=========================
// Database Connection Best Way...... connection page incluid
class  dbConn{
    private $conn;

    public function __construct()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'app_php';

        $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        if (!$this->conn) {
            die("Connection Faild !! Please Insure Your Code");

        }else{
            echo 'Connection Succesfull ';
        }
    }
}
// this code incluid jei page connect korbo oi page add dite hobe.
//<?php
//include_once("function.php");
//$obConnect = new dbConn();
//?>







?>











