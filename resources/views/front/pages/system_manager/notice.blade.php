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
    .section-head {
    margin-bottom: 10px;
}

</style>
<!-- Content -->
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{url('public/images/inner-banner/inner-banner.jpg')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Notice</h1>
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
                <h2 class="title">Our Notice Details </h2>
                <div class="dlab-separator bg-primary m-b0"></div>
            </div>
            <div class="row cource-list-agile pt-4">
				<div class="col-lg-12 agile-course-main">
					<div class="w3ls-cource-first" style="border-top: 5px solid #ff4747; height: 100%;">
						<img src="{{url('public/images/stuff/1.png')}}" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"/>
						<div class="px-md-5 px-4  pb-md-5 pb-4">
							<h3 class="text-dark">Notice Name : {{ $notice->title }}</h3>
							<p class="mt-3 mb-4 pr-lg-5">Notice Date : {{ (date('d-m-Y',strtotime($notice->date_time))) }}</p>
                             <p class="mt-3 mb-4 pr-lg-5"><?php echo $notice->description ?></p>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->
@endsection
