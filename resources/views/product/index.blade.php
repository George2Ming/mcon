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
<a href="{{url('/product/add')}}">add product</a>
<table>
    <tr>
        <th width="100">id</th>
        <th width="100">name</th>
        <th width="100">designer_id</th>
        <th width="150">material1_id</th>
        <th width="150">material2_id</th>
        <th width="150">customer</th>
        <th width="100">prime_cost</th>
        <th width="100">description</th>
    </tr>
    @foreach($product as $v)
    <tr>
        <td style="text-align: center;">{{$v->id}}</td>
        <td style="text-align: center;">{{$v->name}}</td>
        <td style="text-align: center;">{{$v->designer_id}}</td>
        <td style="text-align: center;">{{$v->material1_id}}</td>
        <td style="text-align: center;">{{$v->material2_id}}</td>
        <td style="text-align: center;">{{$v->customer}}</td>
        <td style="text-align: center;">{{$v->prime_cost}}</td>
        <td style="text-align: center;">{{$v->description}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>