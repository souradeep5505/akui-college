@section('title',)
@extends('front.resource.main')
@section('content')
<!-- Content -->
<style>
    table td {
        padding: 10px 0px;
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        border-right: 1px solid #000;
    }

    p {
        line-height: 10px;
        margin-bottom: 20px;
    }

    .section-head {
        margin-bottom: 30px;
    }

    .cours {
        text-align: center;
    }

</style>

<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{url('public/images/inner-banner/inner-banner.jpg')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Seat Allocation</h1>
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
    <?php $datas=DB::table('seat_allocations')->get(); ?>
    <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Seat Allocation</h2>
                <div class="dlab-separator bg-primary m-b0"></div>
            </div>
            <!-- start single blog -->
            <div class="col-lg-12 col-12 col-sm-12">
                <div class="single_blog">
                    <div class="line"></div>
                    <h3 style="color:#00c6ff; text-align:center;">BA Honours course and allotted seats:</h3>
                    <table border="1" cellpadding="0" cellspacing="0" style="width:100%">
                        <tbody>
                            <tr>
                                <td style="height:49px; width:114px">
                                    <h4 style="font-size:16px;text-align:center">Subjects</h4>
                                    <h4 style="font-size:16px;text-align:center">Available</h4>
                                </td>
                                <td style="height:49px; width:95px">
                                    <h4 style="font-size:16px;text-align:center">Total Seats</h4>
                                </td>
                                <td style="height:49px; width:104px">
                                    <h4 style="font-size:16px;text-align:center">UR</h4>
                                    <h4 style="font-size:16px;text-align:center">(55%)</h4>
                                </td>
                                <td style="height:49px; width:104px">
                                    <h4 style="font-size:16px;text-align:center">SC </h4>
                                    <h4 style="font-size:16px;text-align:center">(22%)</h4>
                                </td>
                                <td style="height:49px; width:104px">
                                    <h4 style="font-size:16px;text-align:center">ST </h4>
                                    <h4 style="font-size:16px;text-align:center">(06%)</h4>
                                </td>
                                <td style="height:49px; width:105px">
                                    <h4 style="font-size:16px;text-align:center">OBC- A </h4>
                                    <h4 style="font-size:16px;text-align:center">(10%)</h4>
                                </td>
                                <td style="height:49px; width:105px">
                                    <h4 style="font-size:16px;text-align:center">OBC-B </h4>
                                    <h4 style="font-size:16px;text-align:center">(07%)</h4>
                                </td>
                            </tr>
                            @foreach ( $datas as $data )
                            <tr>
                                <td style="height:28px; width:114px">
                                    <h4 style="font-size:16px;text-align:center">{{ Helper::SubjectName($data->subject_id) }}</h4>
                                </td>
                                <td style="height:28px; width:95px">
                                    <p style="text-align:center"><strong>{{ $data->total_seat }}</strong></p>
                                </td>
                                <td style="height:28px; width:104px">
                                    <p style="text-align:center"><strong>{{ $data->ur }}</strong></p>
                                </td>
                                <td style="height:28px; width:104px">
                                    <p style="text-align:center"><strong>{{ $data->sc }}</strong></p>
                                </td>
                                <td style="height:28px; width:104px">
                                    <p style="text-align:center"><strong>{{ $data->st }}</strong></p>
                                </td>
                                <td style="height:28px; width:105px">
                                    <p style="text-align:center"><strong>{{ $data->obc_a }}</strong></p>
                                </td>
                                <td style="height:28px; width:105px">
                                    <p style="text-align:center"><strong>{{ $data->obc_b }}</strong></p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h3 style="color:#00c6ff; text-align:center;">BA General (Programme) Course:</h3>
                    <table border="1" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td style="height:37px; width:121px">
                                    <h4 style="font-size:16px;text-align:center">Total Seats</h4>
                                </td>
                                <td style="height:37px; width:523px">
                                    <h4 style="font-size:16px;">&nbsp;Subjects available</h4>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:37px; width:121px">
                                    <h4 style="font-size:16px;text-align:center"> 150</h4>
                                </td>
                                <td style="height:37px; width:523px">
                                    <p>&nbsp;Bengali, Philosophy, History, Sanskrit, Political Science</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End single blog -->
        </div>
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->
@endsection
