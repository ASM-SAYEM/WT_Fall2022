<?php
class database
{
    function openCon()
    {
        $conn=new mysqli("localhost","root","","patient");//1.servername,2.username,3.password,4.databasename
        return $conn; // return the function to $conn obj
    }

    function insertPatientRegistrationData( $conn,$tablename,$fname,$lname,$Fname,$Mname,$un,$password,$Gender,$date,$age,$no,$address,$postcode,$ename,$RP,$eno,$WRTP,$fileUpload,$email)
    {
        $sql="INSERT INTO $tablename (FirstName,LastName,FatherName,MotherName, Username, Password, Gender, DateofBirth, Age,MobileNumber,Address ,Postcode ,EmergencyContactName ,RelationshipToPatient ,EmergencyContactNumber ,Reffered  ,Prescription ,EMail  ) VALUES 
        ('$fname','$lname','$Fname','$Mname','$un','$password','$Gender',$date,$age,'$no','$address',$postcode,'$ename','$RP','$eno','$WRTP','$fileUpload' , '$email'  )"; //View->cpntroller->database,variable data is here,so that where function will be call data will be pass through this function
        if( $conn->query($sql)===TRUE)    // sql string pass in(inner) connecting obj
        {
            echo "data is inserted into table.";
        }
        else
        {
            echo "Error".$conn->error;
        }
    }

function checkPatient($conn,$tablename,$un,$password)
{
    $sql="SELECT * FROM $tablename WHERE Username ='$un' AND Password='$password' ";
    $result=$conn->query($sql);
    return $result;
    if($result->num_rows>0)  //num_row comes from mysqli
    {
        return true;
    }
    else{
        return false;
    }
}

function showAll($conn,$tablename)
{
     $sql="SELECT * FROM $tablename";
     $result=$conn->query($sql);
     return $result;

}

    function closeCon($conn)
    {
        $conn->close();
    }
}

?>