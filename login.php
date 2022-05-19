<?php
$email=$_POST['email'];
$password=$_post['password'];

$conn= new mysqli("localhost","root","test");
if($conn->connect_error){
    die("failed to connect:".$conn->connect_error);

}
else{
    $stmt=$conn->prepare("select * from registration where email =?");
    $stmt ->bind_param("s",$email);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result =$num_rows>0){
       $data=$stmt_result->fetch_assoc();
       if($data['password']===$password){
           echo"<h4>login successful<h4>
       }
       else{
        echo"<h4>invalid email or password</h2>";
    
    }else{
        echo"<h4>invalid email or password</h2>";
    }
}
>