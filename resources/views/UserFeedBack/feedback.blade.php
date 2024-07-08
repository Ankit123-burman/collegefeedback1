<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>College Feedback Form</title>
<link rel="stylesheet" href="{{ asset('css/feedback.css')}}">
</head>
<body>
  <!-- Navigation bar -->
  <nav>
    <!--- LOGO SECTION ----->
    <img src="{{ asset('img/logo.png') }}" class="logo">
    <div class="navbar">
      <ul>
        <li><a href="{{ asset('UserFeedBack/Home') }}">Home</a></li>
        <li><a href="{{ asset('UserFeedBack/about') }}">About</a></li>
        <li><a href="{{ asset('UserFeedBack/contectus') }}">Contact Us</a></li>
        <li><a href="{{ asset('UserFeedBack/Login') }}" id="login">Logout</a></li>
      </ul>
    </div>
  </nav>

  <div class="feedback-form-container">
    <!--- LOGO SECTION ----->
    <img src="{{ asset('img/logo.png') }}" class="logo2">
    
    <h1>College Feedback Form</h1>
    <form id="feedback-form" action="{{url('UserFeedBack/feedback')}}" method="post">
      @csrf
      <div class="input-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <span>
          @error('name')
          {{$message}}
          @enderror
        </span>
      </div>
      <div class="input-group">
        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required>
        <span>
          @error('course')
          {{$message}}
          @enderror
        </span>
      </div>
      <div class="input-group">
        <label for="year">Year/Semester:</label>
        <input type="text" id="year" name="year" required>
        <span>
          @error('year')
          {{$message}}
          @enderror
        </span>
      </div>
      <div class="input-group">
        <label for="content-rating">Course Content Rating:</label>
        <select id="content-rating" name="content_rating">
          <option value="excellent">Excellent</option>
          <option value="good">Good</option>
          <option value="average">Average</option>
          <option value="poor">Poor</option>
        </select>
      </div>
      <div class="input-group">
        <label for="campus-life-rating">Campus Life:</label>
        <select id="campus-life-rating" name="campus_life_rating">
          <option value="excellent">Excellent</option>
          <option value="good">Good</option>
          <option value="average">Average</option>
          <option value="poor">Poor</option>
        </select>
      </div>
      <div class="input-group">
        <label for="faculty-rating">Faculty:</label>
        <select id="faculty-rating" name="faculty_rating">
          <option value="excellent">Excellent</option>
          <option value="good">Good</option>
          <option value="average">Average</option>
          <option value="poor">Poor</option>
        </select>
      </div>
      <div class="input-group">
        <label for="campus-rating">College Campus:</label>
        <select id="campus-rating" name="campus_rating">
          <option value="excellent">Excellent</option>
          <option value="good">Good</option>
          <option value="average">Average</option>
          <option value="poor">Poor</option>
        </select>
      </div>
      <div class="input-group">
        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments" rows="4"></textarea>
      </div>
      <button type="submit">Submit Feedback</button>
    </form>
  </div>
</body>
</html>
