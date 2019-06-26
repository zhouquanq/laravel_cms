@extends('admin.base')

@section('link')
<!-- Datatables -->
    <link href="{{ URL::asset('static/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
              <h3>系统用户</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>用户列表</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                            <thead>
                            <tr>
                                <th>
                                <th><input type="checkbox" id="check-all" class="flat"></th>
                                </th>
                                <th>id</th>
                                <th>name</th>
                                <th>nickname</th>
                                <th>phone</th>
                                <th>email</th>
                                <th>sex</th>
                                <th>status</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($members as $k => $v)
                            <tr>
                                <td>
                                <th><input type="checkbox" id="check-all" class="flat"></th>
                                </td>
                                <td>{{ $v->sid }}</td>
                                <td>{{ $v->sname }}</td>
                                <td>{{ $v->nickname }}</td>
                                <td>{{ $v->phone }}</td>
                                <td>{{ $v->email }}</td>
                                <td>@if ($v->sex==0)
                                        未设置
                                    @elseif($v->sex==1)
                                        男
                                    @elseif($v->sex==2)
                                        女
                                    @endif
                                </td>
                                <td>
                                    @if ($v->status==1)
                                        正常
                                    @elseif($v->status==2)
                                        锁定
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('view/restore', $v->id) }}">修改</a> |
                                    <a href="{{ url('view/destroy', $v->id) }}">删除</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection

@section('script')
<!-- jQuery -->
<script src="{{ URL::asset('static/admin/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ URL::asset('static/admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('static/admin/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ URL::asset('static/admin/vendors/nprogress/nprogress.js') }}"></script>
<!-- iCheck -->
<script src="{{ URL::asset('static/admin/vendors/iCheck/icheck.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ URL::asset('static/admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('static/admin/vendors/pdfmake/build/vfs_fonts.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ URL::asset('static/admin/build/js/custom.min.js') }}"></script>

@endsection
