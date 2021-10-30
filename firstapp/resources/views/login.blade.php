<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>from the log in installation</title>
</head>
<body>
<form method="get" onaction="{{route('student.submited')}}">
    @csrf
    username:<input type="text" id="name"><br>
  password:<input type="password" id="password"><br>
  <br>
<button type="submit">submit</button>
</form>
</body>
</html>
