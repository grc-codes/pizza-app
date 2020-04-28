@extends('layouts.app')

@section('title')
    About - {{ $settings["general"]->site_title }}
@endsection

@section('content')
    <div id="about-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>About Page</h1>
                    <p>
                        Kale chips tumeric pinterest, sartorial poutine air plant flannel yuccie hexagon sriracha next level vegan seitan chicharrones. Hoodie tote bag flexitarian blue bottle. Messenger bag flannel flexitarian yuccie try-hard bitters kale chips, leggings venmo roof party. Cardigan photo booth kinfolk lyft taiyaki marfa venmo shoreditch fashion axe selfies actually brunch chia lomo.
                    </p>
                    <p>
                        I'm baby copper mug taxidermy humblebrag jianbing williamsburg put a bird on it. Mlkshk literally thundercats vice pitchfork pop-up actually kickstarter four dollar toast XOXO ramps semiotics af. Post-ironic scenester lo-fi messenger bag vape. Jianbing seitan master cleanse, twee cold-pressed distillery banjo readymade food truck farm-to-table glossier. Jianbing yuccie craft beer raclette, XOXO art party banh mi distillery pabst salvia blue bottle brunch skateboard jean shorts try-hard. Trust fund brunch retro pour-over, literally wayfarers humblebrag freegan chia +1 bushwick bicycle rights selfies jean shorts.
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="/img/about-img.jpeg" />
                </div>
            </div>
        </div>
    </div>
@endsection