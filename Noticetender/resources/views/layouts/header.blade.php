<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
    <style>
        ul{
            height: 10px;
            margin: 20px;
            padding: 20px;
        }
        li{
            padding-left: 40px;
            margin-left: 40px;
            text-decoration-color: black;

        }
      .container-fluid{
        background-color: rgb(60, 255, 0);
      }
      a{
          padding: 30px;
      }
     body{
        background-color: rgb(60, 255, 0);
     }


a:visited {
    color:red;
    background-color: transparent;
    text-decoration: none;
}

a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
}

a:active {
    color: black;
    background-color: transparent;
    text-decoration: underline;
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse">
                     <li style="list-style: none">
                        <a class="nav-link" href="http://localhost:8000/tohome" target ="homeframe">home</a>
                        <a class="nav-link" href="http://localhost:8000/bytitle" target ="menu">viewTender</a>
                       <a class="nav-link" href="http://localhost:8000/contact" target ="menu">Contactus</a>
                      <!-- <a class="nav-link" href="http://localhost:8000/appley" target ="menu">viewWinner</a>
                       <a class="nav-link" href="http://localhost:8000/todeploytender"target="menu">postTender</a>-->
                       <a class="nav-link" href="http://localhost:8000/AccountCreation2"target="menu">postTender</a>
                       <a class="nav-link" href="http://localhost:8000/toviewWinner" target ="menu">viewWinner</a>
                        <a class="nav-link" href="http://localhost:8000/freetender" target="menu">FreeTender</a>
                        <a class="nav-link" href="http://localhost:8000/logout" target ="loginframe" >logout</a>
                    </li>
                </div>
            </nav>
        </header>
    </div>

</body>
</html>


