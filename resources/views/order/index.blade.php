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
<table style="border: 1px solid black">
    <tr>
        <th width="100">id</th>
        <th width="100">m_id</th>
        <th width="150">m_quantity</th>
    </tr>
    @foreach($order as $v)
        <tr>
            <td style="text-align: center">{{$v->id}}</td>
            <td style="text-align: center">{{$v->m_id}}</td>
            <td style="text-align: center">{{$v->m_quantity}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>