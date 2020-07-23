<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List Categories</h1>
    {{\Illuminate\Support\Facades\Session::get('msg')}}
    <ul>
        @foreach($list as $item)
            <li>
                {{$item->name}} - {{$item->description}}
                &nbsp;&nbsp;<a href="/categories/{{$item->id}}">Detail</a>
                &nbsp;&nbsp;<a href="/categories/{{$item->id}}/edit">Edit</a>
                &nbsp;&nbsp;<a href="#" class="btn-delete" title="{{$item->id}}">Delete</a>
{{--                <div>--}}

{{--                    <form action="/students/{{$item->id}}" method="post" style="display: inline;">--}}
{{--                        @csrf--}}
{{--                        @method('delete')--}}
{{--                        &nbsp;&nbsp;<button onclick="return confirm('Are you sure?')"--}}
{{--                                style="border: none; color: blue; text-decoration: underline; background-color: transparent; cursor: pointer;">Delete</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </li>
        @endforeach
    </ul>
    <script>
        var btnDeletes = document.getElementsByClassName('btn-delete');
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
</body>
</html>
