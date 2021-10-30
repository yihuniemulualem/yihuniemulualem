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

<form method="GET" action="{{route('createpost')}}">
<label>posts title<label>
    <input type="text" name="title"/><br><br>
    <labeL>description</label><br>
        <textarea rows="10" cols="20"> enter the text here</textarea><br>
   <button type="submit">post</button>
    </form>
</body>
</html>
