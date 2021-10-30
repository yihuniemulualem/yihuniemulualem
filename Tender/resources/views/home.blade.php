<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tender login page</title>
<style>
    ul{

        background-color:green;
        padding: 10px;
        margin: 10px;
        font:24px;

    }
    li{
        display: inline;
        margin: 20px;
        padding:20px;
    }

    .active{
        background-color: red
    }
    .hover{
        background-color: blue;
    }
   ul a{
       color :yellow;
   }
   .log{
       padding-bottom: 20px;
       display: inline;
       font-family: sans-serif;

       padding: 50px;
       margin-left: 80px;
       margin-bottom: 20px;
   }
   .reg{
    padding-bottom: 20px;
       display: inline;
       font-family: sans-serif;
       margin-top: 80px;
       padding: 10px;
       margin-right: 80px;
   }
 </style>
</head>
<body>
   <ul>
    <li><a href="Home">home</a></li>
    <li><a href="AboutUs">About us</a></li>
    <li><a href="contactUs">Contact us</a></li>
   </ul>

   <img src="" alt="the imge of the body"/>
   <div class="log">
   Are you register before ?
 <a href="http://localhost:8000/login"><i>login</i></a></div>
 <div class="reg">
   Do you want to register?
 <a href="http://localhost:8000/register"><i>register</i></a></div>
</body>
</html>
