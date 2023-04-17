@extends('admin.resource.main')
@section('title', 'Add Notice')
@section('content')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');

</script>
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{route('notice.index')}}" class="btn btn-warning btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>

</section>

<section class="content">

    <form action="{{route('notice.store')}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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
                        {{-- Notice Name --}}
                        <label class="required fw-bold fs-6 mb-2">Notice Name</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="title" value="" placeholder="Notice Name" required>
                        </div>

                        {{-- Date Time --}}
                        <label class="required fw-bold fs-6 mb-2">Date Time</label>
                        <div class="input-group mb-5">
                            <input type="datetime-local" class="form-control" name="date_time" placeholder="Date Time" required>
                        </div>
                        {{-- PDF File --}}
                        <label class="required fw-bold fs-6 mb-2">PDF File</label>
                        <div class="input-group mb-5">
                            <input type="file" class="form-control" name="pdf_file" accept=".pdf" required>
                        </div>
                        {{-- Description --}}
                        <label class="required fw-bold fs-6 mb-2">Description</label>
                        <div class="mb-5">
                            <textarea name="description" id="kt_docs_tinymce_basic1" placeholder="Description" required></textarea>
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
<script>
    CKEDITOR.replace('kt_docs_tinymce_basic1', {
        customConfig: 'config.js'
        , toolbar: 'simple'
    })

</script>
@endsection
