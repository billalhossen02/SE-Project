<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if(!empty($firstname) || !empty($lastname) || !empty($email) || !empty($password)){
    $host ='localhost';
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "signup";  //database name
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if(mysqli_connect_error()){
        die('Connect error('.mysqli_connect_error().')'. mysqli_connect_error());
    }
    else{
        $sql = "INSERT Into register (firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')";
        if($conn->query($sql)){
            echo "Signed up successfully";
        }
        else{
            echo "Error:".$sql."<br>".$conn->error;
        }
        $conn->close();
    }
}
else{
    echo "All field are required";
    die();
}
?>
