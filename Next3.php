<?php
session_start();
$ser = "remotemysql.com";
$user = "Z0FQLKQ1gr";
$pass = "L8gCH9dvup";
$db = "Z0FQLKQ1gr";
$con = mysqli_connect($ser, $user, $pass) or die("connection failed");
$selected = mysqli_select_db($con, $db) or die("Colud not selected database");
?>

<html>
    <head>
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

            .question-wrap {
                display: block;
                border: 2px dashed red;
                padding: 25px;
            }

            .active {
                display: block;
            }

            .hide {
                display: none;
            }

            .previous-next-link-wrap {
                text-align: center;
                font-weight: bold;
                font-style: italic;
            }



            .disabled {
                pointer-events: none;
                color: #e1e1e1;
            }
        </style>
    </head>

    <body>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <div id="timer" style="font-size: 35px;color: green;text-align: right">1:00</div>

        <script type="text/javascript">
            var timeoutHandle;
            function countdown(minutes) {
                var seconds = 60;
                var mins = minutes
                function tick() {
                    var counter = document.getElementById("timer");
                    var current_minutes = mins - 1
                    seconds--;
                    counter.innerHTML =
                            current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
                    if (seconds > 0) {
                        timeoutHandle = setTimeout(tick, 1000);
                    } else {

                        if (mins > 1) {


                            setTimeout(function () {
                                countdown(mins - 1);
                            }, 1000);

                        }
                    }
                }
                tick();

            }

            countdown(30);

            var explode = function () {
                alert("Sorry! Time’s up. Time allocated for this test is over. Click “Go Forward” to see your results.");
                window.location("test.php")
            };
            setTimeout(explode, 1800000);

        </script>

        <h1 style="text-align: center;color: red;">SELF ASSESMENT TEST</h1>
        <h2 style="text-align: center;color: blue;">Section 2 – Assessing the skills level</h1>
        <div id="questions">



            <div class="question-wrap active">
                <script type="text/javascript" >


                    function N7() {
                        var a = $('#No7').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) {

                        });

                    }
                </script>
                <center><img src="q1.jpg" width="400px" height="300px"></center>

                <p>  

                <form >
                    <label style="font-size: 18px;">07.In this screenshot from the insights of a Facebook fan page, what is represrented by the lighter orange bars?</label>
                    <select id="No7" >
                        <option value="0">Total Reach</option>
                        <option value="0">Paid Reach</option>
                        <option value="3">Organic Reach</option>
                        <option value="0">Organic Engagement</option>

                    </select>        
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N7()"  >Next</button>
                    </a> 
                </form>
                </p>
            </div>




            <div class="question-wrap hide">

                <script type="text/javascript" >
                    function N8() {
                        var a = $('#No8').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>

                <center><img src="q2.jpg" width="400px" height="300px"></center>
                <p>
                <form >
                    <label style="font-size: 18px;">08.Which of these information is not revealed under Facebook Page Transparency details?</label>
                    <select id="No8" >
                        <option value="0">Location of admins</option>
                        <option value="0">Number of Admins</option>
                        <option value="4">Boosting Budget Spent</option>
                        <option value="0">Ads Currently Running</option>

                    </select>        
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N8()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>

            <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N9() {
                        var a = $('#No9').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>

                <p>
                <form >
                    <label style="font-size: 18px;">09.Facebook Pages can join Facebook groups as members. True or False?</label>
                    <select id="No9" >
                        <option value="3">True</option>
                        <option value="0">False</option>


                    </select>        
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N9()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>


            <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N10() {
                        var a = $('#No10').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>

                <p>
                <form >
                    <label style="font-size: 18px;">10.Admin of a Facebook Group can turn off commenting on individual posts. True or False?</label>
                    <select id="No10" >
                        <option value="3">True</option>
                        <option value="0">False</option>


                    </select>        
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N10()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>


            <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N11() {
                        var a = $('#No11').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>

                <p>
                <form >
                    <label style="font-size: 18px;">11.Admin of a Facebook Group can turn off commenting on individual posts. True or False?</label>
                    <select id="No11" >
                        <option value="0">10%</option>
                        <option value="3">20%</option> 
                        <option value="0">30%</option>
                        <option value="0">50%</option>
                    </select>        
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N11()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>


            <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N12() {
                        var a = $('#No12').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>
                <center><img src="q3.png" width="400px" height="300px"></center>
                <p>
                <form >
                    <label style="font-size: 18px;">12.Do you recognize from where this screenshot is from?</label>
                    <select id="No12" >
                        <option value="0">Workplace by Facebook</option>
                        <option value="0">Facebook Page Insights</option> 
                        <option value="3">Facebook Business Manager</option>
                        <option value="0">Facebook Projects</option>
                    </select>        
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N12()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>

            <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N13() {
                        var a = $('#No13').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">13.What is the correct order of structure in Google Ads campaigns?</label>
                    <select id="No13" >
                        <option value="0">1. Campaigns  ,  Ad Sets ,  Ads</option>
                        <option value="0">2. Campaigns  ,  Ad Groups ,  Ad Sets , Ads</option> 
                        <option value="0">3. Ad Groups ,  Ad Sets ,  Ads</option>
                        <option value="5">4. Campaigns  ,  Ad Groups ,  Ads</option>
                    </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N13()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>





 <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N14() {
                        var a = $('#No14').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">14.What is the latest character limit for Google Text Ad headlines?</label>
                    <select id="No14" >
                        <option value="0">One headline of 25 characters</option>
                        <option value="0">One headline of 90 characters</option> 
                        <option value="0">Two headlines of 45 characters each</option>
                        <option value="5">Three headlines of 30 characters each</option>
                    </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N14()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>



 <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N15() {
                        var a = $('#No15').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">15.If you see a keyword on Google Ads with square brackets (Eg: [samsung Galaxy S10]) which match type is this?</label>
                    <select id="No15" >
                        <option value="0">Phrase Match</option>
                        <option value="5">Exact Match</option> 
                        <option value="0">Strict Match</option>
                        <option value="0">Ideal Match</option>
                    </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N15()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>


 <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N16() {
                        var a = $('#No16').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">16."John sets a maximum cost per click bid of $1.00 for his Google PPC campaign. For the same keywords, a Jane is bidding $0.90 and Saman is bidding $ 2.00.
What is the most accurate forcast of who will win this auction and what would be the actual cost per click?"</label>
                    <select id="No16" >
                        <option value="0">John wins the auction because Saman's bid is way above average. John's CPC will be US$ 1.00</option>
                        <option value="0">Saman wins the auction because he is the highest bidder. His actual CPC will be US$ 1.99</option> 
                        <option value="5">Saman wins the auction because he is the highest bidder. His actual CPC will be US$ 1.01</option>
                        <option value="0">Saman wins the auction because he is the highest bidder. His actual CPC will be US$ 0.90</option>
                    </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N16()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>
            

 <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N17() {
                        var a = $('#No17').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">17.Sara wants to show her ads only to people who are likely to be physically located within the areas she has targeted. Which of the following Advanced Language Settings would be right for her?
                    </label>
                    <select id="No17" >
                        <option value="0">Reach people who are interested in your targeted locations</option>
                        <option value="4">Reach people in your targeted locations</option> 
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N17()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>     
            
            
  
 <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N18() {
                        var a = $('#No18').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">18.Ad Rank is calculated every time your keyword matches a search term and your ad is entered into an ad auction. </label>
                    <select id="No18" >
                        
                        <option value="4">True</option> 
                        <option value="0">False</option>
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N18()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>     
       
            
              
 <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N19() {
                        var a = $('#No19').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">19.A “below average” landing page experience is equal to a policy violation. Ads won’t show in both the scenarios.
 </label>
                    <select id="No19" >
                        
                        <option value="4">True</option>
                        <option value="0">False</option>
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N19()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>     
 
            
   <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N20() {
                        var a = $('#No20').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">20.Which of the following is not one of the best practices for building a keyword list?
 </label>
                    <select id="No20" >
                        <option value="0">Think like a customer when you create your list</option>
                        <option value="5">Select general keywords when you want to reach more people</option> 
                        <option value="0">Group similar keywords into ad groups</option>
                        <option value="0">Have at least 20 to 40 keywords per ad-group</option> 
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N20()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>               
            
                        
   <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N21() {
                        var a = $('#No21').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">21.For an advertiser focused on branding, what are the key success metrics on Google Display Network?

 </label>
                    <select id="No21" >
                        <option value="0">Click Through Rate</option>
                        <option value="0">CPC</option> 
                        <option value="5">Reach & Frequency</option>
                        <option value="0">Clicks</option> 
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N21()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>       
       
            
                            
   <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N22() {
                        var a = $('#No22').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">22.Which would contribute to a higher Quality Score for a display ad?


 </label>
                    <select id="No22" >
                        <option value="0">Higher CPM bid</option>
                        <option value="5">Fast landing page load time</option> 
                        <option value="0">How old is the ad</option>
                        <option value="0">Creativity of the ad</option> 
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N22()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>           
            
     <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N23() {
                        var a = $('#No23').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">23.If a display ad has been disapproved, how does an advertiser submit a request for another review?



 </label>
                    <select id="No23" >
                        <option value="0">Call Google Help</option>
                        <option value="0">Create a new ad group and upload the ad there</option> 
                        <option value="5">Save the edited ad or upload a new ad in AdWords</option>
                        <option value="0">Click "Request a Review Again" button</option> 
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N23()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>         
            
      <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N24() {
                        var a = $('#No24').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">24.Ads on YouTube are bought and sold on an auction basis as well as on a reservation basis. What placements on Youtube.lk you can buy ad placements on reservation basis?



 </label>
                    <select id="No24" >
                        <option value="0">You can't buy reservation based ads on Youtube in Sri Lanka</option>
                        <option value="5">Youtube Masthead Ads</option> 
                        <option value="0">Youtube Pre-Roll Ads</option>
                        <option value="0">Youtube Watch Page Ads</option> 
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N24()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>         
                       
         <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N25() {
                        var a = $('#No25').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">25.In Google Analytics to recognize users across different devices, what is required for User ID?
 </label>
                    <select id="No25" >
                        <option value="0">Attribution Models</option>
                        <option value="0">Google Ads Linking</option> 
                        <option value="5">User ID</option>
                        <option value="0">Audience Definitions</option> 
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N25()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div> 
            
            
        <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N26() {
                        var a = $('#No26').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">26.What Google Analytics report shows the percent of site traffic that visited previously?



 </label>
                    <select id="No26" >
                        <option value="0">Sales Performance report</option>
                        <option value="0">Frequency & Recency report</option> 
                        <option value="0">Referrals report</option>
                        <option value="5">New vs Returning report</option> 
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N26()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>         
                       
         <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N27() {
                        var a = $('#No27').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">27.When will Google Analytics be unable to identify sessions from the same user by default?

 </label>
                    <select id="No27" >
                        <option value="0">When the sessions happen in the same browser on the same device</option>
                        <option value="0">When the sessions happen in the same browser on the same day</option> 
                        <option value="0">When the sessions share the same browser cookie</option>
                        <option value="5">When the sessions happen in different browsers on the same device</option> 
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N27()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>           
            
  
           <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N28() {
                        var a = $('#No28').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">28.When does the tracking code send an event hit to Google Analytics?

 </label>
                    <select id="No28" >
                        <option value="0">Every time a user adds an event to their calendar</option>
                        <option value="0">Every time a user makes a reservation</option> 
                        <option value="5">Every time a user performs an action with event tracking implemented</option>
                        <option value="0">Every time a user performs an action with pageview tracking implemented</option> 
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N28()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>              
            
            
           <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N29() {
                        var a = $('#No29').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">29.Which of these is not a Programmatic Media Buying Method?

 </label>
                    <select id="No29" >
                        <option value="0">Adobe Marketing Cloud</option>
                        <option value="0">Rubicon Project</option> 
                        <option value="5">SimillarWeb</option>
                        <option value="0">DoubleClick</option> 
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N29()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>              
            
            
          <div class="question-wrap hide">
                <script type="text/javascript" >
                    function N30() {
                        var a = $('#No30').val();
                        //  alert(a);
                        $.post('InsertData.php', {answer: a}, function (data) { });
                        
                        alert("Well done! You managed to complete the test on time. Now proceed forward to see your results");
                        window.location("test.php");
                    }
                </script>


                <p>
                <form >
                    <label style="font-size: 18px;">30.Which of these is a Social Media Analytics tool?

 </label>
                    <select id="No30" >
                        <option value="0">Google Analytics</option>
                        <option value="0">Eskimi</option> 
                        <option value="5">SocialBakers</option>
                        <option value="0">Social Media Examiner</option> 
                              </select> 
                    
                    <a class="answer-wrap">
                        <button  class="myButton" type="button" onclick="N30()"  >Next</button>
                    </a> 
                </form>

                </p>
            </div>               
            
            

            

        <script>
            var QuizProgram = function () {
                var swapWithActiveDiv = function ($direction) {
                    $activeDiv = $('#questions').find('.question-wrap.active');
                    if ($direction == "forward") {
                        $alternativeDiv = $('#questions').find('.question-wrap.active').nextAll("div.question-wrap:first");
                    } else {
                        $alternativeDiv = $('#questions').find('.question-wrap.active').prevAll("div.question-wrap:first");
                    }
                    if ($activeDiv.length > 0 && $alternativeDiv.length > 0) {
                        $activeDiv.removeClass('active').addClass('hide');
                        $alternativeDiv.removeClass('hide').addClass('active');
                    }
                    disableLinks()
                },
                        disableLinks = function () {
                            $activeDiv = $('#questions').find('.question-wrap.active')
                            $previousDiv = $('#questions').find('.question-wrap.active').prevAll("div.question-wrap:first");
                            $nextDiv = $('#questions').find('.question-wrap.active').nextAll("div.question-wrap:first");
                            if ($previousDiv.length <= 0) {
                                $('#previousQuestion').addClass('disabled');
                            } else {
                                $('#previousQuestion').removeClass('disabled');
                            }
                            if ($nextDiv.length <= 0) {
                                $('#nextQuestion').addClass('disabled');
                            } else {
                                $('#nextQuestion').removeClass('disabled');
                            }
                        },
                        init = function () {
                            $('body').on('click', 'a.disabled', function (e) {
                                e.preventDefault();
                            });
                            $('body').on('click', '.answer-wrap,#previousQuestion,#nextQuestion', function (e) {
                                if (e.target.id == 'previousQuestion') {
                                    swapWithActiveDiv("backward");
                                } else {
                                    swapWithActiveDiv("forward")
                                }
                            });
                            disableLinks();
                        }
                return init();
            }
            new QuizProgram();

        </script>

</body>
</html>
