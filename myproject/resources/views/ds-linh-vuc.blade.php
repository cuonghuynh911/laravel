@extends('layout')

@section('css')
    <!-- third party css -->
        <link href="{{ asset ('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
 <!-- third party js -->
        <script src="{{ asset ('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset ('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset ('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset ('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset ('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset ('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset ('assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset ('assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset ('assets/libs/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset ('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset ('assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src="{{ asset ('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset ('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

         <!-- Datatables init -->
        <script src="{{ asset ('assets/js/pages/datatables.init.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function(){$("#linh-vuc-datatable").DataTable({language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}});
        </script>

@endsection
@section('main-content')
 <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="header-title">Danh Sách Lĩnh Vực</h4>
                        <a href="{{ route('linh-vuc.them-moi') }}" class="btn btn-primary btn-rounded waves-effect waves-light">Thêm mới</a>
                        
                            <table id="linh-vuc-datatable" class="table dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên lĩnh vực</th>
                                    <th></th>
                                </tr>
                                </thead>                                
                                <tbody>
                                <tr>
                                    @foreach($dslinhVuc as $linhVuc)
                                        <td>{{$linhVuc->id}}</td>
                                        <td>{{$linhVuc->ten_linh_vuc}}</td>
                                        <td>
                                        <a href="{{ route('linh-vuc.cap-nhat', ['id' => $linhVuc->id]) }}" class="btn btn-danger waves-effect waves-light"><i class="fe-edit"></i></a>
                                        <a href="{{ route('linh-vuc.xoa', ['id' => $linhVuc->id]) }}" class="btn btn-purple waves-effect waves-light"><i class="fe-trash"></i></a>
                                        </td>
                                <tr></tr>
                                    @endforeach
                                </tr>
                                        
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
@endsection