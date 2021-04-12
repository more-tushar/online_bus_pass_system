<?php
$fistname = filter_input(INPUT_POST,'fistname');
$lastname = filter_input(INPUT_POST,'lastname');
$middlename = filter_input(INPUT_POST,'middlename');
$gender = filter_input(INPUT_POST,'gender');
$mobnumber = filter_input(INPUT_POST,'mobnumber');
$adharnumber = filter_input(INPUT_POST,'adharnumber');
$studpassword = filter_input(INPUT_POST,'studpassword');
$conpassword = filter_input(INPUT_POST,'conpassword');




  if(!empty($fistname)){
    if(!empty($lastname)){
        if(!empty($middlename)){
           if(!empty($gender)){
             if(!empty($mobnumber)){
                       if(!empty($adharnumber)){
                         if(!empty($studpassword)){
                          if(!empty($conpassword)){

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
              //  echo "connection established!";
                if($studpassword == $conpassword){
                  $studpassword = md5($studpassword); 
                  
                  $sql = "INSERT INTO register (fistname,lastname,middlename,gender,mobnumber,adharnumber,studpassword,conpassword)   
                  values('$fistname','$lastname','$middlename','$gender','$mobnumber','$adharnumber','$studpassword','$conpassword')"; 
                  if($conn->query($sql)){
                    echo "New record is inserted sucessfully";
                              die();
                                        }  
                    
                                        else{
                                          echo "New should not be inserted ";
                                                    echo "Error:".$sql."<br>".$conn->error;
                                             }
                                             $conn->close();
              }
                   echo "password is not same so you should not be inserted password";     
              }
                       }
                            else{
                                          echo "Password should not be same or empty";
                                   die();
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
        echo "Mobile Number should not be empty";
        die();
       }      
}
      else{
        echo "Gender Number should not be empty";
        die();
       } 
}
      else{
        echo "Middle Name should not be empty";
        die();
       } 
}
      else{
        echo "Last Name should not be empty";
        die();
       } 
}
      else{
        echo "fist  Name should not be empty";
        die();
       } 
?>