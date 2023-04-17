@section('title',)
@extends('front.resource.main')
@section('content')
<!-- Content -->
<style>
    .dlab-separate {
        display: inline-block;
        height: 4px;
        width: 50px;
        margin-bottom: 10px;
        position: relative;
    }

</style>
<!-- Content START -->
<?php $vision=DB::table('page_manages')->where('status','1')->where('id','2')->first()?>
<div class="page-content bg-white">
    <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle text-center bg-pt" style="background-image:url({{url('public/images/inner-banner/'.$vision->banner_img)}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry align-m text-center">
                <h1 class="text-white">Vision Mision</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Vision Mision</li>
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
        <div class="section-full content-inner bg-white video-section" style="background-image:url('images/background/bg-video.png');">
            <div class="container">
                <div class="section-content">
                    <div class="row d-flex">
                        <div class="col-lg-6 col-md-12 m-b30 align-self-center video-infobx">
                            <div class="content-bx1">
                                <h2 class="title" style="margin-bottom:5px;">{{ $vision->page_name }}</h2>
                                <div class="dlab-separate bg-primary"></div>
                                <?php echo $vision->description ?>
                                 </div>
                        </div>
                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="video-bx">
                                <img src="{{url('public/images/page-image/'.$vision->image)}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $mision=DB::table('page_manages')->where('status','1')->where('id','3')->first()?>
        <!-- About Services info END -->
        <div class="container">
            <div class="section-content">
                <div class="row d-flex">
                    <div class="col-lg-6 col-md-12 m-b30">
                                                <div class="video-bx">
                            <img src="{{url('public/images/page-image/'.$mision->image)}}" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30 align-self-center video-infobx">
                        <div class="content-bx1">
                            <h2 class="title" style="margin-bottom:5px;">{{ $vision->page_name }}</h2>
                            <div class="dlab-separate bg-primary"></div>
                            <?php echo $vision->description ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Services END -->
    </div>
    <!-- contact area END -->
</div>
<!-- Content END -->

@endsection
