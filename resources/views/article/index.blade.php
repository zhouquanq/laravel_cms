<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - 白俊遥博客</title>
</head>
<body>
<a href="{{ url('view/create') }}">新增文章</a>
<table>
    <tr>
        <th>标题</th>
        <th>内容</th>
        <th>操作</th>
    </tr>
    @foreach($article as $k => $v)
        <tr>
            <td>{{ $v->title }}</td>
            <td>{{ $v->content }}</td>
            <td>
                <a href="{{ url('view/edit', $v->id) }}">编辑</a> |
                @if($v->trashed())
                    <a href="{{ url('view/restore', $v->id) }}">恢复</a> |
                    <a href="{{ url('view/forceDelete', $v->id) }}">彻底删除</a>
                @else
                    <a href="{{ url('view/destroy', $v->id) }}">删除</a>
                @endif
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>