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
                <table id="table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Tên phòng</th>
                            <th class="text-center">Tình Trạng</th>
                            <th class="text-center">Ghế Hàng Dọc</th>
                            <th class="text-center">Ghế Hàng Ngang</th>
                            <th class="text-center">Action</th>
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
                    loadData();
                    toastr.success('Đã thêm mới thành công!');
                    $("#ten_phong").val('');
                    $("#tinh_trang").val('');
                    $("#hang_doc").val('');
                    $("#hang_ngang").val('');
                });
        });

        function loadData() {
            axios
                .get('/admin/phong/data')
                .then((res) => {
                    showTable(res.data.list);
                });
        };

        function showTable(list_phong) {
            var noi_dung = '';
            $.each(list_phong, function(key, value) {
                noi_dung += '<tr>';
                noi_dung += '<th class="text-center align-middle">'+ (key + 1) +'</th>';
                noi_dung += '<td class="align-middle">'+ value.ten_phong +'</td>';
                noi_dung += '<td class="align-middle text-center">';
                if(value.tinh_trang){
                    noi_dung += '<button data-id="'+ value.id +'" class="xxx btn btn-primary">Đang Kinh Doanh</button>';
                } else {
                    noi_dung += '<button data-id="'+ value.id +'" class="xxx btn btn-warning">Dừng Kinh Doanh</button>';
                }
                noi_dung += '</td>';
                noi_dung += '<td class="align-middle text-center">'+ value.hang_doc +'</td>';
                noi_dung += '<td class="align-middle text-center">'+ value.hang_ngang +'</td>';
                noi_dung += '<td class="text-nowrap text-center align-middle">';
                noi_dung += '<button class="btn btn-info mr-1">Cập Nhật</button>';
                noi_dung += '<button class="btn btn-danger">Xóa Phòng</button>';
                noi_dung += '</td>';
                noi_dung += '</tr>';
            });

            $("#table tbody").html(noi_dung);
        }

        $("body").on('click', '.xxx', function() {
            var id = $(this).data('id');
            axios
                .get('/admin/phong/change-status/' + id)
                .then((res) => {
                    loadData();
                    toastr.success('Đã đổi trạng thái thành công!');
                });
        });

        loadData();


    });
</script>
@endsection
