@extends('admin.resource.main')
@section('title', 'Add Fees Structure')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{route('fees-structure.index')}}" class="btn btn-warning btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>

</section>

<section class="content">

    <form action="{{route('fees-structure.store')}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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
                        {{-- Type Of Fees --}}
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="required fw-bold fs-6 mb-2">Type Of Fees</label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control" name="type_of_fees" placeholder="Type Of Fees" required>
                                    </div>
                                </div>
                                {{-- Frequency --}}

                                <div class="col-md-6">
                                    <label class="required fw-bold fs-6 mb-2">Frequency</label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control" name="frequency" placeholder="Frequency">
                                    </div>
                                </div>
                                {{-- Programme --}}
                                <div class="col-md-6">
                                    <label class="required fw-bold fs-6 mb-2">Programme</label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control" name="programme" placeholder="Programme" required>
                                    </div>
                                </div>
                                {{-- Honours --}}
                                <div class="col-md-6">
                                    <label class="required fw-bold fs-6 mb-2">Honours</label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control" name="honours" placeholder="Honours" required>
                                    </div>
                                </div>
                            </div>
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
@endsection
