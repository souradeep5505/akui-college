@section('title',)
@extends('front.resource.main')
@section('content')
<style>
    .testimonial-9 {
        background-color: #f3f3f3;
    }

    .icon-xl i {
        font-size: 60px;
        line-height: 60px;
    }

</style>
<!-- Content -->
<div class="page-content bg-white">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            @forelse ($banners as $banner)
            <div class="carousel-item active">
                <img src="{{url('public/images/banner/'.$banner->banner_img)}}" alt="Los Angeles" class="d-block" style="width:100%; height: 450px;">
            </div>
            @empty
            <p>No Record Found !!</p>
            @endforelse
        </div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <!-- Main Slider -->
    <!-- Slider Banner -->
    <?php $principle_msgs=DB::table('principle_msgs')->first()?>
    <div class="section-full content-inner-2">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Welcome To Akui Women's Collage</h2>
                <div class="dlab-separator bg-primary m-b0"></div>
            </div>
            <div class="row">
                <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="about-box">
                        <div class="dlab-img-effect zoom">
                            <img src="{{url('public/images/principle/'.$principle_msgs->image)}}" alt="" />
                        </div>
                        <h4 class="m-b0 m-t15" style="text-align: center; color: #ffffff;"><span style="background: #000; padding: 3px;">{{ $principle_msgs->name }}</span></h4>
                        <h5 class="m-b0 m-t10" style="text-align: center;">Principal</h5>
                        <h5 class="m-b0 m-t10" style="text-align: center;">{{ $principle_msgs->qualification }}</h5>
                    </div>
                </div>
                <div class="col-lg-6 m-b30 align-self-center wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="m-b15">
                        <h2 class="m-b0">Message <span class="text-primary">From The Desk Of</span></h2>
                        <div class="dlab-separator bg-primary m-b0"></div>
                    </div>
                    <p><?php echo (substr(strip_tags($principle_msgs->description),0,600)) ?></p>
                    <a href="{{ url('/principle') }}" class="site-button btnhover14">View More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Banner -->
    <!-- contact area -->
    <?php $settings=DB::table('settings')->where('id',1)->first(); ?>
    <div class="content-block">
        <div class="section-full text-white bg-img-fix content-inner-2 overlay-black-dark counter-staus-box" style="background-image:url(public/images/background/bg2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row sp20">
                            <div class="col-md-3 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                <div class="icon-bx-wraper center counter-style-5">
                                    <div class="icon-content">
                                        <h2 class="dlab-tilte counter">{{ $settings->campus_area }}</h2>
                                        <div class="dlab-separator bg-primary"></div>
                                        <p>Campus Area</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="icon-bx-wraper center counter-style-5">
                                    <div class="icon-content">
                                        <h2 class="dlab-tilte counter">{{ $settings->libary_books }}</h2>
                                        <div class="dlab-separator bg-primary"></div>
                                        <p>Libary Books</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                <div class="icon-bx-wraper center counter-style-5">
                                    <div class="icon-content">
                                        <h2 class="dlab-tilte counter">{{ $settings->honours_student }}</h2>
                                        <div class="dlab-separator bg-primary"></div>
                                        <p>Honours Students</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
                                <div class="icon-bx-wraper center counter-style-5">
                                    <div class="icon-content">
                                        <h2 class="dlab-tilte counter">{{ $settings->general_student }}</h2>
                                        <div class="dlab-separator bg-primary"></div>
                                        <p>General Students</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Company staus End -->
        <!-- Team Section Style 2 -->
        <div class="section-full bg-gray content-inner-2">
            <div class="container">
                <div class="sort-title clearfix text-center">
                    <h2 class="title" style="margin-bottom: 0px;"> Our Departments</h2>
                    <div class="dlab-separator bg-primary m-b0"></div>
                </div>
                <div class="row">
                    <?php $departments=DB::table('departments')->where('status','1')
                    ->take('4')
                    ->get(); ?>
                    @forelse ( $departments as $department )
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dlab-box m-b30 dlab-team5">
                            <div class="dlab-border-left"></div>
                            <div class="dlab-border-right"></div>
                            <div class="dlab-media">
                                <a href="{{ url('department/'.$department->slug) }}">
                                    <img width="400" height="400" alt="" src="{{url('public/images/department/'.$department->department_img)}}">
                                </a>
                            </div>
                            <div class="dlab-info">
                                <h4 class="dlab-title"><a href="{{ url('department/'.$department->slug) }}">{{ $department->department_name }}</a></h4>

                            </div>
                        </div>
                    </div>
                    @empty
                    No Record Found !!
                    @endforelse
                    <div class="dlab-post-readmore">
                        <div class="text-center">
                            <a href="{{ url('/all-department') }}" title="View More" rel="bookmark" class="site-button btnhover13">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Section Style 2 End -->
        <!-- Industries Served End -->
        <!-- Our Projecrt -->
        <div class="section-full bg-img-fix content-inner-4 overlay-black-dark contact-action" style="background-image:url(public/images/background/bg3.jpg);">
            <div class="container">
                <div class="sort-title clearfix text-center">
                    <h2 class="title" style="margin-bottom: 0px; color: #ffffff; padding-top:20px;"> Our Facility</h2>
                    <div class="dlab-separator bg-primary m-b0"></div>
                </div>
                <div class="row relative text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="0.9s">
                    <div class="col-md-12 col-lg-12 m-b30">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row sp20">
                                <?php $facilities=DB::table('facilities')
                                ->take('4')
                                ->get(); ?>
                                @forelse ( $facilities as $facility )
                                <div class="col-md-3 col-sm-4 m-b30 wow fadeInUp">
                                    <div class="icon-bx-wraper center counter-style-5">
                                        <div class="icon-xl m-b20">
                                            <i style="color:#ffffff;" class="{{ $facility->facility_icon }}"></i>
                                        </div>
                                        <div class="icon-content">
                                            <div class="dlab-separator bg-primary"></div>
                                            <h4 class="dlab-tilte" style="color: #ffffff;"><?php echo (substr(strip_tags($facility->facility_title),0,12)) ?></h4>
                                            <p style="color: #ffffff;"><?php echo (substr(strip_tags($facility->description),0,50)) ?></p>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                No Record Found !!
                                @endforelse
                                <div class="text-center">
                                    <a href="{{ url('/fecilities') }}" title="View More" rel="bookmark" class="site-button btnhover13">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-full bg-gray content-inner-2">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">Upcoming Notice</h2>
                    <div class="dlab-separator bg-primary m-b0"></div>
                </div>
                <div class="row">
                    <?php $notices=DB::table('notices')
                    ->where('status',"1")
                    ->take('3')
                    ->get(); ?>
                    @forelse ( $notices as $notice )
                    <div class="col-lg-4 col-md-6 col-sm-6 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="blog-post blog-grid blog-rounded blog-effect1">
                            <div class="dlab-post-media dlab-img-effect rotate"> <a href="javascript:void(0);">
                            </div>
                            <div class="dlab-info p-a20 border-1">
                                <div class="col-sm-12 events-up p-3 text-center mb-3">
                                    <h5 class="text-white font-weight-bold"><?php echo date('d-F-Y',strtotime($notice->date_time));?></h5>
                                </div>
                                <div class="dlab-post-title">
                                    <h4 class="post-title"><a href="blog-single.html"><?php echo (substr(strip_tags($notice->title),0,26)) ?></a>
                                    </h4>
                                </div>
                                <div class="dlab-post-text">
                                    <p><?php echo (substr(strip_tags($notice->description),0,170)) ?></p>
                                </div>
                                <div class="text-center">
                                    <p style="margin-bottom:5px;">Download Pdf</p>
                                    <a href="{{url('public/images/notice/'.$notice->pdf_file)}}" target="_blank" download title="Download Notice" rel="bookmark"><i class='fas fa-file-pdf' style='font-size:32px;color:red'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    No Record Found !!
                    @endforelse
                    <div class="text-center">
                        <a href="{{ url('/all-notice') }}" title="More Notice" rel="bookmark" class="site-button btnhover13">More Notice</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest blog -->
        <div class="section-full content-inner">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">Our Faculty Members</h2>
                    <div class="dlab-separator bg-primary m-b0"></div>
                </div>
                <!-- Image Carousel start -->
                <div class="testimonial-two-dots owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-dots-primary-full">
                    <?php $faculties=DB::table('faculties')
                        ->where('status',"1")
                        ->get(); ?>
                    @forelse ( $faculties as $faculty )
                    <div class="item p-a5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1"><a href="{{url('faculty/'.$faculty->slug)}}"><img src="{{url('public/images/faculty/'.$faculty->faculty_img)}}" width="100" height="100" alt=""></a></div>
                            <div class="testimonial-text">
                            </div>
                            <div class="testimonial-detail"> <a href="{{url('faculty/'.$faculty->slug)}}"><strong class="testimonial-name">{{ $faculty->faculty_name }}</strong> <span class="testimonial-position">{{ $faculty->designation }}</span> </a></div>
                        </div>
                    </div>
                    @empty
                    No Record Found !!
                    @endforelse
                </div>
                <div class="text-center" style="margin-top: 15px;">
                    <a href="{{url('all-faculty')}}" title="View More" rel="bookmark" class="site-button btnhover13">View More</a>
                </div>
            </div>
        </div>
        <!-- Latest blog END -->
        <!-- Our Team End -->
        <!-- Industries Served -->
        <div class="section-full bg-gray content-inner-2">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">Our Lastest News & Event</h2>
                    <div class="dlab-separator bg-primary m-b0"></div>
                </div>
                <div class="row">
                    <?php $news_events=DB::table('news_events')
                    ->where('status',"1")
                    ->take('3')
                    ->get(); ?>
                    @forelse ( $news_events as $news_event )
                    <div class="col-lg-4 col-md-6 col-sm-6 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="blog-post blog-grid blog-rounded blog-effect1">
                            <div class="dlab-post-media dlab-img-effect rotate"> <a href="{{ url('/news-details') }}"><img src="{{url('public/images/news-event/'.$news_event->image)}}" alt=""></a>
                            </div>
                            <div class="col-sm-12 events-up p-3 text-center">
                                <h5 class="text-white font-weight-bold" style="line-height:10px; margin-bottom:5px;"><?php echo date('d-F-Y',strtotime($news_event->event_date));?></h5>
                            </div>
                            <div class="dlab-info border-1">
                                <div class="dlab-post-title">
                                    <h4 class="post-title" style="padding:5px;"><a href="{{ url('/news-details') }}">{{$news_event->title }}</a>
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    @empty
                    No Record Found !!
                    @endforelse
                    <div class="text-center">
                        <a href="{{ url('/news-details') }}" title="View More" rel="bookmark" class="site-button btnhover13">View More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latests News -->
        <div class="section-full content-inner-2 bg-white" id="latestnews">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">Our Gallery</h2>
                    <div class="dlab-separator bg-primary m-b0"></div>
                </div>
                <div class="blog-carousel owl-carousel owl-btn-3 owl-btn-center-lr">
                    <?php $galleries=DB::table('galleries')
                    ->get(); ?>
                    @forelse ( $galleries as $gallery )
                    <div class="item wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="blog-post blog-grid blog-rounded blog-effect1">
                            <div class="media dlab-img-effect zoom"><img src="{{url('public/images/gallery/'.$gallery->image)}}" alt="" />
                            </div>
                        </div>
                    </div>
                    @empty
                    No Record Found !!
                    @endforelse
                </div>
                <div class="text-center">
                    <a href="{{ url('/gallery') }}" title="View More" rel="bookmark" class="site-button btnhover13">View More</a>
                </div>
            </div>
        </div>
        <!-- Latest News End -->
    </div>
    <!-- contact area END -->
</div>
<!-- Content END -->
@endsection
