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
// Database Connection BEST Way...... Connection page incluid

// Create a Simple Class
 class crudApp{
    
    // private data Connection header with $conn;
    private $conn;

    // publice funtion __construct() for localhost connection information hear for database
    public function __construct()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'app_php';

        // $this->conn added all variable hear
        $this->conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        // Condition Chak for connection right ase kina ? jodi nah thake tahole Error asbe..
        if(!$this->conn){
            die("Connection Faild!");
        }
    }

    // this funtion for variable a Store All Data ,, ait input fild a theke name ar sahajje dhorte hobe....( add_data )ati funtion name hear.. AND $data ati dara ARGUMENT Pass korte hoi,,
    public function add_data($data){
        $name = $data['name'];
        $phone = $data['phone'];
        $email = $data['email'];
        
        // img file upload hear ...
        $img = $_FILES['img']['name'];
        $tmp_name =$_FILES['img']['tmp_name'];
        move_uploaded_file($tmp_name , "upload/".$img);

        // Query For INSERT DATA from Database
        $query = "INSERT INTO student(name,phone,email,img) VALUE ('$name',$phone,'$email','$img')";

        // Condition Chack hear for connection Database....
        if(mysqli_query($this->conn, $query)){
            return "Connection Succesfully";
        }
    }
 }
// CONNECTION SUCCESSFULLY END HRAR======================================









?>











