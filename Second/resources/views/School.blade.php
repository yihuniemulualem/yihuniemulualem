<!DOCTYPE <html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<title>school Management</title>
<style>
.navigation{
    color: green;
    font: 34;
    font-family: sans-serif;
display: block;
}
#createAccount{
    color: greenyellow;
    border-radius: 50px;
    text-align: center;
    float: right;
}.container{
    padding: 20px;
    margin: 20px;
}

</style>
</head>
<body>
<nav>
<div class="navigation">
<nav ><a href="route{{'schoolcontroller.home'}}">homepages</a>
      <a href="#" id="about"> aboutUs</a>
     <a href="#">courses</a></nav>
</div>
</nav>
<button type="button" id="createAccount" onclick="route{{'schoolcontroller.register'}}">Register</button>
<div class="container">
    <div class="row">
        <div class="cols-md6 offset md3">
            <div class="card-header">
                Login page of the School!!
            </div>
            <div class="card-body">
                <form>
                    <div>
                    <label for="user">name</label>
                    <input type="text" placeholder="enter your name" required max="15"/>
                    <br>
                    <br>
                    </div>
                    <label for="password">password</label>
                    <input type="text" placeholder="correct passkey" required min="8"/><br>
                    <br>
                 <button type="button" class="btn btn-primary">login</button>

                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
</html>
