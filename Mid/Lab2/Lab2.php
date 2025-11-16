<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>


 
  <form >
    <h2> Student Registration</h2>
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
 
  <div id="added">
    <h2>Course Registration</h2>
  <label>Course Name:</label>
    <input type="text" id="c-name" />
    <button type="submit" id="add">Add Course</button>
    
      <div id="course-list">


      </div>
    

  </div>
 

<script src="./javaScript/validation.js"></script>
    
</body>
</html>