@section('title',)
@extends('front.resource.main')
@section('content')
<!-- Content -->
<style>
    .w3ls-cource-first {
    background: #F9F9F9;
    box-shadow: -1px 3px 5px 1px rgb(0 0 0 / 15%);
}
p {
    line-height: 20px;
    margin-bottom: 24px;
}

</style>
<!-- Content -->
<!-- Content -->
<?php $page_manage=DB::table('page_manages')->where('status','1')->where('id','1')->first()?>
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{url('public/images/inner-banner/'.$page_manage->banner_img)}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">About Us</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <div class="section-full content-inner-2">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">About Akui Women's Collage</h2>
                <div class="dlab-separator bg-primary m-b0"></div>
            </div>
            <div class="row">
                <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="about-box">
                        <div class="dlab-img-effect zoom">
                            <img src="{{url('public/images/page-image/'.$page_manage->image)}}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-b30 align-self-center wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                    <?php echo $page_manage->description?>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
