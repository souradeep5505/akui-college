@section('title',)
@extends('front.resource.main')
@section('content')
<!-- Content -->
<style>
    table td {
        padding: 10px 10px;
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

    table tr:last-child td {
        border-bottom: 1px solid #000;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #000;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

</style>

<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{url('public/images/inner-banner/inner-banner.jpg')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Fees Structure</h1>
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
                <h2 class="title">Fees Structure</h2>
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

                                <style>

                                </style>
                                <table>
                                    <thead>
                                        <th style="text-align:center">Type of Fees</th>
                                        <th style="text-align:center">Frequency</th>
                                        <th style="text-align:center">Programme</th>
                                        <th style="text-align:center">Honours</th>

                                    </thead>
                                    <tbody>
                                        <?php $datas=DB::table('fees_structures')->get(); ?>
                                        @foreach ( $datas as $data )
                                        <tr>
                                            <td>{{ $data->type_of_fees }}</td>
                                            <td>{{ $data->frequency }}</td>
                                            <td>₹{{ $data->programme }}.00</td>
                                            <td>₹{{ $data->honours }}.00</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
