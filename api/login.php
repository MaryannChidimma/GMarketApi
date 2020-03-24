<?php

include_once '../config/dbconnect.php';

$username = $_GET['email'];
$password = $_GET['password'];
$type = $_GET['type'];

$pass = md5($password);
$sql = $conn->prepare("SELECT * FROM user
  WHERE email = ? 
AND password =? AND type = ?");
$sql->bind_Param('sss',$username,$pass,$type);

 $sql->execute();



   //echo $sql;
$result = $sql->get_result();
    //$result = $conn->query($sql);

    $row = array();


    if  ($result)
    {
        if($result->num_rows > 0){
           while($r = $result->fetch_array(MYSQL_ASSOC)) {
              $row[] = $r;
              /* foreach ($row as $key => $value) {
                     $t = date('Y-m-d');
           
                     $i = $value["id"];

                      $sql = "UPDATE `users` SET `lastLogin`='$t'
                       WHERE `id`= $i";
         
                       $re = $conn->query($sql);

                }*/                                                                                                                                                                                                                 
        
           }
           echo json_encode($row);
        }
        else {
        // echo json_encode(array('success' => 0)) ;

        echo "Login failed";
        }
       //
    } 
    else {
        // echo json_encode(array('success' => 0)) ;

        echo "error";
    }

 $conn->close();
?>                                                                                                      