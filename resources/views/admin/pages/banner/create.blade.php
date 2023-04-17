@extends('admin.resource.main')
@section('title', 'Add Banner')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
      <small><a href="{{route('banner.index')}}" class="btn btn-warning btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>

  </section>

  <section class="content">

    <form action="{{route('banner.store')}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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

              {{-- banner Name --}}
            <label class="required fw-bold fs-6 mb-2">Banner Caption</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="banner_title" value="" placeholder="Banner Name" required>
            </div>

            {{-- banner image --}}
            <label class="required fw-bold fs-6 mb-2">Image</label>
            <div class="input-group mb-5">
            <input type="file" class="form-control" name="banner_img" required>
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
          {{-- <label class="required fw-bold fs-6 mb-2">Name</label> --}}

          <div class="input-group mt-8">
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
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
