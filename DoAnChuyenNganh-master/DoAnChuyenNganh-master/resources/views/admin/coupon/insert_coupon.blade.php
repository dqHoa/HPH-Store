@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm mã giảm giá
                </header>
                <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">' ,$message. '</span>';
                        Session::put('message', null);
                    }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/insert-coupon-code')}}" method="post">
                            {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu đề giảm giá</label>
                            <input type="text" name="coupon_name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày bắt đầu</label>
                            <input type="text" name="coupon_date_start" class="form-control" id="start_coupon">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày kết thúc</label>
                            <input type="text" name="coupon_date_end" class="form-control" id="end_coupon">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mã giảm giá</label>
                            <input type="text" name="coupon_code" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số lượng mã</label>
                            <input type="text" name="coupon_times" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tính năng</label>
                            <select name="coupon_condition" class="form-control input-sm m-bot15">
                                <option value="0">Chọn-------</option>
                                <option value="1">Giảm theo phần trăm</option>
                                <option value="2">Giảm theo số tiền</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">% mã giảm giá hoặc số tiền giảm</label>
                            <input type="text" name="coupon_number" class="form-control" id="exampleInputEmail1">
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="coupon_status" class="form-control input-sm m-bot15">
                                <option value="0">Hiển thị</option>
                                <option value="1">Ẩn</option>
                            </select>
                        </div> --}}
                       
                        <button type="submit" name="add_coupon" class="btn btn-info">Thêm mã giảm giá</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>

@endsection