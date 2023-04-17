@extends('admin.resource.main')
@section('title', 'Setting')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
        {{-- <small><a href="{{route('setting.index')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small> --}}
    </h1>

</section>
@foreach ($datas as $data)
<section class="content">

    <form action="{{route('setting.update',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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

                        <label class="required fw-bold fs-6 mb-2">Email</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="email" value="{{$data->email}}" placeholder="Email" required>
                        </div>

                        <label class="required fw-bold fs-6 mb-2">Mobile</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="phone" value="{{$data->phone}}" placeholder="Mobile" maxlength="10" required>
                        </div>

                        <label class="required fw-bold fs-6 mb-2">Address</label>
                        <div class="input-group mb-5">
                            <textarea name="address" class="form-control" cols="30" rows="5">{{$data->address}}</textarea>
                        </div>

                        <label class="required fw-bold fs-6 mb-2">State</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="state" value="{{$data->state}}" placeholder="State" required>
                        </div>

                        <label class="required fw-bold fs-6 mb-2">Pin Code</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="pin_code" value="{{$data->pin_code}}" placeholder="Pin Code" required>
                        </div>

                        <label class="required fw-bold fs-6 mb-2">Google Map</label>
                        <div class="input-group mb-5">
                            <textarea name="google_map" class="form-control" cols="30" rows="9">{{$data->google_map}}</textarea>
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
                        {{-- product Facebok --}}
                        <label class="fw-bold fs-6 mb-2">Facebook</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}" placeholder="Facebook">
                        </div>

                        <label class="fw-bold fs-6 mb-2">YouTube</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}" placeholder="YouTube">
                        </div>

                        <label class="fw-bold fs-6 mb-2">Twitter</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}" placeholder="Twitter">
                        </div>

                        <label class="required fw-bold fs-6 mb-2">Logo</label>
                        <div class="input-group mb-5">
                            <img src="{{url('public/images/logo/'.$data->logo)}}" alt="Image" style="width: 100%; padding-bottom:10px;">
                            <input type="file" class="form-control" name="logo" value="{{$data->logo}}">
                        </div>

                        <label class="fw-bold fs-6 mb-2">Campus Area</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="campus_area" value="{{$data->campus_area}}" placeholder="Campus Area">
                        </div>

                        <label class="fw-bold fs-6 mb-2">Libary Books</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="libary_books" value="{{$data->libary_books}}" placeholder="Libary Books">
                        </div>

                        <label class="fw-bold fs-6 mb-2">Honours Student</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="honours_student" value="{{$data->honours_student}}" placeholder="Honours Student">
                        </div>

                        <label class="fw-bold fs-6 mb-2">General Student</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="general_student" value="{{$data->general_student}}" placeholder="General Student">
                        </div>
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
    @endforeach
</section>
@endsection
