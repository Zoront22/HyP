@extends('layouts.front')

@section('content')
    <!-- Slider -->
    <div class="main-slider style-two default-banner" id="home">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="reveal-add-on36"
                    data-source="gallery" style="background:#ffffff;padding:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.7.2 fullscreen mode -->
                    <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7.2">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-100" data-transition="slideoververtical" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0"
                                data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                                data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                                data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                @foreach ($images as $image)
                                    @if ($image->id === 5)
                                        <img src=""
                                            data-lazyload="{{ asset('storage/' . str_replace('public/', '', $image->path)) }}"
                                            alt="{{ $image->filename }}" data-bgposition="center center" data-kenburns="on"
                                            data-duration="4000" data-ease="Power3.easeInOut" data-scalestart="150"
                                            data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="0"
                                            data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="4"
                                            class="rev-slidebg" data-no-retina>
                                    @endif
                                @endforeach
                                <!-- LAYER NR. 1 -->
                                <!-- LAYERS -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                    data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                    data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 2;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 0);border-width:0px; background-image:url()">
                                </div>
                                <!-- LAYER NR. 1 -->

                                <div class="tp-caption tp-shape tp-shapewrapper ov-tp " id="slide-100-layer-1"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                    data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                    data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 5;">
                                </div>
                                @foreach ($texts as $text)
                                    @if ($text->id === 1)
                                        <div class="tp-caption " id="slide-100-layer-3"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['-90','-200','0','0']"
                                            data-y="['middle','middle','middle','middle']"
                                            data-voffset="['-100','-100','-100','-90']"
                                            data-fontsize="['65','40','40','30']" data-lineheight="['80','40','40','30']"
                                            data-letterspacing="['2','2','2','2']"
                                            data-width="['1000','none','768','360']" data-height="none"
                                            data-whitespace="['normal','nowrap','normal','normal']" data-type="text"
                                            data-responsive_offset="off" data-responsive="off"
                                            data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;","color":"#000000","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","color":"#000000","to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[10,10,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 6; min-width: 800px; max-width: 800px; font-weight: 600; white-space: normal; color: #fff; font-family: 'Poppins',sans-serif;">
                                            {{ $text->title }} <br> {{ $text->subtitle }}
                                        </div>
                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption" id="slide-100-layer-4"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['-265','-165','0','0']"
                                            data-y="['middle','middle','middle','middle']"
                                            data-voffset="['50','0','-5','00']" data-fontsize="['18','16','14','14']"
                                            data-lineheight="['30','30','26','26']" data-width="['640','481','500','300']"
                                            data-height="none" data-whitespace="normal" data-type="text"
                                            data-responsive_offset="off" data-responsive="off"
                                            data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;","color":"#000000","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","color":"#000000","to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 7; min-width: 640px; max-width: 640px; font-weight: 700; font-size: 18px; line-height: 30px; font-weight: 400; color: #fff; font-family: 'Poppins',sans-serif;">
                                            {{ $text->content }}
                                            {{-- Somos una empresa especializada en equipo de protección personal y artículos de
                                            seguridad industrial, distribuimos
                                            las mejores marcas del mercado. --}}
                                        </div>
                                    @endif
                                @endforeach
                                <!-- LAYER NR. 5 -->
                                <a class="tp-caption rev-btn tc-btnshadow bg-primary tp-rs-menulink"
                                    href="{{ url('/about') }}" target="_blank" id="slide-100-layer-5"
                                    data-x="['center','center','center','center']"
                                    data-hoffset="['-510','-335','-100','-80']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['160','90','80','90']"
                                    data-lineheight="['18','18','18','18']" data-whitespace="nowrap" data-type="button"
                                    data-actions='' data-responsive_offset="off" data-responsive="off"
                                    data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"x:-50px;z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;fbr:100;","bgcolor":"#000000","to":"o:1;fbr:100;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","bgcolor":"#000000","to":"opacity:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:rgba(255,255,255,1);"}]'
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[15,15,15,10]"
                                    data-paddingright="[30,30,30,20]" data-paddingbottom="[15,15,15,10]"
                                    data-paddingleft="[30,30,30,20]"
                                    style="z-index: 8;letter-spacing: 1px; white-space: nowrap; font-size: 10px; font-weight: 600; color: rgba(255,255,255,1);  text-transform: uppercase;">
                                    SOBRE NOSOTROS
                                </a>
                                <!-- LAYER NR. 5 -->
                                <a class="tp-caption rev-btn tc-btnshadow tp-rs-menulink bg-primary"
                                    href="{{ url('/contact') }}" target="_blank" id="slide-100-layer-6"
                                    data-x="['center','center','center','center']"
                                    data-hoffset="['-340','-160','70','70']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['160','90','80','90']"
                                    data-lineheight="['18','18','18','18']" data-whitespace="nowrap" data-type="button"
                                    data-actions='' data-responsive_offset="off" data-responsive="off"
                                    data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"x:-50px;z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;fbr:100;","bgcolor":"#000000","to":"o:1;fbr:100;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","bgcolor":"#000000","to":"opacity:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:rgba(255,255,255,1);"}]'
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[15,15,15,10]"
                                    data-paddingright="[30,30,30,20]" data-paddingbottom="[15,15,15,10]"
                                    data-paddingleft="[30,30,30,20]"
                                    style="z-index: 8;letter-spacing: 1px; white-space: nowrap; font-size: 10px; font-weight: 600; color: rgba(255,255,255,1);  text-transform: uppercase;">
                                    CONTACTANOS
                                </a>
                            </li>
                            <li data-index="rs-200" data-transition="fadethroughdark" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0"
                                data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                @foreach ($images as $image)
                                    @if ($image->id === 6)
                                        <img src=""
                                            data-lazyload="{{ asset('storage/' . str_replace('public/', '', $image->path)) }}"
                                            alt="{{ $image->filename }}" data-bgposition="center center"
                                            data-kenburns="on" data-duration="4000" data-ease="Power3.easeInOut"
                                            data-scalestart="150" data-scaleend="100" data-rotatestart="0"
                                            data-rotateend="0" data-blurstart="0" data-blurend="0"
                                            data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="4"
                                            class="rev-slidebg" data-no-retina>
                                    @endif
                                @endforeach
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-200-layer"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                    data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                    data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 2;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 0);border-width:0px; background-image:url(images/overlay/rrdiagonal-line.png)">
                                </div>
                                <div class="tp-caption tp-shape tp-shapewrapper ov-tp " id="slide-200-layer-1"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                    data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                    data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 5;">
                                </div>
                                @foreach ($texts as $text)
                                    @if ($text->id === 2)
                                        <div class="tp-caption " id="slide-200-layer-3"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['-90','-200','0','0']"
                                            data-y="['middle','middle','middle','middle']"
                                            data-voffset="['-100','-100','-100','-90']"
                                            data-fontsize="['65','40','40','30']" data-lineheight="['80','40','40','30']"
                                            data-letterspacing="['2','2','2','2']"
                                            data-width="['1000','none','768','360']" data-height="none"
                                            data-whitespace="['normal','nowrap','normal','normal']" data-type="text"
                                            data-responsive_offset="off" data-responsive="off"
                                            data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;","color":"#000000","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","color":"#000000","to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[10,10,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 6; min-width: 800px; max-width: 800px; font-weight: 600; white-space: normal; color: #fff; font-family: 'Poppins',sans-serif;">
                                            {{ $text->title }} <br>{{ $text->subtitle }}
                                        </div>
                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption" id="slide-200-layer-4"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['-265','-165','0','0']"
                                            data-y="['middle','middle','middle','middle']"
                                            data-voffset="['50','0','-5','00']" data-fontsize="['18','16','18','14']"
                                            data-lineheight="['30','30','25','22']" data-width="['640','481','500','300']"
                                            data-height="none" data-whitespace="normal" data-type="text"
                                            data-responsive_offset="off" data-responsive="off"
                                            data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;","color":"#000000","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","color":"#000000","to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 7; min-width: 640px; max-width: 640px; font-weight: 700; font-size: 18px; line-height: 30px; font-weight: 400; color: #fff; font-family: 'Poppins',sans-serif;">
                                            {{ $text->content }}
                                            {{-- A lo largo de más de 30 años hemos obtenido la experiencia que nos permite
                                            brindar
                                            soluciones objetivas y
                                            confiables para cada uno de los proyectos que nos confieren. --}}
                                        </div>
                                    @endif
                                @endforeach
                                <!-- LAYER NR. 5 -->
                                <a class="tp-caption rev-btn tc-btnshadow tp-rs-menulink bg-primary"
                                    href="{{ url('/about') }}" target="_blank" id="slide-200-layer-5"
                                    data-x="['center','center','center','center']"
                                    data-hoffset="['-510','-335','-100','-80']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['160','90','80','90']"
                                    data-lineheight="['18','18','18','18']" data-whitespace="nowrap" data-type="button"
                                    data-actions='' data-responsive_offset="off" data-responsive="off"
                                    data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"x:-50px;z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;fbr:100;","bgcolor":"#000000","to":"o:1;fbr:100;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","bgcolor":"#000000","to":"opacity:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:rgba(255,255,255,1);"}]'
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[15,15,15,10]"
                                    data-paddingright="[30,30,30,20]" data-paddingbottom="[15,15,15,10]"
                                    data-paddingleft="[30,30,30,20]"
                                    style="z-index: 8;letter-spacing: 1px; white-space: nowrap; font-size: 10px; font-weight: 600; color: rgba(255,255,255,1);  text-transform: uppercase;">
                                    SOBRE NOSOTROS
                                </a>
                                <!-- LAYER NR. 5 -->
                                <a class="tp-caption rev-btn tc-btnshadow tp-rs-menulink bg-primary"
                                    href="{{ url('/contact') }}" target="_blank" id="slide-200-layer-6"
                                    data-x="['center','center','center','center']"
                                    data-hoffset="['-340','-160','70','70']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['160','90','80','90']"
                                    data-lineheight="['18','18','18','18']" data-whitespace="nowrap" data-type="button"
                                    data-actions='' data-responsive_offset="off" data-responsive="off"
                                    data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"x:-50px;z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;fbr:100;","bgcolor":"#000000","to":"o:1;fbr:100;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","bgcolor":"#000000","to":"opacity:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:rgba(255,255,255,1);"}]'
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[15,15,15,10]"
                                    data-paddingright="[30,30,30,20]" data-paddingbottom="[15,15,15,10]"
                                    data-paddingleft="[30,30,30,20]"
                                    style="z-index: 8;letter-spacing: 1px; white-space: nowrap; font-size: 10px; font-weight: 600; color: rgba(255,255,255,1);  text-transform: uppercase;">
                                    CONTACTANOS
                                </a>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </div>
    </div>
    <!-- Slider END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Call To Action End -->
        <div class="section-full call-action bg-primary wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text-white">
                        @foreach ($texts as $text)
                            @if ($text->id === 3)
                                <h3 class="title">{{ $text->title }}</h3>
                            @endif
                        @endforeach
                        {{-- <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
                    </div>
                    <div class="col-lg-3 d-flex">
                        @foreach ($texts as $text)
                            @if ($text->id === 4)
                                <a href="#catalogo"
                                    class="site-button white align-self-center outline ms-auto radius-xl outline-2 btnhover16 btnhover16">{{ $text->title }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->
        <!-- About Us -->
        <div class="section-full content-inner bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
            <div class="container">
                <div class="on-show-slider ">
                    <div id="sync2" class="owl-carousel owl-theme owl-none owl-dots-none project-list">
                        {{-- <div class="item">
                            <div class="project-owbx">
                                <i class="flaticon-robot-arm"></i>
                                <h4 class="title">Mechanical Works</h4>
                            </div>
                        </div> --}}
                        <div class="item">
                            <div class="project-owbx">
                                <i class="flaticon-factory-1"></i>
                                @foreach ($texts as $text)
                                    @if ($text->id === 5)
                                        <h4 class="title">{{ $text->title }}</h4>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-owbx active">
                                <i class="flaticon-fuel-station"></i>
                                @foreach ($texts as $text)
                                    @if ($text->id === 6)
                                        <h4 class="title">{{ $text->title }}</h4>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-owbx">
                                <i class="flaticon-engineer-1"></i>
                                @foreach ($texts as $text)
                                    @if ($text->id === 7)
                                        <h4 class="title">{{ $text->title }}</h4>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-owbx">
                                <i class="flaticon-conveyor-1"></i>
                                @foreach ($texts as $text)
                                    @if ($text->id === 8)
                                        <h4 class="title">{{ $text->title }}</h4>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="sync1"
                        class="owl-carousel owl-theme owl-btn-center-lr m-b5 owl-dots-none owl-btn-3 primary">
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 m-b30">
                                    <div class="our-story">
                                        {{-- <span>OUR STORY</span> --}}
                                        @foreach ($texts as $text)
                                            @if ($text->id === 9)
                                                <h2 class="title">{{ $text->title }} <br>H&P <span
                                                        class="text-primary">solutions
                                                        faciliators</span></h2>
                                                <h4 class="title">{{ $text->subtitle }}</h4>
                                                <p> {{ $text->content }}
                                                    {{-- Ofrecemos servicios especializados en Corte Láser, Reparaciones Mecánicas e
                                            Hidráulicas, garantizando precisión y eficiencia en cada proyecto. Nuestro
                                            equipo está comprometido en brindar soluciones personalizadas para
                                            satisfacer
                                            las necesidades técnicas de nuestros clientes, utilizando tecnología de
                                            vanguardia y experiencia comprobada en la industria. --}}
                                                </p>
                                            @endif
                                        @endforeach
                                        {{-- <a href="/theme/about-2.html" class="site-button btnhover16">Read More</a> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 m-b30">
                                    @foreach ($sliders as $slider)
                                        @if ($slider->id === 11)
                                            <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}"
                                                class="radius-sm" alt="{{ $slider->filename }}">
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 m-b30">
                                    @foreach ($sliders as $slider)
                                        @if ($slider->id === 13)
                                            <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}"
                                                class="radius-sm" alt="{{ $slider->filename }}">
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-6 col-md-6 m-b30">
                                    <div class="our-story content-bx1">
                                        {{-- <span>OUR STORY</span> --}}
                                        @foreach ($texts as $text)
                                            @if ($text->id === 10)
                                                <h2 class="title">{{ $text->title }} <br>H&P <span
                                                        class="text-primary">solutions
                                                        faciliators</span></h2>
                                                <h4 class="title">{{ $text->subtitle }}</h4>
                                                <p> {{ $text->content }}
                                                    {{-- Ofrecemos servicios de fabricación, reparación e instalación de Racks, así
                                            como
                                            cualquier tipo de trabajo de pailería. Nos especializamos en estructuras
                                            metálicas de alta calidad, garantizando durabilidad y un acabado
                                            profesional.
                                            Nuestro equipo está dedicado a ofrecer soluciones personalizadas y eficaces
                                            para
                                            cumplir con los más altos estándares en cada proyecto. --}}
                                                </p>
                                            @endif
                                        @endforeach
                                        {{-- <a href="/theme/about-2.html" class="site-button btnhover16">Read More</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 m-b30">
                                    <div class="our-story">
                                        {{-- <span>OUR STORY</span> --}}
                                        @foreach ($texts as $text)
                                            @if ($text->id === 11)
                                                <h2 class="title">{{ $text->title }} <br>H&P <span
                                                        class="text-primary">solutions
                                                        faciliators</span></h2>
                                                <h4 class="title">{{ $text->subtitle }}
                                                </h4>
                                                <p>{{ $text->content }}
                                                    {{-- Ofrecemos servicios industriales de soldadura y trabajos de alta
                                            especialidad,
                                            enfocados en proyectos que requieren precisión y experiencia técnica.
                                            Contamos
                                            con un equipo altamente capacitado y herramientas de última generación para
                                            garantizar soluciones robustas y eficientes en entornos industriales,
                                            cumpliendo
                                            con los estándares más exigentes de calidad y seguridad. --}}
                                                </p>
                                            @endif
                                        @endforeach
                                        {{-- <a href="/theme/about-2.html" class="site-button btnhover16">Read More</a> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 m-b30">
                                    @foreach ($sliders as $slider)
                                        @if ($slider->id === 10)
                                            <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}"
                                                class="radius-sm" alt="{{ $slider->filename }}">
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 m-b30">
                                    @foreach ($sliders as $slider)
                                        @if ($slider->id === 12)
                                            <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}"
                                                class="radius-sm" alt="{{ $slider->filename }}">
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-6 col-md-6 m-b30">
                                    <div class="our-story content-bx1">
                                        {{-- <span>OUR STORY</span> --}}
                                        @foreach ($texts as $text)
                                            @if ($text->id === 12)
                                                <h2 class="title">{{ $text->title }} <br>H&P <span
                                                        class="text-primary">solutions
                                                        faciliators</span></h2>
                                                <h4 class="title">{{ $text->subtitle }}</h4>
                                                <p> {{ $text->content }}
                                                    {{-- Ofrecemos servicios mecánicos industriales especializados, brindando
                                            soluciones
                                            eficientes para mantenimiento, reparación y optimización de maquinaria.
                                            Nuestro
                                            equipo altamente capacitado utiliza tecnología avanzada para asegurar la
                                            fiabilidad y el rendimiento de los equipos en entornos industriales,
                                            garantizando un servicio de calidad y adaptado a las necesidades específicas
                                            de
                                            cada cliente. --}}
                                                </p>
                                            @endif
                                        @endforeach
                                        {{-- <a href="/theme/about-2.html" class="site-button btnhover16">Read More</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 m-b30">
                                    <div class="our-story">
                                        <span>OUR STORY</span>
                                        <h2 class="title">We Help You to Turn<br>H&P <span class="text-primary">solutions
                                                faciliators</span></h2>
                                        <h4 class="title">We are committed to provide safe industrial solutions to many
                                            factories.</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting Factory. Lorem
                                            Ipsum has been the Factory's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.Lorem Ipsum is simply dummy text of the printing and typesetting Factory.
                                        </p>
                                        <a href="/theme/about-2.html" class="site-button btnhover16">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 m-b30">
                                    <img src="/theme/images/about/pic10.jpg" class="radius-sm" alt="">
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
        <!-- About Us End -->
        <!-- Services -->
        {{-- <div class="section-full content-inner bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">Our Services</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's
                        standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="img-carousel-dots owl-theme owl-dots-none owl-carousel owl-btn-center-lr owl-btn-3">
                            <div class="item">
                                <div class="service-box style1">
                                    <div class="icon-xl m-b20 text-primary radius">
                                        <a href="" class="icon-cell"><i
                                                class="flaticon-worker"></i></a>
                                    </div>
                                    <h3 class="title">Material Engineering</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service-box style1">
                                    <div class="icon-xl m-b20 text-primary radius">
                                        <a href="" class="icon-cell"><i
                                                class="flaticon-factory"></i></a>
                                    </div>
                                    <h3 class="title">Power and Energy</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service-box style1">
                                    <div class="icon-xl m-b20 text-primary radius">
                                        <a href="" class="icon-cell"><i
                                                class="flaticon-settings"></i></a>
                                    </div>
                                    <h3 class="title">Agricultural Engineering</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service-box style1">
                                    <div class="icon-xl m-b20 text-primary radius">
                                        <a href="" class="icon-cell"><i
                                                class="flaticon-engineer-1"></i></a>
                                    </div>
                                    <h3 class="title">Petroleum Engineering</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Services End -->
        <!-- Latest Projects -->
        @foreach ($images as $image)
            @if ($image->id === 7)
                <div class="section-full content-inner-2 bg-img-fix overlay-black-dark wow fadeIn" data-wow-duration="2s"
                    id="catalogo" data-wow-delay="0.8s"
                    style="background-image: url({{ asset('storage/' . str_replace('public/', '', $image->path)) }});"
                    @endif
            @endforeach>
            <div class="container">
                <div class="section-head text-white text-center">
                    @foreach ($texts as $text)
                        @if ($text->id === 13)
                            <h2 class="title">{{ $text->title }}</h2>
                            <p> {{ $text->content }}
                                {{-- Descubre nuestro extenso catálogo de productos diseñados para garantizar la seguridad y
                        eficiencia en
                        cualquier entorno de trabajo.
                        Nuestro compromiso es proporcionar productos de la más alta calidad que cumplan
                        con los estándares internacionales de seguridad y rendimiento. --}}
                            </p><br>
                            <h5>{{ $text->subtitle }} <a href="/theme/archives/Guía-rápida-ECO-JYRSA-2024-Oficial-1.1.pdf"
                                    class="text-danger" target="_blank">{{ $text->others }}</a></h5>
                        @endif
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div
                            class="img-carousel-dots-nav owl-theme owl-dots-none owl-carousel owl-btn-center-lr owl-btn-3 btn-white">
                            <div class="item">
                                <div class="dlab-box project-bx">
                                    <div class="dlab-media radius-sm dlab-img-overlay1  dlab-img-effect zoom">
                                        <a href="">
                                            @foreach ($sliders as $slider)
                                                @if ($slider->id === 14)
                                                    <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}"
                                                        class="radius-sm" alt="{{ $slider->filename }}">
                                                @endif
                                            @endforeach
                                        </a>
                                    </div>
                                    <div class="dlab-info">
                                        @foreach ($texts as $text)
                                            @if ($text->id === 14)
                                                <h5 class="dlab-title">{{ $text->title }}</h5>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box project-bx">
                                    <div class="dlab-media radius-sm dlab-img-overlay1  dlab-img-effect zoom">
                                        <a href="">
                                            @foreach ($sliders as $slider)
                                                @if ($slider->id === 15)
                                                    <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}"
                                                        class="radius-sm" alt="{{ $slider->filename }}">
                                                @endif
                                            @endforeach
                                        </a>
                                    </div>
                                    <div class="dlab-info">
                                        @foreach ($texts as $text)
                                            @if ($text->id === 15)
                                                <h5 class="dlab-title">{{ $text->title }}</h5>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box project-bx">
                                    <div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
                                        <a href="">
                                            @foreach ($sliders as $slider)
                                                @if ($slider->id === 16)
                                                    <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}"
                                                        class="radius-sm" alt="{{ $slider->filename }}">
                                                @endif
                                            @endforeach
                                        </a>
                                    </div>
                                    <div class="dlab-info">
                                        @foreach ($texts as $text)
                                            @if ($text->id === 16)
                                                <h5 class="dlab-title">{{ $text->title }}</h5>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box project-bx">
                                    <div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
                                        <a href="">
                                            @foreach ($sliders as $slider)
                                                @if ($slider->id === 17)
                                                    <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}"
                                                        class="radius-sm" alt="{{ $slider->filename }}">
                                                @endif
                                            @endforeach
                                        </a>
                                    </div>
                                    <div class="dlab-info">
                                        @foreach ($texts as $text)
                                            @if ($text->id === 17)
                                                <h5 class="dlab-title">{{ $text->title }}</h5>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Latest Projects End -->
    <!-- Team -->
    <div class="section-full bg-white content-inner">
        <div class="container">
            <div class="section-head text-black text-center">
                @foreach ($texts as $text)
                    @if ($text->id === 18)
                        <h2 class="title text-capitalize">{{ $text->title }}</h2>
                        <p> {{ $text->content }}
                            {{-- 𝗛&𝗣 𝗦𝗼𝗹𝘂𝘁𝗶𝗼𝗻 𝗙𝗮𝗰𝗶𝗹𝗶𝘁𝗮𝘁𝗼𝗿𝘀 busca personal.
                    ¡Únete a nuestro equipo de 𝗜𝗻𝘀𝗽𝗲𝗰𝘁𝗼𝗿𝗲𝘀 𝘆 𝗦𝘂𝗽𝗲𝗿𝘃𝗶𝘀𝗼𝗿𝗲𝘀 𝗱𝗲
                    𝗖𝗮𝗹𝗶𝗱𝗮𝗱 y
                    marca la diferencia en la excelencia! Si buscas un desafío emocionante y una oportunidad para
                    𝗰𝗿𝗲𝗰𝗲𝗿 𝗽𝗿𝗼𝗳𝗲𝘀𝗶𝗼𝗻𝗮𝗹𝗺𝗲𝗻𝘁𝗲, ¡𝗲𝘀𝘁𝗼 𝗲𝘀 𝗽𝗮𝗿𝗮 𝘁𝗶!  --}}
                        </p>
                    @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="dlab-box m-b30 dlab-team9">
                        <div class="dlab-media dlab-media-right">
                            <a href="">
                                @foreach ($sliders as $slider)
                                    @if ($slider->id === 9)
                                        <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}"
                                            class="radius-sm" alt="{{ $slider->filename }}">
                                    @endif
                                @endforeach
                            </a>
                            {{-- <div class="dlab-info-has">
                                    <ul class="dlab-social-icon">
                                        <li><a class="site-button fab fa-facebook-f"
                                                href="/theme/javascript:void(0);"></a></li>
                                        <li><a class="site-button fab fa-twitter" href="/theme/javascript:void(0);"></a>
                                        </li>
                                        <li><a class="site-button fab fa-linkedin-in"
                                                href="/theme/javascript:void(0);"></a></li>
                                        <li><a class="site-button fab fa-pinterest-p"
                                                href="/theme/javascript:void(0);"></a></li>
                                    </ul>
                                </div> --}}
                            <div class="clearfix">
                                @foreach ($texts as $text)
                                    @if ($text->id === 19)
                                        <h4 class="dlab-title"><a href="">{{ $text->title }}</a></h4>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="dlab-box m-b30 dlab-team9">
                        <div class="dlab-media dlab-media-right">
                            <a href="">
                                @foreach ($sliders as $slider)
                                    @if ($slider->id === 5)
                                        <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}"
                                            class="radius-sm" alt="{{ $slider->filename }}">
                                    @endif
                                @endforeach
                            </a>
                            {{-- <div class="dlab-info-has">
                                    <ul class="dlab-social-icon">
                                        <li><a class="site-button fab fa-facebook-f"
                                                href="/theme/javascript:void(0);"></a></li>
                                        <li><a class="site-button fab fa-twitter" href="/theme/javascript:void(0);"></a>
                                        </li>
                                        <li><a class="site-button fab fa-linkedin-in"
                                                href="/theme/javascript:void(0);"></a></li>
                                        <li><a class="site-button fab fa-pinterest-p"
                                                href="/theme/javascript:void(0);"></a></li>
                                    </ul>
                                </div> --}}
                            <div class="clearfix">
                                @foreach ($texts as $text)
                                    @if ($text->id === 19)
                                        <h4 class="dlab-title"><a href="">{{ $text->title }}</a></h4>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="dlab-box m-b30 dlab-team9">
                        <div class="dlab-media dlab-media-right">
                            <a href="">
                                @foreach ($sliders as $slider)
                                    @if ($slider->id === 7)
                                        <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}"
                                            class="radius-sm" alt="{{ $slider->filename }}">
                                    @endif
                                @endforeach
                            </a>
                            {{-- <div class="dlab-info-has">
                                    <ul class="dlab-social-icon">
                                        <li><a class="site-button fab fa-facebook-f"
                                                href="/theme/javascript:void(0);"></a></li>
                                        <li><a class="site-button fab fa-twitter" href="/theme/javascript:void(0);"></a>
                                        </li>
                                        <li><a class="site-button fab fa-linkedin-in"
                                                href="/theme/javascript:void(0);"></a></li>
                                        <li><a class="site-button fab fa-pinterest-p"
                                                href="/theme/javascript:void(0);"></a></li>
                                    </ul>
                                </div> --}}
                            <div class="clearfix">
                                @foreach ($texts as $text)
                                    @if ($text->id === 19)
                                        <h4 class="dlab-title"><a href="">{{ $text->title }}</a></h4>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
                    <div class="dlab-box m-b30 dlab-team9">
                        <div class="dlab-media dlab-media-right">
                            <a href="">
                                @foreach ($sliders as $slider)
                                    @if ($slider->id === 8)
                                        <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}"
                                            class="radius-sm" alt="{{ $slider->filename }}">
                                    @endif
                                @endforeach
                            </a>
                            {{-- <div class="dlab-info-has">
                                    <ul class="dlab-social-icon">
                                        <li><a class="site-button fab fa-facebook-f"
                                                href="/theme/javascript:void(0);"></a></li>
                                        <li><a class="site-button fab fa-twitter" href="/theme/javascript:void(0);"></a>
                                        </li>
                                        <li><a class="site-button fab fa-linkedin-in"
                                                href="/theme/javascript:void(0);"></a></li>
                                        <li><a class="site-button fab fa-pinterest-p"
                                                href="/theme/javascript:void(0);"></a></li>
                                    </ul>
                                </div> --}}
                            <div class="clearfix">
                                @foreach ($texts as $text)
                                    @if ($text->id === 19)
                                        <h4 class="dlab-title"><a href="">{{ $text->title }}</a></h4>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team END -->
    <!-- Testimonials -->
    <!--<div class="section-full content-inner-2 bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="container">
                <div class="section-head text-black text-center">
                    {{-- @foreach ($texts as $text)
                    @if ($text->id === 20)
                        <h2 class="title">{{ $text->title }}</h2>
                        <p> {{ $text->content }}</p>
                    @endif
                @endforeach --}}
                </div>
                <div
                    class="testimonial-box-carousel owl-carousel m-b5 owl-btn-center-lr owl-btn-2 radius-no owl-btn-md owl-theme primary owl-dots-none">
                    <div class="item">
                        <div class="testimonial-11 testimonial-box">
                            <div class="testimonial-pic">
                                <img src="/theme/images/our-team/pic3.jpg" alt="">
                            </div>
                            <div class="testimonial-detail quote-left quote-right">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the when an
                                        printer took a galley of type and scrambled it to make.</p>
                                </div>
                                <h5 class="testimonial-name text-primary m-t0 m-b5">David Matin</h5> <span
                                    class="testimonial-position">Student</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-11 testimonial-box">
                            <div class="testimonial-pic">
                                <img src="/theme/images/our-team/pic2.jpg" alt="">
                            </div>
                            <div class="testimonial-detail quote-left quote-right">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the when an
                                        printer took a galley of type and scrambled it to make.</p>
                                </div>
                                <h5 class="testimonial-name text-primary m-t0 m-b5">David Matin</h5> <span
                                    class="testimonial-position">Student</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-11 testimonial-box">
                            <div class="testimonial-pic">
                                <img src="/theme/images/our-team/pic1.jpg" alt="">
                            </div>
                            <div class="testimonial-detail quote-left quote-right">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the when an
                                        printer took a galley of type and scrambled it to make.</p>
                                </div>
                                <h5 class="testimonial-name text-primary m-t0 m-b5">David Matin</h5> <span
                                    class="testimonial-position">Student</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    <!-- Testimonials End -->
    <!-- Latest Blog -->
    {{-- <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title text-capitalize">latest blog</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's
                        standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="blog-post blog-grid blog-rounded blog-effect1 fly-box">
                            <div class="dlab-post-media dlab-img-effect">
                                <a href="/theme/blog-single.html"><img src="/theme/images/blog/grid/pic1.jpg"
                                        alt=""></a>
                            </div>
                            <div class="dlab-info p-a20 border-1 bg-white">
                                <div class="dlab-post-meta">
                                    <ul>
                                        <li class="post-date"> <strong>10 Aug</strong> <span> 2016</span> </li>
                                        <li class="post-author"> By <a href="/theme/javascript:void(0);">Jack</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-title">
                                    <h4 class="post-title"><a href="/theme/blog-single.html">Seven Doubts You Should</a>
                                    </h4>
                                </div>
                                <div class="dlab-post-text">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                        necessary, making this the first true.</p>
                                </div>
                                <div class="dlab-post-readmore">
                                    <a href="/theme/blog-single.html" title="READ MORE" rel="bookmark"
                                        class="site-button btnhover16">READ MORE
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="blog-post blog-grid blog-rounded blog-effect1 fly-box">
                            <div class="dlab-post-media dlab-img-effect">
                                <a href="/theme/blog-single.html"><img src="/theme/images/blog/grid/pic2.jpg"
                                        alt=""></a>
                            </div>
                            <div class="dlab-info p-a20 border-1 bg-white">
                                <div class="dlab-post-meta ">
                                    <ul>
                                        <li class="post-date"> <strong>11 Aug</strong> <span> 2016</span> </li>
                                        <li class="post-author"> By <a href="/theme/javascript:void(0);">Zachary</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-title">
                                    <h4 class="post-title"><a href="/theme/blog-single.html">The Shocking Revelation</a>
                                    </h4>
                                </div>
                                <div class="dlab-post-text">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                        necessary, making this the first true.</p>
                                </div>
                                <div class="dlab-post-readmore">
                                    <a href="/theme/blog-single.html" title="READ MORE" rel="bookmark"
                                        class="site-button btnhover16">READ MORE
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
                        <div class="blog-post blog-grid blog-rounded blog-effect1 fly-box">
                            <div class="dlab-post-media dlab-img-effect">
                                <a href="/theme/blog-single.html"><img src="/theme/images/blog/grid/pic3.jpg"
                                        alt=""></a>
                            </div>
                            <div class="dlab-info p-a20 border-1 bg-white">
                                <div class="dlab-post-meta">
                                    <ul>
                                        <li class="post-date"> <strong>12 Aug</strong> <span> 2016</span> </li>
                                        <li class="post-author"> By <a href="/theme/javascript:void(0);">Charlotte</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-title">
                                    <h4 class="post-title"><a href="/theme/blog-single.html">The Story Of Industry</a>
                                    </h4>
                                </div>
                                <div class="dlab-post-text">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                        necessary, making this the first true.</p>
                                </div>
                                <div class="dlab-post-readmore">
                                    <a href="/theme/blog-single.html" title="READ MORE" rel="bookmark"
                                        class="site-button btnhover16">READ MORE
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Latest Blog End -->
    <!-- Client logo -->
    {{-- <div class="section-full content-inner-2 bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title text-capitalize">We work with our partners to provide project perfection,<br><span
                            class="text-primary">join with our parnership.</span></h2>
                </div>
                <div
                    class="client-logo-carousel owl-loaded owl-theme owl-carousel owl-dots-none owl-btn-center-lr owl-btn-3">
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo border">
                                <a href="/theme/javascript:void(0);"><img src="/theme/images/client-logo/logo1.jpg"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo border">
                                <a href="/theme/javascript:void(0);"><img src="/theme/images/client-logo/logo2.jpg"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo border">
                                <a href="/theme/javascript:void(0);"><img src="/theme/images/client-logo/logo1.jpg"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo border">
                                <a href="/theme/javascript:void(0);"><img src="/theme/images/client-logo/logo3.jpg"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo border">
                                <a href="/theme/javascript:void(0);"><img src="/theme/images/client-logo/logo4.jpg"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo border">
                                <a href="/theme/javascript:void(0);"><img src="/theme/images/client-logo/logo3.jpg"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Client logo End -->
    </div>
    <!-- contact area END -->
@endsection
