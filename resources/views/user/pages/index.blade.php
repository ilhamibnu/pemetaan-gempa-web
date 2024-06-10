@extends('user.layout.layout')

@section('content')

<!--:::::HEADER AREA START :::::::-->
<div class="header__area header2 header__absolute" id="header">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-5 col-xl-3 align-self-center">
                <a href="index-2.html" class="logo"><img src="{{ asset('user/assets/img/logo/logo3.png') }}" alt=""></a>
            </div>
            <div class="col-6 col-md-7 col-xl-6 text-center align-self-center">
                <div class="main__menu">
                    <div class="stellarnav">
                        <ul class="navclass" id="scroll">
                            <li><a href="#home">Home</a>
                                <ul>
                                    <li><a href="index-2.html">light version 1</a></li>
                                    <li><a href="index3.html">light version 2</a></li>
                                    <li><a href="index2.html">dark version 1</a></li>
                                    <li><a href="index4.html">dark version 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contagion">Contagion</a></li>
                            <li><a href="#symptoms">Symptoms</a></li>
                            <li><a href="#blog">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single.html">blog details</a></li>
                                </ul>
                            </li>
                            <li><a href="#prevention">Prevention</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-3 col-xl-3 align-self-center text-right">
                <a href="#" class="cbtn emergency_btn2">
                    <img class="btn__icon" src="{{ asset('user/assets/img/icon/alert__phone__white.svg') }}" alt="">
                    <img class="btn__hover__icon" src="{{ asset('user/assets/img/icon/phone__blue.png') }}" alt="">
                    Emergency Contact
                </a>
            </div>
        </div>
    </div>
</div>
<!--::::: HEADER AREA END :::::::-->


<!--::::: WELCOME AREA START :::::::-->
<div class="welcome welcome2" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-6">
                <div class="title title2 wow fadeInLeft">
                    <p class="title__top title__top2"><img src="{{ asset('user/assets/img/icon/alert2.png') }}" alt="">Covid-19 Alert</p>
                    <h1>Save yourself Save the world.</h1>
                    <h4>Coronavirus disease (COVID-19) is an infectious <br> disease caused by a new virus.</h4>
                    <div class="space-30"></div>
                    <a href="#" class="cbtn btn2">Check Symptoms</a>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('user/assets/img/shape/shape__white1.png') }}" alt="" class="shape shape1">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="shape shape2">


    <div class="welcome_shapes wow fadeInRight">
        <div class="welcome_shapes__wrap wlc__bg2">
            <img class="welcome__shape__bg2 " src="{{ asset('user/assets/img/shape/virus__group.png') }}" alt="">

            <img class="welcome_shape welcome_shapes22" src="{{ asset('user/assets/img/shape/fusfus.svg') }}" alt="">
        </div>
    </div>

</div>
<!--::::: WELCOME AREA END :::::::-->



<!--::::: COUNTER AREA START :::::::-->
<div class="counter__area counter2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="counters">
                    <div class="counters__wrap">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 text-center">
                                <div class="single__counter wow fadeInUp" data-wow-delay=".3s">
                                    <h2 class="counter">204</h2>
                                    <p>Affected Country</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 text-center">
                                <div class="single__counter wow fadeInUp" data-wow-delay=".5s">
                                    <h2 class="counter">1,098,848</h2>
                                    <p>Confirmed Cases</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 text-center">
                                <div class="single__counter ctype2 wow fadeInUp" data-wow-delay=".7s">
                                    <h2 class="counter">226,106</h2>
                                    <p>Recovered Cases</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 text-center">
                                <div class="single__counter no__border wow fadeInUp" data-wow-delay=".9s">
                                    <h2 class="counter">58,871</h2>
                                    <p>Worldwide Deaths</p>
                                </div>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="1s">
                                <div class="space-30"></div>
                                <h6 class="emergency">*** Updated less than 20 mins ago, Source: <a href="#">Wikipedia</a></h6>
                            </div>
                        </div>
                        <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="counter__bg counter__bg1">
                        <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="counter__bg counter__bg2">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--::::: COUNTER AREA END :::::::-->

<!--::::: ABOUT AREA START :::::::-->
<div class="about__area about2 section-padding" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about__img wow fadeInLeft">
                    <img src="{{ asset('user/assets/img/about/about__left2.svg') }}" alt="image">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about__text wow fadeInRight">
                    <div class="title title2">
                        <p class="title__top title__top2">About Covid-19</p>
                        <h2>What is novel coronavirus?</h2>
                        <h4>Coronavirus disease (COVID-19) is an infectious disease caused by a new virus. The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing. <br> <br> You can protect yourself by washing your hands frequently, avoiding touching your face, and avoiding close contact (1 meter or 3 feet) distances with who are unwell.</h4>
                        <div class="space-30"></div>
                        <a href="#" class="cbtn btn2">Check Symptoms</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="about__shape about__shape1">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="about__shape about__shape3">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="about__shape about__shape4">
</div>
<!--::::: ABOUT AREA END :::::::-->


<!--::::: SYMPTOMS AREA START :::::::-->
<div class="symptoms__area symptoms2 theme__bg3 section-padding2" id="symptoms">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title title2 wow fadeInLeft">
                    <p class="title__top title__top2">Covid-19 Symptoms</p>
                    <h2>What are the symptoms?</h2>
                    <h4>COVID-19 symptoms range from mild to severe. It takes 2-14 days after exposure for symptoms to develop. Symptoms may include:</h4>
                    <div class="space-30"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="points">
                                <ul>
                                    <li><i class="fas fa-check"></i> Hard Cough</li>
                                    <li><i class="fas fa-check"></i> Fever</li>
                                    <li><i class="fas fa-check"></i> Headache</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="points">
                                <ul>
                                    <li><i class="fas fa-check"></i> Resoiratory Distress</li>
                                    <li><i class="fas fa-check"></i> Shortness of Breath</li>
                                    <li><i class="fas fa-check"></i> Kidney Failure</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="space-50"></div>
                    <a href="#" class="cbtn btn2">Check Symptoms</a>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('user/assets/img/about/symptoms2.svg') }}" alt="" class="symptom__bg wow fadeInRight">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="symptom__shape symptom_1">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="symptom__shape symptom_2">
</div>
<!--::::: SYMPTOMS AREA END :::::::-->



<!--::::: MAP AREA START :::::::-->
<div class="map__area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center m-auto">
                <div class="title title2 wow fadeInDown">
                    <p class="title__top title__top2">Covid-19 threat</p>
                    <h2>More than 59k died in Covid-19</h2>
                    <h4>There are no medications specifically approved for coronavirus. Most people with mild coronavirus :</h4>
                </div>
            </div>
        </div>
        <div class="space-50"></div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="mapimg wow zoomIn">
                    {{-- <img src="{{ asset('user/assets/img/bg/map2.svg') }}" alt=""> --}}
                    <div class="maps" id="maps"></div>
                    <style>
                        .maps {
                            height: 500px;
                            width: 100%;
                        }

                    </style>
                </div>
                <div class="space-50"></div>
                <h6 class="emergency wow fadeInUp">*** Updated less than 20 mins ago, Source: <a href="#">Wikipedia</a></h6>
            </div>
        </div>
    </div>
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img1">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img2">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img3">
</div>
<!--::::: MAP AREA END :::::::-->



<!--::::: CONTAGION AREA START :::::::-->
<div class="contagion contagion2 theme__bg3 section-padding" id="contagion">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single__contagion wow fadeInUp" data-wow-delay=".3s">
                            <div class="contagion__icon">
                                <img src="{{ asset('user/assets/img/contagion/contagion21.png') }}" alt="">
                            </div>
                            <h3>Animal Contact</h3>
                            <p>Stay at home if you begin to feel unwell, even with mild symptoms nose.</p>
                        </div>
                        <div class="single__contagion wow fadeInUp" data-wow-delay=".5s">
                            <div class="contagion__icon">
                                <img src="{{ asset('user/assets/img/contagion/contagion22.png') }}" alt="">
                            </div>
                            <h3>Personal Contact</h3>
                            <p>Avoiding contact with others and visits to medical facilities will allow.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single__contagion mt-lg-5 wow fadeInUp" data-wow-delay=".7s">
                            <div class="contagion__icon">
                                <img src="{{ asset('user/assets/img/contagion/contagion23.png') }}" alt="">
                            </div>
                            <h3>Air Transmission</h3>
                            <p>Via respiratory droplets produced when infected person coughs or sneezes.</p>
                        </div>
                        <div class="single__contagion wow fadeInUp" data-wow-delay=".9s">
                            <div class="contagion__icon">
                                <img src="{{ asset('user/assets/img/contagion/contagion24.png') }}" alt="">
                            </div>
                            <h3>Contaminate Object </h3>
                            <p>Call in advance and tell your provider of any recent travel or contact.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="title white__title ml-lg-5 wow fadeInRight">
                    <p class="title__top title__top2">Covid-19 Contagion</p>
                    <h2>How does novel coronavirus spread?</h2>
                    <h4>Health experts are still learning the details. Currently, it is thought to spread:</h4>
                    <div class="space-30"></div>
                    <div class="points">
                        <ul>
                            <li><i class="fas fa-check"></i> Via respiratory droplets produced when an infected person coughs or sneezes.</li>
                            <li><i class="fas fa-check"></i>Between people who are in close contact with one another (within about 6 feet).</li>
                        </ul>
                    </div>
                    <div class="space-50"></div>
                    <a href="#" class="cbtn btn2">How to Prevent</a>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img1">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img2">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img3">
</div>
<!--::::: CONTAGION AREA END :::::::-->


<!--::::: PREVENTIONS AREA START :::::::-->
<div class="preventions__area preventions2 padding-top" id="prevention">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 text-center m-auto">
                <div class="title title2 wow fadeInDown">
                    <p class="title__top title__top2">Covid-19 Preventions</p>
                    <h2>How can I protect myself from Covid-19?</h2>
                    <h4>If you are traveling overseas (to China but also to other places) <br>follow the CDC’s guidance: </h4>
                </div>
            </div>
        </div>
        <div class="space-50"></div>
        <div class="row">

            <div class="col-md-3 col-lg">
                <div class="prevention__list2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="prevention__list2__icon">
                        <img src="{{ asset('user/assets/img/service/service21.png') }}" alt="">
                    </div>
                    <a href="#">Wear a Face Mask</a>
                </div>
            </div>
            <div class="col-md-3 col-lg">
                <div class="prevention__list2 wow fadeInUp" data-wow-delay=".4s">
                    <div class="prevention__list2__icon">
                        <img src="{{ asset('user/assets/img/service/service22.png') }}" alt="">
                    </div>
                    <a href="#">Cover Mouth When Coughing</a>
                </div>
            </div>
            <div class="col-md-3 col-lg">
                <div class="prevention__list2 wow fadeInUp" data-wow-delay=".5s">
                    <div class="prevention__list2__icon">
                        <img src="{{ asset('user/assets/img/service/service23.png') }}" alt="">
                    </div>
                    <a href="#">Wash Your Hand</a>
                </div>
            </div>
            <div class="col-md-3 col-lg">
                <div class="prevention__list2 wow fadeInUp" data-wow-delay=".6s">
                    <div class="prevention__list2__icon">
                        <img src="{{ asset('user/assets/img/service/service24.png') }}" alt="">
                    </div>
                    <a href="#">Avoid Animal Contact</a>
                </div>
            </div>
            <div class="col-md-3 col-lg">
                <div class="prevention__list2 wow fadeInUp" data-wow-delay=".7s">
                    <div class="prevention__list2__icon">
                        <img src="{{ asset('user/assets/img/service/service25.png') }}" alt="">
                    </div>
                    <a href="#">Avoid Markets and Crowd</a>
                </div>
            </div>
            <div class="col-md-3 col-lg">
                <div class="prevention__list2 wow fadeInUp" data-wow-delay=".8s">
                    <div class="prevention__list2__icon">
                        <img src="{{ asset('user/assets/img/service/service26.png') }}" alt="">
                    </div>
                    <a href="#">Seek Medical Care</a>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img1">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img2">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img3">
</div>
<!--::::: PREVENTIONS AREA END :::::::-->


<!--::::: BLOG AREA START :::::::-->
<div class="blog__area blog2 section-padding" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="title title2 wow fadeInLeft">
                    <p class="title__top title__top2">News Feed</p>
                    <h2>Stay updated with our news feed.</h2>
                    <h4>COVID-19 symptoms range from mild to severe. It takes 2-14 days after exposure for symptoms to develop. </h4>
                    <div class="space-30"></div>
                    <a href="#" class="cbtn btn2">Check Out All Blog</a>
                </div>
            </div>
            <div class="col-md-7 col-lg-6">
                <div class="blog__lists ml-lg-5">
                    <div class="single__blog wow fadeInRight" data-wow-delay=".2s">
                        <div class="single__blog__img">
                            <img src="{{ asset('user/assets/img/blog/news1.jpg') }}" alt="">
                        </div>
                        <p class="title__top title__top2">Statistics</p>
                        <a href="blog.html">Some countries provide clear and helpful data on testing.</a>
                        <a href="blog.html" class="readmore readmore2">read more <i class="far fa-angle-right"></i></a>
                    </div>
                    <div class="single__blog wow fadeInRight" data-wow-delay=".4s">
                        <div class="single__blog__img">
                            <img src="{{ asset('user/assets/img/blog/news2.jpg') }}" alt="">
                        </div>
                        <p class="title__top title__top2">Statistics</p>
                        <a href="blog.html">Some countries provide clear and helpful data on testing.</a>
                        <a href="blog.html" class="readmore readmore2">read more <i class="far fa-angle-right"></i></a>
                    </div>
                    <div class="single__blog wow fadeInRight" data-wow-delay=".6s">
                        <div class="single__blog__img">
                            <img src="{{ asset('user/assets/img/blog/news1.jpg') }}" alt="">
                        </div>
                        <p class="title__top title__top2">Statistics</p>
                        <a href="blog.html">Some countries provide clear and helpful data on testing.</a>
                        <a href="blog.html" class="readmore readmore2">read more <i class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img1">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img2">
</div>
<!--::::: BLOG AREA END :::::::-->

<!--::::: CTA AREA  START::::::-->
<div class="cta__area cta2 theme__bg2__haf">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta">
                    <div class="cta_wrap">
                        <div class="row">
                            <div class="col-lg-8 m-auto text-center">
                                <div class="title title2">
                                    <h2>Want to test Covid-19?</h2>
                                    <h4>Our goal at Our World in Data is to provide testing data over time for many countries around the world.</h4>
                                    <div class="space-30"></div>

                                    <div class="btn__group">
                                        <a href="#" class="cbtn emergency_btn2 emergency_btn3">
                                            <img class="btn__icon" src="{{ asset('user/assets/img/icon/phone2png.png') }}" alt="">
                                            <img class="btn__hover__icon" src="{{ asset('user/assets/img/icon/alert__phone__white.svg') }}" alt="">
                                            Call For Test
                                        </a>
                                        <a href="#" class="cbtn emergency_btn2 emergency_btn3">
                                            <img class="btn__icon" src="{{ asset('user/assets/img/icon/calender2_color.png') }}" alt="">
                                            <img class="btn__hover__icon" src="{{ asset('user/assets/img/icon/calender.png') }}" alt="">
                                            Book Doctor
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img1">
                        <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--::::: CTA AREA END :::::::-->
@endsection

@section('script')
<script>
    var map = L.map('maps').setView([-0.789275, 113.921327], 5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18
        , attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'
    }).addTo(map);

    var data = @json($data);

    data.forEach(function(gempa) {
        var marker = L.marker([gempa.latitude, gempa.longitude]).addTo(map);
        marker.bindPopup("<b>" + gempa.nama + "</b><br>" + gempa.tanggal + "<br>Latitude: " + gempa.latitude + "<br>Longitude: " + gempa.longitude + "<br> <a href='/detail/" + gempa.id + "'>Detail</a>");
    });

</script>
@endsection
