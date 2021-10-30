<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login page</title>
    <style>
.login{

    font-family: sans-serif;
    margin: 20px;
    padding: 50px;

}
#submit{
    border-radius:60px;
    width: 120px;
    height: 40px;
    background-color: greenyellow;

}
input{
    height: 20px;
    border-radius: 40px;
    width:500px;

}
body{
    background: grey;

}
fieldset{
    height: 450px;
    border-radius: 50px;
}
    </style>
</head>
<body>
    <center>

  <h2> well come to login page</h2>
  <div class="login">

    <fieldset legend="log in page here">
        <legend> login form</legend>
  <form method ="POST" action="http://localhost:8000/register1.php" >
  <label for="username">username</label>
  <input type="text" name="username" placeholder="enter your username"/><br><br>
  <label for="password">password</label>
  <input type="password" name="password" placeholder="enter your password"/><br><br>
  <label for="email">your email</label>
  <input type="email" name="email" placeholder="example@gmail.com"/><br><br>
  <button type="submit" id="submit">Submit</button>
  <button type="reset" id="submit">cancel</button>
</fieldset>
 </div>
    </form>

</center>
</body>
</html>
