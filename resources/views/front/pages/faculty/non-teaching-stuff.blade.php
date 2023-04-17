@section('title',)
@extends('front.resource.main')
@section('content')
<!-- Content -->
<style>
    .courseArchive_content .single_course {
    margin-bottom: 30px;
}
.single_course {
    background-color: #f6f6f6;
    border: 2px solid #00c6ff;
    display: inline;
    float: left;
    height: 350px;
    width: 100%;
}
.cou_pic {
    width: 145px;
    height: 150px;
    text-align: center;
    margin: 12px auto 0;
}
p {
    line-height: 20px;
    margin-bottom: 0px;
}
h3 {
    font-size: 24px;
    line-height: 20px;
    margin-bottom: 10px;
    text-align: center;
    border-bottom: 1px solid #00c6ff;
}
.singCourse_title {
    border-bottom: 1px solid #00c6ff;
    font-size: 20px;
    margin-top: 10px;
    padding-bottom: 10px;
    text-align: center;
}

.singCourse_content {
    float: left;
    display: inline;
    width: 100%;
    padding: 10px;
}
.governing_body p.singCourse_price {
    padding-bottom: 4px;
    margin-bottom: 4px;
}
.singCourse_price {
    border-bottom: 1px solid #00c6ff;
    padding-bottom: 10px;
    text-align: center !important;
}
.mail{
    font-size: 14px;
    text-align: center;
}
.cou_pic img {
    height: auto;
    max-width: 100%;
    vertical-align: middle;
    border-radius: 5%;
    border: solid 2px #00c6ff;
    filter: grayscale(0%);
    -webkit-filter: grayscale(0%);
    -webkit-transition: all .5s ease-in-out;
}

/* .cou_pic img:hover {
    filter: grayscale(100%);
    -webkit-filter: grayscale(100%);
    transition: .5s;
    -webkit-transition: all .5s ease-in-out;
    cursor: pointer;
} */
</style>
<!-- Content -->
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{url('public/images/inner-banner/inner-banner.jpg')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Non Teaching Staffs</h1>
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
    <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Non Teaching Staffs</h2>
                <div class="dlab-separator bg-primary m-b0"></div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 governing_body">
                <div class="courseArchive_content">
                  <div class="row">
                    <?php $non_teachings=DB::table('non_teachings')->where('status','1')->get(); ?>
                    @forelse ( $non_teachings as $non_teaching)
                    <div class="col-lg-3 col-md-3 col-sm-6">
                      <div class="single_course wow fadeInUp">
                        <div class="cou_pic">
                            <div class="dlab-img-effect zoom">
                            <img src="{{url('public/images/stuff/non-teaching/'.$non_teaching->image)}}" />
                            </div>
                        </div>
                        <div class="singCourse_content">
                          <h3 class="singCourse_title">{{ $non_teaching->name }}</h3>
                          <p class="singCourse_price">{{ $non_teaching->designation }}</p>
                          <p class="singCourse_price">{{ $non_teaching->qualification }}</p>
                          <p class="mail">{{ (date('d-m-Y',strtotime($non_teaching->date_of_join))) }}</p>
                        </div>
                      </div>
                    </div>
                    @empty
                    No Record Found !!
                    @endforelse
                    </div>
                </div>
                <!-- start previous & next button -->
              </div>

        </div>
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->
@endsection
