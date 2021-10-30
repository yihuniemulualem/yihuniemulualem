@include('layouts/main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Apply to the selected tender</title>
</head>
<body>
    <h2>please fill the information of the each item correctly</h2>
    <table border="1">
        <form method="GET" action="http://localhost:8000/toItemdeploy">
    <tr>
 <th>Tendernumber</th>
 <th>Quality</th>
 <th>Size</th>
 <th>Quantity</th>
 <th>itemName</th>
</tr>
<tr>
    <td><input type="text" name="Tendernumber" placeholder="please enter the tendernumber" required></td>
    <td><input type="text" name="quality" placeholder="please enter the Quality"></td>
    <td><input type="text" name="size" placeholder="please enter the size"></td>
    <td><input type="text" name="quantity" placeholder="please enter the quantity"></td>
    <td><input type="text" name="itemname" placeholder="please enter itemname" required></td>
</tr>
<tr><td><button type="submit" class="btn-btn success" >submit</button>
<button type="reset" class="btn-btn success">reset</button></td>

</tr>

</form>
</table>
</body>
</html>

