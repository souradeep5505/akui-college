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
    line-height: 10px;
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
                <h1 class="text-white">Faculty Members</h1>
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
                <h2 class="title">Faculty Members</h2>
                <div class="dlab-separator bg-primary m-b0"></div>
            </div>
            <?php $faculties = DB::table('faculties')->where('status','1')->get();
            $fac=1;
            ?>
            @forelse ($faculties as $faculty)
            @if ($fac%2==0)
            <div class="row cource-list-agile cource-list-agile-2 pt-4">
                <div class="col-lg-12 agile-course-main text-right">
                    <div class="w3ls-cource-first" style="border-top: 5px solid #ff4747; height: 100%;">
                        <img src="public/images/stuff/1.png" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2">
                        <div class="col-md-3" style="float:left;">
                            <img src="{{url('public/images/faculty/'.$faculty->faculty_img)}}" alt="" style="width:200px;padding-bottom: 10px;padding-left: 10px;">
                        </div>
                        <div class="col-md-9" style="float:right; text-align:left; padding-left:30px;">
                            <h4 class="text-dark">{{ $faculty->faculty_name }}</h4>
                            <p><b style="color:#00c6ff">Designation</b> : {{ $faculty->designation }}</p>
                            <p><b style="color:#00c6ff">Qualification</b> : {{ $faculty->faculty_qualification }}</p>
                            <p><b style="color:#00c6ff">Department</b> : {{ Helper::DepartmentName($faculty->department_id) }} </p>
                            <p><b style="color:#00c6ff">Date of Joining</b> : {{ (date('d-m-Y',strtotime($faculty->date_of_join))) }}</p>
                            <p><b style="color:#00c6ff">Email Id</b> : {{ $faculty->email }}</p>
                            <p><b style="color:#00c6ff">Mobile</b> : {{ $faculty->phone }}</p>
                            <div class="buttons-w3ls-2" style="margin-bottom: 20px;">
                                <a href="{{url('faculty/'.$faculty->slug)}}" class="btn bg-dark text-white" style="padding:5px 10px; font-size:14px;" role="button">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row cource-list-agile pt-4">
                <div class="col-lg-12 agile-course-main">
                    <div class="w3ls-cource-first" style="border-top: 5px solid #00c6ff; height: 100%;">
                        <img src="public/images/stuff/2.png" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2">
                        <div class="col-md-9" style="float:left; text-align:left; padding-left:20px;">
                            <h4 class="text-dark">Dr Bibhas Dutta</h4>
                            <p><b style="color:#00c6ff">Designation</b> : Associate Professor</p>
                            <p><b style="color:#00c6ff">Qualification</b> : M. Sc.; Ph. D. (Jadavpur University)</p>
                            <p><b style="color:#00c6ff">Department</b> : Physics</p>
                            <p><b style="color:#00c6ff">Date of Joining</b> : 07-03-2002</p>
                            <p><b style="color:#00c6ff">Email Id</b> : bibhas.snc@gmail.com</p>
                            <div class="buttons-w3ls-2" style="margin-bottom: 20px;">
                                <a href="{{url('faculty/'.$faculty->slug)}}" class="btn bg-dark text-white" style="padding:5px 10px; font-size:14px;" role="button">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:right;">
                            <img src="{{url('public/images/faculty/'.$faculty->faculty_img)}}" alt="" style="width:200px;padding-bottom: 10px;padding-right: 10px;">
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <?php $fac++; ?>
            @empty
            No Record Found!!
            @endforelse
        </div>
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->
@endsection
