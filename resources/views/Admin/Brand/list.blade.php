@extends('Admin.layout')
@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách Thương hiệu sản phẩm
            </div>
            <div class="row w3-res-tb" >
                <form action="/brand" class="form-inline" method="get" id="brand_form">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label >TÌM THEO TÊN THƯƠNG HIỆU </label>
                            <input  value="{{$keyword}}" type="text" name="keyword" class="form-control" placeholder="Search by keyword">
                            <input type="submit" style="visibility: hidden;" />
                        </div>
                        <div class="form-group"  >
                            <label for="exampleFormControlSelect1" >TÌM THEO THỜI GIAN</label>
                            <input type="text" name="dates" class="form-control">
                            <input type="hidden" name="start">
                            <input type="hidden" name="end">
                        </div>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span style=" color:red;font-size:17px;width: 100%;text-align: center;font-weight: bold;">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Mô tả</th>
                        <th>Kích hoạt / Khóa</th>
                        <th style="width:30px;">Sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                      <tr>
                          <td style="font-size: large">{{$item->brand_name}}</td>
                          <td style="font-size: medium"> {{$item->brand_desc}}</td>
                          <td>
                          <form  action="/brand"  class="text-ellipsis" method="get" style="" >
                                 @csrf
                              @if($item->brand_status == 1)
                                  <input  value="{{$item->id}}"  type="text" name="brand_id" class="form-control"  style="visibility: hidden;">
                                  <label  style="color: #00a6b2" >KÍCH HOẠT <span  class="fa-thumb-styling fa fa-check" aria-hidden="true"> </span></label>

                                  <input  value="{{$item->brand_status}}"  type="text" name="brand_status" class="form-control"  style="visibility: hidden;">
                                  <input value="KHÓA" type="submit"  class="btn btn-danger">
                                  @else
                                  <input  value="{{$item->id}}"  type="text" name="brand_id" class="form-control"  style="visibility: hidden;">
                                  <label style="color: red" >ĐANG KHÓA  <span  class="fa-thumb-styling fa fa-times" aria-hidden="true"></label>
                                  <input  value="{{$item->brand_status}}"  type="text" name="brand_status" class="form-control"  style="visibility: hidden;">
                                  <input value="KÍCH HOẠT" type="submit" class="btn btn-info" >
                              @endif
                             </form>
                          </td>
                          <td>
                              <a href="/brand/{{$item->id}}/edit" class="active styling-edit" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i>
                              </a>
                          </td>
                      </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script>
        $('input[name="dates"]').daterangepicker(
            {
                locale: {
                    format: 'DD-MM-YYYY'
                },
                ranges: {
                    'Hôm nay': [moment(), moment()],
                    'Hôm qua': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 ngày trước': [moment().subtract(6, 'days'), moment()],
                    '30 ngày trước': [moment().subtract(29, 'days'), moment()],
                    'Tháng này': [moment().startOf('month'), moment().endOf('month')],
                    'Tháng trước': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }
        );
        $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
            $('input[name="start"]').val(picker.startDate.format('YYYY-MM-DD'));
            $('input[name="end"]').val(picker.endDate.format('YYYY-MM-DD'));
            $('#brand_form').submit();
        });
    </script>
@endsection

