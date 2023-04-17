@extends('admin.resource.main')
@section('title', 'Profile')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
    </h1>
  </section>
<section class="content">

        <form action="{{url('/avqadmin/changePassword/'.$data->id)}}" onsubmit="btnDisable()" method="post">
            {{ csrf_field() }}
      <!--begin::Row-->
      <div class="row gy-5 g-xl-8">
        <div class="col-xl-8">
          <!-- general form elements -->
          <div class="card">
            <!--begin::Header-->
            <div class="card-header border-0 bg-danger mb-5 py-5">
                <h3 class="card-title fw-bolder text-white">@yield('title') </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->

            <div class="fv-row mb-10">
				<!--begin::Label-->
				<label class="form-label fs-6 fw-bolder text-dark">Email</label>
				<!--end::Label-->
				<!--begin::Input-->
				<input class="form-control form-control-lg form-control-solid" value={{ $data->email }} type="email" name="email" />
				<!--end::Input-->
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="fv-row mb-10">
				<!--begin::Wrapper-->
				<div class="d-flex flex-stack mb-2">
					<!--begin::Label-->
					<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
					<!--end::Label-->

				</div>
				<!--end::Wrapper-->
				<!--begin::Input-->
				<input class="form-control form-control-lg form-control-solid" value={{ $data->password }} type="password" name="password" autocomplete="off" />
				<!--end::Input-->
			</div>
            <!--end::Body-->
        </div>
        </div>
        <div class="col-xl-4">
          <!-- general form elements -->
          <div class="card">
            <!--begin::Header-->
            <div class="card-header border-0 bg-danger mb-5 py-5">
                <h3 class="card-title fw-bolder text-white">Action</h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body p-0">
                  <!--begin::Input group-->
                  {{-- <label class="required fw-bold fs-6 mb-2">Name</label> --}}
                  <div class="input-group mt-5">
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
