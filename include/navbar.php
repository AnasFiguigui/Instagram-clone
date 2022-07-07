<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        *:focus {
            outline: none;
        }

        body {
            width: 100%;
            background: #fafafa;
            position: relative;
            font-family: 'roboto', sans-serif;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background: #fff;
            border-bottom: 1px solid #dfdfdf;
            display: flex;
            justify-content: center;
            padding: 5px 0;
        }

        .nav-wrapper {
            width: 70%;
            max-width: 1000px;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-img {
            height: 100%;
            margin-top: 5px;
        }

        .search-box {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 275px;
            height: 34.37px;
            background: #fafafa;
            border: 1px solid #dfdfdf;
            border-radius: 6px;
            color: rgba(0, 0, 0, 0.5);
            text-align: center;
            text-transform: capitalize;
        }

        .search-box::placeholder {
            color: rgba(0, 0, 0, 0.5);
        }

        .nav-items {
            height: 22px;
            position: relative;
        }

        .icon {
            height: 120%;
            width: auto;
            cursor: pointer;
            margin: 0 8px;
            display: inline-block;
        }

        .user-profile {
            width: 25.5px;
            border-radius: 50%;
            background-image: url(img/profile-pic.jpg);
            background-size: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="nav-wrapper">
            <img src="img/logo.PNG" class="brand-img" alt="">
            <input type="text" class="search-box" placeholder="search">
            <div class="nav-items">
                <img src="img/home.PNG" class="icon" alt="">
                <img src="img/messenger.PNG" class="icon" alt="">
                <img src="img/add.PNG" class="icon" alt="">
                <img src="img/explore.PNG" class="icon" alt="">
                <img src="img/like.PNG" class="icon" alt="">
                <a href="https://www.instagram.com/_anas_figuigui.__._/">
                    <div class="icon user-profile"></div>
                </a>
            </div>
        </div>
    </nav>
</body>

</html>