<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMP Xaverius 5</title>

    <link rel='stylesheet' href='plugins/goodlayers-core/plugins/combine/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/goodlayers-core/include/css/page-builder.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style-core.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/kingster-style-custom.css' type='text/css' media='all' />
    <link rel="shortcut icon" href="{{ asset('images/logo2.png') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700%2C400" rel="stylesheet"
        property="stylesheet" type="text/css" media="all">
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic&amp;subset=latin%2Clatin-ext%2Cdevanagari&amp;ver=5.0.3'
        type='text/css' media='all' />

</head>

<body
    class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    <div class="kingster-mobile-header-wrap">
        <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation "
            id="kingster-mobile-header">
            <div class="kingster-mobile-header-container kingster-container clearfix">
                <div class="kingster-logo  kingster-item-pdlr">
                    <div class="kingster-logo-inner">
                        <a class="" href="{{ url('/') }}"><img src="{{ asset('images/logoxav5.png') }}" alt="SMP Xaverius 5" /></a>
                    </div>
                </div>
                <div class="kingster-mobile-menu-right">
                    <div class="kingster-main-menu-search" id="kingster-mobile-top-search"><i class="fa fa-search"></i>
                    </div>
                    <div class="kingster-top-search-wrap">
                        <div class="kingster-top-search-close"></div>
                        <div class="kingster-top-search-row">
                            <div class="kingster-top-search-cell">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="text" class="search-field kingster-title-font" placeholder="Search..."
                                        value="" name="s">
                                    <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                    <input type="submit" class="search-submit" value="Search">
                                    <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="kingster-mobile-menu"><a
                            class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger"
                            href="#kingster-mobile-menu"><span></span></a>
                        <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu"
                            data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li class="menu-item menu-item-home {{ Route::is('home') ? 'current-menu-item' : '' }} menu-item-has-children"><a
                                        href="{{ url('/') }}">Beranda</a>
                                    <!-- <ul class="sub-menu">
                                        <li class="menu-item menu-item-home"><a href="index.html">Homepage 1</a></li>
                                        <li class="menu-item"><a href="homepage-2.html">Homepage 2</a></li>
                                    </ul> -->
                                </li>
                                <li class="menu-item {{ Route::is('tentang') ? 'current-menu-item' : '' }} menu-item-has-children"><a href="{{ url('/tentang') }}">Profil Sekolah</a>
                                    <!-- <ul class="sub-menu">
                                        <li class="menu-item"><a href="about-us.html">About KU</a></li>
                                        <li class="menu-item menu-item-has-children"><a
                                                href="blog-full-right-sidebar-with-frame.html">Blog</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children"><a
                                                        href="blog-full-right-sidebar-with-frame.html">Blog Full</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a
                                                                href="blog-full-right-sidebar-with-frame.html">Blog Full
                                                                Right Sidebar With Frame</a></li>
                                                        <li class="menu-item"><a
                                                                href="blog-full-left-sidebar-with-frame.html">Blog Full
                                                                Left Sidebar With Frame</a></li>
                                                        <li class="menu-item"><a
                                                                href="blog-full-both-sidebar-with-frame.html">Blog Full
                                                                Both Sidebar With Frame</a></li>
                                                        <li class="menu-item"><a
                                                                href="blog-full-right-sidebar.html">Blog Full Right
                                                                Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-full-left-sidebar.html">Blog
                                                                Full Left Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-full-both-sidebar.html">Blog
                                                                Full Both Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a
                                                        href="blog-grid-3-columns-no-space.html">Blog Grid</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="blog-grid-2-columns.html">Blog
                                                                Grid 2 Columns</a></li>
                                                        <li class="menu-item"><a href="blog-grid-3-columns.html">Blog
                                                                Grid 3 Columns</a></li>
                                                        <li class="menu-item"><a href="blog-grid-4-columns.html">Blog
                                                                Grid 4 Columns</a></li>
                                                        <li class="menu-item"><a
                                                                href="blog-grid-2-columns-no-space.html">Blog Grid 2
                                                                Columns No Space</a></li>
                                                        <li class="menu-item"><a
                                                                href="blog-grid-3-columns-no-space.html">Blog Grid 3
                                                                Columns No Space</a></li>
                                                        <li class="menu-item"><a
                                                                href="blog-grid-4-columns-no-space.html">Blog Grid 4
                                                                Columns No Space</a></li>
                                                    </ul>
                                                </li>

                                                <li class="menu-item"><a href="standard-post-type.html">Single Post</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Contact</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                                                <li class="menu-item"><a href="contact-2.html">Contact 2</a></li>
                                                <li class="menu-item"><a href="contact-3.html">Contact 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a
                                                href="portfolio-3-columns.html">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children"><a>Portfolio Grid</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a
                                                                href="portfolio-2-columns.html">Portfolio 2 Columns</a>
                                                        </li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-3-columns.html">Portfolio 3 Columns</a>
                                                        </li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-4-columns.html">Portfolio 4 Columns</a>
                                                        </li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-5-columns.html">Portfolio 5 Columns</a>
                                                        </li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-2-columns-with-frame.html">Portfolio 2
                                                                Columns With Frame</a></li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-3-columns-with-frame.html">Portfolio 3
                                                                Columns With Frame</a></li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-4-columns-with-frame.html">Portfolio 4
                                                                Columns With Frame</a></li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-2-columns-no-space.html">Portfolio 2
                                                                Columns No Space</a></li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-3-columns-no-space.html">Portfolio 3
                                                                Columns No Space</a></li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-4-columns-no-space.html">Portfolio 4
                                                                Columns No Space</a></li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-5-columns-no-space.html">Portfolio 5
                                                                Columns No Space</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a>Portfolio Masonry</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a
                                                                href="portfolio-masonry-4-columns.html">Masonry 4
                                                                Columns</a></li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-masonry-3-columns.html">Masonry 3
                                                                Columns</a></li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-masonry-2-columns.html">Masonry 2
                                                                Columns</a></li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-masonry-4-columns-no-space.html">Masonry
                                                                4 Columns No Space</a></li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-masonry-3-columns-no-space.html">Masonry
                                                                3 Columns No Space</a></li>
                                                        <li class="menu-item"><a
                                                                href="portfolio-masonry-2-columns-no-space.html">Masonry
                                                                2 Columns No Space</a></li>
                                                    </ul>
                                                </li>

                                                <li class="menu-item menu-item-has-children"><a class="sf-with-ul-pre"
                                                        href="singleportfolio.html">Single Portfolio</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                                        <li class="menu-item"><a href="price-table.html">Price Table</a></li>
                                        <li class="menu-item"><a href="maintenance.html">Maintenance</a></li>
                                        <li class="menu-item"><a href="coming-soon.html">Coming Soon</a></li>
                                        <li class="menu-item"><a href="404.html">404 Page</a></li>
                                    </ul> -->
                                </li>
                                <li class="menu-item {{ Route::is('pendaftaran') ? 'current-menu-item' : '' }} menu-item-has-children"><a
                                        href="{{ url('/pendaftaran') }}">PPDB</a>
                                    <!-- <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children"><a>Undergraduate</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a
                                                        href="bachelor-of-science-in-business-administration.html">Business
                                                        Administration</a></li>
                                                <li class="menu-item"><a href="school-of-law.html">School Of Law</a>
                                                </li>
                                                <li class="menu-item"><a href="engineering.html">Engineering</a></li>
                                                <li class="menu-item"><a href="medicine.html">Medicine</a></li>
                                                <li class="menu-item"><a href="art-science.html">Art &#038; Science</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Graduate Program</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="hospitality-management.html">Hospitality
                                                        Management</a></li>
                                                <li class="menu-item"><a href="physics.html">Physics</a></li>
                                                <li class="menu-item"><a href="#">Chemistry</a></li>
                                                <li class="menu-item"><a href="#">Music</a></li>
                                                <li class="menu-item"><a href="#">Computer Science</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Resources</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a
                                                        href="bachelor-of-science-in-business-administration.html">Department
                                                        Page</a></li>
                                                <li class="menu-item"><a href="finance.html">Major Page</a></li>
                                                <li class="menu-item"><a href="finance-faculty.html">Faculty Page</a>
                                                </li>
                                                <li class="menu-item"><a href="john-hagensy-phd.html">Single
                                                        Instructor</a></li>
                                                <li class="menu-item"><a
                                                        href="introduction-to-financial-accounting.html">Single
                                                        Course</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="#">Logo</a></li>
                                    </ul> -->
                                </li>
                                <li class="menu-item {{ Route::is('hubungikami') ? 'current-menu-item' : '' }} menu-item-has-children"><a
                                        href="{{ url('/hubungi-kami') }}">Kontak</a>
                                    <!-- <ul class="sub-menu">
                                        <li class="menu-item"><a href="apply-to-kingster.html">Apply To Kingster</a>
                                        </li>
                                        <li class="menu-item"><a href="campus-tour.html">Campus Tour</a></li>
                                        <li class="menu-item"><a href="scholarships.html">Scholarships</a></li>
                                        <li class="menu-item"><a href="athletics.html">Athletics</a></li>
                                        <li class="menu-item"><a href="give-to-kingster.html">Give To Kingster</a></li>
                                        <li class="menu-item"><a href="alumni.html">Alumni</a></li>
                                        <li class="menu-item"><a href="event-calendar.html">Event Calendar</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li class="menu-item menu-item-has-children"><a href="#">Courses</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="course-list-1.html">Course List 1</a></li>
                                        <li class="menu-item"><a href="course-list-2.html">Course List 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="athletics.html">Athletics</a></li>
                                <li class="menu-item"><a href="university-life.html">University Life</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            <div class="kingster-top-bar">
                <div class="kingster-top-bar-background"></div>
                <div class="kingster-top-bar-container kingster-container ">
                    <div class="kingster-top-bar-container-inner clearfix">
                        <div class="kingster-top-bar-left kingster-item-pdlr"><i class="fa fa-envelope-open-o"
                                style="font-size: 15px ;color: #96a2b8 ;margin-right: 8px ;"></i> contact@KUTheme.edu <i
                                class="fa fa-phone"
                                style="font-size: 15px ;color: #96a2b8 ;margin-left: 18px ;margin-right: 6px ;"></i>
                            +1-3435-2356-222</div>
                        <div class="kingster-top-bar-right kingster-item-pdlr">
                            <ul id="kingster-top-bar-menu"
                                class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                                <li class="menu-item kingster-normal-menu"><a href="#">Alumni</a></li>
                                <li class="menu-item kingster-normal-menu"><a href="#">Calendar</a></li>
                                <li class="menu-item kingster-normal-menu"><a href="#">Portal</a></li>
                            </ul>
                            <!-- <div class="kingster-top-bar-right-social"></div><a class="kingster-top-bar-right-button"
                                href="#" target="_blank">Support KU</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <header
                class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed"
                data-navigation-offset="75px">
                <div class="kingster-header-background"></div>
                <div class="kingster-header-container  kingster-container">
                    <div class="kingster-header-container-inner clearfix">
                        <div class="kingster-logo  kingster-item-pdlr">
                            <div class="kingster-logo-inner">
                                <a class="" href="{{ url('/') }}"><img src="{{ asset('images/logoxav5.png') }}" alt="" /></a>
                            </div>
                        </div>
                        <div class="kingster-navigation kingster-item-pdlr clearfix ">
                            <div class="kingster-main-menu" id="kingster-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                    <li
                                        class="menu-item menu-item-home {{ Route::is('home') ? 'current-menu-item' : '' }} menu-item-has-children kingster-normal-menu">
                                        <a href="{{ url('/') }}" class="sf-with-ul-pre">Beranda</a>
                                        <!-- <ul class="sub-menu">
                                            <li class="menu-item menu-item-home" data-size="60"><a
                                                    href="index.html">Homepage 1</a></li>
                                            <li class="menu-item" data-size="60"><a href="homepage-2.html">Homepage
                                                    2</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="menu-item {{ Route::is('tentang') ? 'current-menu-item' : '' }} menu-item-has-children kingster-normal-menu"><a href="{{ url('/tentang') }}"
                                            class="sf-with-ul-pre">Profil Sekolah</a>
                                        <!-- <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="about-us.html">About KU</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="60"><a
                                                    href="blog-full-right-sidebar-with-frame.html"
                                                    class="sf-with-ul-pre">Blog</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-has-children"><a
                                                            href="blog-full-right-sidebar-with-frame.html"
                                                            class="sf-with-ul-pre">Blog Full</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a
                                                                    href="blog-full-right-sidebar-with-frame.html">Blog
                                                                    Full Right Sidebar With Frame</a></li>
                                                            <li class="menu-item"><a
                                                                    href="blog-full-left-sidebar-with-frame.html">Blog
                                                                    Full Left Sidebar With Frame</a></li>
                                                            <li class="menu-item"><a
                                                                    href="blog-full-both-sidebar-with-frame.html">Blog
                                                                    Full Both Sidebar With Frame</a></li>
                                                            <li class="menu-item"><a
                                                                    href="blog-full-right-sidebar.html">Blog Full Right
                                                                    Sidebar</a></li>
                                                            <li class="menu-item"><a
                                                                    href="blog-full-left-sidebar.html">Blog Full Left
                                                                    Sidebar</a></li>
                                                            <li class="menu-item"><a
                                                                    href="blog-full-both-sidebar.html">Blog Full Both
                                                                    Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children"><a
                                                            href="blog-grid-3-columns-no-space.html"
                                                            class="sf-with-ul-pre">Blog Grid</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a
                                                                    href="blog-grid-2-columns.html">Blog Grid 2
                                                                    Columns</a></li>
                                                            <li class="menu-item"><a
                                                                    href="blog-grid-3-columns.html">Blog Grid 3
                                                                    Columns</a></li>
                                                            <li class="menu-item"><a
                                                                    href="blog-grid-4-columns.html">Blog Grid 4
                                                                    Columns</a></li>
                                                            <li class="menu-item"><a
                                                                    href="blog-grid-2-columns-no-space.html">Blog Grid 2
                                                                    Columns No Space</a></li>
                                                            <li class="menu-item"><a
                                                                    href="blog-grid-3-columns-no-space.html">Blog Grid 3
                                                                    Columns No Space</a></li>
                                                            <li class="menu-item"><a
                                                                    href="blog-grid-4-columns-no-space.html">Blog Grid 4
                                                                    Columns No Space</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="menu-item"><a href="standard-post-type.html">Single
                                                            Post</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="60"><a href="#"
                                                    class="sf-with-ul-pre">Contact</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="contact.html">Contact</a></li>
                                                    <li class="menu-item"><a href="contact-2.html">Contact 2</a></li>
                                                    <li class="menu-item"><a href="contact-3.html">Contact 3</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="60"><a
                                                    href="portfolio-3-columns.html" class="sf-with-ul-pre">Portfolio</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-has-children"><a
                                                            class="sf-with-ul-pre">Portfolio Grid</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a
                                                                    href="portfolio-2-columns.html">Portfolio 2
                                                                    Columns</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-3-columns.html">Portfolio 3
                                                                    Columns</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-4-columns.html">Portfolio 4
                                                                    Columns</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-5-columns.html">Portfolio 5
                                                                    Columns</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-2-columns-with-frame.html">Portfolio
                                                                    2 Columns With Frame</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-3-columns-with-frame.html">Portfolio
                                                                    3 Columns With Frame</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-4-columns-with-frame.html">Portfolio
                                                                    4 Columns With Frame</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-2-columns-no-space.html">Portfolio 2
                                                                    Columns No Space</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-3-columns-no-space.html">Portfolio 3
                                                                    Columns No Space</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-4-columns-no-space.html">Portfolio 4
                                                                    Columns No Space</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-5-columns-no-space.html">Portfolio 5
                                                                    Columns No Space</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children"><a
                                                            class="sf-with-ul-pre">Portfolio Masonry</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a
                                                                    href="portfolio-masonry-4-columns.html">Masonry 4
                                                                    Columns</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-masonry-3-columns.html">Masonry 3
                                                                    Columns</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-masonry-2-columns.html">Masonry 2
                                                                    Columns</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-masonry-4-columns-no-space.html">Masonry
                                                                    4 Columns No Space</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-masonry-3-columns-no-space.html">Masonry
                                                                    3 Columns No Space</a></li>
                                                            <li class="menu-item"><a
                                                                    href="portfolio-masonry-2-columns-no-space.html">Masonry
                                                                    2 Columns No Space</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="menu-item menu-item-has-children"><a
                                                            class="sf-with-ul-pre" href="singleportfolio.html">Single
                                                            Portfolio</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item" data-size="60"><a href="gallery.html">Gallery</a></li>
                                            <li class="menu-item" data-size="60"><a href="price-table.html">Price
                                                    Table</a></li>
                                            <li class="menu-item" data-size="60"><a
                                                    href="maintenance.html">Maintenance</a></li>
                                            <li class="menu-item" data-size="60"><a href="coming-soon.html">Coming
                                                    Soon</a></li>
                                            <li class="menu-item" data-size="60"><a href="404.html">404 Page</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="menu-item {{ Route::is('pendaftaran') ? 'current-menu-item' : '' }} menu-item-has-children kingster-mega-menu"><a
                                            href="{{ url('/pendaftaran') }}"
                                            class="sf-with-ul-pre">PPDB</a>
                                        <!-- <div class="sf-mega sf-mega-full megaimg">
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children" data-size="15"><a
                                                        class="sf-with-ul-pre">Undergraduate</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a
                                                                href="bachelor-of-science-in-business-administration.html">Business
                                                                Administration</a></li>
                                                        <li class="menu-item"><a href="school-of-law.html">School Of
                                                                Law</a></li>
                                                        <li class="menu-item"><a href="engineering.html">Engineering</a>
                                                        </li>
                                                        <li class="menu-item"><a href="medicine.html">Medicine</a></li>
                                                        <li class="menu-item"><a href="art-science.html">Art &#038;
                                                                Science</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15"><a href="#"
                                                        class="sf-with-ul-pre">Graduate Program</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a
                                                                href="hospitality-management.html">Hospitality
                                                                Management</a></li>
                                                        <li class="menu-item"><a href="physics.html">Physics</a></li>
                                                        <li class="menu-item"><a href="#">Chemistry</a></li>
                                                        <li class="menu-item"><a href="#">Music</a></li>
                                                        <li class="menu-item"><a href="#">Computer Science</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15"><a href="#"
                                                        class="sf-with-ul-pre">Resources</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a
                                                                href="bachelor-of-science-in-business-administration.html">Department
                                                                Page</a></li>
                                                        <li class="menu-item"><a href="finance.html">Major Page</a></li>
                                                        <li class="menu-item"><a href="finance-faculty.html">Faculty
                                                                Page</a></li>
                                                        <li class="menu-item"><a href="john-hagensy-phd.html">Single
                                                                Instructor</a></li>
                                                        <li class="menu-item"><a
                                                                href="introduction-to-financial-accounting.html">Single
                                                                Course</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item" data-size="15">
                                                    <div class="kingster-mega-menu-section-content"><img
                                                            src="upload/mega-menu-logo.png" style="margin-bottom: 13px;"
                                                            alt="" /> <span
                                                            style="font-size: 14px; font-weight: 500;">Academic
                                                            offerings include 95 majors, 86 minors, and more than 100
                                                            in-major specializations</span></div>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </li>
                                    <li class="menu-item {{ Route::is('hubungikami') ? 'current-menu-item' : '' }} menu-item-has-children kingster-normal-menu"><a
                                            href="{{ url('/hubungi-kami') }}" class="sf-with-ul-pre">Kontak</a>
                                        <!-- <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="apply-to-kingster.html">Apply
                                                    To Kingster</a></li>
                                            <li class="menu-item" data-size="60"><a href="campus-tour.html">Campus
                                                    Tour</a></li>
                                            <li class="menu-item" data-size="60"><a
                                                    href="scholarships.html">Scholarships</a></li>
                                            <li class="menu-item" data-size="60"><a href="athletics.html">Athletics</a>
                                            </li>
                                            <li class="menu-item" data-size="60"><a href="give-to-kingster.html">Give To
                                                    Kingster</a></li>
                                            <li class="menu-item" data-size="60"><a href="alumni.html">Alumni</a></li>
                                            <li class="menu-item" data-size="60"><a href="event-calendar.html">Event
                                                    Calendar</a></li>
                                        </ul> -->
                                    </li>
                                    <!-- <li class="menu-item menu-item-has-children kingster-normal-menu"><a href="#"
                                            class="sf-with-ul-pre">Courses</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="course-list-1.html">Course
                                                    List 1</a></li>
                                            <li class="menu-item" data-size="60"><a href="course-list-2.html">Course
                                                    List 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item kingster-normal-menu"><a href="athletics.html">Athletics</a>
                                    </li>
                                    <li class="menu-item kingster-normal-menu"><a href="university-life.html">University
                                            Life</a></li> -->
                                </ul>
                                <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                            </div>
                            <div class="kingster-main-menu-right-wrap clearfix ">
                                <div class="kingster-main-menu-search" id="kingster-top-search"><i
                                        class="icon_search"></i></div>
                                <div class="kingster-top-search-wrap">
                                    <div class="kingster-top-search-close"></div>
                                    <div class="kingster-top-search-row">
                                        <div class="kingster-top-search-cell">
                                            <form role="search" method="get" class="search-form" action="#">
                                                <input type="text" class="search-field kingster-title-font"
                                                    placeholder="Search..." value="" name="s">
                                                <div class="kingster-top-search-submit"><i class="fa fa-search"></i>
                                                </div>
                                                <input type="submit" class="search-submit" value="Search">
                                                <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
