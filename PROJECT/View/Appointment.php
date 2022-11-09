<?php 
include ("../Controll/AppointmentControll.php");
?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
        <?php 
        include ("PatientProfile.php");
        ?>	
       
<tr align="center">
            <br>
            <td for="pname"><b>Patient Name</b></td>
            
            <td>
                <input type="text" id="pname" name="pname" placeholder="Enter Patient's First name">

            </td>
        </tr>

        <label for="doctor"><b>Want to get an appointment of</b> </label>

<select id="doctor">
  <option  name="Cardiologists" value="Cardiologists">Cardiologists</option>
  <option name="Dermatologists" value="c">Dermatologists</option>
  <option name="Endocrinologists" value="Endocrinologists">Endocrinologists</option>
</select>

<tr align="center">
                <td for="pdoctor"><b>Preferable Doctor's Name</b></td>

                <td>
                    <input type="text" id="pdoctor" name="Fnapdoctorme" placeholder="Enter Preferable doctor name">

                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" name="submit">
                    <input type="reset"><br>
</td>
</tr>

</body>
</html>
