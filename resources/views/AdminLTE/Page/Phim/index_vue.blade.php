@extends('AdminLTE.Share.master')
@section('tieu_de')
    Quản Lý Phim
@endsection
@section('noi_dung')
    <div id="app" class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Thêm Mới Phim
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên Phim</label>
                        <input v-on:keyup="chuyenThangTenPhimSangSlug()" v-model="them_moi.ten_phim" type="text" class="form-control" placeholder="Nhập vào tên phim">
                    </div>
                    <div class="form-group">
                        <label>Slug Tên Phim</label>
                        <input v-model="slug" type="text" class="form-control" placeholder="Nhập vào slug tên phim">
                    </div>
                    <div class="form-group">
                        <label>Ngày Khởi Chiếu</label>
                        <input v-model="them_moi.ngay_khoi_chieu" type="date" class="form-control" placeholder="Nhập vào tên phim">
                    </div>
                    <div class="form-group">
                        <label>Đạo Diễn</label>
                        <input v-model="them_moi.dao_dien" type="text" class="form-control" placeholder="Nhập vào tên đạo diễn">
                    </div>
                    <div class="form-group">
                        <label>Diễn Viên</label>
                        <input v-model="them_moi.dien_vien" type="text" class="form-control" placeholder="Nhập vào tên diễn viên">
                    </div>
                    <div class="form-group">
                        <label>Thời Lượng</label>
                        <input v-model="them_moi.thoi_luong" type="number" class="form-control" placeholder="Nhập vào phút">
                    </div>
                    <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea name="mo_ta" id="mo_ta" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Thể Loại</label>
                        <input v-model="them_moi.the_loai" type="text" class="form-control" placeholder="Nhập vào thể loại">
                    </div>
                    <div class="form-group">
                        <label>Avatar</label>
                        <div class="input-group">
                            <input id="hinh_anh" class="form-control" type="text" name="filepath">
                            <span class="input-group-prepend">
                                <a id="lfm" data-input="hinh_anh" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                        </div>
                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    </div>
                    <div class="form-group">
                        <label>Trailer</label>
                        <input v-model="them_moi.trailer" type="text" class="form-control" placeholder="Nhập vào link trailer">
                    </div>
                    <div class="form-group">
                        <label>Tình Trạng</label>
                        <select v-model="them_moi.tinh_trang" class="form-control">
                            <option value="1">Đang Chiếu</option>
                            <option value="2">Sắp Chiếu</option>
                            <option value="0">Ngưng Chiếu</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                       <button class="btn btn-primary" v-on:click="createPhim()">Thêm Mới Phim</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Danh Sách Phim
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table_phim">
                            <thead class="bg-primary">
                                <tr class="text-nowrap">
                                    <th>#</th>
                                    <th>Tên Phim</th>
                                    <th>Slug</th>
                                    <th>Ngày Khởi Chiếu</th>
                                    <th>Đạo Diễn</th>
                                    <th>Diễn Viên</th>
                                    <th>Thời Lượng</th>
                                    <th>Mô Tả</th>
                                    <th>Thể Loại</th>
                                    <th>Avatar</th>
                                    <th>Trailer</th>
                                    <th>Tình Trạng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(value, key) in ds_phim">
                                    <th class="align-midlle text-center">@{{ key + 1 }}</th>
                                    <td class="align-midlle">@{{ value.ten_phim }}</td>
                                    <td class="align-midlle">@{{ value.slug_ten_phim }}</td>
                                    <td class="align-midlle">@{{ value.ngay_khoi_chieu }}</td>
                                    <td class="align-midlle">@{{ value.dao_dien }}</td>
                                    <td class="align-midlle">@{{ value.dien_vien }}</td>
                                    <td class="align-midlle">@{{ value.thoi_luong }}</td>
                                    <td class="align-midlle" v-html="value.mo_ta"></td>
                                    <td class="align-midlle">@{{ value.the_loai }}</td>
                                    <td class="align-midlle">
                                        <img v-bind:src="value.avatar" class="img-fluid" style="max-width: 200px;">
                                    </td>
                                    <td class="align-midlle text-nowrap">
                                        <a v-bind:href="value.trailer" target="_blank" class="btn btn-primary">Link Video</a>
                                    </td>
                                    <td class="align-midlle text-nowrap">
                                        <p v-if="value.tinh_trang == 0">Ngưng Chiếu</p>
                                        <p v-if="value.tinh_trang == 1">Đang Chiếu</p>
                                        <p v-if="value.tinh_trang == 2">Sắp Chiếu</p>
                                    </td>
                                    <td class="align-midlle text-nowrap">
                                        <button v-on:click="showUpdate(value)" data-toggle="modal" data-target="#updateModal" class="btn btn-info">Cập Nhật</button>
                                        <button v-on:click="phim_xoa = value" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Xóa Phim</button>
                                    </td>
                                </tr>
                            </tbody>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn chắc chắn muốn xóa phim này!
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button v-on:click="xoaPhimTrenServer()" type="button" class="btn btn-danger" data-dismiss="modal">Xóa Phim</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <input v-model="phim_update.id" type="hidden" name="" id="">
                                        <div class="form-group">
                                            <label>Tên Phim</label>
                                            <input v-model="phim_update.ten_phim" type="text" class="form-control" placeholder="Nhập vào tên phim">
                                        </div>
                                        <div class="form-group">
                                            <label>Slug Tên Phim</label>
                                            <input v-model="phim_update.slug_ten_phim" type="text" class="form-control" placeholder="Nhập vào slug tên phim">
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày Khởi Chiếu</label>
                                            <input v-model="phim_update.ngay_khoi_chieu" type="date" class="form-control" placeholder="Nhập vào tên phim">
                                        </div>
                                        <div class="form-group">
                                            <label>Đạo Diễn</label>
                                            <input v-model="phim_update.dao_dien" type="text" class="form-control" placeholder="Nhập vào tên đạo diễn">
                                        </div>
                                        <div class="form-group">
                                            <label>Diễn Viên</label>
                                            <input v-model="phim_update.dien_vien" type="text" class="form-control" placeholder="Nhập vào tên diễn viên">
                                        </div>
                                        <div class="form-group">
                                            <label>Thời Lượng</label>
                                            <input v-model="phim_update.thoi_luong" type="number" class="form-control" placeholder="Nhập vào phút">
                                        </div>
                                        <div class="form-group">
                                            <label>Mô Tả</label>
                                            <textarea name="update_mo_ta" id="update_mo_ta" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Thể Loại</label>
                                            <input v-model="phim_update.the_loai" type="text" class="form-control" placeholder="Nhập vào thể loại">
                                        </div>
                                        <div class="form-group">
                                            <label>Avatar</label>
                                            <div class="input-group">
                                                <input id="hinh_anh_update" class="form-control" type="text" name="filepath">
                                                <span class="input-group-prepend">
                                                    <a id="lfm_update" data-input="hinh_anh_update" data-preview="holder_update" class="btn btn-primary">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                            </div>
                                            <div id="holder_update" style="margin-top:15px;max-height:100px;">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Trailer</label>
                                            <input v-model="phim_update.trailer" type="text" class="form-control" placeholder="Nhập vào link trailer">
                                        </div>
                                        <div class="form-group">
                                            <label>Tình Trạng</label>
                                            <select v-model="phim_update.tinh_trang" class="form-control">
                                                <option value="1">Đang Chiếu</option>
                                                <option value="2">Sắp Chiếu</option>
                                                <option value="0">Ngưng Chiếu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button v-on:click="capNhatPhimServer()" type="button" class="btn btn-primary" data-dismiss="modal">Cập Nhật Phim</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    new Vue({
        el      :   '#app',
        data    :   {
            them_moi   :   {},
            ds_phim    :   [],
            phim_xoa   :   {},
            phim_update:   {},
            slug       :   '',
        },
        created()   {
            this.loadPhim();
        },
        methods :   {
            showUpdate(value) {
                this.phim_update = value;
                CKEDITOR.instances['update_mo_ta'].setData(value.mo_ta);
                $("#hinh_anh_update").val(value.avatar);
                var text = '<img src="'+ value.avatar + '" style="margin-top:15px;max-height:100px;">'
                $("#holder_update").html(text);
            },
            createPhim() {
                this.them_moi.slug_ten_phim = this.slug;
                this.them_moi.mo_ta = CKEDITOR.instances['mo_ta'].getData();
                this.them_moi.avatar = $("#hinh_anh").val();
                axios
                    .post('/admin/phim/index-vue' , this.them_moi)
                    .then((res) => {
                        toastr.success('Đã thêm mới phim thành công!');
                        this.loadPhim();
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });
            },
            loadPhim()  {
                axios
                    .get('/admin/phim/data')
                    .then((res) => {
                        this.ds_phim = res.data.phim;
                    });
            },
            xoaPhimTrenServer() {
                axios
                    .post('/admin/phim/delete' , this.phim_xoa)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success('Đã xóa phim thành công!');
                            this.loadPhim();
                        } else {
                            toastr.error('Có lỗi không mong muốn!');
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });
            },
            capNhatPhimServer() {
                this.phim_update.mo_ta = CKEDITOR.instances['update_mo_ta'].getData();
                this.phim_update.avatar = $("#hinh_anh_update").val();
                axios
                    .post('/admin/phim/update' , this.phim_update)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success('Đã cập nhật thành công!');
                            this.loadPhim();
                        } else {
                            toastr.error('Có lỗi không mong muốn!');
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });
            },
            toSlug(str) {
                str = str.toLowerCase();
                str = str
                    .normalize('NFD')
                    .replace(/[\u0300-\u036f]/g, '');
                str = str.replace(/[đĐ]/g, 'd');
                str = str.replace(/([^0-9a-z-\s])/g, '');
                str = str.replace(/(\s+)/g, '-');
                str = str.replace(/-+/g, '-');
                str = str.replace(/^-+|-+$/g, '');

                return str;
            },
            chuyenThangTenPhimSangSlug() {
                this.slug = this.toSlug(this.them_moi.ten_phim);
            },
        },
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.19.1/ckeditor.js"></script>
<script>
    CKEDITOR.replace('mo_ta'); // replace name mô tả
    CKEDITOR.replace('update_mo_ta'); // replace name mô tả
</script>
<script>
    var route_prefix = "/laravel-filemanager";
</script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $("#lfm").filemanager('image', {prefix : route_prefix});
    $("#lfm_update").filemanager('image', {prefix : route_prefix});
</script>
@endsection

