@extends('layout')

@section('main-content')
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">DANH SÁCH GÓI CREDIT</h4>
                                <p class="text-muted font-13 mb-4">
                                    DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                                    function:
                                    <code>$().DataTable();</code>.
                                </p>

                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên gói</th>
                                            <th>Credit</th>
                                            <th>Số tiền</th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        <tr>
                                        	@foreach($goiCredits as $goi)
                                        	
                                            <td>{{$goi->id}}</td>
                                            <td>{{$goi->ten_goi}}</td>
                                            <td>{{$goi->credit}}</td>
                                            <td>{{$goi->so_tien}}</td>
                                            <td>
                                            	<button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-edit"></i></button>
                                            	<button type="button" class="btn btn-purple waves-effect waves-light"><i class="fe-trash"></i></button>
                                            </td>
                                    
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