@section('title',)
@extends('front.resource.main')
@section('content')
<!-- Content -->
<style>
    .alert {
        border-radius: 4px;
        padding: 0px 20px;
    }

</style>
<!-- Content -->
 <!-- Content -->
 <div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{url('public/images/inner-banner/inner-banner.jpg')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Contact Us</h1>
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
    <?php $settings=DB::table('settings')->where('id','1')->first(); ?>
    <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">
            <div class="row dzseth">
                <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                        <div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i style="font-size:50px;" class="ti-location-pin"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte text-uppercase">Address</h5>
                            <h6 style="font-size: 14px;">{{ $settings->address }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                        <div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i style="font-size:50px;" class="ti-email"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte text-uppercase">Email</h5>
                            <h6 style="font-size: 14px;">{{ $settings->email }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                        <div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i style="font-size:50px;" class="ti-mobile"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte text-uppercase">Phone</h5>
                            <h6 style="font-size: 14px;">+91 {{ $settings->phone }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Left part start -->
                <div class="col-lg-6 m-b30">
                    <div class="p-a30 bg-gray clearfix radius-sm">
                        <h3>Send Message Us</h3>
                        <div class="dzToDo"></div>
                        <form method="post" action="{{ url('contactus') }}">
                            {{ csrf_field() }}
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="field-wrapper">
                                            <div id="message-wrap" class="">
                                                <span></span>
                                            </div>
                                        </div>
                                        @foreach ($errors->all() as $error)
                                        <p id="message-wrap" class="alert alert-danger">{{ $error }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="name" type="text" class="form-control" value="{{ old('name') }}" placeholder="Your Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="phone" type="text" class="form-control" value="{{ old('phone') }}" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="email" type="email" class="form-control"  value="{{ old('email') }}" placeholder="Your Email Id" >
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea name="comment" rows="4" class="form-control"  placeholder="Your Message...">{{ Request::old('comment') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div id="google_recaptcha">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Left part END -->
                <!-- right part start -->
                <div class="col-lg-6 m-b30 d-flex">
                    <?php echo $settings->google_map ?>
                </div>
                <!-- right part END -->
            </div>
        </div>
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script type="text/javascript">
    var onloadCallback = function() {
        grecaptcha.render('google_recaptcha', {
            'sitekey': '{{ config("services.recaptcha.key") }}'
        });
    };
</script>
@include('sweetalert::alert')
@endsection
