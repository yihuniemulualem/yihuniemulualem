<!DOCTPE html>
<html>
<head>
<title>View tender by title</title>
</head>
<body>
    <div>
<nav style="padding-left: 70%">
    <form class="form-inline my-lg-0" type="get" action="http://localhost:8000/searchedviewwinner">
    <input class="form-controle mr-sm-2" name="search" type="search" placeholder="Searchtender">
    <button class="btn btn-outline-light" type="submit" style="color: green">search</button>
    </form>
   </nav>
</div>
<table border = "1" style="width: 100%">
<tr>
<td>number</td>
<td>title</td>
<td>viewitemwinners</td>
</tr>
@foreach ($users as $AppleyTender)
<tr>
<td>{{ $AppleyTender->Tendernumber }}</td>
<td><a href='http://localhost:8000/winner/{{$AppleyTender->Tendernumber }}'> {{$AppleyTender->TenderTitle}}</a> </td>
<td><a href='http://localhost:8000/winneritem/{{$AppleyTender->Tendernumber }}'>viewbyitem</a> </td>
</tr>
@endforeach
</table>
</body>
</html>
