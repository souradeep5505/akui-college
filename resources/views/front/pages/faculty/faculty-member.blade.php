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
                <h2 class="title">Faculty Members {{ $faculty->faculty_name }}</h2>
                <div class="dlab-separator bg-primary m-b0"></div>
            </div>
            <div class="row cource-list-agile cource-list-agile-2 pt-4">
                <div class="col-lg-12 agile-course-main text-right">
                    <div class="w3ls-cource-first" style="border-top: 5px solid #ff4747; height: 100%;">
                        <img src="{{url('public/images/stuff/1.png')}}" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2">
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
                            <b style="color:#00c6ff">Publications :</b>
                            <?php echo $faculty->description ?>
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
