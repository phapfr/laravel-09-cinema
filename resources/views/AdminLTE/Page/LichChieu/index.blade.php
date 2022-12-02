@extends('AdminRocker.share.master')
@section('noi_dung')
<div class="row">
    <div class="col-md-12">
        <div class="card border-primary border-bottom border-3 border-0">
            <div class="card-header">
                <strong> Thêm Mới Lịch Chiếu </strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Chọn Phim</label>
                        <select class="form-control">
                            @for ($i = 1; $i < 10; $i++)
                            <option value="1">Phim {{ $i }} </option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Thời Lượng Chiếu Chính</label>
                        <input type="number" min="0" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Thời Lượng Quảng Cáo</label>
                        <input type="number" min="0" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label class="form-label">Ngày Bắt Đầu</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Giờ Bắt Đầu</label>
                        <input type="time" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Ngày Kết Thúc</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Giờ Kết Thúc</label>
                        <input type="time" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">Chọn Thứ</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Thứ 2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Thứ 3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox2">Thứ 4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                            <label class="form-check-label" for="inlineCheckbox2">Thứ 5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                            <label class="form-check-label" for="inlineCheckbox2">Thứ 6</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                            <label class="form-check-label" for="inlineCheckbox2">Thứ 7</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                            <label class="form-check-label" for="inlineCheckbox2">Chủ Nhật</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Chọn Phòng Chiếu</label>
                        <select class="form-control">
                            @for ($i = 1; $i < 5; $i++)
                            <option value="1">Phòng chiếu {{ $i }} </option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Số Lần Lặp Lại</label>
                        <input type="number" min="1" class="form-control">
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button class="btn btn-primary">Thêm Mới Lịch Chiếu</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection
