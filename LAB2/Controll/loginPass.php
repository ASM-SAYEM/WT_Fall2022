
<?php
 
 
   if(!empty($_POST["cookies"])) {
      setcookie ("username",$_POST["un"],time()+ (86400*30));
      setcookie ("password",$_POST["password"],time()+ (86400*30));
      echo "Cookies Set Successfuly";
    } else {
      
      echo "Cookies Not Set";
    }
  

      if(isset($_REQUEST["submit"]))
    {
      if($_REQUEST["un"]=="" )
        {
          echo "<b>Username invalid</b>";
          echo"<br>";
      
       }
      else
        {
          echo $_REQUEST["un"];
          echo"<br>";
        }

}

if(isset($_REQUEST["submit"]))
{
    if($_POST["password"]=="" )
    {
        echo "<b>Password Invalid</b>";
        echo"<br>";
  
    }
    else
    {
        echo $_POST["password"];
        echo"<br>";
    }

}


      
      session_start();
      if(isset($_REQUEST["submit"])){
        if(isset($_REQUEST["un"])||(isset($_REQUEST["password"])))
          {
    
            $patientdata = file_get_contents("../data/data.json");
            $patientlogindata = json_decode($patientdata);
    
            foreach($patientlogindata as $myjsonobject)
            {
                if($myjsonobject->Username==$_REQUEST["un"] && ($myjsonobject->Password == $_REQUEST["password"]))
                { 
                   echo "Login Successfull <br>";
              return;
                  }
                 
                }
                echo "404 not found..Error in username or Password. Please try again.";
    
                
            }
            
          }

      
       
      
?>
<html>
  <body>
  <br><a href="../View/PatientRegistration.php"> <b>Return Registration form</b></a><br>
  <br><a href="../View/Patientlogin.php"> <b>Try Again to login</b></a><br>
  <img src="../image/Opps.jpg" alt="logo" width="300" height="400">
  </body>
      
     </html>
