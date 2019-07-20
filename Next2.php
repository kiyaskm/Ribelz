<?php
session_start();
$ser = "remotemysql.com";
$user = "Z0FQLKQ1gr";
$pass = "L8gCH9dvup";
$db = "Z0FQLKQ1gr";
$con = mysqli_connect($ser, $user, $pass) or die("connection failed");
$selected = mysqli_select_db($con, $db) or die("Colud not selected database");
?>
<!DOCTYPE html>
<html>
    
    <head>
         <style>
 

        input[type=Email],input[type=password], input[type=text],input[type=date],select{

            background: rgba(255,255,255,0.1);
            border: none;
            padding: 8px;
            font-size: 16px;
            height: auto;
            margin: auto;
            outline: 0;
            width: 100%;
            background-color: #e8eeef;
            color: black;
            box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            margin-bottom: 10px;


        }

        input[type=submit]{
            font-weight: bold;
            font-family: sans-serif;
            font-size: 18px;
            display: block;
            width: 100%;
            background-color:green;
            color: white;
            padding: 14px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            height: 50px;


        }
        input[type=submit]:hover{
            background-color: orange;
        }

        .error{
            color:red; 
        }

        form {
            max-width: 400px;
            margin: 10px auto;
            padding: 10px 20px 10px;
            background: #cccccc;
            border-radius: 8px;
            
            
        }


    </style>
    </head>
<body>
    <h1 style="text-align: center;color: red;">SELF ASSESMENT TEST</h1>
     <h2 style="text-align: center;color: blue;">Section 3 – Collecting personally identifiable data</h1>
<div style="position: absolute;top: 20%;left: 35%;">
        <div>
            <form action="Next2.php" method="POST">
                
                <lable for="fname" style="color:black;font-size: 18px;">First Name</lable>
                <input type="text"  name="FirstName" placeholder="Your First Name"  pattern="[A-Za-z]{1,15}" title="Please enter texts only " required>
                <lable for="lname" style="color:black;font-size: 18px;">Last Name</lable>
                <input type="text"  name="LastName" placeholder="Your Last Name" pattern="[A-Za-z]{1,15}" title="Please enter texts only "required>
                <lable for="email" style="color:black;font-size: 18px;">Email</lable>
                <input type="Email"  name="Email" placeholder="Email@Example.Com"required>
                <lable for="tnumber" style="color:black;font-size: 18px;">Mobile Phone Number</lable>
                <input type="text"  name="TelephoneNumber" placeholder="Enter your phone number Eg: 07XXXXXXXXX" pattern="[0-9]{10}" title="Enter phone number only" required>
                
                <br>

                <input type="submit" value="Continue" name="Reg">    

            </form>
        </div> 
</body>
</html>
 <?php
        if (isset($_POST["Reg"])) {

      

                $FN = $_POST["FirstName"];
                $LN = $_POST["LastName"];
                $E = $_POST["Email"];
                $T = $_POST["TelephoneNumber"];
                
                $_SESSION["FN1"]=$FN;
                 $_SESSION["LN1"]=$LN;
                  $_SESSION["E"]=$E;
                   $_SESSION["T"]=$T;
                   
                   echo '<script language="javascript">';
               
                echo "window.location='Next4.php' ";
                echo '</script>';
                
                    }
            
        
        ?>
