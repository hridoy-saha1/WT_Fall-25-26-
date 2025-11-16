<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>

<h2>Registration Form</h2>
 
  <form >
    <label>Full Name:</label>
    <input type="text" id="name" />
 
    <label>Email:</label>
    <input type="email" id="email" name="email" />
 
    <label>Password: </label>
    <input type="Password" id="password" />
 
    <label>Confirm Password: </label>
    <input type="Password" id="confirm-password">
 
    <button type="submit" id="submit">Submit</button>
    <div id="output"></div>
  </form>
 
  <!-- Output Section -->
  <div id="added">
    <h3>Course Registration</h3>
  <label>Course Name:</label>
    <input type="text" id="c-name" />
    <button type="submit" id="add">Add Course</button>
    <div id="show">
      <ul id="">

      </ul>
    </div>

  </div>
 

<script src="./javaScript/validation.js"></script>
    
</body>
</html>