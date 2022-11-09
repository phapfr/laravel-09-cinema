@extends('AdminLTE.Share.master')
@section('tieu_de')
    Quản Lý Phòng
@endsection
@section('noi_dung')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                Thêm Mới Phòng
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Tên Phòng</label>
                    <input type="text" class="form-control" id="ten_phong" placeholder="Nhập vào tên phòng">
                </div>
                <div class="form-group">
                    <label>Tình Trạng</label>
                    <select id="tinh_trang" class="form-control">
                        <option value="1">Còn Kinh Doanh</option>
                        <option value="0">Dừng Kinh Doanh</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Số Ghế Hàng Dọc</label>
                    <input type="number" class="form-control" id="hang_doc">
                </div>
                <div class="form-group">
                    <label>Số Ghế Hàng Ngang</label>
                    <input type="number" class="form-control" id="hang_ngang">
                </div>
            </div>
            <div class="card-footer text-right">
                <button id="add" class="btn btn-primary">Thêm Mới Phòng</button>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                Danh Sách Các Phòng
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên phòng</th>
                            <th>Tình Trạng</th>
                            <th>Ghế Hàng Dọc</th>
                            <th>Ghế Hàng Ngang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $("#add").click(function() {
            var payload = {
                'ten_phong'     :   $("#ten_phong").val(),
                'tinh_trang'    :   $("#tinh_trang").val(),
                'hang_doc'      :   $("#hang_doc").val(),
                'hang_ngang'    :   $("#hang_ngang").val(),
            };
            axios
                .post('/admin/phong/index', payload)
                .then((res) => {
                    console.log('oke');
                });
        });
        var list_phong = [];
        var phong_1 = {
            'id'        : 1,
            'ten_phong' : 'Happy',
            'tinh_trang': 1,
            'hang_doc'  : 5,
            'hang_ngang': 7,
        };
        var phong_2 = {
            'id'        : 2,
            'ten_phong' : 'Boring',
            'tinh_trang': 0,
            'hang_doc'  : 2,
            'hang_ngang': 3,
        };
        var phong_3 = {
            'id'        : 5,
            'ten_phong' : 'Honey',
            'tinh_trang': 1,
            'hang_doc'  : 2,
            'hang_ngang': 1,
        };
        var phong_4 = {
            'id'        : 7,
            'ten_phong' : 'Haha',
            'tinh_trang': 1,
            'hang_doc'  : 6,
            'hang_ngang': 8,
        };
        list_phong.push(phong_1);
        list_phong.push(phong_2);
        list_phong.push(phong_3);
        list_phong.push(phong_4);
    });
</script>
@endsection
