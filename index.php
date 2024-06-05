<?php
  include "./connection.php";

  include "./insert.php"

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">

    <h2>Enter Your Information</h2>


<form method="POST">   

  <div>
    <label for="fname"> First Name: </label><br>
    <input type="text" id="fname" name="fname" placeholder="First Name" required><br>
  </div>

  <br>

  <div>
    <label for="lname"> Last Name: </label><br>
    <input type="text" id="lname" name="lname" placeholder="Last Name" required><br>
  </div>

  <br>

  <div>
    <label for="email"> Email: </label><br>
    <input type="email" id="email" name="email" placeholder="Email" required><br>
  </div>

  <br>

  <div>
    <label for="mobile"> Mobile: </label><br>
    <input type="number" id="mobile" name="mobile" placeholder="Mobile No." required><br>
  </div>
  <br>

  <div>
    <label for="age"> Age: </label><br>
    <input type="number" id="mobile" name="age" placeholder="Age" required><br>
  </div>
  <br>





  <div>
    <label for="gender"> Gender: </label><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>

    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>

    <input type="radio" id="female" name="gender" value="Others">
    <label for="female">Others</label><br>
  </div>


  <br>

  

  <div>
    <label for="Technologies"> Technologies: </label><br> 

    <input type="checkbox" id="option1" name="option[]" value="HTML">
    <label for="option1">HTML</label><br>

    <input type="checkbox" id="option2" name="option[]" value="CSS">
    <label for="option2">CSS</label><br>

    <input type="checkbox" id="option3" name="option[]" value="BOOTSTRAP">
    <label for="option3">BOOTSTRAP</label><br>

    <input type="checkbox" id="option4" name="option[]" value="SQL">
    <label for="option4">SQL</label><br>

    <input type="checkbox" id="option5" name="option[]" value="JAVA">
    <label for="option5">JAVA</label><br>

    <input type="checkbox" id="option6" name="option[]" value="PHP">
    <label for="option6">PHP</label><br>

    <input type="checkbox" id="option7" name="option[]" value="Dot Net">
    <label for="option7">Dot Net</label><br>

    <input type="checkbox" id="option8" name="option[]" value="C#">
    <label for="option8">C#</label><br>

  </div> <br>



  <div>
  <label for="city">Choose a city:</label>
  <select id="city" name="city" required>    
    <option value="Nagpur">Nagpur</option>
    <option value="Pune">Pune</option>
    <option value="Bangalore">Bangalore</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Delhi">Delhi</option>
    <option value="Hyderabad">Hyderabad</option>
  </select>
  </div>

  <br>



  <button type="submit" name="submit_f">Submit</button>
  <button type="reset" >Reset</button>
 
</form>



</head>
<body>
    
</body>
</html>