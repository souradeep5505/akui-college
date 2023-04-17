@section('title',)
@extends('front.resource.main')
@section('content')
<!-- Content -->
<style>
    table td {
        padding: 15px 10px;
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
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Courses & Subject Offered</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html">Home</a></li>
                        <li>Courses & Subject Offered</li>
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
                <h2 class="title">Courses and subjects Offered</h2>
                <div class="dlab-separator bg-primary m-b0"></div>
            </div>
            <!-- start course content -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="courseArchive_content">
                    <!-- start blog archive  -->
                    <div class="row">
                        <!-- start single blog -->
                        <div class="col-lg-12 col-12 col-sm-12">
                            <div class="single_blog">
                                <div class="line"></div>
                                <h3 style="color:#008000; text-align:center;">BA Honours course:</h3>
                                <table border="1" cellpadding="0" cellspacing="0" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <td style="width:97px">
                                                <h4 style="font-size:16px;text-align:center">Discipline</h4>
                                            </td>
                                            <td style="width:156px">
                                                <h4 style="font-size:16px;text-align:center">Name of the course</h4>
                                            </td>
                                            <td style="width:145px">
                                                <h4 style="font-size:16px;text-align:center">Honours Subject</h4>
                                            </td>
                                            <td style="width:365px">
                                                <h4 style="font-size:16px;text-align:center">GE/General Subjects to be opted</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5" style="height:23px; text-align:center; width:97px"><span style="font-size:18px"><strong>Humanities</strong></span></td>
                                            <td colspan="1" rowspan="4" style="height:23px; width:156px">
                                                <p style="text-align:center"><strong>B.A. (Hons)</strong></p>
                                            </td>
                                            <td style="height:23px; width:145px">
                                                <p style="text-align:center">Bengali</p>
                                            </td>
                                            <td style="height:23px; width:365px">
                                                <p> History, Philosophy, Sanskrit, Political Science</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height:23px; width:145px">
                                                <p style="text-align:center">English</p>
                                            </td>
                                            <td style="height:23px; width:365px">
                                                <p> Bengali, History, Philosophy, Sanskrit, Political Science</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height:23px; width:145px">
                                                <p style="text-align:center">Philosophy</p>
                                            </td>
                                            <td style="height:23px; width:365px">
                                                <p> Bengali, History, Sanskrit, Political Science</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height: 23px; width: 145px; text-align: center;">History</td>
                                            <td style="height:23px; width:365px"> Bengali,Philosophy, Sanskrit, Political Science</td>
                                        </tr>
                                        <tr>
                                            <td style="height:141px; width:156px">
                                                <p style="text-align:center"><strong>B.A (General)</strong></p>
                                            </td>
                                            <td style="height:141px; width:145px"> </td>
                                            <td style="height:141px; width:365px">
                                                <p> Bengali, History, Philosophy, Sanskrit,</p>
                                                <p> Political Science</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h3 style="color:#008000;">B.A General (Programme) Course:</h3>
                                <h4 style="font-size:16px;">Subjects Available</h4>
                                <p>Bengali</p>
                                <p>Philosophy</p>
                                <p>History</p>
                                <p>Sanskrit</p>
                                <p>Political Science</p>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                    <!-- end blog archive  -->
                </div>
            </div>
            <!-- End course content -->
        </div>
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->
@endsection
