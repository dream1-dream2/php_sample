<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f1;
    }

    /* Registration Form Styles */
    .registration-form {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-size: 16px;
      margin-bottom: 5px;
      color: #333;
    }

    input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    /* Submit Button Styles */
    .submit-button {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .submit-button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<!-- Registration Form -->
<div class="registration-form">
  <h2>Student Registration Form</h2>
  <form action="student_act.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
      <label for="KTU-ID">KTUID:</label>
      <input type="text" id="id" name="ktuid" required>
    </div>

    <div class="form-group">
      <label for="age"> AGE:</label>
      <input type="number" id="age" name="age" required>
    </div>

    <div class="form-group">
      <label for="GENDER">GENDER:</label>
    
      <label style="font-size: 16px; display: inline-block; margin-right: 10px;">Male</label>
    <input type="radio" name="gender" id="male" value="male" style="display: inline-block; margin-right: 10px;">


    <label style="font-size: 16px; margin-right: 10px;">Female</label>
    <input type="radio" name="gender" id="female" style="margin-right: 10px;">

    </div>

    <button type="submit" class="submit-button">Submit</button>
  </form>
</div>

</body>
</html>
