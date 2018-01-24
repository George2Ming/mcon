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
<form id="update">
    id<input type="text" id="id" name="id" value="{{$material->id}}" disabled="disabled"><br>
    name<input type="text" id="name" name="name" value="{{$material->name}}"><br>
    description<input type="text" id="description" name="description" value="{{$material->description}}"><br>
    price<input type="text" id="price" name="price" value="{{$material->price}}"><br>
    {{csrf_field()}}
    stock<input type="text" id="stock" name="stock" value="{{$material->stock}}"><br>
    <input type="submit" value="update">
</form>
</body>
</html>
<script type="text/javascript" src="{{asset('js')}}/jquery-1.12.4.min.js"></script>
<script>
$(function() {
    $("#update").submit(function (e) {
        //阻止表单的默认提交
        e.preventDefault();
        //获取表单里面，提交的数据
        var data = $(this).serialize();//获取表单里面的输入的所有数据
        var id=$('#id').val();
        $.ajax({
            type: 'post',
            url: '{{url("material/update")}}/'+id,
            data:data,
            success:function(msg){
                if(msg.info == 1){
                    alert( 'Update Successful!' );
                    window.location.href='{{url('/material')}}';
                }else{
                    alert( 'Update Failed1!'+msg.error );
                }
            },
            error:function(msg){
                alert( 'Update Failed2!'+msg.error );
            }
        });
    });
});
</script>