@extends('layouts.front')

@section('content')
    <!-- inner page banner -->
    @foreach ($images as $image)
        @if ($image->id === 9)
            <div class="dlab-bnr-inr overlay-black-middle text-center bg-pt"
                style="background-image:url({{ asset('storage/' . str_replace('public/', '', $image->path)) }});">
        @endif
    @endforeach
    <div class="container">
        <div class="dlab-bnr-inr-entry align-m text-center">
            <h1 class="text-white">Sobre nosotros</h1>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <ul class="list-inline">
                    @foreach ($texts as $text)
                        @if ($text->id === 2)
                            <li><a href="{{ url('/') }}">{{ $text->title }}</a></li>
                            <li>{{ $text->subtitle }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <!-- Breadcrumb row END -->
        </div>
    </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- About Services info -->
        @foreach ($images as $image)
            @if ($image->id === 20)
                <div class="section-full content-inner bg-white video-section"
                    style="background-image:url('{{ asset('storage/' . str_replace('public/', '', $image->path)) }}');">
            @endif
        @endforeach
        <div class="container">
            <div class="section-content">
                <div class="row d-flex">
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="video-bx">
                            @foreach ($images as $image)
                                @if ($image->id === 11)
                                    <img src="{{ asset('storage/' . str_replace('public/', '', $image->path)) }}"
                                        alt="{{ $image->filename }}">
                                @endif
                            @endforeach
                            <div class="video-play-icon">
                                <a href="https://www.youtube.com/watch?v=Xqa0mpcDI6s"
                                    class="popup-youtube video bg-primary"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30 align-self-center video-infobx">
                        <div class="content-bx1">
                            @foreach ($texts as $text)
                                @if ($text->id === 3)
                                    <h2 class="m-b15 title">{{ $text->title }}<br><span class="text-primary">
                                            {{ $text->subtitle }} </span></h2>
                                    <p class="m-b30">
                                        {{ $text->content }}
                                    </p>
                                @endif
                            @endforeach
                            {{-- <img src="/theme/images/sign.png" width="200" alt=""> --}}
                            @foreach ($texts as $text)
                                @if ($text->id === 4)
                                    <h4 class="m-b0"> {{ $text->title }} </h4>
                                    <span class="font-14"> {{ $text->subtitle }} </span>
                                @endif
                            @endforeach
                            @foreach ($texts as $text)
                                @if ($text->id === 5)
                                    <h4 class="m-b0"> {{ $text->title }} </h4>
                                    <span class="font-14"> {{ $text->subtitle }} </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Services info END -->
    <!-- Counter -->
    @foreach ($images as $image)
        @if ($image->id === 8)
            <div class="section-full content-inner overlay-black-dark bg-img-fix"
                style="background-image:url('{{ asset('storage/' . str_replace('public/', '', $image->path)) }}');">
        @endif
    @endforeach
    <div class="container">
        <div class="section-content text-center text-white">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                    <div class="counter-style-5">
                        <div class="">
                            @foreach ($texts as $text)
                                @if ($text->id === 6)
                                    <span class="counter"> {{ $text->title }} </span>
                        </div>
                        <span class="counter-text"> {{ $text->subtitle }} </span>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                    <div class="counter-style-5">
                        <div class="">
                            @foreach ($texts as $text)
                                @if ($text->id === 7)
                                    <span class="counter"> {{ $text->title }} </span>
                        </div>
                        <span class="counter-text"> {{ $text->subtitle }} </span>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                    <div class="counter-style-5">
                        <div class="">
                            @foreach ($texts as $text)
                                @if ($text->id === 8)
                                    <span class="counter"> {{ $text->title }} </span>
                        </div>
                        <span class="counter-text"> {{ $text->subtitle }} </span>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                    <div class="counter-style-5">
                        <div class="">
                            @foreach ($texts as $text)
                                @if ($text->id === 9)
                                    <span class="counter"> {{ $text->title }} </span>
                        </div>
                        <span class="counter-text"> {{ $text->subtitle }} </span>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Counter END -->
    <!-- Team Section -->
    <div class="section-full text-center bg-gray content-inner">
        <div class="container">
            <div class="section-head text-black text-center">
                @foreach ($texts as $text)
                    @if ($text->id === 10)
                <h2 class="title"> {{$text->title}} </h2>
                <p>
                    {{$text->content}}
                </p>
                <h3> {{{$text->subtitle}}} </h3>
                <p> {{$text->others}} </p>
                    @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="dlab-box m-b30 dlab-team1">
                        <div class="dlab-media">
                            <a href="">
                                @foreach ($sliders as $slider)
                                    @if ($slider->id === 20)
                                        <img width="358" height="460" alt="{{ $slider->filename }}"
                                            src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}">
                                    @endif
                                @endforeach
                            </a>
                        </div>
                        <div class="dlab-info">
                            @foreach ($texts as $text)
                                @if ($text->id === 11)
                            <h4 class="dlab-title"><a href=""> {{$text->title}} <br>
                                    {{$text->subtitle}} </a></h4>
                                    @endif
                                @endforeach
                            {{-- <span class="dlab-position">Director</span>
                                <ul class="dlab-social-icon dez-border">
                                    <li><a class="fab fa-facebook-f" href="/theme/https://www.facebook.com/"></a></li>
                                    <li><a class="fab fa-twitter" href="/theme/https://x.com/twitt_logina"></a></li>
                                    <li><a class="fab fa-linkedin-in" href="/theme/javascript:void(0);"></a></li>
                                    <li><a class="fab fa-pinterest-p" href="/theme/javascript:void(0);"></a></li>
                                </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="dlab-box m-b30 dlab-team1">
                        <div class="dlab-media">
                            <a href="">
                                @foreach ($sliders as $slider)
                                    @if ($slider->id === 2)
                                        <img width="358" height="460" alt="{{ $slider->filename }}"
                                            src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}">
                                    @endif
                                @endforeach
                            </a>
                        </div>
                        <div class="dlab-info">
                            @foreach ($texts as $text)
                                @if ($text->id === 12)
                            <h4 class="dlab-title"><a href=""> {{$text->title}} <br>
                                    {{$text->subtitle}} </a></h4>
                                    @endif
                                @endforeach
                            {{-- <span class="dlab-position">Designer</span>
                                <ul class="dlab-social-icon dez-border">
                                    <li><a class="fab fa-facebook-f" href="/theme/javascript:void(0);"></a></li>
                                    <li><a class="fab fa-twitter" href="/theme/javascript:void(0);"></a></li>
                                    <li><a class="fab fa-linkedin-in" href="/theme/javascript:void(0);"></a></li>
                                    <li><a class="fab fa-pinterest-p" href="/theme/javascript:void(0);"></a></li>
                                </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="dlab-box m-b30 dlab-team1">
                        <div class="dlab-media">
                            <a href="">
                                @foreach ($sliders as $slider)
                                    @if ($slider->id === 3)
                                        <img width="358" height="460" alt="{{ $slider->filename }}"
                                            src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}">
                                    @endif
                                @endforeach
                            </a>
                        </div>
                        <div class="dlab-info">
                            @foreach ($texts as $text)
                                @if ($text->id === 13)
                            <h4 class="dlab-title"><a href=""> {{$text->title}} <br>
                                    {{$text->subtitle}} </a></h4>
                                    @endif
                                @endforeach
                            {{-- <span class="dlab-position">Developer</span>
                                <ul class="dlab-social-icon dez-border">
                                    <li><a class="fab fa-facebook-f" href="/theme/javascript:void(0);"></a></li>
                                    <li><a class="fab fa-twitter" href="/theme/javascript:void(0);"></a></li>
                                    <li><a class="fab fa-linkedin-in" href="/theme/javascript:void(0);"></a></li>
                                    <li><a class="fab fa-pinterest-p" href="/theme/javascript:void(0);"></a></li>
                                </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="dlab-box m-b30 dlab-team1">
                        <div class="dlab-media">
                            <a href="">
                                @foreach ($sliders as $slider)
                                    @if ($slider->id === 4)
                                        <img width="358" height="460" alt="{{ $slider->filename }}"
                                            src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}">
                                    @endif
                                @endforeach
                            </a>
                        </div>
                        <div class="dlab-info">
                            @foreach ($texts as $text)
                                @if ($text->id === 14)
                            <h4 class="dlab-title"><a href=""> {{$text->title}} <br>
                                    {{$text->subtitle}} </a></h4>
                                    @endif
                                @endforeach
                            {{-- <span class="dlab-position">Manager</span>
                                <ul class="dlab-social-icon dez-border">
                                    <li><a class="fab fa-facebook-f" href="/theme/javascript:void(0);"></a></li>
                                    <li><a class="fab fa-twitter" href="/theme/javascript:void(0);"></a></li>
                                    <li><a class="fab fa-linkedin-in" href="/theme/javascript:void(0);"></a></li>
                                    <li><a class="fab fa-pinterest-p" href="/theme/javascript:void(0);"></a></li>
                                </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section END -->
    <!-- Price Table -->
    {{-- <div class="section-full content-inner-2 bg-white">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">Pricing Table</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's
                        standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content box-sort-in button-example pricingtable-style2-area m-t80">
                    <div class="pricingtable-row">
                        <div class="row max-w1000 m-auto">
                            <div class="col-sm-12 col-md-4 col-lg-4 p-lr0">
                                <div class="pricingtable-wrapper style2 bg-white">
                                    <div class="pricingtable-inner">
                                        <div class="pricingtable-price">
                                            <h4 class="font-weight-300 m-t10 m-b0">Basic</h4>
                                            <div class="pricingtable-bx"><span>Free</span></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore et
                                            dolore magna siad enim aliqua</p>
                                        <div class="m-t20">
                                            <a href="/theme/javascript:void(0);" class="site-button radius-xl"><span
                                                    class="p-lr30">Sign Up</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4 p-lr0">
                                <div class="pricingtable-wrapper style2 bg-primary text-white active">
                                    <div class="pricingtable-inner">
                                        <div class="pricingtable-price">
                                            <h4 class="font-weight-300 m-t10 m-b0">Professional</h4>
                                            <div class="pricingtable-bx"> $ <span>29</span> / Per Installation </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore et
                                            dolore magna siad enim aliqua</p>
                                        <div class="m-t20">
                                            <a href="/theme/javascript:void(0);" class="site-button white radius-xl"><span
                                                    class="p-lr30">Sign Up</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4 p-lr0">
                                <div class="pricingtable-wrapper style2 bg-white">
                                    <div class="pricingtable-inner">
                                        <div class="pricingtable-price">
                                            <h4 class="font-weight-300 m-t10 m-b0">Extended</h4>
                                            <div class="pricingtable-bx"> $ <span>29</span> / Per Installation </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore et
                                            dolore magna siad enim aliqua</p>
                                        <div class="m-t20">
                                            <a href="/theme/javascript:void(0);" class="site-button radius-xl"><span
                                                    class="p-lr30">Sign Up</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Price Table END -->
    <!-- Testimonials -->
    <div class="section-full content-inner-2 bg-gray">
        <div class="container">
            <div class="section-head text-black text-center">
                @foreach ($texts as $text)
                    @if ($text->id === 15)
                <h2 class="title"> {{$text->title}} </h2>
                <p> {{$text->content}} <a href="{{ url('/contact') }}"> {{$text->others}} </a>
                </p>
                @endif
                @endforeach
            </div>
            <div class="testimonial-six owl-loaded owl-theme owl-carousel owl-none dots-style-2">
                <div class="item">
                    <div class="testimonial-8">
                        <div class="testimonial-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the when an printer took a galley
                                of type and scrambled it to make.</p>
                        </div>
                        <div class="testimonial-detail clearfix">
                            <div class="testimonial-pic radius shadow"><img src="/theme/images/testimonials/pic2.jpg"
                                    width="100" height="100" alt=""></div>
                            <h5 class="testimonial-name m-t0 m-b5">David Matin</h5> <span
                                class="testimonial-position">Student</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-8">
                        <div class="testimonial-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the when an printer took a galley
                                of type and scrambled it to make.</p>
                        </div>
                        <div class="testimonial-detail clearfix">
                            <div class="testimonial-pic radius shadow"><img src="/theme/images/testimonials/pic3.jpg"
                                    width="100" height="100" alt=""></div>
                            <h5 class="testimonial-name m-t0 m-b5">David Matin</h5> <span
                                class="testimonial-position">Student</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-8">
                        <div class="testimonial-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the when an printer took a galley
                                of type and scrambled it to make.</p>
                        </div>
                        <div class="testimonial-detail clearfix">
                            <div class="testimonial-pic radius shadow"><img src="/theme/images/testimonials/pic1.jpg"
                                    width="100" height="100" alt=""></div>
                            <h5 class="testimonial-name m-t0 m-b5">David Matin</h5> <span
                                class="testimonial-position">Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials END -->
    </div>
    <!-- contact area END -->
@endsection
