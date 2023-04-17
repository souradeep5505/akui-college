@extends('admin.resource.main')
@section('title', 'Edit Department')
@section('content')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');

</script>
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{route('department.index')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>

</section>
<section class="content">
    <form action="{{route('department.update',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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

                        {{-- Department Name --}}
                        <label class="required fw-bold fs-6 mb-2">Department Name</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="department_name" value="{{$data->department_name}}" placeholder="Department Name" required>
                        </div>

                        {{-- Department image --}}
                        <label class="required fw-bold fs-6 mb-2">Department Image</label>
                        <div class="input-group mb-5">
                            <img src="{{url('public/images/department/'.$data->department_img)}}" alt="Image" style="width: 50px; height: 43px;">
                            <input type="file" class="form-control" name="department_img">
                        </div>
                        {{-- Department Description --}}
                        <label class="fw-bold fs-6 mb-2">Description</label>
                        <div class="mb-5">
                            <textarea name="department_description" id="kt_docs_tinymce_basic1" placeholder="Description">{{$data->department_description}}</textarea>
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
<script>
    CKEDITOR.replace('kt_docs_tinymce_basic1', {
        customConfig: 'config.js'
        , toolbar: 'simple'
    })

</script>
@endsection
