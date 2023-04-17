@section('title',)
@extends('front.resource.main')
@section('content')
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{url('public/images/inner-banner/inner-banner.jpg')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Our Gallery</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ url('/') }}">Home</a></li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Portfolio  -->
        <div class="section-full content-inner-2 portfolio text-uppercase bg-gray" id="portfolio">
            <div class="container">
                <div class="site-filters clearfix center  m-b40">
                    <ul class="filters" data-bs-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="javascript:void(0);" class="site-button-secondry button-sm radius-xl"><span>All</span></a>
                        </li>
                        <?php $datas=DB::table('gallery_categories')->get();?>
                        @foreach ($datas as $data)
                        <li data-filter="web {{$data->cat_name}}" class="btn">
                            <input type="radio">
                            <a href="javascript:void(0);" class="site-button-secondry button-sm radius-xl"><span>{{$data->cat_name }}</span></a>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="clearfix" id="lightgallery">
                    <ul id="masonry" class=" portfolio-ic dlab-gallery-listing gallery-grid-4 gallery lightgallery text-center">
                        <?php $galleries=DB::table('galleries')->get();?>
                        @foreach ($galleries as $gallery)
                        <li class="web {{Helper::GalleryCatName($gallery->gal_cat_id)}} card-container col-lg-3 col-md-6 col-sm-6 p-a0">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                    <a href="javascript:void(0);"> <img src="{{url('public/images/gallery/'.$gallery->image)}}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <div class="text-white">
                                                <span data-exthumbimage="{{url('public/images/gallery/'.$gallery->image)}}" data-src="{{url('public/images/gallery/'.$gallery->image)}}" class="check-km" title="Factory Managment">
                                                    <i class="far fa-image icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-a30 bg-white">
                                    <p class="dez-title m-t0"><a href="javascript:void(0);">{{Helper::GalleryCatName($gallery->gal_cat_id)}}</a></p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->
</div>
<!-- Content END-->
@endsection
