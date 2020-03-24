<?php

 include_once '../config/dbconnect.php';

    $id = time();
    $account = $_POST['accType'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email'"; 

    $result = $conn->query($sql);

    $row = array();

    if  ($result->num_rows > 0)
    {
        echo "User Already Exist... Failed";
    } 
    else {
       $sql = "INSERT INTO `user`(`id`, `name`, `accountType`, `address`, `email`, `password`, `phone`)
                    VALUES ($id,$name,$account,$location,$email,$password,$phone)";

       // echo $sql;

      $result = $conn->query($sql);

      if ($result){
           echo "successful";
      }
      else{
           echo "failed";
      }
    }
 //http://localhost/lesson/admin/add_category.php?category=antibotics

 $conn->close();

?>