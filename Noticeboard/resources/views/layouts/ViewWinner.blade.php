<!DOCTYPE <html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <nav style="padding-left: 70%">
            <form class="form-inline my-lg-0" type="get" action="{{url('/ViewWinnner')}}">
            <input class="form-controle mr-sm-2" name="opendate" type="search" placeholder="enter open date">
            <button class="btn btn-outline-light" type="submit" style="color: green">opendate</button>
            </form>
           </nav>
        </div>
        <table border = "1" style="width: 100%">
        <tr>
        <td>Tendernumber</td>
        <td>TenderTitle</td>
        <td>Fullname</td>
        <td>phone</td>
        <td>email</td>
        <td>Netprice</td>
        <td>itemprice</td>
        </tr>
        @foreach ($winners as $Appley)
        <tr>
        <td>{{ $Appley->Tendernumber }}</td>
        <td>{{ $Appley->TenderTitle }}</td>
        <td>{{ $Appley->Fullname }}</td>
        <td>{{ $Appley->phone}}</td>
        <td>{{ $Appley->email}}</td>
        <td>{{ $Appley->Netprice }}</td>
        <td>{{ $Appley->itemprice }}</td>
        </tr>
        @endforeach
        </table>
</body>
</html>
</html>
