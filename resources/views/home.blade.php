@extends('layout.master')

@section('content')
<style>
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
<div class="bg"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
