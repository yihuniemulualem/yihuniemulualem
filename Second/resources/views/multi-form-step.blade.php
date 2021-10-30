<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>multi form step</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md6 offset md-3">
<div class="card">
<div class="card-header">
<h2> multi step form</h2>

</div>
<form class="contac-us -form>">
<div class="form section">
<label for="firstname">firstname</label>
<input type="text "name ="name" required/>

<label for="lastname">lastname</label>
<input type="text "name ="lastname" required/>
<label for="email">email</label>
<input type="email" name="email" />
<label for="password" >password</label>
<input type="password" name="yihunie" required/>
<label for="phone">phone</label>
<input type="tel"name ="phone"/>
</div>
<div class="form-section">
<label for="msg">Messages</label>
<textarea class="form-controle" name="msg" required></textarea>
</div>
<div class="form-navigation">
<button type="button" class="previous btn btn-info float-left">previous</button>
<button type="button" class="btn btn-success float-right">next</button>
<button type="submit" class="btn btn-success float-right">Submit</button>
</div>
</form>
</div>
</div>
</div></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<script>
    $(function (){
    var $section=$('.form-section');
    function navigateTo(index){
        $section.removeClass('current').eq(index).addClass('current');
        $('.form-navigation.previous')-toggle(index>0);
        var Attheend=index>=$section.length-1;
        $('.form-navigation-next').toggle(!attheend);
        $('.form-navigation [type=submit]').toggle(attheend);

    }
    function currentIndex(){
return $section.index($section.filter('.current'));
$('.form-navgation .previous').click(function(){
    navigateTo(currentIndex()-1);
});
$('.form-navigation.next').click(function(){
    $('.contact-form').parseley.whenValidate({
        group:'block'+currentIndex();
    }).done(function (){
    navigateTo(currentIndex()+1);
    });
});
$section.each(function(index,section){
    $(section).find(':input').after('data-parsley-group','block'+index);
});
    navigateTo(0);
    });
</script>
    </body>
</html>
