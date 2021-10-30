<!DOCTPE html>
<html>
<head>
<title>View tenders that are available</title>

</head>
<body>
    <div>
<nav style="padding-left: 70%">
    <form class="form-inline my-lg-0" type="get" action="http://localhost:8000/search">
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
<td>view detail</td>
<td>update</td>
<td>delete</td>
</tr>
@foreach ($users as $tender)
<tr>
<td>{{ $tender->number }}</td>
<td> {{$tender->title}}</td>
<td>{{ $tender->organization}}</td>
<td><a href="#">download</a></td>
<td><a href="http://localhost:8000/toupdate">update</a></td>
<td><a href="http://localhost:8000/delete/{{$tender->number}}">delete</a></>
</tr>
@endforeach
</table>
</body>
</html>
