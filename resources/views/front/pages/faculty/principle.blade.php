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
        margin-bottom: 20px;
    }

</style>
<!-- Content -->
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{url('public/images/inner-banner/inner-banner.jpg')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Message From Principal Desk</h1>
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
    <!-- Slider Banner -->
    <?php $principle_msgs=DB::table('principle_msgs')->first()?>
    <div class="section-full content-inner-2">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Message From Principal Desk</h2>
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
                    <?php echo $principle_msgs->description ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Banner -->
</div>
<!-- Content END-->
@endsection
