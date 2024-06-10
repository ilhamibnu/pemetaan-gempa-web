@extends('user.layout.layout')

@section('content')
<!--:::::HEADER AREA START :::::::-->
<div class="header__area inner__header header__absolute theme__bg2" id="header">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-5 col-xl-3 align-self-center">
                <a href="/" class="logo"><img src="{{ asset('user/assets/img/logo/logo2.png') }}" alt=""></a>
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

                <a href="#" class="cbtn emergency_btn">
                    <img class="btn__icon" src="{{ asset('user/assets/img/icon/alert__phone.svg') }}" alt="">
                    <img class="btn__hover__icon" src="{{ asset('user/assets/img/icon/alert__phone__white.svg') }}" alt="">
                    Emergency Contact
                </a>
            </div>
        </div>
    </div>
</div>
<!--::::: WELCOME AREA START :::::::-->
<div class="inner__hero theme__bg2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="inner__text white">
                    <h1>News Details</h1>
                    <div class="page__link">
                        <a href="/">Home</a> > News Details
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('user/assets/img/shape/shape__white1.png') }}" alt="" class="shape shape1">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="shape shape2">
</div>
<!--::::: WELCOME AREA END :::::::-->

<!--:::::BLOG PAGE AREA START :::::::-->
<div class="blog-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-page-left mr-lg-4">
                    <div class="single-blog-section">
                        {{-- <img src="{{ asset('user/assets/img/blog/blog1.jpg') }}" alt=""> --}}
                        <div class="maps" id="maps"></div>
                        <style>
                            .maps {
                                height: 500px;
                                width: 100%;
                                z-index: 1;
                            }

                        </style>
                        <script>
                            var map = L.map('maps').setView([-0.789275, 113.921327], 5);

                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                maxZoom: 18
                                , attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'
                            }).addTo(map);

                            var data = @json($data);

                            var marker = L.marker([data.latitude, data.longitude]).addTo(map);
                            marker.bindPopup("<b>" + data.nama + "</b><br>" + data.tanggal + "<br>Latitude: " + data.latitude + "<br>Longitude: " + data.longitude);

                        </script>
                        <div class="single-blog-section-description blog-box">
                            <h2 style="color: white">{{ $data->nama }}</h2>
                            <div class="single-blog-section-author">
                                <ul>
                                    <li>
                                        <a style="color: white" class="blog-author" href="#">
                                            <img src="{{ asset('user/assets/img/blog/auhor1.jpg') }}" alt="">Cris Gyle</a>
                                    </li>
                                    <li><a href="#" style="color: white"><i class="fal fa-calendar-alt"></i> {{ $data->tanggal }}</a>
                                    </li>
                                    <li><a href="#" style="color: white"><i class="fal fa-clock"></i> 01 MiN READ</a>
                                    </li>
                                </ul>
                            </div style="color: white">A campaign manager or campaign director is a paid or volunteer individual whose role is to coordinate a political campaign's operations such as fundraising, advertising, polling, getting out the vote with direct contact to the public.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            <p></p>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--:::::BLOG PAGE AREA END :::::::-->

@endsection
