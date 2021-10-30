<!DOCTYPE <html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account creation</title>
</head>
<body>


    <form method="GET" action="http://localhost:8000/Accounttodeploy">
        <div class="container">
            <div class="row">
                <div class="card">
                    <h2 class="card-header"> fill the form to  your tender  </h2>

                <div class="card-body">
                    <div class="form-group">
                        <label>DeployerId</label><br>
                       <input type="text" class="form-controle" name="deployerid" style="width:50%" placeholder="enter your TenderNumber" required/><br>
                           </div><br>
                    <div class="form-group">
                        <label>Companey Name</label><br>
                       <input type="text" class="form-controle" name="companyName" style="width:50%" placeholder="enter your companey name" required/><br>
                           </div><br>
                          <!-- <div class="form-group">
                            <label>Full name</label><br>
                           <input type="text" class="form-controle" name="fullname" style="width:50%" placeholder="enter your full name" required/><br>
                               </div><br>-->
                               <div class="form-group">
                                <label>Address</label><br>
                               <input type="text" class="form-controle" name="Address" style="width:50%" placeholder="enter your Address" required/><br>
                                   </div><br>
                                   <div class="form-group">
                                    <label>Email</label><br>
                                   <input type="text" class="form-controle" name="Email" style="width:50%" placeholder="enter your email" required/><br>
                                       </div><br>
                                       <div class="form-group">
                                        <label> Office Tel</label><br>
                                       <input type="tel" class="form-controle" name="OfficeTel" style="width:50%" placeholder="enter the office phone" required/><br>
                                           </div><br>
                                          <!-- <div class="form-group">
                                            <label>Mobile</label><br>
                                           <input type="tel" class="form-controle" name="Mobile" style="width:50%" placeholder="enter your mobile" required/><br>
                                               </div><br>
                                               <label>TinNo</label><br>
                                               <input type="text" class="form-controle" name="TinNo" style="width:50%" placeholder="enter your TInNO" /><br>
                                                   </div><br>-->
                                               <div class="form-group">
                                                <label>UserName</label><br>
                                               <input type="text" class="form-controle" name="username" style="width:50%" placeholder="enter your user name" /><br>
                                                   </div><br>
                                                   <div class="form-group">
                                                    <label>password</label><br>
                                                   <input type="text" class="form-controle" name="password" style="width:50%" placeholder="enter your password" required/><br>
                                                       </div><br>
                                                       <div class="form-group">
                                                        <label>Confirm password</label><br>
                                                       <input type="text" class="form-controle" name="confirmpassword" style="width:50%" placeholder="confirm password" required/><br>
                                                           </div><br>

         <button style="color:green" type="submit" id="color1" >submit</button>
         <button style="color:green" type="reset" id="color2">reset</button></div>
    </div>
    <div >
</body>
</html>
