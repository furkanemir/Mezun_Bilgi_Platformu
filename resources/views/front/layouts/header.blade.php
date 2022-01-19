
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WorkWise Html Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/css/line-awesome-font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/css/responsive.css">
</head>


<body>


<div class="wrapper">



    <header>
        <div class="container">
            <div class="header-data">
                <div class="logo">
                    <a href="{{asset('frontend/')}}/index.html" title=""><img src="images/logo.png" alt=""></a>
                </div><!--logo end-->
                <div class="search-bar">
                    <form>
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit"><i class="la la-search"></i></button>
                    </form>
                </div><!--search-bar end-->
                <nav>
                    <ul>
                        <li>
                            <a href="{{asset('frontend/')}}/index.html" title="">
                                <span><img src="images/icon1.png" alt=""></span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('frontend/')}}/companies.html" title="">
                                <span><img src="images/icon2.png" alt=""></span>
                                Companies
                            </a>
                            <ul>
                                <li><a href="{{asset('frontend/')}}/companies.html" title="">Companies</a></li>
                                <li><a href="{{asset('frontend/')}}/company-profile.html" title="">Company Profile</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{asset('frontend/')}}/projects.html" title="">
                                <span><img src="images/icon3.png" alt=""></span>
                                Projects
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('frontend/')}}/profiles.html" title="">
                                <span><img src="images/icon4.png" alt=""></span>
                                Profiles
                            </a>
                            <ul>
                                <li><a href="{{asset('frontend/')}}/user-profile.html" title="">User Profile</a></li>
                                <li><a href="{{asset('frontend/')}}/my-profile-feed.html" title="">my-profile-feed</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{asset('frontend/')}}/jobs.html" title="">
                                <span><img src="images/icon5.png" alt=""></span>
                                Jobs
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('frontend/')}}/#" title="" class="not-box-open">
                                <span><img src="images/icon6.png" alt=""></span>
                                Messages
                            </a>
                            <div class="notification-box msg">
                                <div class="nt-title">
                                    <h4>Setting</h4>
                                    <a href="{{asset('frontend/')}}/#" title="">Clear all</a>
                                </div>
                                <div class="nott-list">
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img1.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="{{asset('frontend/')}}/messages.html" title="">Jassica William</a> </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                            <span>2 min ago</span>
                                        </div><!--notification-info -->
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img2.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="{{asset('frontend/')}}/messages.html" title="">Jassica William</a></h3>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                            <span>2 min ago</span>
                                        </div><!--notification-info -->
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img3.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="{{asset('frontend/')}}/messages.html" title="">Jassica William</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                            <span>2 min ago</span>
                                        </div><!--notification-info -->
                                    </div>
                                    <div class="view-all-nots">
                                        <a href="{{asset('frontend/')}}/messages.html" title="">View All Messsages</a>
                                    </div>
                                </div><!--nott-list end-->
                            </div><!--notification-box end-->
                        </li>
                        <li>
                            <a href="{{asset('frontend/')}}/#" title="" class="not-box-open">
                                <span><img src="images/icon7.png" alt=""></span>
                                Notification
                            </a>
                            <div class="notification-box">
                                <div class="nt-title">
                                    <h4>Setting</h4>
                                    <a href="{{asset('frontend/')}}/#" title="">Clear all</a>
                                </div>
                                <div class="nott-list">
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img1.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="{{asset('frontend/')}}/#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div><!--notification-info -->
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img2.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="{{asset('frontend/')}}/#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div><!--notification-info -->
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img3.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="{{asset('frontend/')}}/#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div><!--notification-info -->
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img2.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="{{asset('frontend/')}}/#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div><!--notification-info -->
                                    </div>
                                    <div class="view-all-nots">
                                        <a href="{{asset('frontend/')}}/#" title="">View All Notification</a>
                                    </div>
                                </div><!--nott-list end-->
                            </div><!--notification-box end-->
                        </li>
                    </ul>
                </nav><!--nav end-->
                <div class="menu-btn">
                    <a href="{{asset('frontend/')}}/#" title=""><i class="fa fa-bars"></i></a>
                </div><!--menu-btn end-->
                <div class="user-account">
                    <div class="user-info">
                        <img src="http://via.placeholder.com/30x30" alt="">
                        <a href="{{asset('frontend/')}}/#" title="">John</a>
                        <i class="la la-sort-down"></i>
                    </div>
                    <div class="user-account-settingss">
                        <h3>Online Status</h3>
                        <ul class="on-off-status">
                            <li>
                                <div class="fgt-sec">
                                    <input type="radio" name="cc" id="c5">
                                    <label for="c5">
                                        <span></span>
                                    </label>
                                    <small>Online</small>
                                </div>
                            </li>
                            <li>
                                <div class="fgt-sec">
                                    <input type="radio" name="cc" id="c6">
                                    <label for="c6">
                                        <span></span>
                                    </label>
                                    <small>Offline</small>
                                </div>
                            </li>
                        </ul>
                        <h3>Custom Status</h3>
                        <div class="search_form">
                            <form>
                                <input type="text" name="search">
                                <button type="submit">Ok</button>
                            </form>
                        </div><!--search_form end-->
                        <h3>Setting</h3>
                        <ul class="us-links">
                            <li><a href="{{asset('frontend/')}}/profile-account-setting.html" title="">Account Setting</a></li>
                            <li><a href="{{asset('frontend/')}}/#" title="">Privacy</a></li>
                            <li><a href="{{asset('frontend/')}}/#" title="">Faqs</a></li>
                            <li><a href="{{asset('frontend/')}}/#" title="">Terms & Conditions</a></li>
                        </ul>
                        <h3 class="tc"><a href="{{asset('frontend/')}}/sign-in.html" title="">Logout</a></h3>
                    </div><!--user-account-settingss end-->
                </div>
            </div><!--header-data end-->
        </div>
    </header><!--header end-->
