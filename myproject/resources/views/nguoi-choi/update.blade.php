@extends('layout')

@section('main-content')
	<div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 header-title">Cập nhật người chơi</h4>
                    <form action="{{ route('nguoi-choi.xu-li-cap-nhat',['id'=>$nguoiChoi->id]) }}" method="POST">
                    	@csrf
                       
                        <div class="form-group">
                            <label for="ten_dang_nhap">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" value="{{ $nguoiChoi->ten_dang_nhap }}" >
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"  value="{{ $nguoiChoi->email }}" >
                        </div>

                        <div class="form-group">
                            <label for="hinh_dai_dien">Hình đại diện</label>
                            <input type="text" class="form-control" id="hinh_dai_dien" name="hinh_dai_dien"  value="{{ $nguoiChoi->hinh_dai_dien }}" >
                        </div>

                        <div class="form-group">
                            <label for="diem_cao_nhat">Điểm cao nhất</label>
                            <input type="text" class="form-control" id="diem_cao_nhat" name="diem_cao_nhat"  value="{{ $nguoiChoi->diem_cao_nhat }}" >
                        </div>

                        <div class="form-group">
                            <label for="credit">Credit</label>
                            <input type="text" class="form-control" id="credit" name="credit"  value="{{ $nguoiChoi->credit }}" >
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật </button>
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col -->
    </div>
@endsection