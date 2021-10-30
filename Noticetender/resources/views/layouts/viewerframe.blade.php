
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>viewer page</title>
</head>
<!-- -->

<frameset rows="5%,80%,10%">
    <FRAME name="fixed" src="{{URL::to('header')}}">
<FRAMESET cols="25%,75%">
   <FRAME name="fixed" src="{{URL::to('homepage')}}">
   <FRAME name="menu" src="{{URL::to('view')}}">
</FRAMESET>
<FRAME name="footer" src="{{URL::to('tofooter')}}">
</frameset>
</HTML>
</html>


