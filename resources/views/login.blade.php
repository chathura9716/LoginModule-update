<html>
    <html lang="en">
        <head>
            <style>
                body {
                    font-family: 'Nunito', sans-serif;


                }
                .container{
                    align-items: center;
                    width: 100vw;

                }
            </style>
          <title>Bootstrap Example</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </head>
        <body>
            <h1 class="display">Laravel Login Application</h1><br/>
<div class="container">

<div class="row">
    <div class="col-sm-3 offset-sm-2">

        @if(isset(Auth::user()->email))
        <script>window.location="/success";</script>
        @endif

        @if($message=Session::get('error'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>
            </div>
            @endif


        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
        </div><br />
        @endif
       <div>
         <form method="post" action="{{ url('/checklogin') }}">
             {{ csrf_field() }}
             <div class="form-group">
                 <label for="email">Email Id:</label>
                 <input type="email" class="form-control" name="email"/>
             </div>
             <div class="form-group">
                 <label for="password">Password:</label>
                 <input type="password" class="form-control" name="password"/>
             </div>
             <div class="form-group">
               <button type="submit" class="btn btn-primary-outline">Login</button>
             <div>
         </form>
     </div>
    </div>
   </div>
   </div>

        </body>
    </html>
