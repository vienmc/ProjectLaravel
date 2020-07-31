@extends('Admin.layout')
@section('content')
    <div class="table-agile-info">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/product" method="get" id="product_form">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group mb-3">
                                            <label for="exampleFormControlSelect1">Chọn theo danh mục sản phẩm</label>
                                            <select name="category_id" class="form-control" id="categorySelect">
                                                <option value="0">Tất cả</option>
                                                @foreach($categories as $cate)
                                                    <option value="{{$cate->id}}" {{$cate->id == $category_id ? 'selected':''}}>{{$cate->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tìm kiếm theo tên sản phẩm</label>
                                            <input value="{{$keyword}}" type="text" name="keyword" class="form-control" placeholder="Search by keyword">
                                            <input type="submit" style="visibility: hidden;" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tìm kiếm theo thời gian</label>
                                            <input type="text" name="dates" class="form-control">
                                            <input type="hidden" name="start">
                                            <input type="hidden" name="end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách sản phẩm
            </div>
            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span style="color:red;font-size:17px;width: 100%;text-align: center;font-weight: bold;">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục sản phẩm</th>
                        <th>Thương hiệu sản phẩm</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
{{--                        <th>Mô tả sản phẩm</th>--}}
                        <th>Trạng thái</th>
                        <th>Quản lý</th>
                    </tr>
                    </thead>
                    @foreach($list as $product_list)
                    <tbody>
                        <td>{{$product_list->product_name}}</td>
                        <td>{{$product_list->category->name}}</td>
                        <td>{{$product_list->brand->brand_name}}</td>
                        <td>{{$product_list->product_price}}</td>
                        <td>
                            @foreach($product_list->small_photos as $p)
                                <img src="{{$p}}" alt="" class="rounded-circle">
                            @endforeach
                          </td>
{{--                        <td>{!! $item->product_desc  !!}</td>--}}
                        <td><span class="text-ellipsis">
                                    <?php
                                /** @var TYPE_NAME $product_list */
                                if ($product_list->product_status == 1) {
                                ?>
                                        <a href="{{URL::to('/unactive-product/'.$product_list->id)}}"><span
                                                class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                    <?php
                                }else{
                                ?>
                                    <a href="{{URL::to('/active-product/'.$product_list->id)}}"><span
                                            class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                    <?php
                                }
                                ?>
                                </span>
                        </td>
                        <td>
                            <a href="{{URL::to('/product/'.$product_list->id.'/edit')}}"
                               class="active styling-edit" ui-toggle-class=""><i
                                    class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
{{--                            <a href="#" class="active styling-delete" title="{{$product_list->id}}" ui-toggle-class="">--}}
{{--                                <i--}}
{{--                                    class="fa fa-times text-danger text"></i>--}}
{{--                            </a>--}}
                        </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <br>
{{--                <span class="text-center">{{$list->links()}}</span>--}}
        </div>
    </div>
    <script>
        var btnDeletes = document.getElementsByClassName('active styling-delete');
        for(var i = 0; i < btnDeletes.length; i++){
            btnDeletes[i].onclick = function(){
                if(confirm('Bạn có chắc muốn xóa sản phẩm này?')){
                    var id = this.getAttribute('title');
                    var xhr = new XMLHttpRequest();
                    xhr.open('DELETE', '/product/' + id);
                    xhr.setRequestHeader('X-CSRF-TOKEN', '{{csrf_token()}}');
                    xhr.onreadystatechange = function(){
                        if(xhr.readyState == 4 && xhr.status == 200) {
                            alert('Xóa thành công');
                            window.location.reload();
                        }
                    }
                    xhr.send();
                }
            }
        }
    </script>
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
@endsection


