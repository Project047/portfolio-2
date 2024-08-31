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
                <div class="bar">
                    <h3><span>HTML</span><span>90%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>CSS</span><span>70%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>JavaScript</span><span>55%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>PHP</span><span>55%</span></h3>
                </div>
            </div>
        </div>
        <div class="edu-exp">
            <h1 class="heading"><span>education & experience</span></h1>
            <div class="row">
                <div class="box-container">
                    <h3 class="title">education</h3>
                    <div class="box">
                        <span>(2020-2021)</span>
                        <h3>web designer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nisi necessitatibus pariatur minima voluptatem, rem similique?</p>
                    </div>
                    <div class="box">
                        <span>(2021-2022)</span>
                        <h3>web developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nisi necessitatibus pariatur minima voluptatem, rem similique?</p>
                    </div>
                    <div class="box">
                        <span>(2022-2023)</span>
                        <h3>Android developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nisi necessitatibus pariatur minima voluptatem, rem similique?</p>
                    </div>

                </div>

                <div class="box-container">
                    <h3 class="title">experience</h3>
                    <div class="box">
                        <span>(2020-2021)</span>
                        <h3>front-end developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nisi necessitatibus pariatur minima voluptatem, rem similique?</p>
                    </div>
                    <div class="box">
                        <span>(2021-2022)</span>
                        <h3>back-end developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nisi necessitatibus pariatur minima voluptatem, rem similique?</p>
                    </div>
                    <div class="box">
                        <span>(2022-2023)</span>
                        <h3>Android developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nisi necessitatibus pariatur minima voluptatem, rem similique?</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- service section start -->
    <section class="services" id="services">

        <h1 class="heading"><span>services</span></h1>

        <div class="box-container">
            <div class="box">
                <i class="fa fa-code"></i>
                <h3>web development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur eveniet laudantium pariatur? Recusandae, fugiat laudantium!</p>
            </div>
            <div class="box">
                <i class="fa-brands fa-dev"></i>
                <h3>backend development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur eveniet laudantium pariatur? Recusandae, fugiat laudantium!</p>
            </div>

            <div class="box">
                <i class="fa-brands fa-bootstrap"></i>
                <h3>bootstrap</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur eveniet laudantium pariatur? Recusandae, fugiat laudantium!</p>
            </div>
            <div class="box">
                <i class="fa fa-terminal on fa-square "></i>
                <h3>android development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur eveniet laudantium pariatur? Recusandae, fugiat laudantium!</p>
            </div>
            <div class="box">
                <i class="fa fa-bullhorn "></i>
                <h3>digital marketing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur eveniet laudantium pariatur? Recusandae, fugiat laudantium!</p>
            </div>

            <div class="box">
                <i class="fa-brands fa-wordpress "></i>
                <h3>wordpress</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Tenetur eveniet laudantium pariatur? Recusandae, fugiat laudantium!</p>
            </div>
        </div>




    </section>


    <!-- service section end  -->

    <!-- portfolio section starts -->
    <section class="portfolio" id="portfolio">
        <h1 class="heading"><span>portfolio</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="img/f-1.jpg" alt="">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>

            <div class="box">
                <img src="img/f-2.jpg" alt="">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>
            <div class="box">
                <img src="img/f-3.jpg" alt="">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>

            <div class="box">
                <img src="img/f-4.jpg" alt="">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>

            <div class="box">
                <img src="img/f-5.jpg" alt="">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>
            <div class="box">
                <img src="img/f-6.jpg" alt="">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>

        </div>







    </section>












    <!-- portfolio section end -->
























    <script src="js/script.js"></script>
</body>

</html>