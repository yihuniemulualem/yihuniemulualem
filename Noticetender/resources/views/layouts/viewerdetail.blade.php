@include('layouts/main')
<!DOCTPE html>
<html>
<head>
<title>View tender </title>
</head>
<body>
    <div>
<nav style="padding-left: 70%">
    <form class="form-inline my-lg-0" type="get" action="http://localhost:8000/searched">
    <input class="form-controle mr-sm-2" name="search" type="search" placeholder="Searchtender">
    <button class="btn btn-outline-light" type="submit" style="color: green">search</button>
    </form>
   </nav>
</div>
<table border = "1" style="width: 100%">
<tr>
<td>number</td>
<td>title</td>
<td>organization</td>
<td>opendate</td>
<td>closeddate</td>
<td>Download</td>
<td>Appley</td>
</tr>
@foreach ($users as $tender)
<tr>
<td>{{$tender->number}}</td>
<td>{{$tender->title}}</a></td>
<td>{{ $tender->Organization}}</td>
<td>{{ $tender->opendate}}</td>
<td>{{ $tender->closeddate}}</td>
<td><a href="http://localhost:8000/fileview">Download</a></td>
<td><a href="/appleystotender/{{$tender->number }}">Appley</a></td>
</tr>
@endforeach
</table>
</body>
</html>
