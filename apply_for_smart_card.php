<?php
$fistname = filter_input(INPUT_POST,'fistname');
$lastname = filter_input(INPUT_POST,'lastname');
$middlename = filter_input(INPUT_POST,'middlename');
$gender = filter_input(INPUT_POST,'gender');
$mobnumber = filter_input(INPUT_POST,'mobnumber');
$select1 = filter_input(INPUT_POST,'select1');
$select2 = filter_input(INPUT_POST,'select2');
$clgname = filter_input(INPUT_POST,'clgname');
$adharnumber = filter_input(INPUT_POST,'adharnumber');
$photopdf = filter_input(INPUT_POST,'photopdf');
$clgbonafide = filter_input(INPUT_POST,'clgbonafide');




  if(!empty($fistname)){
    if(!empty($lastname)){
        if(!empty($middlename)){
           if(!empty($gender)){
             if(!empty($mobnumber)){
                if(!empty($select1)){
                    if(!empty($select2)){
                        if(!empty($clgname)){
                           if(!empty($adharnumber)){
                                if(!empty($photopdf)){
                                   if(!empty($clgbonafide)){

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

              $sql = "INSERT INTO register (fistname,lastname,middlename,gender,mobnumber,select1,select2,clgname,adharnumber,photopdf,clgbonafide)   
              values('$fistname','$lastname','$middlename','$gender','$mobnumber','$select1','$select2','$clgname','$adharnumber','$photopdf','$clgbonafide')"; 
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
                       }
                            else{
                                          echo "College Bonafide Certificate should not  empty";
                                   die();
                                }   
         }
         else{
              echo "Photo PDF File should not be empty";
              die();
             }        
}
       else{
       echo "Adhar should not be empty";
       die();
      }  
}
      else{
        echo "Collage name should not be empty";
        die();
       }      
}
      else{
        echo "Select2 Number should not be empty";
        die();
       } 
}
      else{
        echo "Select1 Name should not be empty";
        die();
       } 
}
      else{
        echo "Mobile Number should not be empty";
        die();
       } 
}
    else{
      echo "gender should not be empty";
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
        echo "Fist  Name should not be empty";
        die();
       } 
?>