<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/login.css">
</head>

<body>
    <?php

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (!empty($username) && !empty($password)) {
            require_once 'include/database.php';

            $sqlState = $pdo->prepare('SELECT * FROM user WHERE username=? AND password=?');
            $sqlState->execute([$username, $password]);
            if ($sqlState->rowCount() >= 1) {
                session_start();
                $_SESSION['user'] = $sqlState->fetch(PDO::FETCH_ASSOC);
                echo $_SESSION['user']['username'];
                header('location: profile.php');
            } else {
                echo "incorrect";
            }
        } else {
            echo "tous les champs sont obligatoire";
        }
    }
    ?>
    <div class="container-p">
        <img src=".//img/phone.png" alt="">

        <div class="container">
            <div class="box">
                <div class="heading"></div>
                <form method="POST" class="login-form">
                    <div class="field">
                        <input id="username" type="name" name="username" placeholder="Phone number, username, or email" />
                        <label for="username">Phone number, username, or email</label>
                    </div>
                    <div class="field">
                        <input id="password" type="password" name="password" placeholder="password" />
                        <label for="password">Password</label>
                    </div>
                    <!-- <input type="submit" value="Login" class="login-button" name="login"> -->
                    <button class="login-button" title="login" name="login">Log In</button>
                    <div class="separator">
                        <div class="line"></div>
                        <p>OR</p>
                        <div class="line"></div>
                    </div>
                    <div class="other">
                        <button class="fb-login-btn" type="button">
                            <i class="fa fa-facebook-official fb-icon"></i>
                            <span class="">Log in with Facebook</span>
                        </button>
                        <a class="forgot-password" href="#">Forgot password?</a>
                    </div>
                </form>
            </div>
            <div class="box">
                <p>Don't have an account? <a class="signup" href="signUp.php">Sign Up</a></p>
            </div>
        </div>
    </div>
</body>

</html>