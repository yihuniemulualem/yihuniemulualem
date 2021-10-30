<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student add to the system</title>
</head>
<body>
<form method="post" action="{{url('insert')}}">
    @csrf
<label>   rollno   </label><br><br>
  <input type="text"  name="rollno" placholder=" enter the role number       " required/><br><br>
  <label>   First name  </label><br><br>
  <input type="text" name="firstnmae" placholder=" enter your first name       " required/><br><br>
  <label>   lastname   </label><br><br>
  <input type="text"  name="lastname" placholder="    enter yourlastname    " required/><br><br>
  <label>  date of birth    </label><br><br>
  <input type="text"  name="dateofbirth" placholder="    enter your date of birth    " required/><br><br>
  <label>   department   </label><br><br>
  <input type="text"  name="department" placholder="    enter your department    " required/><br><br>
  <label>   year   </label><br><br>
  <input type="text" nmae="year" placholder="     enter the batch   " required/><br><br>
  <label>   phone   </label><br><br>
  <input type="tel"  name="mobile" placholder=" enter your telecom number       " required/><br><br>
  <button type="submit" id="submit">submit</button>
    </form>
</body>
</html>
