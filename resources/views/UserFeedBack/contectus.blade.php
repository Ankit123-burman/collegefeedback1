<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RICIS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">

    <link rel="stylesheet" href="{{ asset('css/contact.css')}}">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            max-width: 100vw;
            max-height: 100vh;
            background: linear-gradient(176deg, #0ea3f0, #0ea3f070, #e2e3ef);
        }
        img{
    height: 65px;
  width: 240px;
}
    </style>
</head>

<body>
    <!-- NAVBAR START -->
    <nav>
        <!---LOGO SECTION ----->
        <img src="{{ asset('img/logo.png')}}" alt="img">
        <div class="NAVBAR">
            <ul>
                <li><a href="{{ asset('UserFeedBack/Home')}}">Home</a></li>
                <li><a href="{{ asset('UserFeedBack/about')}}">About</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="{{ route('signout') }}">Logout</a></li>
            </ul>
        </div>
    </nav>
    <section id="home" style="background-image: linear-gradient(rgba(9,5,54,0.3), rgba(5,4,46,0.7)), url('{{ asset('css/contact.jpg') }}');">

        <div class="box">
            <div class="boxfrom">
                <h2>Contact Information</h2>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Phone:</span> <a href="tel:+91 9883772985">+91 9283747382</a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Email:</span> <a href="mailto:ricis@gmail.com">ricis@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Website:</span> <a href="#">ricis.com</a>
                    </li>
                </ul>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="form">
                <form action="#" method="post">
                    <h2 class="form-title">Send Us a Message</h2>
                    <div class="form-datils">
                        <div class="form-group">
                            <input type="text" class="fname" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="lname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button">
                </form>
            </div>
        </div>
    </section>
   
</body>

</html>
