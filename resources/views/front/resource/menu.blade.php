<?php $settings=DB::table('settings')->where('id',1)->first(); ?>
<?php
$menu = request()->segment(1);
?>
<style>
   .header-transparent{
    position: relative !important;
   }
</style>
<!-- header -->
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion logo-dark">
                    <a href="{{ url('/') }}"><img src="{{url('public/images/logo/'.$settings->logo)}}" alt=""></a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="dlab-quik-search ">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control"
                            placeholder="Type to search">
                        <span id="quik-search-remove"><i class="ti-close"></i></span>
                    </form>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header d-md-block d-lg-none">
                        <a href="index.html"><img src="images/logo-7.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="has-mega-menu homedemo"> <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>
                            <a href="javascript:;">About<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="{{($menu=='about-us')?'active':''}}"><a href="{{ url('/about-us') }}">About Akui College</a></li>
                                <li><a href="{{ url('/vision-mision') }}">Mission & Vission</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">Administration<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/governing-body') }}">Governing Body</a></li>
                                <li><a href="{{ url('/finance-sub-committee') }}">Finance Sub Committee</a></li>
                                <li><a href="{{ url('/iqac') }}">IQAC</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">Academics<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/all-department') }}">Departments</a></li>
                                <li><a href="{{ url('/courser-subjects') }}">Courses & Subjects Offered</a></li>
                                <li><a href="{{ url('/seat-allocation') }}">Seat Allocation</a></li>
                                <li><a href="{{ url('/fees-charges') }}">Fees & Charges</a></li>
                                <li><a href="{{ url('/fecilities') }}">Facility</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">Staffs<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/principle') }}">Principle</a></li>
                                <li><a href="{{ url('/all-faculty') }}">Faculty Member</a></li>
                                <li><a href="{{ url('/non-teaching-stuffs') }}">Non Teaching</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/gallery') }}">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ url('/all-notice') }}">Notice</a>
                        </li>
                        <li>
                            <a href="{{ url('/news-details') }}">News & Event</a>
                        </li>
                        <li>
                            <a href="javascript:;">Admission<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ url('/terms-conditions') }}">Terms And Conditions</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/contact-us')}}">Contact</a>
                        </li>
                    </ul>
                    <div class="dlab-social-icon">
                        <ul>
                            <li><a class="site-button sharp-sm fab fa-facebook-f"
                                    href="javascript:void(0);"></a></li>
                            <li><a class="site-button sharp-sm fab fa-twitter" href="javascript:void(0);"></a>
                            </li>
                            <li><a class="site-button sharp-sm fab fa-linkedin-in"
                                    href="javascript:void(0);"></a></li>
                            <li><a class="site-button sharp-sm fab fa-instagram" href="javascript:void(0);"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
<!-- header END -->
