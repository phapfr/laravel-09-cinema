@extends('AdminRocker.share.master')
@section('noi_dung')
<div class="row" id="app">
    <div class="col-md-12">
        <div class="card border-danger border-bottom border-3 border-0">
            <div class="card-header">
                Tạo Buổi Chiếu Phim
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Chọn Phim</label>
                        <select v-on:change="updateThoiGian()" v-model="create_lich.id_phim_xxx" class="form-control">
                            <template v-for="(value, key) in list_phim" v-if="value.tinh_trang > 0">
                                <option v-bind:value="{id_phim : value.id, thoi_luong: value.thoi_luong}">@{{ value.ten_phim }}</option>
                            </template>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Thời Lượng Chiếu Chính</label>
                        <input v-model="create_lich.thoi_gian_chieu_chinh" type="number" min="0" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Thời Lượng Quảng Cáo</label>
                        <input v-model="create_lich.thoi_gian_quang_cao" type="number" min="0" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label class="form-label">Ngày Chiếu Phim</label>
                        <input v-model="create_lich.ngay_chieu" type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Giờ Bắt Đầu</label>
                        <input v-model="create_lich.gio_bat_dau" type="time" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Giờ Kết Thúc</label>
                        <input v-model="create_lich.gio_ket_thuc" type="time" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Phòng Chiếu Phim</label>
                        <select v-model="create_lich.id_phong" class="form-control">
                            <template v-for="(value, key) in list_phong" v-if="value.tinh_trang == 1">
                                <option v-bind:value="value.id">@{{ value.ten_phong }}</option>
                            </template>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button v-on:click="themLichChieu()" class="btn btn-primary">Thêm Lịch Chiếu</button>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                Danh Sách Các Buổi Chiếu
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Phim Chiếu</th>
                            <th class="text-center">Phòng Chiếu</th>
                            <th class="text-center">Bắt Đầu</th>
                            <th class="text-center">Kết Thúc</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(v, k) in list_lich">
                            <th class="align-middle text-center">@{{ k + 1 }}</th>
                            <td class="align-middle">@{{ v.ten_phim }}</td>
                            <td class="align-middle">@{{ v.ten_phong }}</td>
                            <td class="align-middle text-center">@{{ v.thoi_gian_bat_dau }}</td>
                            <td class="align-middle text-center">@{{ v.thoi_gian_ket_thuc }}</td>
                            <td class="text-center">
                                <button class="btn btn-primary mr-1">Xem Ghế</button>
                                <button v-on:click="delete_lich = v" class="btn btn-danger mr-1" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa Lịch</button>
                                <button v-on:click="editLich(v)" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#updateModal">Cập Nhật Lịch</button>
                            </td>
                        </tr>
                    </tbody>
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <p>Bạn có muốn xóa lịch chiếu phim <b class="text-danger">@{{ delete_lich.ten_phim }}</b> tại phòng <b class="text-danger">@{{ delete_lich.ten_phong }}</b> này không?</p>
                            <p>Thời gian chiếu dự kiến từ @{{ delete_lich.thoi_gian_bat_dau }} đến @{{ delete_lich.thoi_gian_ket_thuc }}</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button v-on:click="xoaLichChieu()" type="button" class="btn btn-primary"  data-bs-dismiss="modal">Xóa Lịch</button>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Chọn Phim</label>
                                        <select v-on:change="updateThoiGian()" v-model="update_lich.id_phim" class="form-control">
                                            <template v-for="(value, key) in list_phim" v-if="value.tinh_trang > 0">
                                                <option v-bind:value="value.id">@{{ value.ten_phim }}</option>
                                            </template>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Thời Lượng Chiếu Chính</label>
                                        <input v-model="update_lich.thoi_gian_chieu_chinh" type="number" min="0" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Thời Lượng Quảng Cáo</label>
                                        <input v-model="update_lich.thoi_gian_quang_cao" type="number" min="0" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <label class="form-label">Ngày Chiếu Phim</label>
                                        <input v-model="update_lich.thoi_gian_bat_dau" type="date" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Giờ Bắt Đầu</label>
                                        <input v-model="update_lich.thoi_gian_bat_dau" type="time" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Giờ Kết Thúc</label>
                                        <input v-model="update_lich.thoi_gian_ket_thuc" type="time" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Phòng Chiếu Phim</label>
                                        <select v-model="update_lich.id_phong" class="form-control">
                                            <template v-for="(value, key) in list_phong" v-if="value.tinh_trang == 1">
                                                <option v-bind:value="value.id">@{{ value.ten_phong }}</option>
                                            </template>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button v-on:click="capNhatLichChieu()" type="button" class="btn btn-primary"  data-bs-dismiss="modal">Cập Nhật Lịch</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    new Vue({
        el  :  "#app",
        data:   {
            create_lich :   {},
            delete_lich :   {},
            update_lich :   {},
            list_phim   :   [],
            list_phong  :   [],
            list_lich   :   [],
        },
        created()   {
            this.loadDataPhim();
            this.loadDataPhong();
            this.loadLichChieu();
        },
        methods :   {
            themLichChieu() {
                axios
                    .post('/admin/lich-chieu/tao-mot-buoi', this.create_lich)
                    .then((res) => {
                        toastr.success('Đã thêm mới lịch chiếu thành công!');
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });
            },
            xoaLichChieu() {
                axios
                    .post('/admin/lich-chieu/xoa-lich', this.delete_lich)
                    .then((res) => {
                        toastr.success('Đã xóa lịch chiếu thành công!');
                        this.loadLichChieu();
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });
            },
            loadDataPhim() {
                axios
                    .get('/admin/phim/data')
                    .then((res) => {
                        this.list_phim = res.data.phim;
                    });
            },
            loadLichChieu() {
                axios
                    .get('/admin/lich-chieu/data')
                    .then((res) => {
                        this.list_lich = res.data.data;
                    });
            },
            loadDataPhong() {
                axios
                    .get('/admin/phong/data')
                    .then((res) => {
                        this.list_phong = res.data.list;
                    });
            },
            updateThoiGian() {
                this.create_lich.thoi_gian_chieu_chinh = this.create_lich.id_phim_xxx.thoi_luong;
                this.create_lich.id_phim = this.create_lich.id_phim_xxx.id_phim;
            },
        },
    });
</script>
@endsection
