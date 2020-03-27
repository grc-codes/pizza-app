<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <section id="welcome">
            <div class="welcome-menu">
                <div class="logo">
                <img src="./img/restaurant-logo.png" />
                </div>
                <div class="menu">
                <div class="menu-title">
                    Menu
                </div>
                <ul class="links">
                    <li>
                    <a href="#">Menu</a>
                    </li>
                    <li>
                    <a href="#">Waitlist</a>
                    </li>
                    <li>
                    <a href="#">Offers</a>
                    </li>
                    <li>
                    <a href="#">Giftcards</a>
                    </li>
                </ul>
                </div>
                <div class="social-icons">
                <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                </div>
                <div class="location">
                <div class="address">
                    234 Main St, <br>
                    New York, New York 11747
                </div>
                <div class="phone-number">
                    <a href="tel:7182198652">718-219-8652</a>
                </div>
                </div>
            </div>
            <div class="welcome-jumbo">
                <div class="status">NEW</div>
                <h1>Peter Pies</h1>
                <img src="./img/pizza-pie.png" class="pizza-pie" />
            </div>
        </section>
        <section id="information">
            <div class="restaurant-image">
                <img src="./img/top-down.jpeg" />
            </div>
            <div class="info">
                <h2>We Started From The Bottom In 1987</h2>
                <div class="paragraphs">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, voluptatum sit? Voluptate eveniet magnam saepe temporibus adipisci, molestiae repellat dolor dolorem ipsum, incidunt natus nihil quaerat fugit voluptatem! Sequi, architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsam eum doloribus aperiam, quo voluptate est aspernatur quae dolorum. Eligendi dolorum maiores libero deserunt, quaerat neque perferendis aliquid a sapiente!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut facilis nostrum eligendi velit eum nihil debitis cumque, soluta accusantium dolore, quo maiores laboriosam libero repellendus animi omnis, ea incidunt ipsam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae possimus quam perspiciatis voluptates dolorum pariatur voluptas doloremque commodi quis dolorem, magnam, harum ex accusamus ea debitis. Accusantium sed omnis fugit?</p>
                </div>
                <a href="#" class="about-link">
                <span>Learn more about restaurants</span>
                <div class="circle-right">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </div>
                </a>
            </div>
        </section>
        <section id="food-preview">
            <h2>
                We have everything you need to kill your hunger
            </h2>
            <div class="button-rounded">
                View Our Menu
            </div>
            <div class="container">
                <div class="left-btn" >
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </div>
                <div class="right-btn">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </div>
                <div class="food-slider">
                    <div class="sliding-system">
                        <div class="slide">
                            <div class="background"></div>
                            <div class="content">
                                <div class="food-title">
                                    Pizza
                                </div>
                                <p class="food-description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?
                                </p>
                                <div class="food-image">
                                    <img src="./img/pizza-slice.png" />
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="background"></div>
                            <div class="content">
                                <div class="food-title">
                                    Chicken
                                </div>
                                <p class="food-description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?
                                </p>
                                <div class="food-image">
                                    <img src="./img/chicken.png" />
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="background"></div>
                            <div class="content">
                                <div class="food-title">
                                    Sandwiches
                                </div>
                                <p class="food-description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?
                                </p>
                                <div class="food-image">
                                    <img src="./img/sandwich.png" />
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="background"></div>
                            <div class="content">
                                <div class="food-title">
                                    Pasta
                                </div>
                                <p class="food-description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?
                                </p>
                                <div class="food-image">
                                    <img src="./img/pasta.png" />
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="background"></div>
                            <div class="content">
                                <div class="food-title">
                                    Bread & Sides
                                </div>
                                <p class="food-description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?
                                </p>
                                <div class="food-image">
                                    <img src="./img/bread.png" />
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="background"></div>
                            <div class="content">
                                <div class="food-title">
                                    Deserts
                                </div>
                                <p class="food-description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?
                                </p>
                                <div class="food-image">
                                    <img src="./img/brownie.png" />
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="background"></div>
                            <div class="content">
                                <div class="food-title">
                                    Drinks
                                </div>
                                <p class="food-description">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?
                                </p>
                                <div class="food-image">
                                    <img src="./img/drink.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
