@extends('layout')

@section('main-content')
	<div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 header-title">Thêm người chơi</h4>
                    <form action="{{ route('nguoi-choi.xu-li-them-moi') }}" method="POST">
                    	@csrf
                       
                        <div class="form-group">
                            <label for="noi_dung">Tên người chơi</label>
                            <input type="text" class="form-control" id="noi_dung" name="noi_dung" value="" >
                        </div>

                        <div class="form-group">
                            <label for="linh_vuc">Mật khẩu</label>
                                <input type="password" class="form-control" id="mat_khau" name="mat_khau"  value="" >
                        </div>

                        <div class="form-group">
                            <label for="email"h>Email</label>
                            <input type="text" class="form-control" id="email" name="email"  value="" >
                        </div>

                        <div class="form-group">
                            <label for="hinh_dai_dien">Hình đại diện</label>
                            <input type="text" class="form-control" id="hinh_dai_dien" name="hinh_dai_dien"  value="" >
                        </div>

                        <div class="form-group">
                            <label for="diem_cao_nhat">Điểm cao nhất</label>
                            <input type="text" class="form-control" id="diem_cao_nhat" name="diem_cao_nhat"  value="" >
                        </div>

                        <div class="form-group">
                            <label for="credit">Credit</label>
                            <input type="text" class="form-control" id="credit" name="credit"  value="" >
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm </button>
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col -->
    </div>
@endsection