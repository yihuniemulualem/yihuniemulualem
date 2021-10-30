@include('layouts/main')
<!DOCTYPE <html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
            .row{
            }
            .col-12{
                display: flex;
                padding: 40px;
            }
            #form{
                align-items: horizontal;
            }
        </style>
    </head>
    <body>
        <div class="row">
        <nav>
            <div class="col-12">
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
                    <label>DeployerID</label><br>
                   <input type="text" class="form-controle" name="deployerid" style="width:100%" placeholder="enter the Deployer id " required/><br>
                       </div><br>
              <!--  <div class="form-group">
                    <label>Tender Category</label><br>
                   <input type="text" class="form-controle" name="category" style="width:100%" placeholder="enter the tender category of your Tender " required/><br>
                       </div><br>-->
                       <div class="form-group ">
                        <label>Tender Category</label><br>
                            <select name="category">
                            <option  name="Accounting and Auditing" value=" Accounting and Auditing">Accounting and Auditing</option>
                            <option name="Agriculture" value="Agriculture">Agriculture</option>
                            <option name="Bank Related" value="Bank Related">Bank Related</option>
                            <option name="Building Materials" value="Building Materials">Building Materials</option>
                            <option name="Cleaning and Janitorial" value="Cleaning and Janitorial">Cleaning and Janitorial</option>
                            <option name=" Hotel & Tourism" value=" Hotel & Tourism"> Hotel & Tourism</option>
                            <option name="House and Building" value="House and Building">House and Building</option>
                            <option name="Installation and Maintenance" value="Installation and Maintenance">Installation and Maintenanceg</option>
                            <option name=" Insurance" value=" Insurance"> Insurance</option>
                            <option name="Land & Lease " value="Land & Lease">Land & Lease</option>
                            <option name=" Health" value=" Health"> Health</option>
                            <option name="Energy" value="Energy">Energy</option>
                        </select>
                         </div>
                       <div class="form-group">
                        <label>Tender type</label><br>
                       <input type="text" class="form-controle" name="tendertype" style="width:100%" placeholder="enter the tender type of your Tender " required/><br>
                           </div><br>


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
        <label>Tender open date</label><br>
        <input type="text" class="form-controle" name="opendate"  style="width:100%" placeholder="enter the open date of your Tender " required/><br>
    </div><br>
    <div class="form-group">
    <label>starting price for each</label><br>
    <input type="number" class="form-controle" name="price"  style="width:100%" placeholder="enter the end date of your Tender " required/><br>
    </div><br>
    <label>starting price for total</label><br>
    <input type="number" class="form-controle" name="pricetotal"  style="width:100%" placeholder="enter the end date of your Tender " required/><br>
    </div><br>
    <div class="form-group">
    <label>Detail content for the tender</label><br>
    <textarea  name="detail" cols="30" rows="10" placeholder="enter the detail explanation of tender"></textarea><br>
    </div>
    <div >
        <button style="color:green" type="submit" id="color1" >submit</button>
        <button style="color:green" type="reset" id="color2">reset</button></div>
    </div>
   </div>

    </form>
    <div>

            <h3>if you to deploy list of items click the link</h3>
            <a href="http://localhost:8000/toitem"><i>for list of item </i></a><br>
            <h3>do you want to upload the detail file?</h3>
            <a href="http://localhost:8000/touploadview"><i> toUploadfile </i></a></div>



    </div>
    </body>
    </html>

