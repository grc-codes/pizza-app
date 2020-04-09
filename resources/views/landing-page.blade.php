@extends('layouts.landing')

@section('content')
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
@endsection