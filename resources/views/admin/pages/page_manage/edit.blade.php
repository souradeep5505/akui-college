@extends('admin.resource.main')
@section('title', 'Edit Pages')
@section('content')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');

</script>
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{route('pages.index')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>

</section>
<section class="content">
    <form action="{{route('pages.update',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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
                        {{-- Page Name --}}
                        <label class="required fw-bold fs-6 mb-2">Page Name</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="page_name" value="{{ $data->page_name }}" placeholder="Page Name" required>
                        </div>
                        {{-- Image --}}
                        <label class="required fw-bold fs-6 mb-2">Image</label>
                        <div class="input-group mb-5">
                            @if (!empty($data->image))
                            <td style="text-align: center;"> <img src="{{url('public/images/page-image/'.$data->image)}}" alt="Image" style="width: 50px; height: 43px;"> </td>
                            @else
                            <td> <img src="{{ url('public/images/page-image/no-image.png')}}" style="width: 50px; height: 43px;" alt="image" style="object-fit: contain;" /></td>
                            @endif
                            <input type="file" class="form-control" name="image">
                        </div>
                        {{-- Banner Image --}}
                        <label class="required fw-bold fs-6 mb-2">Banner Image</label>
                        <div class="input-group mb-5">
                            <img src="{{url('public/images/inner-banner/'.$data->banner_img)}}" alt="Image" style="width: 100px; height: 50px;">
                            <input type="file" class="form-control" name="banner_img">
                        </div>
                        {{-- Description --}}
                        <label class="required fw-bold fs-6 mb-2">Description</label>
                        <div class="mb-5">
                            <textarea name="description" id="kt_docs_tinymce_basic1" placeholder="Description" required>{{ $data->description }}</textarea>
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
