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
                <form action="Next4.php" method="POST">

                    <lable for="lname" style="color:black;font-size: 18px;">Current Work Place</lable>
                    <input type="text"  name="Work" placeholder="Work place" pattern="[A-Za-z]{1,25}" title="Please enter texts only "required>

                    <label style="color:black;font-size: 18px;">Select Job Role</label>
                    <select name="Role" style="width: 415px;">
                        <option value="Marketing / Branding">Marketing / Branding</option>
                        <option value="Digital Manrketing - Brand Side">Digital Manrketing - Brand Side</option>
                        <option value="Digital Marketing - Agency Side">Digital Marketing - Agency Side</option>
                        <option value="Marketing Student">Marketing Student</option>
                        <option value="Not Employed">Not Employed</option>
                        <option value="Entreprenur / Business Owner">Entreprenur / Business Owner</option>
                        <option value="Other">Other</option>


                    </select>


                    <label for="usern" style="color:black;font-size: 18px;">Your Designation</label>
                    <input type="text"  name="Desig" placeholder="Designation"  pattern="[A-Za-z]{1,25}" title="Please enter texts only "       required>

                    <br>

                    <input type="submit" value="See My Results" name="Reg">    

                </form>
            </div> 
            </body>
            </html>
            <?php
            if (isset($_POST["Reg"])) {



                $FN = $_SESSION["FN1"];
                $LN = $_SESSION["LN1"];
                $E = $_SESSION["E"];
                $T = $_SESSION["T"];
                $WP = $_POST["Work"];
                $R = $_POST["Role"];
                $D = $_POST["Desig"];



                if (isset($_POST["Reg"])) {

                    $Q = "Insert into user(FName,LName,Email,PhoneNo,Work,Role,Designation)values('$FN',  '$LN','$E','$T','$WP','$R','$D')";
                    $user_check_query = "SELECT * FROM user WHERE  Email='$E' LIMIT 1";
                    $result = mysqli_query($con, $user_check_query);
                    $user = mysqli_fetch_assoc($result);


                    if ($user) { // if user exists
                        if ($user['Email'] === $E) {

                            echo '<script language="javascript">';
                            echo 'alert("Email already exists")';
                            echo '</script>';
                            echo '<script language="javascript">';

                            echo "window.location='Next2.php' ";
                            echo '</script>';
                        }
                    } else if (mysqli_query($con, $Q)) {



                        $Ex = 0;

                        $Query2 = "select * from exprience";
                        $result1 = mysqli_query($con, $Query2);
                        while ($row = mysqli_fetch_assoc($result1)) {

                            $Ex = $Ex + $row['Points'];
                        }

                        $avg = ($Ex / 29) * 100;


                        $Ex1 = 0;

                        $Query3 = "select * from skill";
                        $result2 = mysqli_query($con, $Query3);
                        while ($row = mysqli_fetch_assoc($result2)) {

                            $Ex1 = $Ex1 + $row['Points'];
                        }

                        $avg1 = ($Ex1 / 106) * 100;


                        If ($avg < 40 && $avg1 < 50) {

                            $Up = "Update User Set ExPoints='$avg'  , SkPoints='$avg1'   where Email='$E'      ";
                            $Re = mysqli_query($con, $Up);
                            echo '<script language="javascript">';
                            echo "window.location='Screen1.php' ";
                            echo '</script>';
                        } else If ($avg < 40 && $avg1 > 49) {
                            $Up = "Update User Set ExPoints='$avg'  , SkPoints='$avg1'   where Email='$E'      ";
                            $Re = mysqli_query($con, $Up);
                            echo '<script language="javascript">';

                            echo "window.location='Screen2.php' ";
                            echo '</script>';
                        } else If ($avg >= 41 && $avg <= 60 && $avg1 > 49) {
                            $Up = "Update User Set ExPoints='$avg'  , SkPoints='$avg1'   where Email='$E'      ";
                            $Re = mysqli_query($con, $Up);
                            echo '<script language="javascript">';
                            echo "window.location='Screen3.php' ";
                            echo '</script>';
                        } else If ($avg >= 61 && $avg <= 80 && $avg1 >= 49 && $avg1 <= 80) {
                            $Up = "Update User Set ExPoints='$avg'  , SkPoints='$avg1'   where Email='$E'      ";
                            $Re = mysqli_query($con, $Up);
                            echo '<script language="javascript">';
                            echo "window.location='Screen4.php' ";
                            echo '</script>';
                        } else If ($avg >= 61 && $avg <= 80 && $avg1 >= 81) {

                            $Up = "Update User Set ExPoints='$avg'  , SkPoints='$avg1'   where Email='$E'      ";
                            $Re = mysqli_query($con, $Up);
                            echo '<script language="javascript">';
                            echo "window.location='Screen5.php' ";
                            echo '</script>';
                        }
                    } else {

                        echo '<script language="javascript">';
                        echo 'alert("Not Saved Successfully")';
                        echo '</script>';
                    }
                }
            }
            ?>
