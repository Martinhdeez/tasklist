<?php

include ("backendConect.php");

// Recibiendo los datos del formulario
$name = $_POST["name"];
$surname = $_POST["surname"];
$username = $_POST["username"];
$password = $_POST["password"];

$password = hash("sha512", $password);

$query = "INSERT INTO usersdb(name, surname, username, password)
        VALUES('$name', '$surname', '$username', '$password')";

$usernameVerify = mysqli_query($conection , "SELECT * FROM usersdb WHERE username='$username' ");

if(mysqli_num_rows($usernameVerify) > 0){
    echo '
        <script>
            alert("This username has already been registered, please try again.");
            window.location.href = "../index.php";
        </script>    
    ';
    exit(); 
} 

$ejecution = mysqli_query($conection , $query);

if($ejecution){
    echo '
        <script>
            alert("The user has been registerd correctly");
            window.location.href = "../index.php";
        </script>
    ';
}else{
    echo '
        <script>
            alert("Thera was a problem with de registration");
            window.location.href = "../index.php";
    ';
}

mysqli_close($conection);   


