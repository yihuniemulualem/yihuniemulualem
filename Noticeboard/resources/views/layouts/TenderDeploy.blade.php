
<!DOCTYPE <html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Deploy your tender page </title>
    <style>
        #color1{
   padding-left: 50px;
   border-radius: 50px;

        }
        #color2{
   padding-left: 50px;
   border-radius: 50px;

        }
        #form{
            display: inline-block;
            align:left;

        }
    </style>
</head>
<body>
    <div class="row">
    <nav>
        <div id ="form">
        <form class="form-inline my-lg-0" type="get" action="http://localhost:8000/search">
        <input class="form-controle mr-sm-2" name="search" type="search" placeholder="Searchtender">
        <button class="btn btn-success " type="submit">search</button>
        </form>
            <form class="form-inline my-lg-0" type="get" action="{{url('/ViewWinnner')}}">
            <input class="form-controle mr-sm-2" name="opendate" type="search" placeholder="enter open date">
            <button class="btn btn-success" type="submit" >opendate</button>
            </form>
        </div>
    </nav>

</div>


    <form method="GET" action="{{URL::to('/insert')}}">
<div class="container">
    <div class="row">
        <div class="card">
            <h2 class="card-header"> please fill the form to deploy your Tender</h2>

        <div class="card-body">
<div class="form-group">
 <label>Tender number</label><br>
<input type="text" class="form-controle" name="number" style="width:100%" placeholder="enter the tender number of your Tender " required/><br>
    </div><br>
<div class="form-group">
    <label>Tender title</label><br>
    <input type="text" class="form-controle" name="title" style="width:100%" placeholder="enter the title of your Tender " required/><br>
</div><br>
<div class="form-group">
    <label>Tender Owner</label><br>
    <input type="text" class="form-controle" name="Organization" style="width:100%" placeholder="enter the owner of the Tender " required/><br>
</div><br>
<div class="form-group">
    <label>Tender start date</label><br>
    <input type="Date" class="form-controle" name="opendate" style="width:100%" placeholder="enter the start date of your Tender " required/><br>
</div><br>
<div class="form-group">
    <label>Tender End date</label><br>
    <input type="Date" class="form-controle" name="closeddate"  style="width:100%" placeholder="enter the end date of your Tender " required/><br>
</div><br>
<div class="form-group">
<label>starting price for each</label><br>
<input type="currency" class="form-controle" name="price"  style="width:100%" placeholder="enter the end date of your Tender " required/><br>
</div><br>
<label>starting price for total</label><br>
<input type="currency" class="form-controle" name="pricetotal"  style="width:100%" placeholder="enter the end date of your Tender " required/><br>
</div><br>
<div class="form-group">
<label>Detail content for the tender</label><br>
<textarea  name="detail" cols="30" rows="10"> enter the detail here</textarea><br>
</div>
<div>
<a href="http://localhost:8000/toitem">deploy by item</a></div>
<div >
     <button style="color:green" type="submit" id="color1" >submit</button>
     <button style="color:green" type="reset" id="color2">reset</button></div>
</div>
</div>
</div>
</form>
<div>
    <center>
        <form method="GET" enctype="multipart/form-data" id="upload-file" action="{{ url('store') }}" >

            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="file" placeholder="Choose file" id="file">
                          @error('file')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>
        </form>
</center>
</div>
</body>
</html>

