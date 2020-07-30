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
{{--                        <th>Mô tả sản phẩm</th>--}}
                        <th>Trạng thái</th>
                        <th>Quản lý</th>
                    </tr>
                    </thead>
                    @foreach($list as $item)
                    <tbody>
                        <td>{{$item->product_name}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->brand->brand_name}}</td>
                        <td>{{$item->product_price}}</td>
                        <td>
                            @foreach($item->small_photos as $p)
                                <img src="{{$p}}" alt="" class="rounded-circle">
                            @endforeach
                          </td>
{{--                        <td>{!! $item->product_desc  !!}</td>--}}
{{--                        <td>--}}
{{--                            @if($item->product_status==1)--}}
{{--                                <span class="text-primary">Hiện</span>--}}
{{--                            @else ($item->product_status==0)--}}
{{--                                <span class="text-danger">Ẩn</span>--}}
{{--                            @endif--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="/product/{{$item->id}}/edit" class="text-primary">Sửa</a>--}}
{{--                            | <a href="" class="text-danger">Xóa</a>--}}
{{--                        </td>--}}
                        <td><span class="text-ellipsis">
                                    <?php
                                /** @var TYPE_NAME $item */
                                if ($item->product_status == 1) {
                                ?>
                                        <a href="{{URL::to('/unactive-product/'.$item->id)}}"><span
                                                class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                    <?php
                                }else{
                                ?>
                                    <a href="{{URL::to('/active-product/'.$item->id)}}"><span
                                            class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                    <?php
                                }
                                ?>
                                </span>
                        </td>
                        <td>
                            <a href="{{URL::to('/product/'.$item->id.'/edit')}}"
                               class="active styling-edit" ui-toggle-class=""><i
                                    class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a href="#" class="active styling-delete" title="{{$item->id}}" ui-toggle-class="">
                                <i
                                    class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <br>
                <span class="text-center">{{$list->links()}}</span>
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
@endsection

