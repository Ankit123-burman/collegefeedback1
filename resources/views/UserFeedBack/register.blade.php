<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/ragister.css') }}">
    <title>Registration Page</title>
</head>

<body>

    <div class="container">
        <div class="form-container sign-up">
        <form method="POST"  action="{{ route('UserFeedBack/register') }}" >
          @csrf
          @method('post')
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="name" placeholder="name">
                @error('name')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
    
                <input type="email" name="email" placeholder="Email">
                @error('email')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
                <input type="password" name="password" placeholder="Password">
                @error('password')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
               
                <button >Register</button>
            </form>
        </div>
        <div class="toggle-container">
            <span><img src="{{ asset('img/login2.jpeg')}} " alt="logo"></span>
            <h2>RICIS INSTITUTION</h2>
            <p>All Ready Register then click on login</p>
            <div><a href="{{ route('UserFeedBack/Login') }}"><button>Login</button></a></div>
          
        </div>
    </div>

</body>

</html>
