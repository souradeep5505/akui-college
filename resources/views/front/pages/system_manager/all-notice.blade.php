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
                <h1 class="text-white"> Notice</h1>
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
                <h2 class="title">Our Notice</h2>
                <div class="dlab-separator bg-primary m-b0"></div>
            </div>
            <?php $notices = DB::table('notices')->where('status','1')->get();
            $not=1;
            ?>
            @forelse ($notices as $notice)
            @if ($not%2==0)
            <div class="row cource-list-agile cource-list-agile-2 pt-4">
				<div class="col-lg-12 agile-course-main text-right">
					<div class="w3ls-cource-first" style="border-top: 5px solid #f76565; height: 100%;">
						<img src="{{url('public/images/stuff/1.png')}}" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"/>
						<div class="px-md-5 px-4  pb-md-5 pb-4">
							<h3 class="text-dark">Notice Name : {{ $notice->title }}</h3>
							<p class="mt-3 mb-4 pr-lg-5">Notice Date : {{ (date('d-m-Y',strtotime($notice->date_time))) }}</p>
                             <p class="mt-3 mb-4 pr-lg-5"><?php echo (substr(strip_tags($notice->description),0,200)) ?></p>
                             <div class="buttons-w3ls-2">
                                <a href="{{ url('notice/'.$notice->slug) }}" class="btn bg-dark text-white" style="padding:5px 10px; font-size:14px;" role="button">Read
                                    More</a>
                            </div>
                        </div>
					</div>
				</div>
			</div>
            @else
            <div class="row cource-list-agile pt-4">
				<div class="col-lg-12 agile-course-main">
					<div class="w3ls-cource-first" style="border-top: 5px solid #42a5f5; height: 100%;">
						<img src="{{url('public/images/stuff/2.png')}}" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"/>
						<div class="px-md-5 px-4  pb-md-5 pb-4">
							<h3 class="text-dark">Notice Name : {{ $notice->title }}</h3>
							<p class="mt-3 mb-4 pr-lg-5">Notice Date : {{ (date('d-m-Y',strtotime($notice->date_time))) }}</p>
                             <p class="mt-3 mb-4 pr-lg-5"><?php echo (substr(strip_tags($notice->description),0,200)) ?></p>
                            <div class="buttons-w3ls-2">
                                <a href="{{ url('notice/'.$notice->slug) }}" class="btn bg-dark text-white" style="padding:5px 10px; font-size:14px;" role="button">Read
                                    More</a>
                            </div>
						</div>
					</div>
				</div>
			</div>

            @endif
            <?php $not++; ?>
            @empty
            No Record Found!!
            @endforelse
        </div>
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->
@endsection
