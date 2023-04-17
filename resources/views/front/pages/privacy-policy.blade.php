@section('title',)
@extends('front.resource.main')
@section('content')
<!-- Content -->
<style>
    p {
    line-height: 20px;
    margin-bottom: 24px;
}
.inner-text ul li {
    font-size: 16px;
    line-height: 24px;
}
</style>
<?php $page_manage=DB::table('page_manages')->where('status','1')->where('id','4')->first()?>
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{url('public/images/inner-banner/inner-banner.jpg')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Privacy Policy</h1>
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
        <!-- Privacy Policy -->
        <div class="section-full content-inner inner-text">
            <div class="container">
                <h2 class="title">Privacy Policy</h2>
                <div class="row">
                    <div class="col-lg-12">
                          <?php echo $page_manage->description ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Privacy Policy END -->
    </div>
</div>
<!-- Content END-->

@endsection
