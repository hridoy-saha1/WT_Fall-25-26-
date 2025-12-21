<!DOCTYPE html>
<html>
<head>
   
    <title>Document</title>
</head>
<body>
    <?php 
   $nameError = "";
 $nameOutput = ""; 
$emailError = "";
$emailOutput = "";
$dobError = "";
$dd=$_POST["dd"]??"";
$mm=$_POST["mm"]??"";
$yyyy=$_POST["yyyy"]??"";
$dobOutput = "";
$genderError = "";
$genderOut ="";
$bgError="";
$bgOut = "";

   if($_SERVER['REQUEST_METHOD']=="POST"){

    if(empty($_POST["name"])){
        $nameError = "Fill Name";
   }
   else{
    $name = $_POST["name"];
    if(!preg_match( "/^[a-zA-Z ]*$/", $name)){
        $nameError = "invalid Format";
   }
   else{
    $nameOutput=$name;
   }
   }

 if(empty($_POST["email"])){
    $emailError = "Write Email";
}
else{
    $email = $_POST["email"];   
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailError = "Invalid Email";
    }
    else{
        $emailOutput=$email;    
    }
}
     if(empty($dd)|| empty($mm)||empty($yyyy)){

        $dobError = "Invalid DoB";
     }
     elseif($dd<1||$dd>31|| $mm<1||$mm>12||$yyyy<1953||$yyyy>1998){
        $dobError = "Invalid Range";
     }
     else{
        $dobOutput="$dd/$mm/$yyyy";
     }


    if(!isset($_POST["gender"])){
        $genderError = "Select Gender";
    }
    else{
        $genderOut = $_POST["gender"];
    }

   if(empty($_POST["blood"])){
    $bgError = "Select Blood Group";
   }
   else{
    $bgOut = $_POST["blood"];
   }

   $degreeErr = "";
    $degreeOut ="";
   if (!isset($_POST["degree"]) || count($_POST["degree"]) < 2) {
        $degreeErr = "Select at least two";
    } else {
        $degreeOut =$_POST["degree"];
    }





   }




    ?>

<form method="post">
    Name: <input type="text" name="name">
    <p><?php echo $nameError ?></p>

    


    Email: <input type="text" name="email">
    <p><?php echo $emailError ?></p>
   
    


   Date Of Birth: 
   <input type="number" name="dd" placeholder="DD">
   <input type="number" name="mm" placeholder="MM">
   <input type="number" name="yyyy" placeholder="YYYY">
   <p><?php echo $dobError ?></p>
   
   

   Gender:
   <input type="radio" name="gender" value="Male">Male
   <input type="radio" name="gender" value="Female">Female
   <input type="radio" name="gender" value="Other">Other
    <p><?php echo $genderError ?></p>
   
   

      Blood Group:
    <select name="blood">
        <option value="">Select</option>
        <option>A+</option>
        <option>A-</option>
        <option>B+</option>
        <option>B-</option>
        <option>O+</option>
        <option>O-</option>
    </select>
      <p><?php echo $bgError ?></p>
   
      Degree:
    <input type="checkbox" name="degree[]" value="SSC"> SSC
    <input type="checkbox" name="degree[]" value="HSC"> HSC
    <input type="checkbox" name="degree[]" value="BSc"> BSc
    <input type="checkbox" name="degree[]" value="BSc"> MSc





    <input type="submit" value="Submit">
</form>

<div>
    <h3>Output: </h3>
    <p><?php echo $nameOutput ?></p>
    <p><?php echo $emailOutput ?></p>
    <p><?php echo $dobOutput ?></p>
    <p><?php echo $genderOut ?></p>
    <p><?php echo $bgOut ?></p>
    <p><?php echo implode(" ", $degreeOut)  ?></p>



</div>






</body>
</html>