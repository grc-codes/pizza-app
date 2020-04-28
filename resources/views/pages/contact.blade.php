@extends('layouts.app')

@section('title')
    Contact - {{ $settings["general"]->site_title }}
@endsection

@section('content')
    <div id="contact-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                    <h3>Address</h3>
                    <p>
                        {{ $settings["general"]->address_1 }} {{ $settings["general"]->address_2 }}, <br>
                        {{ $settings["general"]->city }}, {{ $settings["general"]->state }} {{ $settings["general"]->zipcode }}
                    </p>
                    <h3>Phone Number</h3>
                    <p>
                        <a href="tel:{{ $settings["general"]->phone_number }}">{{ $settings["general"]->phone_number }}</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9428770803556!2d-74.17888618470853!3d40.74128244376066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2537e76bcc66f%3A0xdb855e8b71f8e27e!2s360%20Dr%20M.L.K.%20Jr.%20Blvd%2C%20Newark%2C%20NJ%2007103!5e0!3m2!1sen!2sus!4v1588029215213!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection