<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/profile.css">
</head>

<body>
    <?php
    include_once 'include/navbar.php';
    require_once 'include/database.php';
    session_start();
    $id = $_SESSION['user']['id'];
    $sqlState = $pdo->prepare('SELECT * FROM user  WHERE id =?');
    $sqlState->execute([$id]);

    $data = $sqlState->fetchAll(PDO::FETCH_OBJ);
    ?>


    <section class="main story">
        <div class="wrapper">

            <div class="left-col">
                <div class="status-wrapper">
                    <div class="status-card">
                        <div class="profile-pic"><img src="img/cover 1.jpg" alt=""></div>
                        <p class="username">Tonny20988</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="img/cover 2.jpg" alt=""></div>
                        <p class="username">mrichaa</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="img/side2.png" alt=""></div>
                        <p class="username">takwin</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="img/side3.png" alt=""></div>
                        <p class="username">youssefT</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="img/side4.png" alt=""></div>
                        <p class="username">Ilyass</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="img/side5.png" alt=""></div>
                        <p class="username">new_user</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="img/" alt=""></div>
                        <p class="username">user_name_3</p>
                    </div>

                </div>


                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/side1.jpg" alt=""></div>
                            <p class="username">mrichaa</p>
                        </div>
                        <img src="img/option.PNG" class="options" alt="">
                    </div>
                    <img src="img/side1.jpg" class="post-image" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <img src="img/like.PNG" class="icon" alt="">
                            <img src="img/comment.PNG" class="icon" alt="">
                            <img src="img/send.PNG" class="icon" alt="">
                            <img src="img/save.PNG" class="save icon" alt="">
                        </div>
                        <p class="likes">1,012 likes</p>
                        <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident eum quo natus molestias?</p>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.PNG" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
                        <button class="comment-btn">post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="img/cover 1.jpg" alt=""></div>
                            <p class="username">Tony20988</p>
                        </div>
                        <img src="img/option.PNG" class="options" alt="">
                    </div>
                    <img src="img/cover 1.jpg" class="post-image" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <img src="img/like.PNG" class="icon" alt="">
                            <img src="img/comment.PNG" class="icon" alt="">
                            <img src="img/send.PNG" class="icon" alt="">
                            <img src="img/save.PNG" class="save icon" alt="">
                        </div>
                        <p class="likes">1,012 likes</p>
                        <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident eum quo natus molestias?</p>
                        <p class="post-time">2 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.PNG" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="Add a comment">
                        <button class="comment-btn">post</button>
                    </div>
                </div>
            </div>
            <div class="right-col">
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/profile-pic.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">_anas_figuigui.__._</p>
                        <p class="sub-text">Anas</p>
                    </div>
                    <button class="action-btn"><a href="deconnexion.php">Deconnexion</a></button>
                </div>
                <p class="suggestion-text">Suggestions for you</p>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/side1.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">mrichaa</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/side2.png" alt="">
                    </div>
                    <div>
                        <p class="username">takwine</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/side3.png" alt="">
                    </div>
                    <div>
                        <p class="username">youssefT</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/side4.png" alt="">
                    </div>
                    <div>
                        <p class="username">Ilyass</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/side5.png" alt="">
                    </div>
                    <div>
                        <p class="username">new_user</p>
                        <p class="sub-text">followed by user</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="main">
        <div class="wrapper">
            <div class="left-col">


            </div>
        </div>
    </section>
    <section class="main">
        <div class="wrapper">

        </div>
    </section> -->
</body>

</html>