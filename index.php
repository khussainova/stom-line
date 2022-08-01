<?php


if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date']; 

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name', '$email', '$number', '$date')") or die('query failed');

    if ($insert) {
        $message[] = 'appointment made successfully!';
    } else {
        $message[] = 'appointment failed';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stom-line</title>

    <!-- font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- header section -->
    <header class="header navbar navbar-expand-lg navbar-expand-sm fixed-top">
        <div class="container">
            <a class="logo" href="#">stom<span>Line</span></a>
            <nav class=" nav navbar-nav mx-auto">
                <a class="nav-link" href="#home">home</a>
                <a class="nav-link" href="#about">about</a>
                <a class="nav-link" href="#services">services</a>
                <a class="nav-link" href="#reviews">reviews</a>
                <a class="nav-link" href="#contact">contact</a>
            </nav>
            <a href="#contact" class="link-btn">make appointment</a>
            <div id="menu-btn" class="fas fa-bars ml-auto"></div>
        </div>
    </header>
    <!-- !header section -->

    <!-- home section -->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-md-left">
                    <h3>Let us brighten your teeth</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id aperiam voluptas repellendus saepe, nesciunt earum.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>
    <!-- !home section -->

    <!-- about section -->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" alt="" class="w-100 mb-5 mb-md-0">
                </div>
                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True healthcare for your family</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi incidunt optio, qui tenetur suscipit eius magni ab deleniti voluptatum consequatur ullam quaerat accusamus, vero tempora explicabo, iste ipsam laborum obcaecati!</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>
    <!-- !about section -->

    <!-- services section -->
    <section class="services"id="services">
        <h1 class="heading">our services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/icon-1.svg" alt="">
                <h3>Alignment specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, eveniet.</p>
            </div>

            <div class="box">
                <img src="images/icon-2.svg" alt="">
                <h3>Cosmetic dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, eveniet.</p>
            </div>

            <div class="box">
                <img src="images/icon-3.svg" alt="">
                <h3>Oral hygiene experts</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, eveniet.</p>
            </div>

            <div class="box">
                <img src="images/icon-4.svg" alt="">
                <h3>Root canal specialists</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, eveniet.</p>
            </div>

            <div class="box">
                <img src="images/icon-5.svg" alt="">
                <h3>Live dental advisory</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, eveniet.</p>
            </div>

            <div class="box">
                <img src="images/icon-6.svg" alt="">
                <h3>Cavity inspection</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, eveniet.</p>
            </div>
        </div>
    </section>
    <!-- !services section -->

    <!-- process section -->
    <section class="process" id="process">
        <h1 class="heading">work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>cosmetic dentistry</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, necessitatibus!</p>
            </div>

            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>pediatric dentistry</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, necessitatibus!</p>
            </div>

            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>dentail implants</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, necessitatibus!</p>
            </div>
        </div>
    </section>
    <!-- !process section -->

    <!-- reviews section -->
    <section class="reviews" id="reviews">
        <h1 class="heading">satisfied customers</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste quidem sit laborum saepe. Dicta earum quia nam ut officiis fugiat.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john doe</h3>
                <span>satisfied customer</span>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste quidem sit laborum saepe. Dicta earum quia nam ut officiis fugiat.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>johanna doe</h3>
                <span>satisfied customer</span>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste quidem sit laborum saepe. Dicta earum quia nam ut officiis fugiat.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john doe</h3>
                <span>satisfied customer</span>
            </div>
        </div>
    </section>
    <!-- !reviews section -->

    <!-- contact section -->
    <section class="contact" id="contact">
        <h1 class="heading">make appointment</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<p class="message">' . $message . '</p>';
                }
            }
            ?>
            <span>your name:</span>
            <input type="text" name="name" placeholder="enter your name" class="box">
            <span>your email:</span>
            <input type="email" name="email" placeholder="enter your name" class="box">
            <span>your number:</span>
            <input type="number" name="number" placeholder="enter your name" class="box">
            <span>appointment date:</span>
            <input type="datetime-local" name="date" placeholder="enter your name" class="box">
            <input type="submit" value="make appointment" name="submit" class="link-btn">
        </form>
    </section>
    <!-- !contact section -->

    <!-- footer section -->
    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+123-456-7890</p>
                <p>+111-222-3333</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>mumbai, india - 400104</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>openning hours</h3>
                <p>07:00 am to 10:00pm</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>shaikhanas@gmail.com</p>
                <p>anasbhai@gmail.com</p>
            </div>
        </div>

        <p class="credit"> powered by <span>K Web Solutions</span></p>
    </section>
    <!-- !footer section -->




    <!-- custom js file -->
    <script src="js/script.js"></script>

</body>

</html>