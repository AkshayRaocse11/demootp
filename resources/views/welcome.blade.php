<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Delivery Admin Panel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito';
            }
            body, html {
      height: 100%;
      margin: 0;
    }
    
    .bg {
      /* The image used */
      background-image: url("https://static01.nyt.com/images/2020/06/30/business/30ontech/30ontech-superJumbo.jpg?quality=90&auto=webp");
    
      /* Full height */
      height: 100%; 
    
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
        </style>
    </head>
    <body class="antialiased">
        <div class="bg">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

            
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Delievry App Managment</div>
                    <div class="card-body">
                      <h5 class="card-title">Welcome</h5>
                      <p class="card-text">Provide Valid Email for Login , You wil get OTP to Login</p>
                      @if (Route::has('login'))
                      @auth
                          <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline mt-5">Home</a>
                      @else
                          <a href="{{ route('login') }}" class="text-sm text-gray-700 underline mt-5">Login</a>
  
                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline mt-5">Register</a>
                          @endif
                      @endauth
              @endif
                    </div>
                  </div>

                 <br>

            </div>
        </div>
    </div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
