@include('layouts/main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Apply to the selected tender</title>
</head>
<body>
 <form method="GET" action="{{URL::to('/toappley')}}">
<div class="container">
    <div class="row">
        <div class="card">
            <h2 class="card-header">please fill the form to apply to tender</h2>
        <div class="card-body">
<div class="form-group">
 <label>Tendernumber</label><br>
<input type="text" class="form-controle" name="Tendernumber" style="width:100%" placeholder="enter the tender number of your Tender " required/><br>
    </div><br>
<div class="form-group">
    <label>Tender title</label><br>
    <input type="text" class="form-controle" name="TenderTitle" style="width:100%" placeholder="enter the title of your Tender " required/><br>
</div><br>

<div class="form-group">
    <label>Transaction number </label><br>
    <input type="text" class="form-controle" name="Transaction" style="width:100%" placeholder="transaction number for the grant of tender" required/><br>
</div><br>
<div class="form-group">
    <label>Organization</label><br>
    <input type="text" class="form-controle" name="organization" style="width:100%" placeholder="enter the owner of the Tender " required/><br>
</div><br>
<div class="form-group">
    <label>fullname</label><br>
    <input type="text" class="form-controle" name="Fullname" style="width:100%" placeholder="enter the fullname of the tenderer " required/><br>
</div><br>
<div class="form-group">
    <label>phone</label><br>
    <input type="text" class="form-controle" name="phone" style="width:100%" placeholder="enter the phone   of your tenderer " required/><br>
</div><br>
<div class="form-group">
    <label>Email</label><br>
    <input type="email" class="form-controle" name="email"  style="width:100%" placeholder="enter the  email of your tenderer " required/><br>
</div><br>
<div class="form-group">
<label>if the tender is one item or in total</label><br>
<input type="currency" class="form-controle" name="Netprice"  style="width:100%" placeholder="enter the price that you want to compete" required/><br>
</div><br>
<div class="form-group">
    <label>if the tender is multiple item or in total list click the following link</label><br>

    <a href="  http://localhost:8000/tocompete">Apply to each item</a>
   <!-- <a href="http://localhost:8000/toitem">Apply to each item</a>-->
    </div><br>

<div class="form-group">
<button type="submit" class="btn btn-success">submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="cancel"  class="btn btn-success">cancel</button>
</div>


</div>
</div>
</div>
</form>
<form action="" method="get">
<h3>upload the appleyed file</h3>
<input type="file">
<input type="submit" value="upload file"/>
</form>
</body>
</html>

