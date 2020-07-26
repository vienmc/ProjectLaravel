@extends('Admin.layout')
@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách sản phẩm
            </div>
            <div class="row w3-res-tb" style="text-align: center; margin-bottom: 5px">
                <form class="form-inline" action="{{URL::to('/find-by-email')}}" method="get">
                    {{csrf_field()}}
                    <div class="form-group mb-2">
                        <label>Tìm theo tên</label>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="keyword" class="form-control" id="inputPassword2">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Tìm</button>
                </form>
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
                        {{--                                                <th style="width:20px;">--}}
                        {{--                                                    <label class="i-checks m-b-none">--}}
                        {{--                                                        <input type="checkbox"><i></i>--}}
                        {{--                                                    </label>--}}
                        {{--                                                </th>--}}
                        <th>Tên sản phẩm</th>
                        <th>Danh mục sản phẩm</th>
                        <th>Thương hiệu sản phẩm</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Nội dung sản phẩm</th>
                        <th>Trạng thái</th>
                        <th>Quản lý</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                        <td>{{$item->product_name}}</td>
                        <td>{{$item->category['category_name']}}</td>
                        <td>{{$item->brand['brand_name']}}</td>
                        <td>{{$item->product_price}}</td>
                        <td><img src="{{$item->product_image}}" width="100px"></td>
                        <td>{{$item->product_desc}}</td>
                        <td>{{$item->product_content}}</td>
                        <td>
                            @if($item->product_status==1)
                                <span class="text-primary">Hiện</span>
                            @else ($item->product_status==0)
                                <span class="text-danger">Ẩn</span>
                            @endif
                        </td>
                        <td ><a
                                href="{{ URL::to('/product/edit'.$product_list -> product_id)}}">Sửa</a>
                            | <a href="{{ URL::to('/delete-product/'.$product_list -> product_id)}}">Xóa</a>
                        </td>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{--            {{$list->links()}}--}}
        </div>
    </div>
@endsection
