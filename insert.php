<?php
if(isset($_POST['submit_f'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];

    $city = $_POST['city'];
    
    //radio
    $gender = $_POST['gender'];

    // checkbox
    $checkbox = $_POST['option'];
    $check = implode(',', $checkbox);  //implode is used to convert array into string and "," is used to separate the items which we have chosen from checkbox.
  
  
  
    $query = "INSERT INTO employee(`FirstName`,`Lastname`,`Email`,`Mobile`,`Age`, `Gender`, `Technologies`, `city`) VALUES('$fname','$lname','$email','$mobile','$age', '$gender', '$check', '$city')";
  
  
    $insert = mysqli_query($conn, $query);
  
  
    if($insert){
      echo "<script> alert('insert'); window.location.href='display_data.php';</script>";
    }
    else{
        echo "<script> alert('not insert'); </script>";
    }

  }


?>