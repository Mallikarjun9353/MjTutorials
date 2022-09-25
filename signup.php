<? php

$servername = " localhost " ;
$username = "root";
$password = "root@123" ;
$dbname = " jarvisdb" ;
$conn = new mysqli ( $servername , $username , $password , $dbname ) ;
if ( $conn- > connect_error ) {
    die ( " connection failed " ) ;
}

$name = $_POST [ " name " ] ;
$email = $_POST [ " email " ] ;
$password = $_POST [ " password " ] ;
$salt = "jarvisdb" ;
$password_encrypted shal ( $password.$salt ) ;
                    
$sql = " INSERT INTO login( name , email , password )
VALUES ( ' $name ' , ' $email ' , ' $password_encrypted ' ) " ;

if ( $conn- > query ( $sql ) === TRUE ) {
     ? >
     < script >
         alert ( ' Values have been inserted ' ) ;
    < / script >
    < ? php
}
else{
    ?>
    < script >
         alert ( ' Values did not insert ' ) ;
    < / script >
    < ? php
}

?>
/*
<!-- <?php
// error_reporting(0);
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


$conn = new mysqli('localhost','root','','jarvisdb');
$s = "select * from login where name='$name'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num==1){
    
}
else if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);}
    else{
        $stmt=$conn->prepare("insert into login(name,email,password)values(?, ?, ?)");
        $stmt->bind_param("sss",$name ,$email ,$password);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

?> -->*/