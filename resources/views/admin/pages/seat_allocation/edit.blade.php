@extends('admin.resource.main')
@section('title', 'Edit Seat Allocation')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{route('seat-allocation.index')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>

</section>
<section class="content">
    <form action="{{route('seat-allocation.update',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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
                        {{-- Subject Name --}}
                        <label class="required fw-bold fs-6 mb-2">Subject Name</label>
                        <div class="input-group mb-5">
                            <?php $subjects=DB::table('subjects')->get(); ?>
                            <select name="subject_id" class="form-select">
                                <option value="">Select Subject Name</option>
                                @foreach ( $subjects as $subject)
                                <option value="{{ $subject->id }}"
                                @selected($data->subject_id==$subject->id)>{{ $subject->subject_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- Title --}}
                        <label class="required fw-bold fs-6 mb-2">Title</label>
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" name="sub_title" value="{{ $data->sub_title }}" placeholder="Title" required>
                        </div>
                        {{-- Total Seat --}}
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="required fw-bold fs-6 mb-2">Total Seat</label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control" name="total_seat" value="{{ $data->total_seat }}" placeholder="Total Seat" required>
                                    </div>
                                </div>
                                {{-- Ur --}}
                                <div class="col-md-6">
                                    <label class="required fw-bold fs-6 mb-2">Ur</label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control" name="ur" value="{{ $data->ur }}" placeholder="Ur" required>
                                    </div>
                                </div>
                                {{-- Sc --}}
                                <div class="col-md-6">
                                    <label class="required fw-bold fs-6 mb-2">Sc</label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control" name="sc" value="{{ $data->sc }}" placeholder="Sc" required>
                                    </div>
                                </div>
                                {{-- St --}}
                                <div class="col-md-6">
                                    <label class="required fw-bold fs-6 mb-2">St</label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control" name="st" value="{{ $data->st }}" placeholder="St" required>
                                    </div>
                                </div>
                                {{-- Obc-A --}}
                                <div class="col-md-6">
                                    <label class="required fw-bold fs-6 mb-2">Obc-A</label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control" name="obc_a" value="{{ $data->obc_a }}" placeholder="Obc-A" required>
                                    </div>
                                </div>
                                {{-- Obc-B --}}
                                <div class="col-md-6">
                                    <label class="required fw-bold fs-6 mb-2">Obc-B</label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control" name="obc_b" value="{{ $data->obc_b }}" placeholder="Obc-B" required>
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
