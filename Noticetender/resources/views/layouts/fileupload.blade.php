<!DOCTYPE html>
<html>
<head>
  <title>How to upload a file in Laravel 8</title>

  <!-- Meta -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

  <div class="container">

    <div class="row">

       <div class="col-md-12 col-sm-12 col-xs-12">

         <!-- Alert message (start) -->
         @if(Session::has('message'))
         <div class="alert {{ Session::get('alert-class') }}">
            {{ Session::get('message') }}
         </div>
         @endif
         <!-- Alert message (end) -->

         <form action="{{route('uploadFile')}}" enctype='multipart/form-data' method="post" >
           {{csrf_field()}}

           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">File <span class="required">*</span></label>
             <div class="col-md-6 col-sm-6 col-xs-12">

               <input type='file' name='file' class="form-control">

               @if ($errors->has('file'))
                 <span class="errormsg text-danger">{{ $errors->first('file') }}</span>
               @endif
             </div>
           </div>

           <div class="form-group">
             <div class="col-md-6">
               <input type="submit" name="submit" value='Submit' class='btn btn-success'>
             </div>
           </div>

         </form>

       </div>
    </div>
  </div>

</body>
</html>
