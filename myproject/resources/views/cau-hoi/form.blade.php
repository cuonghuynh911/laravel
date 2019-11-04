@extends('layout')

@section('main-content')
	<div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 header-title">Thêm câu hỏi</h4>
                    <form action="{{ route('cau-hoi.xu-li-them-moi') }}" method="POST">
                    	@csrf
                       
                        <div class="form-group">
                            <label for="noi_dung">Nội dung</label>
                            <input type="text" class="form-control" id="noi_dung" name="noi_dung" value="" >
                        </div>

                        <div class="form-group">
                            <label for="linh_vuc">Lĩnh vực</label>
                            <select class="custom-select " id="linh_vuc" name="linh_vuc">
                                <option>Chọn lĩnh vực</option>
                                @foreach($listLinhVuc as $linhVuc)
                                <option  value="{{ $linhVuc->id }}">{{ $linhVuc->ten_linh_vuc }}</option>
                                @endforeach
                            </select>
                            
                        </div>

                        <div class="form-group">
                            <label for="phuong_an_a">Phương án A</label>
                            <input type="text" class="form-control" id="phuong_an_a" name="phuong_an_a"  value="" >
                        </div>

                        <div class="form-group">
                            <label for="phuong_an_b">Phương án B</label>
                            <input type="text" class="form-control" id="phuong_an_b" name="phuong_an_b"  value="" >
                        </div>

                        <div class="form-group">
                            <label for="phuong_an_c">Phương án C</label>
                            <input type="text" class="form-control" id="phuong_an_c" name="phuong_an_c"  value="" >
                        </div>

                        <div class="form-group">
                            <label for="phuong_an_d">Phương án D</label>
                            <input type="text" class="form-control" id="phuong_an_d" name="phuong_an_d"  value="" >
                        </div>

                        <div class="form-group">
                            <label for="dap_an">Đáp án </label>
                            <input type="text" class="form-control" id="dap_an" name="dap_an"  value="" >
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm </button>
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col -->
    </div>
@endsection