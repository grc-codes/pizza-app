<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
    </head>
    <body>
        <section id="app-layout">
            @include('includes.side-menu')
            <div id="content-section">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </section>
    </body>
    <script src='/assets/vendor/jquery/jquery-3.3.1.min.js'></script>
    <script>
        let slides = $('.sliding-system a.slide').length;
        let maxSlides;
        let moveTotal;
        let currSlide = 0;
        $(window).resize(function() {
            currSlide = 0;
            $('.sliding-system').css('transform', 'translate3d(-0%, 0, 0)');
        });

        function desktopSlider() {
            if(a.matches) {
                maxSlides = Math.ceil((slides * 20) / 100);
                moveTotal = 100;

                // Right Button
                $('.right-btn').on('click', () => {
                    if(currSlide < maxSlides) {
                        currSlide += 100;
                        $('.sliding-system').css('transform', `translate3d(-${currSlide}%, 0, 0)`);
                    }
                });

                // Left Button
                $('.left-btn').on('click', () => {
                    if(currSlide != 0) {
                        currSlide -=100;
                        $('.sliding-system').css('transform', `translate3d(-${currSlide}%, 0, 0)`);
                    }
                });
            }
        }

        var a = window.matchMedia('(min-width: 998px)');
        desktopSlider(a);
        a.addListener(desktopSlider);

        function tabletSlider() {
            if(b.matches) {
                maxSlides = Math.ceil((slides * 50) / 100);
                moveTotal = 100;

                // Right Button
                $('.right-btn').on('click', () => {
                    if(currSlide < (maxSlides * 100) - 100) {
                        currSlide += 50;
                        $('.sliding-system').css('transform', `translate3d(-${currSlide}%, 0, 0)`);
                    }
                });

                // Left Button
                $('.left-btn').on('click', () => {
                    if(currSlide != 0) {
                        currSlide -= 50;
                        $('.sliding-system').css('transform', `translate3d(-${currSlide}%, 0, 0)`);
                    }
                });
            }
        }

        var b = window.matchMedia('(min-width:768px) and (max-width: 997px)');
        tabletSlider(b);
        b.addListener(tabletSlider);
    </script>
</html>

