<!DOCTYPE <html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register here</title>
    <style>
 body{
     background-color: gray;

 }
 input{
     border-radius: 50px;
     width: 50%;
     height: 40px;
     padding: 20px;
 }
label{
    padding: 20px;
    font-size: 45px;
}
button{
    background-color: yellow;
    border-radius: 100px;
    border-block-color:green;
    padding: 5px;
    margin: 50px;
    width: 150px;
    height: 45px;
    font-size: 24px;
}
div{

}
    </style>
</head>
<body>
    <center>
    <fieldset>
        <h3>user registration form</h3>
    <form method="GET" action="lo">
      <label>userName</label>
      <input type="text" name="username" placeholder="enter your username" /><br>
       <span style="color:red"> @error('username'){{$message}}@enderror
    </span>
      <br>

      <label>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="email" name="email" placeholder="enter your email" /><br>
      <span style="color:greenyellow"> @error('email'){{$message}}@enderror<br>
      <label>password  </label>
      <input type="password" name="password" placeholder="enter your password" /><br>
      <span style="color:gold"> @error('password'){{$message}}@enderror
      <br>
      <button type="submit">do</button>
      <button type="reset">reset</button>
    </form>
    </fieldset>
</center>
</body>
</html>

