@push('styles')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush
@extends('admin.resource.main')
@section('title', 'List Contact')
@section('content')
<section class="content-header">

    {{-- search bar start --}}
    <div class="row">
        <div class="col-md-5">
            <h1>
                @yield('title')
            </h1>
        </div>

        <div class="col-md-7">
            <form action="" method="get">
                <div class="row" style="">

                    <div class="col-md-4">
                        <input type="text" class="form-control-sm" name="src_name" value="{{$request->src_name}}" placeholder="Name" title="Name">
                    </div>

                    <div class="col-md-3" style="width: 33%;">
                        <input type="text" class="form-control-sm" name="src_email" value="{{$request->src_email}}" placeholder="Email" title="Email">
                    </div>

                    <div class="col-md-3">
                        <div class="">
                            <button type="submit" class="btn btn-icon btn-circle btn-sm btn-primary" title="Search"><i class="fa fa-search"></i></button>
                            <a href="{{route('contact.index')}}" class="btn btn-icon btn-circle btn-sm btn-danger" title="Reset"><i class="fa fa-sync"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- search bar end --}}
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{route('contact.deletecontact')}}" method="POST">
                        {{ csrf_field() }}
                        <button style="margin-bottom: 10px; margin-left: 40px;" class="btn btn-danger btn-sm" onclick="return confirm('Are you want to delete this?')">
                            Delete
                        </button>
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered border gy-4 gs-4">
                                <thead>
                                    <tr class="fw-bold fs-6">
                                        <th style="text-align: center;">#</th>
                                        <th><input type="checkbox" id="checkAll"> Select All</th>
                                        <th style="text-align: center;">Name</th>
                                        <th style="text-align: center;">Email</th>
                                        <th style="text-align: center;">Phone</th>
                                        <th style="text-align: center;">Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i=1;
                                        $datas = DB::table('contacts')
                                        ->where(function($query) use($request){
                                            if(!empty($request->src_name)) $query->whereRaw("name LIKE '%".$request->src_name."%'");
                                            if(!empty($request->src_email)) $query->whereRaw("email LIKE '%".$request->src_email."%'");
                                        })->paginate(10);
                                        if(empty($request->page) || $request->page=='1'){
                                            $i=1;
                                        }else{
                                            $i=(10*($request->page-1))+1;
                                        }
                                        foreach ($datas as $data) {
                                        ?>
                                    <tr>
                                        <td style="text-align: center;">{{$i}}</td>
                                        <td><input type="checkbox" name="ids[{{ $data->id }}]" value="{{$data->id}}"></td>
                                        <td style="text-align: center;">{{$data->name}}</td>
                                        <td style="text-align: center;">{{$data->email}}</td>
                                        <td style="text-align: center;">{{$data->phone}}</td>
                                        <td style="text-align: center;">{{$data->comment}}</td>
                                    </tr>
                                    <?php
                                    $i++;
                                    } ?>
                                </tbody>
                            </table>
                    </form>
                    {{ $datas->links() }}
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $("#checkAll").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });

    </script>
</section>
@endsection
@push('script')
<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
@endpush
