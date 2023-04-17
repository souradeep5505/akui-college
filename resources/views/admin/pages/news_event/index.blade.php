@push('styles')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush
@extends('admin.resource.main')
@section('title', 'List News Event')
@section('content')
<style>
    .form-check.form-check-solid .form-check-input{
        background-color: #d5d5d5;
    }
</style>
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{route('news-event.create')}}" class="btn btn-success btn-xs btn-flat btn-sm" title="Create Department"><i class="fa fa-plus"></i> CREATE</a></small>
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
                                    <th style="text-align: center;">News Title</th>
                                    <th style="text-align: center;">News Date</th>
                                    <th style="text-align: center;">News Image</th>
                                    <th style="text-align: center;">Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=1;
                                    $datas = DB::table('news_events')->get();
                                    foreach ($datas as $data) {
                                    ?>
                                <tr>
                                    <td style="text-align: center;">{{$i}}</td>
                                    <td style="text-align: center;">{{ $data->title }}</td>
                                    <td style="text-align: center;">{{ (date('d-m-Y',strtotime($data->event_date))) }}</td>
                                    <td style="text-align: center;"> <img src="{{url('public/images/news-event/'.$data->image)}}" alt="Image" style="width: 50px; height: 50px;"> </td>
                                    <td style="text-align: center;"><?php echo (substr(strip_tags($data->description),0,100)) ?></td>
                                    <td>
                                        <div class="tab-pane active" id="kt_builder_toolbar">
                                            <div class="row">
                                                <div class="col-lg-4 col-xl-6">
                                                    <form action="{{route('news-event.eventstatuschanger','id='.$data->id) }}" name="sstc{{$data->id}}" id="sstc{{$data->id}}" method="post">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="status" value="{{$data->status}}">
                                                        <div class="form-check form-check-custom form-check-solid form-switch">
                                                            <input class="form-check-input" type="checkbox" id="status{{$data->id}}" value="{{$data->status}}" {{($data->status=='1')?'checked title=Active':'title=Inactive'}} onchange="statusActivInact('{{ $data->id }}');">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a title="Edit News Event" href="{{route('news-event.edit',$data->id)}}" class="btn btn-icon btn-circle btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>
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
<script>
    // var ischecked=document.getElementById('status2').checked;
    function statusActivInact(id) {
        var ischecked = document.getElementById('status' + id);
        //alert(ischecked.checked);
        var fid = "sstc" + id;
        var result = confirm("Are you want to change the status?");
        if (result) {
            document.getElementById(fid).submit();
        } else {
            if (ischecked.checked == false) {
                document.getElementById('status' + id).checked = true;
            } else {
                document.getElementById('status' + id).checked = false;
            }
        }
    }

</script>
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
