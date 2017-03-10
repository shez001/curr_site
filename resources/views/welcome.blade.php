<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                
              {!! Form::open(['url' => 'Account/Login']) !!}
              
              
              <div class="form-group"> 
                  <span> Email:  </span> {!! Form::email('email') !!}
              </div> 
              <div class="form-group"> 
                  <span> Password:  </span> {!! Form::password('password') !!}
              </div> 
              <div class="form-group">  
              {!! 
                    Form::submit('Sign In!')
              
              !!}
              </div>
              
                
                <input type="button" onclick="window.open('https://php.net')" value="Sign Up"/>
              {!! Form::close() !!}

               
            </div>
        </div>
    </body>
</html>
