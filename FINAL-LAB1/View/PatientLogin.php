<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body align="center">
<?php 
header("location:../Controll/loginPass.php");
?>
  <table>
    <form action="" method="POST">
    <img src="../image/welcome.jpg" alt="welcome" width="300" height="400">
    <tr align="center">
       <td for="Userame"><b>Userame</b></td>
      </td> 
    <td>
        <input type="text" name="un"  placeholder="Enter username"><br>
    </td>
</tr>
<tr align="center">
                <td for="password"><b>Password</b></td>

                <td>
                    <input type="password" id="password" name="password"  placeholder="Enter Your 8 digit Password" minlength="8" maxlength="8">


                </td>
              </tr>

              <tr>
                <td>
              </p><input type="checkbox" name="cookies" /> Accept Cookies</p>
                </td>
              </tr>
    <tr>
        <td>
            <button type="submit" name="submit">Login</button>
           
            <a href="../View/Home.php">HOME</a>

        </td>
    </tr>
    </form>
  </table>
</body>
</html>
<html>
  <body>
  <br><a href="../View/PatientRegistration.php"> Return Registration form</a> <br>
  </body>
      
     </html>

     <?php
    include ("Footer.php");
    ?>