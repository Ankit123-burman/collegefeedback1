<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/dashboard.css')}}">
</head>
<body>
  <nav>
    <!---LOGO SECTION ----->
    <img src="{{ asset('img/logo.png') }}" class="logo">
    <div class="NAVBAR">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Posts</a></li>
        <li><a href="{{ asset('UserFeedBack/contactus') }}">Contact Us</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <!-- First div -->
    <div class="box1">
      <h2>TotalFeedback</h2>
      <p>100</p>
    </div>
    <!-- Second div -->
    <div class="box2">
      <h2>Remaning Feedback</h2>
      <p>  {{ $remaining }}</p>
    </div>
    <!-- Third div -->
    <div class="box3">
      <h2>Given Feedback</h2>
      <p> {{ $givenFeedback }}</p>
    </div>


  </div>
  
  <table class="table">
    <thead class="thead-dark">
      <tr>
      <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Year</th>
                    <th scope="col">Content Rating</th>
                    <th scope="col">Campus Life Rating</th>
                    <th scope="col">Faculty Rating</th>
                    <th scope="col">Campus Rating</th>
                    <th scope="col">Comments</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>

        
      </tr>
    </thead>
    <tbody>
      @foreach($feedbacks as $tablefeed)
      <tr>
      <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $tablefeed->id }}</td>
                    <td>{{ $tablefeed->name }}</td> 
                    <td>{{ $tablefeed->course }}</td> 
                    <td>{{ $tablefeed->year }}</td> 
                    <td>{{ $tablefeed->content_rating }}</td>
                    <td>{{ $tablefeed->campus_life_rating }}</td> 
                    <td>{{ $tablefeed->faculty_rating }}</td> 
                    <td>{{ $tablefeed->campus_rating }}</td> 
                    <td>{{ $tablefeed->comments }}</td> 
                    <td>{{ $tablefeed->status }}</td> 
                    <td>{{ $tablefeed->created_at }}</td>
                    <td>{{ $tablefeed->updated_at }}</td> 
                </tr>
        @endforeach
      </tr>
    </tbody>
  </table>

</body>

</html>