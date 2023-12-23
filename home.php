<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Portal</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Side Navbar Styles */
    .sidenav {
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #333;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 10px;
      text-decoration: none;
      font-size: 16px;
      color: #818181;
      display: block;
      transition: color 0.3s;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    /* Main Content Styles */
    .main {
      margin-left: 200px;
      padding: 20px;
    }

    /* Button Styles */
    .button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      outline: none;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      transition: background-color 0.3s;
      cursor: pointer;
    }

    .button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<!-- Side Navbar -->
<div class="sidenav">
  <a href="student_reg.php">Student Registration</a>
  <a href="#viewresult">View Result</a>
</div>

<!-- Main Content -->
<div class="main">
  <h1>Welcome to the Student Portal</h1>
  <p>This is the home page content.</p>

  <!-- Student Registration Section -->
  <h2 id="registration">Student Registration</h2>
  <button class="button" onclick="alert('Student registration clicked!')">Register</button>

  <!-- View Result Section -->
  <h2 id="viewresult">View Result</h2>
  <button class="button" onclick="alert('View result clicked!')">View Result</button>
</div>

</body>
</html>
