<!DOCTYPE html>
<html lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Designsninja">
    <!-- description -->
    <meta name="description" content="UPF Inscription">
    <!-- keywords -->
    <meta name="keywords"
        content="creative, fullscreen, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html5, css3, studio, branding, creative design, multipurpose, parallax, personal, masonry, grid, coming soon, carousel, career">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UPF Inscription</title>
    <link rel="shortcut icon" href="assets-template-2/images/favicon.ico">

    <!-- Core Style Sheets -->
    <link rel="stylesheet" href="assets-template-2/css/master.css">
    <!-- Responsive Style Sheets -->
    <link rel="stylesheet" href="assets-template-2/css/responsive.css">
    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

</head>

<body>

    <!--== Loader Start ==-->
    <div id="loader-overlay">
        <div class="loader">
            <img src="assets-template-2/images/loader.svg" width="80" alt="">
        </div>
    </div>
    <!--== Loader End ==-->

    <!--== Wrapper Start ==-->
    <div class="wrapper">

        <!--== Header Start ==-->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full no-border">

            <div class="container">
                <!--== Start Atribute Navigation ==-->
                <div class="attr-nav hidden-xs sm-display-none">
                    <ul>
                        <li class="side-menu"><a href="#"><i class="icofont icofont-navigation-menu"></i></a></li>
                    </ul>
                </div>
                <!--== End Atribute Navigation ==-->

                <!--== Start Header Navigation ==-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i
                            class="tr-icon ion-android-menu"></i> </button>
                    <div class="logo"> <a href="/"> <img class="logo logo-display"
                                src="assets-template-2/images/logo-white.png" alt=""> <img
                                class="logo logo-scrolled" src="assets-template-2/images/logo-black.png" alt="">
                        </a> </div>
                </div>
                <!--== End Header Navigation ==-->

                <!--== Collect the nav links, forms, and other content for toggling ==-->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeIn" data-out="fadeOut">
                        <li><a class="page-scroll" href="#feature"> Appelez-nous : +212 535 610 320</a></li>
                        <li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
                        <li><a class="page-scroll" href="#about">About</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li><a class="page-scroll" href="{{ url('/dashboard') }}">Dashboard</a></li>
                            @else
                                <li><a class="page-scroll" href="{{ route('login') }}">Log in</a></li>

                                @if (Route::has('pre_inscription'))
                                    <li><a class="page-scroll" href="{{ route('pre_inscription') }}">Pre Inscription</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
                <!--== /.navbar-collapse ==-->
            </div>

            <!-- Start Side Menu -->
            <div class="side dark-bg">
                <a href="index.html" class="logo-side"><img src="assets-template-2/images/logo-white-sidemenu.png"
                        alt="side-logo" /></a>
                <a href="#" class="close-side"><i class="icofont icofont-close"></i></a>


                <div class="widget mt-120">


                    <ul class="link">
                        <li class="link-item"><a class="page-scroll" href="#portfolio">Portfolio</a></li>
                        <li class="link-item"><a class="page-scroll" href="#about">About</a></li>
                        <li class="link-item"><a class="page-scroll" href="#contact">Contact</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li class="link-item"><a class="page-scroll" href="{{ url('/dashboard') }}">Dashboard</a></li>
                            @else
                                <li class="link-item"><a class="page-scroll" href="{{ route('login') }}">Log in</a></li>

                                @if (Route::has('pre_inscription'))
                                    <li class="link-item"><a class="page-scroll" href="{{ route('pre_inscription') }}">Pre Inscription</a>
                                    </li>
                                @endif
                            @endauth
                        @endif

                    </ul>
                </div>
                <ul class="social-media">
                    <li><a href="#" class="icofont icofont-social-facebook"></a></li>
                    <li><a href="#" class="icofont icofont-social-twitter"></a></li>
                    <li><a href="#" class="icofont icofont-social-behance"></a></li>
                    <li><a href="#" class="icofont icofont-social-dribble"></a></li>
                    <li><a href="#" class="icofont icofont-social-linkedin"></a></li>
                </ul>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!--== Header End ==-->

        <!--== Hero Slider Start ==-->
        <section class="remove-padding transition-none">
            <div id="rev_slider_1061_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                data-alias="creative-freedom" data-source="gallery" style="background-color:#212121;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_1061_1" class="rev_slider fullscreenbanner" style="display:none;"
                    data-version="5.4.1">
                    <ul> <!-- SLIDE  -->
                        <li data-index="rs-2978" data-transition="fadethroughdark" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="2000"
                            data-thumb="assets-template-2/images/slides/home-bg-6-100x50.jpg" data-rotate="0"
                            data-saveperformance="off" data-title="Development" data-param1="01" data-param2=""
                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                            data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="assets-template-2/images/slides/Faculteì des Sciences de l’Ingeìnieur -03 (1).jpg"
                                alt="" data-bgposition="center center" data-bgfit="cover"
                                data-bgparallax="3" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- BACKGROUND VIDEO LAYER -->
                            <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute"
                                data-videowidth="100%" data-videoheight="100%"
                                data-videomp4="assets-template-2/videos/Sail-Away.mp4" data-videopreload="auto"
                                data-videoloop="loop" data-aspectratio="16:9" data-autoplay="true"
                                data-autoplayonlyfirsttime="false"></div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup"
                                id="slide-2978-layer-1" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['0','0','0','0']" data-fontweight="['100','100','400','400']"
                                data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;text-transform:left;background-color:rgba(33, 33, 33, 0.75);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                                id="slide-2978-layer-4" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-178','-178','-168','-141']" data-width="1" data-height="100"
                                data-whitespace="nowrap" data-type="shape" data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Creative-SubTitle   tp-resizeme rs-parallaxlevel-2"
                                id="slide-2978-layer-3" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-91','-91','-81','-64']" data-fontsize="['14','14','14','12']"
                                data-lineheight="['14','14','14','12']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: nowrap;text-transform:left;"> </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption Creative-Title   tp-resizeme rs-parallaxlevel-1"
                                id="slide-2978-layer-2" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-10','-10','-10','-10']" data-fontsize="['70','70','50','40']"
                                data-lineheight="['70','70','55','45']" data-width="['none','none','none','320']"
                                data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2550,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 8; white-space: nowrap;text-transform:left;">FSI<br />
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                                id="slide-2978-layer-5" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['137','137','119','100']" data-width="1" data-height="100"
                                data-whitespace="nowrap" data-type="shape" data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2900,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 9;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption Creative-Button rev-btn  rs-parallaxlevel-15"
                                id="slide-2978-layer-6" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                data-voffset="['694','611','689','540']" data-fontweight="['400','500','500','500']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3850,"ease":"Power2.easeOut"},{"delay":"wait","speed":500,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","ease":"Power1.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]"
                                data-paddingright="[50,50,50,50]" data-paddingbottom="[15,15,15,15]"
                                data-paddingleft="[50,50,50,50]"
                                style="z-index: 10; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-2979" data-transition="fadethroughdark" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="2000"
                            data-thumb="assets-template-2/images/slides/home-bg-7-100x50.jpg" data-rotate="0"
                            data-saveperformance="off" data-title="Quality" data-param1="02" data-param2=""
                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                            data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="assets-template-2/images/slides/Faculteì des Sciences de l’Ingeìnieur -02.jpg"
                                alt="" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup"
                                id="slide-2979-layer-1" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                                data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 11;text-transform:left;background-color:rgba(18, 12, 20, 0.75);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                                id="slide-2979-layer-4" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-178','-178','-168','-141']" data-width="1" data-height="100"
                                data-whitespace="nowrap" data-type="shape" data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 12;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption Creative-SubTitle   tp-resizeme rs-parallaxlevel-2"
                                id="slide-2979-layer-3" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-91','-91','-81','-64']" data-fontsize="['14','14','14','12']"
                                data-lineheight="['14','14','14','12']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 13; white-space: nowrap;text-transform:left;"></div>

                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption Creative-Title   tp-resizeme rs-parallaxlevel-1"
                                id="slide-2979-layer-2" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-10','-10','-10','-10']" data-fontsize="['70','70','50','40']"
                                data-lineheight="['70','70','55','45']" data-width="['none','none','none','320']"
                                data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2550,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 14; white-space: nowrap;text-transform:left;"> FBS<br />
                            </div>

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                                id="slide-2979-layer-5" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['137','137','119','100']" data-width="1" data-height="100"
                                data-whitespace="nowrap" data-type="shape" data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2900,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 15;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption Creative-Button rev-btn  rs-parallaxlevel-15"
                                id="slide-2979-layer-6" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                data-voffset="['694','611','689','540']" data-fontweight="['400','500','500','500']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3850,"ease":"Power2.easeOut"},{"delay":"wait","speed":500,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","ease":"Power1.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]"
                                data-paddingright="[50,50,50,50]" data-paddingbottom="[15,15,15,15]"
                                data-paddingleft="[50,50,50,50]"
                                style="z-index: 16; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                JUST MOVE </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-2980" data-transition="fadethroughdark" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="2000"
                            data-thumb="assets-template-2/images/slides/home-bg-8-100x50.jpg" data-rotate="0"
                            data-saveperformance="off" data-title="Classic" data-param1="03" data-param2=""
                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                            data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="assets-template-2/images/slides/home-bg-8.jpg" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                data-bgparallax="3" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup"
                                id="slide-2980-layer-1" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                                data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 17;text-transform:left;background-color:rgba(18, 12, 20, 0.75);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                                id="slide-2980-layer-4" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-178','-178','-168','-141']" data-width="1" data-height="100"
                                data-whitespace="nowrap" data-type="shape" data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 18;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <!-- LAYER NR. 15 -->
                            <div class="tp-caption Creative-SubTitle   tp-resizeme rs-parallaxlevel-2"
                                id="slide-2980-layer-3" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-91','-91','-81','-64']" data-fontsize="['14','14','14','12']"
                                data-lineheight="['14','14','14','12']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 19; white-space: nowrap;text-transform:left;"> </div>

                            <!-- LAYER NR. 16 -->
                            <div class="tp-caption Creative-Title   tp-resizeme rs-parallaxlevel-1"
                                id="slide-2980-layer-2" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-10','-10','-10','-10']" data-fontsize="['70','70','50','40']"
                                data-lineheight="['70','70','55','45']" data-width="['none','none','none','320']"
                                data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2550,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 20; white-space: nowrap;text-transform:left;">santé<br />
                            </div>

                            <!-- LAYER NR. 17 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                                id="slide-2980-layer-5" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['137','137','119','100']" data-width="1" data-height="100"
                                data-whitespace="nowrap" data-type="shape" data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2900,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 21;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <!-- LAYER NR. 18 -->
                            <div class="tp-caption Creative-Button rev-btn  rs-parallaxlevel-15"
                                id="slide-2980-layer-6" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                data-voffset="['694','611','689','540']" data-fontweight="['400','500','500','500']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3850,"ease":"Power2.easeOut"},{"delay":"wait","speed":500,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","ease":"Power1.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]"
                                data-paddingright="[50,50,50,50]" data-paddingbottom="[15,15,15,15]"
                                data-paddingleft="[50,50,50,50]"
                                style="z-index: 22; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                BACK TO THE FIRST SLIDE </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
        </section>
        <!--== Hero Slider End ==-->

        <!--== Portfolio Start ==-->
        <section id="portfolio" class="pb-0">
            <div class="container-fluid remove-padding">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2 class="play-font">GALERIES</h2>
                            <h1 class="roboto-font text-uppercase">UPF</h1>
                            <hr class="center_line dark-bg">
                        </div>
                    </div>
                </div>

                <div class="row mt-50">
                    <div class="col-md-12">
                        <div id="portfolio-gallery-filter" class="cbp-l-filters-alignCenter text-sm-center mb-80">
                            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item dark">
                                All
                            </div>
                            <div data-filter=".branding" class="cbp-filter-item">
                                Branding
                            </div>
                            <div data-filter=".creative" class="cbp-filter-item">
                                Creative Design
                            </div>
                            <div data-filter=".web-design" class="cbp-filter-item">
                                Web Design
                            </div>
                            <div data-filter=".stationery" class="cbp-filter-item">
                                Stationery
                            </div>
                            <div data-filter=".photography" class="cbp-filter-item">
                                Photography
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="portfolio-gallery" class="cbp">
                            <div class="cbp-item branding col-md-3 col-sm-6">
                                <div class="portfolio-item">
                                    <a href="#">
                                        <img src="assets-template-2/images/portfolio/grid/h9.jpg" alt="">
                                        <div class="portfolio-info dark-bg">
                                            <div class="centrize">
                                                <div class="v-center white-color">
                                                    <h3>EN</h3>
                                                    <p>sciences de la santé</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="cbp-item creative col-md-3 col-sm-6">
                                <div class="portfolio-item">
                                    <a href="#">
                                        <img src="assets-template-2/images/portfolio/grid/h2.png" alt="">
                                        <div class="portfolio-info dark-bg">
                                            <div class="centrize">
                                                <div class="v-center white-color">
                                                    <h3>en </h3>
                                                    <p>conférence</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="cbp-item creative branding col-md-3 col-sm-6">
                                <div class="portfolio-item">
                                    <a href="#">
                                        <img src="assets-template-2/images/portfolio/grid/h3.jpg" alt="">
                                        <div class="portfolio-info dark-bg">
                                            <div class="centrize">
                                                <div class="v-center white-color">
                                                    <h3>EN</h3>
                                                    <p> laboratoire</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="cbp-item web-design col-md-3 col-sm-6">
                                <div class="portfolio-item">
                                    <a href="#">
                                        <img src="assets-template-2/images/portfolio/grid/h4.jpg" alt="">
                                        <div class="portfolio-info dark-bg">
                                            <div class="centrize">
                                                <div class="v-center white-color">
                                                    <h3>EN</h3>
                                                    <p>Bascket</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="cbp-item stationery photography col-md-3 col-sm-6">
                                <div class="portfolio-item">
                                    <a href="#">
                                        <img src="assets-template-2/images/portfolio/grid/h5.jpg" alt="">
                                        <div class="portfolio-info dark-bg">
                                            <div class="centrize">
                                                <div class="v-center white-color">
                                                    <h3>EN</h3>
                                                    <p>classe de design</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="cbp-item branding web-design col-md-3 col-sm-6">
                                <div class="portfolio-item">
                                    <a href="#">
                                        <img src="assets-template-2/images/portfolio/grid/h6.jpg" alt="">
                                        <div class="portfolio-info dark-bg">
                                            <div class="centrize">
                                                <div class="v-center white-color">
                                                    <h3>EN</h3>
                                                    <p>bibliothèque</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="cbp-item web-design col-md-3 col-sm-6">
                                <div class="portfolio-item">
                                    <a href="#">
                                        <img src="assets-template-2/images/portfolio/grid/h7.jpg" alt="">
                                        <div class="portfolio-info dark-bg">
                                            <div class="centrize">
                                                <div class="v-center white-color">
                                                    <h3> du </h3>
                                                    <p>campus</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="cbp-item stationery col-md-3 col-sm-6">
                                <div class="portfolio-item">
                                    <a href="#">
                                        <img src="assets-template-2/images/portfolio/grid/h8.jpg" alt="">
                                        <div class="portfolio-info dark-bg">
                                            <div class="centrize">
                                                <div class="v-center white-color">
                                                    <h3>design </h3>
                                                    <p>architectural</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--== Portfolio End ==-->

        <!--== Testimonails Start ==-->
        <section class="darken-bg">
            <div class="container">
                <div class="row">
                    <div class="testimonial-style-2">
                        <div class="col-xs-12">
                            <!--== Slide ==-->
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <p class="mt-20 line-height-26 font-20px"><i
                                            class="icofont icofont-quote-left font-50px default-color mt-20"></i> <span
                                            class="white-color">Excellente expérience avec le service proposé. Les
                                            délais ont été respectés et les ajustements demandés ont été traités
                                            rapidement. Je recommande vivement le UPF pour son professionnalisme.</span>
                                    </p>
                                    <h5 class="font-700 mb-0 white-color play-font">Sophie Martin</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <!--== Slide ==-->
                            <div class="testimonial-item text-center">
                                <div class="testimonial-content">
                                    <p class="mt-20 line-height-26 font-20px"><i
                                            class="icofont icofont-quote-left font-50px default-color mt-20"></i> <span
                                            class="white-color">Je suis très satisfait des résultats ! L'équipe a
                                            dépassé mes attentes et je leur en suis très reconnaissant. Je recommande
                                            vivement le UPF à tous.</span></p>
                                    <h5 class="font-700 mb-0 white-color play-font">Jean Dupont</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <!--== Slide ==-->
                            <div class="testimonial-item text-center">
                                <div class="testimonial-content">
                                    <p class="mt-20 line-height-26 font-20px"><i
                                            class="icofont icofont-quote-left font-50px default-color mt-20"></i> <span
                                            class="white-color">Un travail remarquable ! Les options proposées étaient
                                            nombreuses et pertinentes. Cela m'a permis de trouver exactement ce dont
                                            j'avais besoin pour mon projet.</span></p>
                                    <h5 class="font-700 mb-0 white-color play-font">Claire Bernard</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--=== What We Do Start ======-->
        <section class="dark-bg lg-section" id="about">
            <div class="col-md-6 col-sm-4 bg-flex bg-flex-right">
                <div class="bg-flex-holder bg-flex-cover"
                    style="background-image: url(assets-template-2/images/bg-right-img.jpg);"></div>
                <div class="video-box_overlay">
                    <div class="center-layout">
                        <div class="v-align-middle"> <a class="popup-youtube"
                                href="https://youtu.be/ofiTNiwgNsA?si=e2gInW5ZbgoMAzQ4">
                                <div class="play-button"><i class="tr-icon ion-android-arrow-dropright"></i></div>
                            </a> </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-5 col-sm-7">
                    <div class="section-title white-color">
                        <h2 class="play-font">Présentation</h2>
                        <h1 class="roboto-font text-uppercase">Université Privée De Fès</h1>
                        <hr class="left-line white-bg">
                    </div>
                    <p>L’Université Privée de Fès est la première université privée Reconnue par l’État au niveau de la
                        capitale spirituelle et culturelle du royaume du Maroc. Elle est composée de quatre structures
                        indépendantes notamment la Facultéì des Sciences de l’Ingénieur, la Fès Business School,
                        l’Institut des Hautes Études Juridiques et Sociales et l’Ecole Supérieure des Métiers de
                        l’Architecture et du Bâtiment, et vous offre le choix entre un parcours d’Ingénieur d’état ou de
                        Master « Bac+5 », ou un parcours Bachelor « Bac +4 », avec plus de 20 spécialités les plus
                        convoitées par les entreprises nationales et multinationales.</p>
                    <p class="mt-30"><a class="btn btn-lg btn-light-outline btn-square">Read more</a></p>
                </div>
            </div>
        </section>
        <!--=== What We Do End ======-->


        <!--== Team Start ==-->
        <section class="grey-bg" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2 class="play-font">Meet Creatives</h2>
                            <h1 class="roboto-font text-uppercase">Our Team</h1>
                            <hr class="center_line dark-bg">
                        </div>
                    </div>
                </div>

                <div class="row mt-50">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="team-member">
                            <div class="team-thumb">
                                <div class="thumb-overlay"></div>
                                <img src="assets-template-2/images/team/team1.jpg" alt="">
                                <div class="member-info text-center dark-bg">
                                    <h3>Tom Bills</h3>
                                    <span class="title">NABEDE RANITAKOU -
                                        Ingénieur Maintenance
                                        Biomédical, Systh-mes Electroniques & Electrique</span>
                                    <div class="social-icons-style-02">
                                        <ul class="sm-icon mt-20">
                                            <li><a class="fb" href="#."><i
                                                        class="icofont icofont-social-facebook"></i></a></li>
                                            <li><a class="tw" href="#."><i
                                                        class="icofont icofont-social-twitter"></i></a></li>
                                            <li><a class="be" href="#."><i
                                                        class="icofont icofont-social-behance"></i></a></li>
                                            <li><a class="in" href="#."><i
                                                        class="icofont icofont-social-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== Member End ==-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="team-member">
                            <div class="team-thumb">
                                <div class="thumb-overlay"></div>
                                <img src="assets-template-2/images/team/team2.jpg" alt="">
                                <div class="member-info text-center dark-bg">
                                    <h3>RACHID NAIMI -
                                        Fonctionnaire à l'agence urbaine de Fès</h3>
                                    <span class="title">CEO of Beam Agency</span>
                                    <div class="social-icons-style-02">
                                        <ul class="sm-icon mt-20">
                                            <li><a class="fb" href="#."><i
                                                        class="icofont icofont-social-facebook"></i></a></li>
                                            <li><a class="tw" href="#."><i
                                                        class="icofont icofont-social-twitter"></i></a></li>
                                            <li><a class="be" href="#."><i
                                                        class="icofont icofont-social-behance"></i></a></li>
                                            <li><a class="in" href="#."><i
                                                        class="icofont icofont-social-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== Member End ==-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="team-member">
                            <div class="team-thumb">
                                <div class="thumb-overlay"></div>
                                <img src="assets-template-2/images/team/team3.jpg" alt="">
                                <div class="member-info text-center dark-bg">
                                    <h3>YASMINE NABIL -
                                        Interior Architect & Designer -
                                        Auto Entrepreneur</h3>
                                    <span class="title">Photographer</span>
                                    <div class="social-icons-style-02">
                                        <ul class="sm-icon mt-20">
                                            <li><a class="fb" href="#."><i
                                                        class="icofont icofont-social-facebook"></i></a></li>
                                            <li><a class="tw" href="#."><i
                                                        class="icofont icofont-social-twitter"></i></a></li>
                                            <li><a class="be" href="#."><i
                                                        class="icofont icofont-social-behance"></i></a></li>
                                            <li><a class="in" href="#."><i
                                                        class="icofont icofont-social-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!--== Team End ==-->

        <!--== Clients Start ==-->
        <div class="dark-bg pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="client-slider slick">
                        <div class="client-logo"> <img class="img-responsive"
                                src="assets-template-2/images/team/sp1.jpg" alt="01" /> </div>
                        <div class="client-logo"> <img class="img-responsive"
                                src="assets-template-2/images/team/sp2.jpg" alt="02" /> </div>
                        <div class="client-logo"> <img class="img-responsive"
                                src="assets-template-2/images/team/sp3jpg.jpg" alt="03" /> </div>
                        <div class="client-logo"> <img class="img-responsive"
                                src="assets-template-2/images/team/sp4.jpg" alt="04" /> </div>
                        <div class="client-logo"> <img class="img-responsive"
                                src="assets-template-2/images/team/sp5.jpg" alt="05" /> </div>
                        <div class="client-logo"> <img class="img-responsive"
                                src="assets-template-2/images/team/sp6jpg.jpg" alt="06" /> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== Clients End ==-->

        <!--== Video Start ==-->
        <section class="parallax-bg fixed-bg"
            data-parallax-bg-image="assets-template-2/images/background/nouvelle-image.jpg" data-parallax-speed="0.5"
            data-parallax-direction="up">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center parallax-content height-400px centerize-col">
                        <div class="center-layout">
                            <div class="v-align-middle">
                                <h1 class="font-400 white-color play-font"></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Video End ==-->


        <!--== Contact Start ==-->
        <section class="dark-bg pt-0 pb-0 transition-none" id="contact">
            <div class="col-md-6 col-sm-4 bg-flex bg-flex-right">
                <div class="bg-flex-holder bg-flex-cover">
                    <div id="map-style-2" class="wide"></div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-5 col-sm-7 pt-120 pb-120 xs-pt-20 xs-pb-80">

                    <form name="contact-form" id="contact-form" action="php/contact.php" method="POST"
                        class="contact-form-style-02">
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="sr-only" for="name">Name</label>
                                    <input type="text" name="name" class="md-input style-02" id="name"
                                        placeholder="Name *" required data-error="Your Name is Required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="email" name="email" class="md-input style-02" id="email"
                                        placeholder="Email *" required data-error="Please Enter Valid Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="sr-only" for="subject">Subject</label>
                                    <input type="text" name="subject" class="md-input style-02" id="subject"
                                        placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="sr-only" for="message">Project Details</label>
                                    <textarea name="message" class="md-textarea style-02" id="message" rows="7" placeholder="Project Details"
                                        required data-error="Please, Leave us a message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="text-left mt-20">
                                    <button type="submit" name="submit"
                                        class="btn btn-lg btn-light-outline btn-square remove-margin">Send Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--== Contact End ==-->

        <!--== Footer Start ==-->
        <footer class="footer">
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="widget widget-text">
                                <div class="logo-footer"><a href="index.html"> <img class="img-responsive"
                                            src="assets-template-2/images/logo-footer-dark.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="widget widget-links">
                                <h5 class="widget-title">Social Media</h5>
                                <ul>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Google Plus</a></li>
                                    <li><a href="#">Linkedin</a></li>
                                    <li><a href="#">Envato Market</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="widget widget-links">
                                <h5 class="widget-title">Quick Links</h5>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="widget widget-text widget-links">
                                <h5 class="widget-title">Contact Us</h5>
                                <ul>
                                    <li> <i class="icofont icofont-social-google-map"></i> Lotissement Quaraouiyine
                                        Route Ain Chkef, Fès 30000</li>
                                    <li> <i class="icofont icofont-smart-phone"></i> +212 535 610 320</li>
                                    <li> <i class="icofont icofont-email"></i> <a href="#"> info@upf.ac.ma</a>
                                    </li>
                                    <li> <i class="icofont icofont-globe-alt"></i> <a href="#">www.upf.ac.ma</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copy-right text-center">© Copyright 2021 - Université Privée de Fès</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--== Footer End ==-->

        <!--== Go to Top  ==-->
        <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
        <!--== Go to Top End ==-->

    </div>
    <!--== Wrapper End ==-->

    <!--== Javascript Plugins ==-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJNGOwO2hJpJ9kz8e0UUPjZhEbgDJTTXE"></script>
    <script src="assets-template-2/js/jquery.min.js"></script>
    <script src="assets-template-2/js/smoothscroll.js"></script>
    <script src="assets-template-2/js/plugins.js"></script>
    <script src="assets-template-2/js/master.js"></script>

    <!-- Revolution js Files -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="revolution/js/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/revolution.extension.video.min.js"></script>
    <!--== Javascript Plugins End ==-->

</body>

</html>
