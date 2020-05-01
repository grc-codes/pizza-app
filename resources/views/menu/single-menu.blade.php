@extends('layouts.app')

@section('title')
    {{ $foodCategory }} - {{ $settings["general"]->site_title }}
@endsection

@section('content')
    <div id="single-menu-page">
        <div class="row">
            <div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <div class="content-box">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{ $foodCategory }}</h1>
                        </div>
                        @foreach ($foodItems as $item)
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="title">
                                        <h4>{{ $item->title }}</h4>
                                        <span class="price">$2</span>
                                    </div>
                                    <div class="description">
                                        <p>White Dough, Mozzerella, Tomato Sauce</p>
                                    </div>
                                </div>
                            </div>                            
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection