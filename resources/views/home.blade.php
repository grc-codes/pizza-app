@extends('layouts.landing')

@section('title')
    {{ $settings["general"]->site_title }} | America's #1 Pizza
@endsection

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
    @include('includes.food-categories-slider')
@endsection