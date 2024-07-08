<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RICIS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/riciss.css')}}">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="icon" type="image/x-icon" href="{{ asset('img/login2.jpeg')}}">
</head>

<body>
  <!-- NAVBAR START -->
  <nav>
    <!---LOGO SECTION ----->
    <img src="{{ asset('img/logo.png') }}" class="logo">
    <div class="NAVBAR">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="{{ asset('UserFeedBack/about') }}">About</a></li>
        <li><a href="{{ asset('UserFeedBack/contectus') }}">Contact Us</a></li>
        <li><a href="{{ route('signout') }}">Logout</a></li>
      </ul>
    </div>

  </nav>


  <!-- NAVBAR END -->
  <section id="home" style="background-image: linear-gradient(rgba(9,5,54,0.3), rgba(5,4,46,0.7)), url('{{ asset('img/building.jpg') }}');">
    <h2 id="w">Welcome To College Feedback Page</h2>
    <p>Explore your potaintial</p>
    <div class="btn">
      <a class="blue" href="{{ asset('UserFeedBack/feedback') }}">student feedback</a>
      <a class="yellow" href="#">teacher feedback</a>
    </div>
  </section>
  <header>
    <h1>Awesome Course</h1>
  </header>
  <section class="services">
    <div class="service-item">
      <i class="fa fa-graduation-cap" aria-hidden="true"></i>
      <h2>Scholarship Facility</h2>
      <p>One make creepeth, man bearing theira firmament won't great heaven</p>
    </div>
    <div class="service-item">
      <i class="fa fa-globe" aria-hidden="true"></i>
      <h2>Sell Online Course</h2>
      <p>One make creepeth,man bearing theira firmament won't great heaven</p>
    </div>
    <div class="service-item">
      <i class="fa fa-certificate" aria-hidden="true"></i>
      <h2>Global certification</h2>
      <p>One make creepeth,man bearing theira firmament won't great heaven
      </p>
    </div>

    <div class="service-item">
      
      <img src="{{ asset('img/bca.png') }}" alt="bca" height="200px" width="400px" >
      
    </div>

    <div class="service-item">
      <img src="{{ asset('img/bba.png') }}" alt="bba" height="200px" width="400px">
    </div>

    <div class="service-item">
      <img src="{{ asset('img/dhm.png') }}" alt="dhm" height="200px" width="400px">
    </div>
   
  </section>


  <!--skilll--->

  <header class="skills">
    <h1>SKILLS WE TEACH</h1>
  </header>
  <section class="content">

<div class="column1">
  <img src="{{ asset('img/python.webp') }}" alt="Image 1">
  <h3>ptyhon course</h3>
  
</div>
<div class="column1">
  <img src="{{ asset('img/js.webp') }}" alt="Image 2">
  <h3>java script</h3>
 
</div>
<div class="column1">
  <img src="{{ asset('img/html.webp') }}" alt="Image 3">
  <h3>Hiper text markup lannguage</h3>
  
</div>
</div>
<div class="column1">
  <img src="{{ asset('img/css.webp') }}" alt="Image 1">
  <h3>Cascading Style Sheets</h3>
  
</div>
<div class="column1">
  <img src="{{ asset('img/android.webp') }}" alt="Image 2">
  <h3>andriod devlopment</h3>
  
</div>

</div>

    </div>

  </section>


  <!--gallary-->
  <h2 class="gallary1">College gallary</h2>
  <div class="container">

    <div class="column">
      <img src="{{ asset('img/student.jpeg') }}" alt="Image 1">
      <h3>Tempora consectetur unde nisi</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, ut.</p>
      <span>July 9, 2017</span>
    </div>
    <div class="column">
      <img src="{{ asset('img/student1.jpeg') }}" alt="Image 2">
      <h3>Tempora consectetur unde nisi</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, officia</p>
      <span>July 9, 2017</span>
    </div>
    <div class="column">
      <img src="{{ asset('img/student3.jpeg') }}" alt="Image 3">
      <h3>Tempora consectetur unde nisi</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dolores.</p>
      <span>July 9, 2017</span>
    </div>
  </div>
<!---work data-->

  <section class="work-data">
    <div class="container grid grid-four-column">
      <div>
        <h2 class="counter-number" data-target="10">00</h2>
        <p>LAC HIGHEST PACKAGE</p>
      </div>
      <div>
        <h2 class="counter-number" data-target="500">00</h2>
        <p>PLACEMENT PARTNERS</p>
      </div>
      <div>
        <h2 class="counter-number" data-target="4.5">00</h2>
        <p>LAC AVG. PACKAGE</p>
      </div>
      <div>
        <h2 class="counter-number" data-target="100">00%</h2>
        <p>% UNIVERSITY EXAM PASSING RECORD</p>
      </div>
    </div>
  </section>



<!--end-->
  <!--teachers-->
  <section id="teachers">
    <h2>Meet Our Qualified Teachers</h2>
  <p>Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
    <div class="teachers-container">
      <div class="teacher-card">
        <img src="{{ asset('img/WhatsApp Image 2024-05-07 at 9.35.53 AM.jpeg') }}" alt="Chris Worth">
        <h3>Subhasish chandra</h3>
        <p>Coding teacher</p>
       
      </div>
      <div class="teacher-card">
        <img src="{{ asset('img/ashim.png') }}" alt="Janet Morris">
        <h3>Ashim majnumadar</h3>
        <p>English Teacher</p>
       
      </div>
      <div class="teacher-card">
        <img src="{{ asset('img/WhatsApp Image 2024-05-07 at 9.39.12 AM.jpeg') }}" alt="Linda Reyes">
        <h3>Ritu chatterji</h3>
        <p>Math Teacher</p>
       
      </div>
      <div class="teacher-card">
        <img src="{{ asset('img/WhatsApp Image 2024-05-07 at 9.46.37 AM.jpeg') }}" alt="Linda Reyes">
        <h3>Aman </h3>
        <p>DHM Teacher</p>
       
      </div>
      <div class="teacher-card">
        <img src="{{ asset('img/ritu.png') }}" alt="Linda Reyes">
        <h3>Ritu chatterji</h3>
        <p>Math Teacher</p>
       
      </div>
    </div>
  </section>

  <!--contact-->
  <div id="contact" style="background-image: linear-gradient(rgba(9,5,54,0.3), rgba(5,4,46,0.7)), height:600px, url{{ asset('img/contact.png') }}">


</div>

  <!---footer-->
  <footer>
    <div class="footer-container">
      <div class="footer-info">
        <p>About The INSTITUTION</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, ut.</p>
        <a href="#">Learn More</a>
      </div>
      <div class="footer-contact">
        <h3>Contact Info</h3>
        <p>2001 westbangal ranigang near anandlok</p>
        <p><a href="mailto:ricis@main.com">ricis@main.com</a></p>
        <p><a href="tel:+91934567890">+91 934 567 890</a></p>
      </div>
      <div class="footer-social">
        <h3>Social</h3>
        <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
        <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
    </div>

    
    <div class="copyright">
      <p>&copy;2017 Cookies Enlight. All Rights Reserved.</p>
    </div>
  </footer>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll('.counter-number');
    
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            
            const speed = 1; // Adjust speed as needed

            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
});


function animate_string(w) {
            var element = document.getElementById(w);
            var textNode = element.childNodes[0]; // assuming no other children
            var text = textNode.data;

            setInterval(function () {
                text = text[text.length - 1] + text.substring(0, text.length - 1);
                textNode.data = text;
            }, 500);
        }



</script>
<script>
  animate_string("w");
</script>

</body>

</html>