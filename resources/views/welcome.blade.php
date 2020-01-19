@extends('layout.master')

@section('content_head')

@endsection

@section('content_footer')

@endsection

@section('content')

<main class="main-content">
    <section class="section  mt-5 pb-0  d-none d-lg-block">
        <div class="rounded ">
            <div class="slider-arrows-flash-light " data-provide="slider" data-arrows="true">
                <div><img src="{{asset('images/bg1.jpg')}}" class=" bg-img " style="width:100%">
                </div>

            </div>
        </div>
    </section>

    <section class=" bg-dark section mt-6 pb-0    d-block d-sm-none">
        <div data-provide="slider" data-autoplay="false" data-pause-on-hover="false">
            <div>
                <div class="py-10  "
                    style="background-image: url({{asset('images/bg1.jpg')}});background-position:center;background-size:cover;">
                    <h1 class="text-center text-white ls-3">EXITING TIMES AHEAD</h1>
                </div>
            </div>

        </div>
    </section>

    <section class=" section  pb-0 bg-dark text-light" id="about">
        <div class="container px-lg-8 ls-2   ">
            <div class="row align-items-center ">

                <div class="col-md-12 ">
                    <h1 class="text-primary  display-3 ls-4  "><span class=" text-white fw-700 ">|</span> About us
                    </h1>
                    <p class="lead-3  fw-400   lh-7">Our company was founded in 2013 with a mission to create pretty
                        templates
                        for great startups. We can combine beautiful, modern designs with clean, functional and
                        high-performance code to produce stunning websites. And best of all, we are super passionate
                        about our work. Thought does cognitive into follow and rationale annoyed.</p>
                </div>

            </div>
        </div>
    </section>

    <section class=" bg-dark section pb-3">
        <div data-provide="slider" data-autoplay="true" data-slides-to-show="2" data-css-ease="linear"
            data-speed="12000" data-autoplay-speed="0" data-pause-on-hover="false">
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
                    <h1 class="text-primary display-3  ls-4  "><span class="text-white fw-700   ">|</span>Selecta
                    </h1>
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
    <section class="section text-white bg-fixed text-center py-11" data-overlay="6"
        style="background-image: url(https://kinfolk.com/wp-content/uploads/2019/08/revisedlambertetfils_KinfolkDigitalFall2019-01final-3840-2000x1250.jpg)"
        data-overlay="3">
        <div class="container">
            <h2 class="display-1 ls-4"><strong>11:11&nbsp;&nbsp;&nbsp;11/11/11</strong></h2>
        </div>
    </section>
    <section class="bg-gray section">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-lg-6 mt-5">

                    <div class="row">

                        <div class="col-md-12 col-xl-12 ">


                            <img class="w-100"
                                src="https://kinfolk.com/wp-content/uploads/2019/10/Close_Enough_01-700x700.jpg">


                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-8 mx-auto text-center">
                            <small class="text-white"><span style="text-decoration:#000">ARTS & CULTURE</span>,ISSUE
                                34</small>
                            <h1 class="text-light ls-4 display-1 text-center mt-4">Close Enough</h1>
                            <p class="ls-1 text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum
                                laborum recusandae </p>
                            <a href="">READ MORE</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 mt-5" style="height:1090px;overflow-y:scroll">
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2019/10/One_Step_Forward-e1572271667885-799x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">News</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2019/10/DITL_Mennlay_Golokeh_Aggrey_01-683x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">Music</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2017/02/Kinfolk_Vol23_GetOutside_01-730x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">ART & Culture</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2016/10/Kinfolk_Vol22_Brainstorming_01-715x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">Technology</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2019/04/nilafur-683x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">Health</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2016/10/Kinfolk_Vol22_SophieHicks_01-792x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">Business</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2019/10/HomeTour_The_New_Palace_01-768x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">News</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2019/10/HomeTour_The_New_Palace_08-768x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">News</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2019/10/Ilya__Resha_01-819x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">News</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2019/04/nilafur-683x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">Health</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2016/10/Kinfolk_Vol22_SophieHicks_01-792x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">Business</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2019/10/HomeTour_The_New_Palace_01-768x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">News</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2019/10/HomeTour_The_New_Palace_08-768x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">News</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2019/10/Ilya__Resha_01-819x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">News</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class=" d-block   mb-6">
                                <a href="#"><img class="card-img-top"
                                        src="https://kinfolk.com/wp-content/uploads/2019/10/One_Step_Forward-e1572271667885-799x1024.jpg"
                                        alt="Card image cap"></a>
                                <div class="pt-1 ">
                                    <p class="mb-0 "><a class="small-5  text-uppercase ls-2 fw-400 text-primary"
                                            href="#">News</a></p>
                                    <p><a class="text-lighter  ls-2 fw-600" href="#">Jakarta Festival</a></p>
                                    <p class="mb-0 fw-100 lh-3" style="line-spacing:0.5px"><a class="text-light"
                                            style="line-spacing:10px" href="#">We relocated our office to a new designed
                                            garage</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-4">
                            <div class="row">
                                <div class="col-lg-4 col-4 mx-auto">
                                    <button class="btn btn-round btn-outline-secondary text-light">View More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section py-5 pb-8 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ">

                    <div class="col-lg-12 pb-4" style="border-bottom:3px solid #000;">
                        <a href="/expertise">
                            <div class="row">
                                <div class="col-lg-8 col-8 mt-6  pl-0 ">
                                    <h3> Schedule</h3>
                                </div>
                                <div class="col-lg-4 col-4 text-right "><i
                                        class="fa fa-arrow-right display-4 fs-20 text-right text-dark mt-7"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5 ">

                    <div class="col-lg-12  pl-0 pr-0" style="border-bottom:3px solid #000;">
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
