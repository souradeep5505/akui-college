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
                <h2 class="title">Finance Sub- Committee</h2>
                <div class="dlab-separator bg-primary m-b0"></div>
            </div>
            <!-- start course content -->
            <div class="row">
                <table cellspacing="0" style="border-collapse:collapse">
                    <tbody>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:198px">
                            <p>Name</p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:152px">
                            <p>Designation</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:21px; vertical-align:top; width:198px">
                            <p>Dr. Pitambar Paul</p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:21px; vertical-align:top; width:152px">
                            <p>Principal</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:198px">
                            <p>Debasis Roy</p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:152px">
                            <p>Govt. Nominee (GB)</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:21px; vertical-align:top; width:198px">
                            <p>Smt. Indarni Majhi (Shit)</p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:21px; vertical-align:top; width:152px">
                            <p>Teacher&rsquo;s Member</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:198px">
                            <p>Dr. Nandini Maity</p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:152px">
                            <p>Teacher&rsquo;s Member</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:198px">
                            <p>Smt. Anushree Mondal</p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:152px">
                            <p>Teacher&rsquo;s Member</p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                </div>
            <!-- End course content -->
        </div>
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->
@endsection
