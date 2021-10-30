<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
    <div>
<nav style="padding-left: 70%">
    <form class="form-inline my-lg-0" type="get" action="http://localhost:8000/searchedview">
    <input class="form-controle mr-sm-2" name="search" type="search" placeholder="Searchtender">
    <button class="btn btn-outline-light" type="submit" style="color: green">search</button>
    </form>
   </nav>
</div>
<table border = "1" style="width: 100%">
<tr>
<td>name</td>
<td>path</td>

</tr>
@foreach ($users as $File)
<tr>

<td><a href="http://localhost:8000/download/{{$File->name}}">{{$File->name}}</a></td>
<td>{{$File->path}}</td>
</tr>
@endforeach
</table>
</body>
</html>
