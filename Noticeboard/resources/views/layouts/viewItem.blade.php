<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view item </title>
</head>
<body>
    <h4>the items are the following</h4>
    <table border = "1" style="width: 100%">
        <tr>
        <td>number</td>
        <td>organization</td>
        <td>item</td>
        <td>Appley</td>
        </tr>
        @foreach ($users as $item)
        <tr>
            <td>{{ $item->number }}</td>
            <td>{{ $item->organization }}</td>
            <td>{{ $item->item}}</td>
            <td><a href="http://localhost:8000/tocompete">Appley</a></td>
        </tr>
        @endforeach
        </table>
</body>
</html>
