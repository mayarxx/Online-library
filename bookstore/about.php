<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About</title>
</head>

<body>

    <?php include 'header.php'; ?>
    <div class="heading">
        <h3>About us </h3>
        <p> <a href="home.php">home</a> / about </p>
    </div>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="book3.jpg" alt="">
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>A very easy way of communication with many other people with the same interests.</p>
                <p>A free and easy way to access all new updates of the authors you like and an awesome way to develope
                    your hobby.</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>

        </div>

    </section>

    <section class="reviews">

        <h1 class="title">client's reviews</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>An awesome website and very easy to use.</p>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
                <h3>john Leon</h3>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>That is like the best website and I can find all the books I am looking for.</p>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
                <h3>Loren Jake</h3>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Thank youuu, this is the best.</p>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
                <h3>Jacob Sed</h3>
            </div>

            <div class="box">
                <img src="images/pic-4.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus
                    quia. Ducimus repudiandae dolore placeat.</p>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
                <h3>Ellen Samuel</h3>
            </div>

            <div class="box">
                <img src="images/pic-5.png" alt="">
                <p>Not gonna lie but that is very easy to use and I met so many great people here.</p>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
                <h3>Omar Xavier</h3>
            </div>

            <div class="box">
                <img src="images/pic-6.png" alt="">
                <p>Finally the books I have been looking for, thank you.</p>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
                <h3>Lena Jeon</h3>
            </div>

        </div>

    </section>

    <section class="authors">

        <h1 class="title">greate authors</h1>

        <div class="box-container">

            <div class="box">
                <img src="imagess/hy.jpg" alt="">
                <div class="share">
                    <a href="#" class="fa fa-facebook-f"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
                <h3>Hanya Yanagihara</h3>
            </div>

            <div class="box">
                <img src="imagess/mm.jpg" alt="">
                <div class="share">
                    <a href="#" class="fa fa-facebook-f"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
                <h3>Madeline Miller</h3>
            </div>

            <div class="box">
                <img src="imagess/od.jpg" alt="">
                <div class="share">
                    <a href="#" class="fa fa-facebook-f"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
                <h3>Osamu Dazai</h3>
            </div>

            <div class="box">
                <img src="imagess/mr.jpg" alt="">
                <div class="share">
                    <a href="#" class="fa fa-facebook-f"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
                <h3>M. L. Rio</h3>
            </div>

            <div class="box">
                <img src="imagess/dt.jpg" alt="">
                <div class="share">
                    <a href="#" class="fa fa-facebook-f"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
                <h3>Donna Tartt</h3>
            </div>

            <div class="box">
                <img src="imagess/ob.jpg" alt="">
                <div class="share">
                    <a href="#" class="fa fa-facebook-f"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
                <h3>Alexene Farol Follmuth</h3>
            </div>

        </div>

    </section>


    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>

</html>