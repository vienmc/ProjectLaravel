@extends('Admin.layout')
@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách Thương hiệu sản phẩm
            </div>
            <div class="row w3-res-tb" >
                <form action="/brand" class="form-inline" method="get">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label >TÌM THEO TÊN THƯƠNG HIỆU </label>
                            <input  value="{{$keyword}}" type="text" name="keyword" class="form-control" placeholder="Search by keyword">
                            <input type="submit" style="visibility: hidden;" />
                        </div>
                        <div class="form-group" >
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
                          <td>{{$item->brand_name}}</td>
                          <td>{{$item->brand_desc}}</td>
                          <td>
                             <span class="text-ellipsis">
                                    <?php
                                 /** @var TYPE_NAME $item */
                                 if ($item->brand_status == 1) {
                                 ?>
                                        <a href="{{URL::to('/unactive-brand/'.$item->id)}}"><span
                                                class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                    <?php
                                 }else{
                                 ?>
                                    <a href="{{URL::to('/active-brand/'.$item->id)}}"><span
                                            class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                    <?php
                                 }
                                 ?>
                                </span>
                          <td>
                              <a href="/brand/{{$item->id}}/edit" class="active styling-edit" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i>
                              </a>
                          </td>
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
                    format: 'DD/MM/YYYY'
                },
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }
        );
        $('#categorySelect').change(function () {
            $('#product_form').submit();
        })
        $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
            $('input[name="start"]').val(picker.startDate.format('YYYY-MM-DD'));
            $('input[name="end"]').val(picker.endDate.format('YYYY-MM-DD'));
            $('#product_form').submit();

        });
    </script>
@endsection

