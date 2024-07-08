<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/LOGIN.css') }}">

    <title>Login Page</title>
</head>

<body>


    <div class="container" id="container">
        <div class="form-container sign-in">
            @if(session()->has('success'))
            
           <div class="alert alert-success">
            <p>{{session()->get('success')}}</p>
           </div>
           @endif

        <form action="{{ route('UserFeedBack/Login') }}" method="POST">
        @csrf
                <h1>Log In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" name="email" placeholder="Email">
                @error('email')
                {{ $message }}
                @enderror
                <input type="password" name="password" placeholder="Password">
                @error('email')
                {{ $message }}
                @enderror
               
                <button>Log In</button>
            </form>
        </div>
        <div class="toggle-container">
        <span><img src="{{ asset('img/login2.jpeg') }}" alt="logo"></span>

           <h2>RICIS INSTITUTION</h2>
           <p>new user clik on registeration</p>
           <div><a href="{{ route('UserFeedBack/register') }}"><button>register</button></a></div>
          
          


    </div>

    
</body>

</html>
