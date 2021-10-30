<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>release tender information page</title>
    <style>
        body{
            background-color: gray;

        }
        input{
            border-radius: 50px;
            width: 50%;
            height: 20px;
            padding: 10px;
        }
       label{
           padding: 20px;
           font-size: 30px;
       }
       button{
           background-color: rgb(0, 102, 255);
           border-radius: 100px;
           border-block-color:green;
           padding: 5px;
           margin: 50px;
           width: 150px;
           height: 45px;
           font-size: 24px;
       }
       div{

       }
           </style>
       </head>
       <body>
           <center>
           <fieldset>
               <h3>Release information for the tender</h3>
           <form method="GET" action="/uploade" enctype="multipart/form-data">
             <label>Tender title:</label>
             <input type="text" name="title" placeholder="enter your title of the tender" /><br>
       <span style="color:red"> @error('title'){{$message}}@enderror
           </span>
             <br>
             <label>Companey:</label>
             <input type="text" name="Organization" placeholder="enter your Organization name" /><br>
             <span style="color:yellow"> @error('Organization'){{$message}}@enderror<br>

             <label>password:</label>
             <input type="password" name="password" placeholder="enter your password" /><br>
             <span style="color:gold"> @error('password'){{$message}}@enderror
             <br>
             <label>Start date:</label>
             <input type="date" name="startDate" placeholder="enter start date" /><br>
             <span style="color:gold"> @error('startDate'){{$message}}@enderror
             <br>
             <label>End date: </label>
             <input type="date" name="endDate" placeholder="enter end date" /><br>
             <span style="color:gold"> @error('endDate'){{$message}}@enderror
             <br>
             <label>File: </label>
             <input type="File" name="file" placeholder="deploy the file"/><br>
             <span style="color:gold"> @error('file'){{$message}}@enderror
             <br>
             <label>text area of filling the information for the tender </label><br><br>
            <textarea cols="80" rows="10" ></textarea><br>

             <button type="submit">do</button>
             <button type="reset">reset</button>
           </form>
           </fieldset>
           </body>
</html>
