    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            body {
                background-color: rgb(0, 55, 71);
                margin: 0;
                padding-bottom: 100px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

        .logo {
    height: 40px;
    width: 200px;
    
    }
    /***MENU SECTION***/
    nav{
    position: fixed;
    width: 200vh;
    height: 60px;
    background-color: #fff;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 0vw 5vw;
    box-shadow: 2px 2px 10px rgba(0,0,0,0.15);

    }
    nav .NAVBAR ul{
    display: flex;
    justify-content: flex-end;
    align-items: center;
    
    }
    nav .NAVBAR ul li{
    list-style: none;
    margin-left: 20px;
    
    }
    nav .NAVBAR ul a{
    text-decoration: none;
    color: rgb(21,21,100);
    font-size: 20px;
    font-weight: 500;
    font-family: "Ovo", serif;
    font-weight: 400;
    font-style: normal;
    }
    nav .NAVBAR ul a:hover{
    color:rgb(21,21,100);
    transition: 0.3s;
    }
    
    #login{
    background-color:  rgb(219, 188, 50);
    border-radius: 10px;
    }
    
    
    nav a {
    color: rgb(21, 21, 100);
    text-decoration: none;
    font-size: 18px;
    padding: 2px 10px;
    font-weight: 500;
    font-family: Arial, sans-serif;
    }
    nav a:hover{
    background-color: rgb(219, 188, 50);
    color: rgb(21, 21, 100);
    border-radius: 20px;
    transition: 0.3s;
    
    }

    .background-image {
            background-color: grey;
            background-color:rgb(0, 55, 71);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .background-image::before {
            content: "";
            background-image: inherit;
            filter: brightness(90%);
            z-index: -1;
        }

        .content {
            width: 80%;
            text-align: center;
            margin-top: 20rem;
        }


        .content h1 {
            color:yellow;
            font-size: 2rem;
            margin-bottom:1rem;
            filter: brightness(1);


        }




        .summary {
            color: white;
            font-size: 1.2rem;
            margin-bottom: 11rem;
            text-shadow: 2px 2px 8px;
            filter: brightness(1.75);
        }

        .cards-container {
            display: flex;
            justify-content: space-between;
        }

        .card {
            background-color: antiquewhite;
            padding: 1rem;
            border-radius: 10px;
            flex-basis: 60%;
            margin: 0 1rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        .card img {
            width: 60px;
            border-radius: 50%;
            margin-bottom: 40px;
        }

        .card h2 {
            margin: auto;
            color: black;
            margin-bottom: 1rem;
            border-bottom: 2px solid black;
            width: 180px;
        }

        .card:hover {
            background-color: lightblue;
        }

        .card p {
            color: black;
            line-height: 1.5;
        }



    </style>

    <body>
        <!-- NAVBAR START -->
    <nav>
        <!---LOGO SECTION ----->
        <img src="{{ asset('img/logo.png') }}" class="logo">
        <div class="NAVBAR">
        <ul>
            <li><a href="{{ asset('UserFeedBack/Home') }}">Home</a></li>
            <li><a href="{{ asset('UserFeedBack/about') }}">About</a></li>
            <li><a href="{{ asset('UserFeedBack/contectus') }}">Contact Us</a></li>
            <li><a href="{{ asset('UserFeedBack/Login') }}">Logout</a></li>
        </ul>
        </div>
    </nav>


        <div class="background-image">
            <div class="content">
                <h1>ABOUT US</h1>
                <div class="summary">
                    <p>Welcome to the College Feedback System. Our goal is to provide a platform where students can share
                        their feedback about various aspects of the college experience. We believe in continuous improvement
                        and value the input of our students to help us achieve excellence.</p>
                </div>


    </body>

    </html>

                    <div class="cards-container">
                    <div class="card">
                        <img src="https://tse2.mm.bing.net/th?id=OIP.i3Uk8aajh-8rPBVvkCGxBwHaF7&pid=Api&P=0&h=220" alt="">
                        <h2>Our Mission</h2>
                        <p>
                            To establish a transparent medium between the college and the students by taking the valuable
                            feedback of our students and work on it.
                        </p>
                    </div>
                    <div class="card">
                        <img src="https://tse2.mm.bing.net/th?id=OIP.69k9koGr925aqD2uujSQpgAAAA&pid=Api&P=0&h=220" alt="">
                        <h2>Our Group</h2>
                        <p>1.PRIYANSHU BURMAN<br>
                            2.AMIT MODI<br>
                            3.SUMIT HAZRA <br>
                            4.SARA SINGH<br>
                            5.AYUSH SINGH</p>
                    </div>
                    <div class="card">
                        <img src="https://tse2.mm.bing.net/th?id=OIP.KjTVxHQRRIQIEkou5aydZgHaF7&pid=Api&P=0&h=220" alt="">
                        <h2>Our Aim</h2>
                        <p>Our Aim is to give our students better performance in all aspects and for that feedback is the
                            most effective way of doing it.
                    </div>
                </div>
            </div>