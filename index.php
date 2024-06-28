<?php
session_start();

if (isset($_SESSION["username"])) {
    header("location: main.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/styles.css">
    <title>Task List</title>
</head>

<body>
    <main>
        <div class="background"></div><!--Estilos fondo-->

        <div class="allContainer">
            <div class="backbox">
                <div class="loginBackBox">
                    <h3>
                        Have you already an <br> account?
                    </h3>
                    <p>Log in to enter this website</p>
                    <button id="login">Login</button>
                </div>
                <div class="registerBackBox">
                    <h3>Don't have an account yet?</h3>
                    <p>Sing up to enter this website </p>
                    <button id="register">Sign up</button>
                </div>
            </div>

            <div class="loginRegister">
                <form action="php/loginBe.php" class="login" method="POST">
                    <h2>Login</h2>
                    <input type="text" placeholder="username" name="username">
                    <input type="password" placeholder="password" name="password">
                    <button id="Enter">Enter</button>

                </form>


                <form action="php/registerUserBe.php" method="POST" class="singup">
                    <h2>Sign up</h2>
                    <input type="text" placeholder="Name" name="name">
                    <input type="text" placeholder="Surname" name="surname">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <button id="register">Sign up</button>
                </form>
            </div>

        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>