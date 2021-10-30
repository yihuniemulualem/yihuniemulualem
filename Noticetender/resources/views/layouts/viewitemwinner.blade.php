<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view item </title>
</head>
<body>
    <td><a href="http://localhost:8000/view">to see the detail based  tender number</a></td>
    <h4>the items are the following</h4>
    <table border = "1" style="width: 100%">
        <tr>
            <th>Tendernumber</th>
            <th>Quality</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>itemName</th>
            <th>price</th>
        </tr>
        @foreach ($users as $ItemApp)
        <tr>
        <td>{{ $ItemApp->number }}</td>
        <td>{{ $ItemApp->Quality }}</td>
        <td>{{ $ItemApp->Size}}</td>
        <td>{{ $ItemApp->Quality}}</td>
        <td>{{ $ItemApp->itemname}}</td>
        <td>{{ $ItemApp->price}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
