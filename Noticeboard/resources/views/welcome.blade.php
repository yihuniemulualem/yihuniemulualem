<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>well</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                padding-left:0px;
                font-family: 'Nunito', sans-serif;
            }
.navbar{
    margin-left:0%;
    background-color: rgb(196, 196, 170)6, 196, 170)6, 196, 170);
}
.navbar-brand{
background-color: yellow;
}
.nav-item{
    padding-left:100px;
background-color: rgb(196, 196, 170)6, 196, 170)6, 196, 170);
}{
background-color: yellow;
}
.card{
    background-color: gainsboro;
}
footer{
    margin-bottom:0px;
    margin-left:0px;
    margin-top: 140px;
    padding-bottom:0px;

}

.para{
width: 100%;
}
</style>
    </head>
        <body>
            <div class="container-fluid">
                <header >
                    <nav id="yihu" class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="newPage.html">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="about.html">Contactus</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Help</a></li>
                            </ul>
                        </div>
                    </nav>
                </header>
            </div>

                    <div class="container" style="height: 80px">
                        <!--
                  @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" style="padding: 14px">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="padding: 15px"
                         >Login</a>
                      @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="padding: 15px"
                             >Register</a>

                        @endif
                    @endauth
                @endif  -->
                <a href="http://localhost:8000/login" style="padding: 15px"
                         >Login</a><br><br>
                         <a href="http://localhost:8000/register" style="padding: 15px"
                             >Register</a><br>
            </div>
            <div class="container">
            <div class="para"><p>This project is going to be done by including the following areas of tasks involved in tender announcement system
           Users of the system must be registered for login
        	Posting tender announcements</p>
    	Searching the existing tender information based on date</p>
<p>		Updating or modifying the existing data from the database</p>
<p>		Deleting outdated information from the database</p>
	Viewing and accessing the permitted and available tenders

</div>

        <div class="footer">

         <footer>
            <!-- Footer links -->
              <nav>
                <a href="some-url" target="_blank">Footer link</a> <!-- opens in new tab -->
              </nav>
            <!-- Copyright footnote -->
              &copy; 2021 Some copyright message.
            <!-- Contact link -->
              <address>
                Contact <a href="yihuniemulualem220@gmail.com">me</a>
              </address>
            </footer>
        </div>

    </body>
</html>
