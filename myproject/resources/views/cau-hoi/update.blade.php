@extends('layout')

@section('main-content')
	<div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 header-title"> Cập nhật lĩnh vực</h4>
                   <form action="{{ route('cau-hoi.xu-li-cap-nhat',['id'=>$cauHoi->id]) }}  " method="POST">
                    	@csrf
                       
                        <div class="form-group">
                            <label for="ten_linh_vuc">Tên</label>
                            <input type="text" class="form-control" id="ten_linh_vuc" name="ten_linh_vuc"  value="{{ $linhVuc->ten_linh_vuc }}" >
                        </div>
                        
                        <button type="submit" class="btn btn-primary waves-effect waves-light"> Cập nhật</button>
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col -->
    </div>
@endsection