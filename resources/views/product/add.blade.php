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
<form id="add">
    name<input type="text" id="name" name="name"><br>
    designer_id<input type="text" id="designer_id" name="designer_id"><br>
    material1_id<input type="text" id="material1_id" name="material1_id"><br>
    {{csrf_field()}}
    material2_id<input type="text" id="material2_id" name="material2_id"><br>
    customer<input type="text" id="customer" name="customer"><br>
    description<input type="text" id="description" name="description"><br>
    <input type="submit" >
</form>
</body>
</html>
<script type="text/javascript" src="{{asset('js')}}/jquery-1.12.4.min.js"></script>
<script>
$(function() {
    $("#add").submit(function (e) {
        //阻止表单的默认提交
        e.preventDefault();
        //获取表单里面，提交的数据
        var data = $(this).serialize();//获取表单里面的输入的所有数据
        $.ajax({
            type: 'post',
            url: '{{url("product/add")}}',
            data:data,
            success:function(msg){
                console.log(msg);
                if(msg.info == 1){
                    alert( 'Add Successful!' );
                    window.location.href='{{url('/product')}}';
                }else{
                    alert( 'Add Failed1!'+msg.error );
                }
            },
            error:function(msg){
                alert( 'Add Failed2!'+msg.error );
            }
        });
    });
});
</script>