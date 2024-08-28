<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- comment shotcut -ctrl +k +c -->
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- my custom link -->
    <link rel=" stylesheet" href="css/style.css">


</head>

<body>

    <!-- header section starts -->

    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact</a>

        </nav>
        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </header>

    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home" id="home">
        <div class="image">
            <img src="img/user-img.jpg" alt="user image">
        </div>
        <div class="content">
            <h3> hi , i am rushikesh kore </h3>
            <span> web designer & developer </span>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime debitis cupiditate libero recusandae animi quis, in labore? Quos reprehenderit,
                reiciendis a suscipit beatae aperiam amet, eveniet quaerat vel nulla maiores?</p>
            <a href="#about" class="btn">about me</a>
        </div>
    </section>
    <!-- home section end -->

    <!-- about section starts -->
    <section class="about" id="about">
        <h1 class="heading"><span>biography</span></h1>

        <div class="biography">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, earum beatae?
                Earum magnam similique id quasi soluta deserunt corporis nisi.</p>

            <div class="bio">
                <h3><span>name :</span>Rushikesh Kore</h3>
                <h3><span>email :</span>mysteriousman0947@gmail.com</h3>
                <h3><span>address :</span>kolhapur ,india</h3>
                <h3><span>phone :</span>+123-456-7890</h3>
                <h3><span>age :</span>23 years</h3>
                <h3><span>experience :</span>2+ years</h3>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>
        <div class="skills">
            <h1 class="heading"><span>skills</span></h1>
            <div class="progress">
                <div class="bar"><span>HTML</span> <span>95%</span></div>
            </div>
        </div>
    </section>
    <!-- about section end -->




























    <script src="js/script.js"></script>
</body>

</html>