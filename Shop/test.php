<?php

$host="localhost";
$user="root";
$password="";
$db="signup";

mysqli_connect($host,$user,$password);
mysqli_select_db($db);

if(isset($_POST['email'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="select * from register where user='".$email."'AND Pass='".$password."' limit 1";

    $result=mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }

}
?>
