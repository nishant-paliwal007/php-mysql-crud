<?php

include "./connection.php";


if(isset($_GET['delete_id'])){

   $del_id = $_GET['delete_id'];


    $delete = "delete from `employee` where id='$del_id'";

    $query = mysqli_query($conn, $delete);


    if($query){
    echo "<script> alert('Delete Your data successfully'); window.location.href='display_data.php';</script>";
    }
    else{
        echo "<script> alert('Your data is not deleted'); </script>";
    }


}

?>