<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f6f5f7;
        }

        .container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            overflow: hidden;
            width: 600px; /* Increased width */
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            padding: 20px;
        }

        form {
            background: #fff;
            display: flex;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
        }

        h1 {
            font-weight: bold;
            margin: 0;
            margin-bottom: 20px;
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #ddd;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 10px;
            height: 40px;
            width: 40px;
        }

        .social-container a i {
            color: #333;
        }

        span {
            font-size: 12px;
            color: #777;
            margin-bottom: 20px;
        }

        .input-field {
            position: relative;
            margin-bottom: 20px;
            width: 100%; /* Make input fields take full width */
        }

        .input-field input {
            background: #f6f7f9;
            border: none;
            padding: 10px 15px;
            width: 100%; /* Increased width */
            border-radius: 5px;
        }

        .input-field label {
            display: none;
        }

        .forgot-password {
            color: #777;
            font-size: 12px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        button {
            border-radius: 20px;
            border: 1px solid #ff4b2b;
            background: #ff4b2b;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            padding: 10px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            cursor: pointer;
        }

        button:hover {
            background: #ff3c1f;
            border-color: #ff3c1f;
        }
    </style>
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="{{ route('UserFeedBack/adminlog') }}" method="post">
                @csrf
                <h1>Login For Admin</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <div class="input-field">
                    <input type="email" placeholder="Email" name="email" required />
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" name="password" required />
                </div>
                <a href="#" class="forgot-password">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
            
        </div>
    </div>

</body>
</html>












































<!----DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambridge Education</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #333;
            background-color: #f7f7f7;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        ul {
            list-style-type: none;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #0077b6;
            color: #fff;
            padding: 20px;
        }

        .logo img {
            max-height: 50px;
        }

        /* Updated NAVBAR Styles */
        nav {
            position: fixed;
            width: 100%; /* Changed from 200vh to 100% for full width */
            height: 40px;
            background-color: #fff;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 0 5vw;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.15);
        }

        nav .NAVBAR ul {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        nav .NAVBAR ul li {
            list-style: none;
            margin-left: 20px;
        }

        nav .NAVBAR ul a {
            text-decoration: none;
            color: rgb(21,21,100);
            font-size: 15px;
            font-weight: 500;
            font-family: "Ovo", serif;
        }

        nav .NAVBAR ul a:hover {
            color: rgb(21,21,100);
            transition: 0.3s;
        }

        /* Main Content */
        .hero {
            background-image: url('hero-image.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 100px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .hero .cta {
            display: inline-block;
            background-color: #f57c00;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }

        .about {
            padding: 50px 20px;
        }

        .about h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Footer */
        footer {
            background-color: #0077b6;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        footer p {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
    
        <img src="Riciscss/building.jpg" class="logo" alt="Cambridge Education">


      
        <nav>
            <div class="NAVBAR">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="{{ asset('user/about') }}">About</a></li>
                    <li><a href="{{ asset('user/contectus') }}">Contact Us</a></li>
                    <li><a href="{{ asset('user/Login') }}">Logout</a></li>
                </ul>
            </div>
        </nav>

      
        <div class="contact">
            <p>Tel No: (+001) 123-456-789</p>
        </div>
    </header>
    <main>
      <section class="about">
    <h2>Welcome to Cambridge EDUCATION INSTITUTE</h2>
    <img src="Riciscss/building.jpg" alt="About Us">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolores quae porro consequatur aliqua, incidunt eus magni provident, doloribus omnis minus tempore perferendis nesciunt quam, repellendus qui repudiandae nemo.</p>
</section>

    </main>
    <footer>
        <p>© 2023 Cambridge Education. All rights reserved.</p>
    </footer>
</body>
</html>----->
