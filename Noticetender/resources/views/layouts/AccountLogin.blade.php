<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login to deploy</title>
</head>
<body>
    <h3>fill username and password for the deployer</h3>
    <form method="GET" action="http://localhost:8000/Accounttologin" style="background-color: goldenrod">
    <div class="form-group" >
        <label>UserName</label>
       <input type="text" class="form-controle" name="username" style="width:50%" placeholder="enter your user name" required/><br>
           </div><br>
           <div class="form-group">
            <label>password</label>
           <input type="password" class="form-controle" name="password" style="width:50%" placeholder="enter your password" required/><br>
               </div><br>
               <input type="submit" value="submit" class="btn btn-primary"/>
               <input type="reset" value="reset" class="btn btn-primary"/>
               </div>
            </form>
</body>
</html>
