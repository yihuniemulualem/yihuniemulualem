<!DOCTYPE <html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>file upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<h2>browse the detail file for your tender</h2>
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
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Upload the file<span class="required">*</span></label>
               <div class="col-md-6 col-sm-6 col-xs-12">

                 <input type='file' name='file' class="form-control">

                 @if ($errors->has('file'))
                   <span class="errormsg text-danger">{{ $errors->first('file') }}</span>
                 @endif
               </div>
             </div>

             <div class="form-group">
               <div class="col-md-6">
                 <input type="submit" name="submit" value='Upload' class='btn btn-success'>
               </div>
             </div>

           </form>

         </div>
      </div>
    </div>

  </body>
</html>
</html>
