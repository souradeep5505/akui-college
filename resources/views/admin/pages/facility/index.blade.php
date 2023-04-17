@push('styles')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush
@extends('admin.resource.main')
@section('title', 'List Facility')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{route('facility.create')}}" class="btn btn-success btn-xs btn-flat btn-sm" title="Create Department"><i class="fa fa-plus"></i> CREATE</a></small>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">

                        <table id="example1" class="table table-striped table-bordered border gy-4 gs-4">
                            <thead>
                                <tr class="fw-bold fs-6">
                                    <th style="text-align: center;">#</th>
                                    <th style="text-align: center;">Facility Name</th>
                                    <th style="text-align: center;">Facility Icon</th>
                                    <th style="text-align: center;">Facility Image</th>
                                    <th style="text-align: center;">Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=1;
                                    $datas = DB::table('facilities')->get();
                                    foreach ($datas as $data) {
                                    ?>
                                <tr>
                                    <td style="text-align: center;">{{$i}}</td>
                                    <td style="text-align: center;">{{ $data->facility_title }}</td>
                                    <td style="text-align: center;"><i style="font-size:30px; color:#0029f1;" class="{{ $data->facility_icon }}"></i></td>
                                    <td style="text-align: center;"> <img src="{{url('public/images/facility/'.$data->facility_img)}}" alt="Image" style="width: 50px; height: 50px;"> </td>
                                    <td style="text-align: center;"><?php echo (substr(strip_tags($data->description),0,400)) ?></td>

                                    <td>
                                        <a title="Edit Facility" href="{{route('facility.edit',$data->id)}}" class="btn btn-icon btn-circle btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
@push('script')
<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
@endpush
@push('script-write')
<script>
    $(function() {
        // $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true
            , 'lengthChange': true
            , 'searching': true
            , 'ordering': true
            , 'info': true
            , 'autoWidth': false
        })
    })

</script>
@endpush
