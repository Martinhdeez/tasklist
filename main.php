<?php
    session_start();

    if(!isset($_SESSION["username"])){
        echo '
            <script>
                alert("Please, login with your username");
                window.location= "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
    $username = $_SESSION["username"];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/stylesMain.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">
    <title>Task list</title>
</head>
<body>
    <div class="container">

        <div class="profile">
            <div id="date"><!--fecha puesta con js metodo innerhtml localtime--></div>
            <h1>Welcome, <?php echo $_SESSION["username"];?></h1>
            <span>Go archieve your goals</span>
        </div>

        <div class="addTask">
            <input type="text" id="input" placeholder="add task">
            <i id="enter" class="fas fa-plus-circle"></i>
        </div>
        <div class="taskSections">
            <h3>These are your pending tasks</h3>
            <ul id="list">
            </ul>
        </div>    
    </div>





    <a href="php/closeSession.php">Sing off</a>
    <script src="assets/js/main.js"></script>
</body>
</html>