@extends('layout.master')

@section('content_head')

@endsection

@section('content_footer')

@endsection

@section('content')

<main class="main-content">
    <section class="section  mt-4 pb-0 ">
        <div class="rounded ">
            <div class="slider-arrows-flash-light " data-provide="slider" data-arrows="true">
                <div><img src="{{asset('images/bg1.jpg')}}" class="img-fluid" style="width:100%">

                </div>

            </div>
        </div>
    </section>
    <section class=" section pb-0 bg-dark text-light" id="about">
        <div class="container px-lg-8   ">
            <div class="row align-items-center h-100">

                <div class="col-md-12 ">
                    <h1 class="text-primary display-1 "><span class="text-secondary fw-700 ">|</span> About us</h1>
                    <p class="lead-4 fw-400">Our company was founded in 2013 with a mission to create pretty templates
                        for great startups. We can combine beautiful, modern designs with clean, functional and
                        high-performance code to produce stunning websites. And best of all, we are super passionate
                        about our work. Thought does cognitive into follow and rationale annoyed.</p>
                </div>

            </div>
        </div>
    </section>

    <section class=" bg-dark section pb-3">
        <div data-provide="slider" data-autoplay="true" data-slides-to-show="3" data-css-ease="linear"
            data-speed="25000" data-autoplay-speed="0" data-pause-on-hover="true">
            <div class="p-2">
                <div class="rounded bg-img h-400"
                    style="background-image: url(https://d2jv9003bew7ag.cloudfront.net/uploads/Andy-Warhol-with-a-Polaroid-Camera.jpg)">
                </div>
            </div>

            <div class="p-2">
                <div class="rounded bg-img h-400"
                    style="background-image: url(https://ichef.bbci.co.uk/images/ic/640x360/p065g9xf.jpg)"></div>
            </div>

            <div class="p-2">
                <div class="rounded bg-img h-400"
                    style="background-image: url(https://cdns.klimg.com/newshub.id/news/2018/04/23/157555/646x323-5-fakta-tentang-pablo-escobar-yang-tidak-anda-ketahui-180423a.jpg)">
                </div>
            </div>

            <div class="p-2">
                <div class="rounded bg-img h-400"
                    style="background-image: url(https://m.media-amazon.com/images/M/MV5BMTc2NDA0OTc2Ml5BMl5BanBnXkFtZTcwMzI1Njc2OA@@._V1_SY1000_CR0,0,1510,1000_AL_.jpg)">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark section pb-12" id="radiosection">
        <div class="container px-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary display-1 "><span class="text-secondary fw-700 ">|</span>Radio</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <iframe src="https://open.spotify.com/embed/playlist/3pTNyV6vsyS6YPSp8hIUWq"
                        style="width:100%;height:400px" frameborder="0" allowtransparency="true"
                        allow="encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="section py-5 pb-7 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ">

                    <div class="col-lg-12 pb-4" style="border-bottom:3px solid #000;">
                        <a href="/expertise">
                            <div class="row">
                                <div class="col-lg-8 col-8 mt-6  pl-0 ">
                                    <h3> Scheduled</h3>
                                </div>
                                <div class="col-lg-4 col-4 text-right "><i
                                        class="fa fa-arrow-right display-4 fs-20 text-right text-dark mt-7"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5 ">

                    <div class="col-lg-12 pb-4" style="border-bottom:3px solid #000;">
                        <a href="/clients" class="nav-link">
                            <div class="row">
                                <div class="col-lg-8 col-8 mt-6 pl-0 ">
                                    <h3>View Our Clients</h3>
                                </div>
                                <div class="col-lg-4 col-4 text-right "><i
                                        class="fa fa-arrow-right display-4 fs-20 text-right text-dark mt-7"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
