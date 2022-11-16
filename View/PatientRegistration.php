<?php
include("../Controll/Registration.php");
?>
<!DOCTYPE html>
<head>
    
</head>
<body >
    
    <form action="" method="POST" enctype="multipart/form-data">
    <table>
    <h1 align="center">NEW PATIENT'S REGISTRATION FORM</h1>
            <img src="../image/logo.jpg" alt="logo" width="300" height="400">

    <tr align="center">
            
            <td for="fname"><b>Patient Name</b></td>
            
            <td>
                <input type="text" id="fname" name="fname" placeholder="Enter Patient's First name">
                <input type="text" id="lname" name="lname" placeholder="Enter Patient's Last name">

            </td>




        </tr>
        <tr align="center">
                <td for="Fname"><b>Father Name</b></td>

                <td>
                    <input type="text" id="Fname" name="Fname" placeholder="Enter Patient's father name">

                </td>


            </tr>

            <tr align="center">
                <td for="Mname"><b>Mother name</b></td>
                <td>
                    <input type="text" id="Mname" name="Mname" placeholder="Enter Patient's mother name">



                </td>

            </tr>


            <tr align="center">
                <td for="Userame"><b>Userame</b></td>
                <td>
                <input type="text" name="un" required placeholder="Enter username"><br>
                </td>
            </tr>

            <tr align="center">
                <td for="password"><b>Password</b></td>

                <td>
                    <input type="password" id="password" name="password" required placeholder="Enter Your 8 digit Password" minlength="8" maxlength="8">


                </td>
              </tr>

              <tr align="center">
                <td for="Gender"><b>Gender</b></td>

                <td>

                    <input type="radio" id="male" name="Gender" value="male">Male
                    <input type="radio" id="female" name="Gender" value="Female">Female
                    <input type="radio" id="other" name="Gender" value="other">other


                </td>

              </tr>
              
    
            <tr align ="center">

                <td><b>Date of birth</b></td>
                <td>

                <input type="date" id="date" name="date">
                </td>

            </tr>

            <tr align ="center">

                <td><b>Age</b></td>
                 <td>

                <input type="number" name="age" placeholder="Enter Patient's Age">
                </td>

            </tr>
            <tr align="Center">

            <td for="no"><b>Mobile number who tooks the patient</b></td>

            <td>
                 <input type="text" id="no" name="no" required placeholder="Enter Patient's Mobile No"  minlength="11" maxlength="11">
            </td>

            </tr>
            <tr align="center">
                <td for="Address"><b> Adress</b></td>

                <td>
                    <textarea input type="text" id="address" name="address" placeholder="Patient's Address" rows="4" cols="20"></textarea>
                </td>

              </tr>

              <tr align="center">
                <td for="postcode"><b>Postcode</b></td>

                <td>
                   <input type="number" id="postcode" name="postcode" placeholder="Enter Postcode">
                </td>
              </tr>

              <tr align="Center">
               
                  <td for="Ename"><b>Emergency Contact name</b></td>

                <td>
                  <input type="text" id="Ename" name="Ename" required placeholder="Enter name">
                </td>
              </tr>

             <tr align="Center">
                <td for="RP"><b>Relationship To patient</b></td>
                    <td>
                        <input type="text" id="RP" name="RP" required placeholder="who are you to the patient">
                    </td>
            </tr>
                <tr align="Center">

                <td for="eno"><b>Emergency contact number</b></td>

                <td>
                    <input type="text" id="eno" name="eno" required placeholder="Enter Relative Mobile No" minlength="11" maxlength="11">
                </td>
                </tr>

              
    <td><b><u><i>Additional Information</b></u></i></td>
                <tr align="center">
                    <td for="Referred"><b>Referred by</b></td>

                        <td>

                            <input type="checkbox" id="Doctor" name="Doctor" value="Doctor">Doctor
                            <input type="checkbox" id="Family" name="Family" value="Family">Family
                            <input type="checkbox" id="Internet" name="Internet" value="Internet">Internet
                            <input type="checkbox" id="Other" name="Other" value="Other">Other


                </td>

              </tr>

              <tr align="center">
                <td for="WRTP"><b>Name of person who referred the patient's</b></td>
                    <td>
                        <input type="text" id="WRTP" name="WRTP" placeholder="Optional">



                     </td>
              </tr>

            <tr align="center">
                <td for="fileUpload"><b>Upload Your Previous Prescription</b></td>
                    <td>
                        <input type="file" name="fileUpload" id="fileUpload" placeholder="upload your file here as pdf or image">
                    </td>
            </tr>

              <tr align="center">
                <td for="email"><b>EMail Id</b></td>

                <td>
                    <input type="email" id="email" name="email"  placeholder="Enter Your Email">


                </td>


              </tr>


            <tr align="center">
                <td>
                        <input type="submit" name="submit">
                        <input type="reset"><br>
                        <br><a href="http://localhost/PROJECT/View/PatientLogin.php"><b>Is Your Registration Done? LOG IN<b></a><br>
                        <br><a href="../View/Home.php"><b>HOME</b></a> <br>

                </td>
            </tr>
    </table>
    </form>
    <?php
    include ("Footer.php");
    ?>
   
</body>
</html>