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

    if (isset($_POST['signup'])) {
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (!empty($email) && !empty($fullname) && !empty($username) && !empty($password)) {
            require_once 'include/database.php';
            $sqlState = $pdo->prepare('INSERT INTO user VALUES(null,?,?,?,?)');
            $sqlState->execute([$username, $fullname, $email, $password]);
            header('location:login.php');
        } else {
            echo "Tous les champs sont obligatoire !";
        }
    }
    ?>
    <div class="container-p">
        <div class="container">
            <div class="box">
                <div class="heading"></div>
                <h3 style="text-align: center;color:grey; padding-left:40px;padding-right:40px;"><strong>Sign up to see photos and videos from your friends.</strong></h3>
                <form method="POST" class="login-form" enctype="multipart/form-data">
                    <div class="field">
                        <input id="username" type="email" name="email" placeholder="email" />
                        <label for="email">email</label>
                    </div>

                    <div class="field">
                        <input id="username" type="name" name="fullname" placeholder="Fullname" />
                        <label for="fullname">Fullname</label>
                    </div>

                    <div class="field">
                        <input id="username" type="name" name="username" placeholder="Phone number, username, or email" />
                        <label for="username">Username</label>
                    </div>

                    <div class="field">
                        <input id="password" type="password" name="password" placeholder="password" />
                        <label for="password">Password</label>
                    </div>
                    <!-- <input type="submit" value="Login" class="login-button" name="login"> -->
                    <!-- <p class="small">People who use our service may have uploaded your contact information to Instagram. Learn More</p>
                    <p class="small">By signing up, you agree to our Terms , Data Policy and Cookies Policy .</p> -->
                    <div class="field">
                        <input type="file">
                    </div>
                    <button class="login-button" title="login" name="signup">Sign Up</button>
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
                <p>Have an account? <a class="signup" href="login.php">Login</a></p>
            </div>
        </div>
    </div>
</body>

</html>