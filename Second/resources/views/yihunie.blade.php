<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 jQuery Validation Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

  <style>
    .error{
     color: #FF0000;
    }
  </style>

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
      <h2>Laravel 8 jQuery Form Validation Before Submit</h2>
    </div>
    <div class="card-body">
      <form name="product-add" id="product-add" method="post" action="{{url('store-product')}}">
       @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="@error('title') is-invalid @enderror form-control">
          @error('title')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Product Code</label>
          <input type="text" id="code" name="code" class="@error('code') is-invalid @enderror form-control">
          @error('code')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" class="@error('description') is-invalid @enderror form-control"></textarea>
          @error('description')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
<script>
    if ($("#product-add").length > 0) {
        $("#product-add").validate({

            rules: {
                title: {
                    required: true,
                    maxlength: 50
                },

                code: {
                    required: true,
                },

                description: {
                    required: true,
                },
            },
            messages: {

                title: {
                    required: "Please enter title",
                },

                code: {
                    required: "Please enter valid email",
                },

                 description: {
                    required: "Please enter message",
                },
            },
        })
    }
 </script>
</body>
</html>
