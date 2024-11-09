

<!-- Preloader -->
{{-- <div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div> --}}

 
<!-- Header Top -->
<header class="header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Top Left -->
                <div class="col-lg-8">
                    <div class="hl_top-left">
                        <a href="tel:+8801847091084" style="text-decoration: none; color: inherit; cursor: pointer;"><span><i class="bi bi-telephone"></i> {{ $basicInfo->phone }}</span></a>&nbsp;						
                        <a style="text-decoration: none; color: inherit; cursor: pointer;" href="mailto:{{ $basicInfo->email }}"><span><i class="bi bi-envelope"></i> {{ $basicInfo->email }}</span></a>&nbsp;
                        <a href="https://maps.app.goo.gl/Vu4ChwYeLNPrywR48" target="_blank" style="text-decoration: none; color: inherit; cursor: pointer;"><span><i class="bi bi-geo-alt"></i> {{ $basicInfo->location }}</span></a>
                    </div>
                </div>
                <!-- Top Right -->
                <div class="col-lg-4">
                    <!-- Social -->
                    <div class="top-social">
                        <span><a target="_blank" href="{{ $basicInfo->facebook_link }}"><i class="fab fa-facebook-f"></i></a></span>
                        <span><a target="_blank" href="{{ $basicInfo->twitter_link }}"><i class="fab fa-twitter"></i></a></span>
                        <span><a target="_blank" href="{{ $basicInfo->linkedin_link }}"><i class="fab fa-linkedin"></i></a></span>
                        <span><a target="_blank" href="{{ $basicInfo->youtube_link }}"><i class="fab fa-youtube"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom -->
    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 align-self-center">
                    <div class="logo py-1">
                        <a href="{{ route('home.index') }}">
                            <img height="70px" src="{{ asset('public/uploads/basic-info/'.$basicInfo->logo) }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-8">
                    <!-- Header Bottom Right -->
                    <div class="header-bright">
                        <div class="mobile-bar">
                            <div class="canvas_open">
                                <a href="javascript:void(0)">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <!-- Header Search -->
                        <div class="header-search">
                            <div class="header-search-icon" title="Search">
                                <i class="bi bi-search active"></i>
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="header-top-search-form">
                                <div class="header-top-search-form-full">
                                    <form action="#">
                                        <input type="search" name="search" placeholder="Search Here..">
                                        <button type="submit"><i class="bi bi-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu -->
                    <div class="menu">
                        <nav>
                            <ul>


                                @php
                                    

                                    if(!function_exists('makemenu'))
                                    {
                                        function makemenu($frontendmenus)
                                        {
                                            $output = '';
                                            foreach ($frontendmenus as $key => $menu) {


                                                $hasChildMenu = $menu['frontendsubmenus'] ? true : false;
                                                $plusIcon = $hasChildMenu ? 'menu-item-has-children' : '';
                                                $route = !$hasChildMenu ? route('home.index',[$menu['slug']]) : 'javascript:void(0)';
                                                $title = $menu['title'];
                                                $active = request()->path() == $menu['slug'] ? 'active' : '';


                                                $output .= "<li class='$plusIcon'>";
                                                $output .=     "<a class='$active' href='$route' >$title</a>";
                                                if($hasChildMenu)
                                                {
                                                    $output .= "<ul>";
                                                    $output .=      makemenu($menu['frontendsubmenus']);
                                                    $output .= "</ul>";
                                                    
                                                }
                                                $output .= "</li>";



                                            }
                                            return $output;
                                        }
                                    }

                                @endphp

                                {!! makemenu($frontendmenus) !!}


                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Start Mobile Menu Area -->
<div class="mobile-menu-area">
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="offcanvas_menu">
        <div class="offcanvas_menu_wrapper">
            <div class="canvas_close">
                <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
            </div>
            <div class="mobile-logo">
                <a href="index.html">
                    <img src="{{ asset('public/uploads/basic-info/'.$basicInfo->logo) }}" alt="logo">
                </a>
            </div>
            <div id="menu" class="text-left ">
                <ul class="offcanvas_main_menu">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">Corporate Profile</a></li>
                            <li><a href="mv-values.html">Mission, Vission & Values</a></li>
                            <li><a href="services.html">Services</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid.html">Products</a></li>
                    <li><a href="companies.html">Companies</a></li>
                    <li><a href="chairman-speech.html">Chairman Speech</a></li>
                    <li><a href="blog-grid.html">Blogs</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->
