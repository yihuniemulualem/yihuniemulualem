<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container mt-4">

  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('insert')}}">
       @csrf

        <div class="form-group">
          <label for="roleno">rollno</label>
          <input type="text" id="rollno" name="rollno" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="  firstname">  firstname      </label>
         <input type="text" name="firstname" placeholder="enter the your name    " class="form-control" required="">
        </div>
        <div class="form-group">
            <label for="lastname">lastname</label>
           <input type="text" name="lastname" class="form-control" placeholder=" enter your last name   " required="">
          </div>
          <div class="form-group">
            <label for="dateof birth">dateofbirth </label>
           <input type="text" name="dataofbirth" class="form-control" placeholder="enter your date of birth" required="">
          </div>
          <div class="form-group">
            <label for="department">department</label>
           <input type="text" name="department"  class="form-control"placeholder=" enter your department   " required="">
          </div>
          <div class="form-group">
            <label for=" mobile">mobile</label>
           <input type="text" name="mobile"  class="form-control"placeholder="  enter your mobile number  " required="">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
