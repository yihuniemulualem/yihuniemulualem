<!DOCTYPE <html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Apply to the selected tender</title>
    <style>
    </style>
</head>
<body>
    <h2>please fill the information of the each item correctly</h2>

<form method="GET" action="http://localhost:8000/toItemdeploy">
    <table border="1">
    <tr>
 <th>Tendernumber</th>
 <th>organization</th>
 <th>itemName</th>
</tr>
<tr><td>
    <input type="text" name="number" placeholder="please enter the tendernumber" required></td>
    <td><input type="text" name="organization" placeholder="please enter the organization" required></td>
    <td><input type="text" name="item" placeholder="please enter itemname" ></td>
</tr>
<tr>
<button type="submit" class="btn-btn success" >submit</button>
<button type="reset" class="btn-btn success">reset</button></tr>
</table>
</form>

</body>
</html>

