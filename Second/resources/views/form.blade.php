<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <style>

    </style>
</head>
<body>
    <form id="registerform" action="{{route('auth.registersubmit')}}" method="post">
        <div>
        <label for="name">name</label>
        <input type="text" name="name"  required data-parsly-pattern="[a-zA-Z]+$" data-parsly-trigger="keyop"/>
        </div>
        <div>
            <label for="email">email/>
            <input text="password" name="name" id="name" required data-parsly-trigger="keyop"/>

        </div>
        <div>
            <label for="password">password/>
            <input text="password" name="name" id="name" required data-parsly-type="email" data-parsly-trigger="keyop" />
        </div>
        <label for="confirmpassword">confirmpassword</label>
        <input type="password" name ="confirmpassword" id="conformpassword" required  data-parsly-equalto("password") data-parsly-length="6-9" data-parsly-trigger="keyop"/>
    </div>
    <div>
        <label for="phone">mobile number/>
        <input type="tel" name="mobilenumber" id="mobilenumber" required/>
    </div>
    <button type="submit">Submit</button>
    </form>
    <script>
        $(function(){
            $("register").parselay();
        }
    </script>
</body>
</html>
