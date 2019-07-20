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
<title>Self Test</title>


<style>
                form {
                max-width: 300px;
                margin: 10px auto;
                padding: 10px 20px;
                background: #cccccc;
                border-radius: 8px;
                color: black;
            }

            h1 {
                margin: 0 0 30px 0;
                text-align: center;
            }
            input[type="radio"]{
                
                padding: 8px;
                font-size: 18px;
                height: auto;
                
              
                margin-bottom: 30px;
                
                box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
              
            }
            input[type="text"],
            
            input[type="password"],
            input[type="date"],
            input[type="datetime"],
            input[type="email"],
            input[type="number"],
            input[type="search"],
            input[type="tel"],
            input[type="time"],
            input[type="url"],
            textarea,
            select {
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
                margin-bottom: 30px;
            }

            input[type="radio"],
            input[type="checkbox"]

            {
                margin: 0 4px 8px 0;
            }

            select {
                padding: 6px;
                height: 32px;
                border-radius: 2px;
            }

            button {
                padding: 19px 39px 18px 39px;
                color: #FFF;
                background-color: #ff9900;
                font-size: 18px;
                text-align: center;
                font-style: normal;
                border-radius: 5px;
                width: 100%;
                border: 1px solid #ff9900;
                border-width: 1px 1px 3px;
                box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
                margin-bottom: 10px;
            }
            button:hover{
                color: #FFF;
                background-color: #009933;
                border: 1px solid #4bc970;
                border-width: 1px 1px 3px;
            }
            fieldset {
                margin-bottom: 30px;
                border: none;
            }

            legend {
                font-size: 1.4em;
                margin-bottom: 10px;
            }

            label {
                display: block;
                margin-bottom: 8px;
            }

            label.light {
                font-weight: 300;
                display: inline;
            }

            .number {
                background-color:#009900;
                color: #fff;
                height: 30px;
                width: 30px;
                display: inline-block;
                font-size: 0.8em;
                margin-right: 4px;
                line-height: 30px;
                text-align: center;
                text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                border-radius: 100%;
            }



            form {
                max-width: 480px;
            }



</style>
</head>
<body>

    <h1 style="text-align: center;color: red;">SELF ASSESMENT TEST</h1>
     <h2 style="text-align: center;color: blue;">Section 1 - Assessing the experience level</h1>
    
     <form action="Next1.php" method="POST">
         
         <label style="font-size: 18px;">Have you any work experience related to digital marketing?</label><br>
         <select name="No4">
                 <option value="2">Below 1</option>
                <option value="4">1 to 4 Years</option>
                <option value="5">5 to 10 Years</option>
                <option value="5">10 or more years</option>
               
         </select>
         <label style="font-size: 18px;">Do you have acedemic or professional qualifications in marketing?</label> <br>
        <input type="radio" name="No5" value="5"> Yes
        <input type="radio" name="No5" value="0"> No <br><br>
        
         <label style="font-size: 18px;">Have you taken any digital marketing training courses?</label> <br>
               <select name="No6">
                <option value="1">1 Day Workshop</option>
                <option value="2">Online Free Courses</option>
                <option value="3">3 Months Course</option>
                <option value="4">5+ Months Course</option>
               
         </select>
           <button type="submit" name="Next" >Next</button>  
     </form>
    

</body>
</html> 

<?php

if (isset($_POST["Next"])) {
    $N1=$_SESSION["Q1"] ;
    $N2=$_SESSION["Q2"] ;
    $N3=$_SESSION["Q3"] ;
    $N4 = $_POST["No4"];
    $N5 = $_POST["No5"];
    $N6 = $_POST["No6"];
   
$Query="insert into exprience (Points) values (  '$N1'  ) , (  '$N2'  ) ,(  '$N3'  ),(  '$N4'  ),(  '$N5'  ),(  '$N6'  )   ";
 if($Result=  mysqli_query($con, $Query)  ){
     echo '<script language="javascript">';
               
                echo "window.location='Next3.php' ";
                echo '</script>';
 }
   
  
}








?>
