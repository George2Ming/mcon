<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="{{asset('js')}}/jquery-1.12.4.min.js"></script>
</head>
<body>
<a href="{{url('material/add')}}" >add</a>
    <table style="border: 1px solid black">
        <tr>
            <th width="100">id</th>
            <th width="100">name</th>
            <th width="150">description</th>
            <th width="100">price</th>
            <th width="100">stock</th>
            <th width="100">delete</th>
            <th width="100">update</th>
        </tr>
        @foreach($material as $v)
        <tr>
            <td style="text-align: center">{{$v->id}}</td>
            <td style="text-align: center">{{$v->name}}</td>
            <td style="text-align: center">{{$v->description}}</td>
            <td style="text-align: center">{{$v->price}}</td>
            <td style="text-align: center">{{$v->stock}}</td>
            <td style="text-align: center"><a href="javascript:;" onclick="datadel({{$v->id}})">delete</a></td>
            <td style="text-align: center"><a href="{{url('material/update')}}/{{$v->id}}"+>update</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
<script>
    //材料删除
    function  datadel(id){
        var statu = confirm("sure delete?");
        if(!statu){
            return false;
        }
        $.ajax({
            type:'post',
            url:'{{url('material/del')}}',
            data:{id:id,'_token':'{{csrf_token()}}'},
            success:function(msg){
                if(msg.info == 1){
                    alert( 'Delete Successful!' );
                    window.location.reload();
                }else{
                    alert( 'Delete Failed1!' );
                }
            },
            error:function(){
                alert( 'Delete Failed2!' );
            }
        });
    }
    //材料修改

</script>