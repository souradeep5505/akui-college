@section('title',)
@extends('front.resource.main')
@section('content')

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
                <h2 class="title">Governing Body</h2>
                <div class="dlab-separator bg-primary m-b0"></div>
            </div>
            <!-- start course content -->
            <div class="comments-grids mt-4">

                <div class="row comments-grid">
                    <div class="col-2 comments-grid-left">
                        <img src="{{ url('public/images/stuff/teaching/1.jpg') }}" alt=" " class="img-thumbnail rounded-circle" />
                    </div>
                    <div class="col-8 comments-grid-right mt-2">
                        <h4>Sri Abhijit Singha </h4>
                        <ul class="my-2">
                            <h6>Designation :President </h6>
                        </ul>
                    </div>
                </div>
                <div class="row comments-grid">
                    <div class="col-2 comments-grid-left">
                        <img src="{{ url('public/images/stuff/teaching/1.jpg') }}" alt=" " class="img-thumbnail rounded-circle" />
                    </div>
                    <div class="col-8 comments-grid-right mt-2">
                        <h4>Dr Nisith Nath Chakrovorty </h4>
                        <ul class="my-2">
                            <h6>Designation :Principal/Secretary (Ex-officio) </h6>
                        </ul>
                    </div>
                </div>
                <div class="row comments-grid">
                    <div class="col-2 comments-grid-left">
                        <img src="{{ url('public/images/stuff/teaching/1.jpg') }}" alt=" " class="img-thumbnail rounded-circle" />
                    </div>
                    <div class="col-8 comments-grid-right mt-2">
                        <h4>Sri Dipak Kumar Acharya </h4>
                        <ul class="my-2">
                            <h6>Designation :Member (State Govt. Nominee ) </h6>
                        </ul>
                    </div>
                </div>
                <div class="row comments-grid">
                    <div class="col-2 comments-grid-left">
                        <img src="{{ url('public/images/stuff/teaching/1.jpg') }}" alt=" " class="img-thumbnail rounded-circle" />
                    </div>
                    <div class="col-8 comments-grid-right mt-2">
                        <h4>Sri Sunil Kumar Dey </h4>
                        <ul class="my-2">
                            <h6>Designation :Member (State Govt. Nominee ) </h6>
                        </ul>
                    </div>
                </div>
                <div class="row comments-grid">
                    <div class="col-2 comments-grid-left">
                        <img src="{{ url('public/images/stuff/teaching/1.jpg') }}" alt=" " class="img-thumbnail rounded-circle" />
                    </div>
                    <div class="col-8 comments-grid-right mt-2">
                        <h4>Dr Sristidhar Das </h4>
                        <ul class="my-2">
                            <h6>Designation :Member (W.B.S.C.H.E. Nominee) </h6>
                        </ul>
                    </div>
                </div>
                <div class="row comments-grid">
                    <div class="col-2 comments-grid-left">
                        <img src="{{ url('public/images/stuff/teaching/1.jpg') }}" alt=" " class="img-thumbnail rounded-circle" />
                    </div>
                    <div class="col-8 comments-grid-right mt-2">
                        <h4>Dr Tista Dutta Roy </h4>
                        <ul class="my-2">
                            <h6>Designation :Member (University Nominee) </h6>
                        </ul>
                    </div>
                </div>
                <div class="row comments-grid">
                    <div class="col-2 comments-grid-left">
                        <img src="{{ url('public/images/stuff/teaching/1.jpg') }}" alt=" " class="img-thumbnail rounded-circle" />
                    </div>
                    <div class="col-8 comments-grid-right mt-2">
                        <h4>Dr Chandan Kundu </h4>
                        <ul class="my-2">
                            <h6>Designation :Member (University Nominee) </h6>
                        </ul>
                    </div>
                </div>
                <div class="row comments-grid">
                    <div class="col-2 comments-grid-left">
                        <img src="{{ url('public/images/stuff/teaching/1.jpg') }}" alt=" " class="img-thumbnail rounded-circle" />
                    </div>
                    <div class="col-8 comments-grid-right mt-2">
                        <h4>Mr Safikul Islam </h4>
                        <ul class="my-2">
                            <h6>Designation :Member (Non-teaching Employees' Representative) </h6>
                        </ul>
                    </div>
                </div>
                <!-- End course content -->
            </div>
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
    @endsection
