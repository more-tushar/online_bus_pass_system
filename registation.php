<?php
$cardnumber = filter_input(INPUT_POST,'cardnumber');
$adharnumber = filter_input(INPUT_POST,'adharnumber');
$studentpassword = filter_input(INPUT_POST,'studentpassword');

// echo "user id is -->"+$userid;
if(!empty($cardnumber)){
       if(!empty($adharnumber)) {
           if(!empty($studentpassword)){

        $host ="localhost";
        $dbusername = "root";
        $dppassword ="";
        $dbname = "loginform";
        //connection
        $conn = new mysqli($host,$dbusername,$dppassword,$dbname);
        
       if(mysqli_connect_error()){
                                   die('Connect Erro('.mysqli_connect_error().')'.mysqli_connect_error());
                                 }
            else{
               echo "connection established!";

$sql = "INSERT INTO account (cardnumber,adharnumber,studentpassword) values('$cardnumber','$adharnumber','$studentpassword')";
                   if($conn->query($sql)){

                                echo "New record is inserted sucessfully";

                                         }
               else{
                          echo "Error:".$sql."<br>".$conn->error;
                   }
                          $conn->close();
               }
                             }
                            else{
                                          echo "Password should not be empty";
                                          die();
                                }   
         }
         else{
              echo "Adhar should not be empty";
              die();
             }        
}
else{
       echo "Card Number should not be empty";
       die();
      }        
?>