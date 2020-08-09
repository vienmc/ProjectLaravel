@extends('Admin.layout')
@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách các loại sản phẩm
            </div>
            <div class="row w3-res-tb" style="text-align: center; margin-bottom: 5px; float: left">
                <form class="form-inline" action="{{URL::to('/find-by-name')}}" method="get">
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
            <div style="clear: both"></div>
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
                        <th>Id</th>
                        <th>Tên</th>
                        <th>Mô tả</th>
                        <th>Kích hoạt / Khóa</th>
                        <th style="width:30px">Sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                        <tr>
                            <td>{{$item->id}}
                            </td>
                            <td>{{$item->name}}
                            </td>
                            <td>{!!  $item->description!!}
                            </td>
                            <td><span class="text-ellipsis">
                                    <?php
                                    /** @var TYPE_NAME $item */
                                    if ($item->status == 1) {
                                    ?>
                                        <a href="{{URL::to('/unactive-categories/'.$item->id)}}"><span
                                                class="fa-thumb-styling fa fa-check"></span></a>
                                    <?php
                                    }else{
                                    ?>
                                    <a href="{{URL::to('/active-categories/'.$item->id)}}"><span
                                            class="fa-thumb-styling fa fa-times"></span></a>
                                    <?php
                                    }
                                    ?>
                                </span>
                            </td>
                            <td>
                                <a href="{{URL::to('/edit-categories/'.$item->id)}}"
                                   class="active styling-edit" ui-toggle-class=""><i
                                        class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>
{{--                                <a href="#" class="active styling-delete" title="{{$item->id}}" ui-toggle-class="">--}}
{{--                                    <i--}}
{{--                                        class="fa fa-times text-danger text"></i>--}}
{{--                                </a>--}}
                            </td>
                        </tr>
                    @endforeach
                    <script>
                        var btnDeletes = document.getElementsByClassName('active styling-delete');
                        for(var i = 0; i < btnDeletes.length; i++){
                            btnDeletes[i].onclick = function(){
                                if(confirm('Are you sure?')){
                                    var id = this.getAttribute('title');
                                    var xhr = new XMLHttpRequest();
                                    xhr.open('DELETE', '/categories/' + id);
                                    xhr.setRequestHeader('X-CSRF-TOKEN', '{{csrf_token()}}');
                                    xhr.onreadystatechange = function(){
                                        if(xhr.readyState == 4 && xhr.status == 200) {
                                            alert('Delete success');
                                            window.location.reload();
                                        }
                                    }
                                    xhr.send();
                                }
                            }
                        }
                    </script>
                    </tbody>
                </table>
            </div>
            {{$list->links()}}
        </div>
    </div>

@endsection
