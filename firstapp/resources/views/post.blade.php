<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>allposts </title>
</head>
<body>
    <h1>add post here </h1>
<table>

<tr><th>Id</th>
<th>title</th>
<th>body</th></tr>
@foreach ($posts as $posts )


<tr><th>{{$posts->$id}}

</th>
    <th>{{$posts->$title
    }}
    </th>
    <th>{{$posst->$body}}</th></tr>
    @endforeach
</table>

</body>
</html>
