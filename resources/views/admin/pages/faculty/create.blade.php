@extends('admin.resource.main')
@section('title', 'Add Faculty')
@section('content')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');

</script>
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{route('faculty.index')}}" class="btn btn-warning btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>

</section>

<section class="content">

    <form action="{{route('faculty.store')}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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
                        {{-- Department Name --}}
                        <label class="required fw-bold fs-6 mb-2">Department Name</label>
                        <div class="input-group mb-5">
                            <?php $departments=DB::table('departments')->get(); ?>
                            <select name="department_id" class="form-select">
                                <option value="">Select Department Name</option>
                                @foreach ( $departments as $department)
                                <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                @endforeach
                              </select>
                        </div>

                        {{-- Faculty Name --}}
                        <label class="required fw-bold fs-6 mb-2">Faculty Name</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="faculty_name" placeholder="Faculty Name" required>
                        </div>
                        {{-- Faculty Qualification --}}
                        <label class="required fw-bold fs-6 mb-2">Faculty Designation</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="designation" placeholder="Faculty Designation" required>
                        </div>
                        {{-- Faculty Image --}}
                        <label class="required fw-bold fs-6 mb-2">Faculty Image</label>
                        <div class="input-group mb-5">
                            <input type="file" class="form-control" name="faculty_img"  required>
                        </div>
                        {{-- Faculty Qualification --}}
                        <label class="required fw-bold fs-6 mb-2">Faculty Qualification</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="faculty_qualification" placeholder="Faculty Qualification" required>
                        </div>
                        {{-- Date Of Join --}}
                        <label class="required fw-bold fs-6 mb-2">Date Of Join</label>
                        <div class="input-group mb-5">
                            <input type="date" class="form-control" name="date_of_join" required>
                        </div>
                        {{-- Faculty Email --}}
                        <label class="required fw-bold fs-6 mb-2">Faculty Email</label>
                        <div class="input-group mb-5">
                            <input type="email" class="form-control" name="email" placeholder="Faculty Email" required>
                        </div>
                        {{-- Faculty Phone --}}
                        <label class="required fw-bold fs-6 mb-2">Faculty Phone</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="phone" placeholder="Faculty Phone" maxlength="10" required>
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
