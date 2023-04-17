@extends('admin.resource.main')
@section('title', 'Edit Banner')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
      <small><a href="{{route('banner.index')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>

  </section>
  <section class="content">
    <form action="{{route('banner.update',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">
        {{ csrf_field() }}
            <!--begin::Row-->
            <div class="row gy-5 g-xl-8">
                <div class="col-xl-8">
                <!-- general form elements -->
                <div class="card">
                    <!--begin::Header-->
                    <div class="card-header border-0 bg-danger mb-5" style="min-height: 40px;">
                        <h3 class="card-title fw-bolder text-white">@yield('title') </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Input group-->
                        {{-- Banner Name --}}
                        <label class="required fw-bold fs-6 mb-2">Banner Caption</label>
                        <div class="input-group mb-5">
                        <input type="text" class="form-control" name="banner_title" value="{{$data->banner_title}}" placeholder="Banner Name">
                        </div>
                        {{-- banner image --}}
                        <label class="required fw-bold fs-6 mb-2">Image</label>
                        <div class="input-group mb-5">
                        <img src="{{url('public/images/banner/'.$data->banner_img)}}" alt="Image" style="width: 50px; height: 43px;">
                        <input type="file" class="form-control" name="banner_img">
                        </div>

                    <!--end::Input group-->
                </div>
                <!--end::Body-->
            </div>
            </div>
            <div class="col-xl-4">
            <!-- general form elements -->
            <div class="card">
                <!--begin::Header-->
                <div class="card-header border-0 bg-danger mb-5" style="min-height: 40px;">
                    <h3 class="card-title fw-bolder text-white">Action</h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Input group-->
                    <div class="input-group mt-8">
                        <button type="submit" class="btn btn-primary btn-xs" id="submit">Submit</button>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Body-->
            </div>
            </div>
            </div>
            <!--end::Row-->
        </form>
    </section>
@endsection
