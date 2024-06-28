<?php
    session_start();
    include 'backendConect.php';
    
    $username= $_POST['username'];
    $password = $_POST['password'];
    $password= hash('sha512', $password);
    
    $loginValidate = mysqli_query($conection,"SELECT * FROM usersdb WHERE username='$username' AND password='$password'");

    if( mysqli_num_rows($loginValidate)> 0){
        $_SESSION['username'] = $username;
        header("location: ../main.php");
        exit;
    }else{
        echo'
            <script>
                alert("Username or password does not exist");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }
