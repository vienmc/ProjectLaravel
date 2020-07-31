@extends('Admin.layout')
@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách tài khoản
            </div>
            <div class="row w3-res-tb" style="text-align: center; margin-bottom: 5px">
                <form class="form-inline" action="{{URL::to('/find-by-email')}}" method="get">
                    {{csrf_field()}}
                    <div class="form-group mb-2">
                        <label>Tìm theo email</label>
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
{{--                        <th style="width:20px;">--}}
{{--                            <label class="i-checks m-b-none">--}}
{{--                                <input type="checkbox"><i></i>--}}
{{--                            </label>--}}
{{--                        </th>--}}
                        <th>Email</th>
                        <th>Tên</th>
                        <th>Số điện thoại</th>
                        <th>Kích hoạt / Khóa</th>
                        <th style="width:30px;">Sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                        <tr>
{{--                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>--}}
{{--                            </td>--}}
                            <td>{{$item->email}}
                            </td>
                            <td>{{$item->name}}
                            </td>
                            <td>{{$item->phone}}
                            </td>
                            <td><span class="text-ellipsis">
                                    <?php
                                    /** @var TYPE_NAME $item */
                                    if ($item->status == 1) {
                                    ?>
                                        <a href="{{URL::to('/unactive-account/'.$item->id)}}"><span
                                                class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                    <?php
                                    }else{
                                    ?>
                                    <a href="{{URL::to('/active-account/'.$item->id)}}"><span
                                            class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                    <?php
                                    }
                                    ?>
                                </span>
                            </td>
                            <td>
                                <a href="{{URL::to('/edit-account/'.$item->id)}}"
                                   class="active styling-edit" ui-toggle-class=""><i
                                        class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>
{{--                                <a onclick="return confirm('Bạn có muốn xóa không?')"--}}
{{--                                   href="{{URL::to('/delete-brand-product/'.$item->id)}}"--}}
{{--                                   class="active styling-delete" ui-toggle-class="">--}}
{{--                                    <i--}}
{{--                                        class="fa fa-times text-danger text"></i>--}}
{{--                                </a>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$list->links()}}
        </div>
    </div>
@endsection
