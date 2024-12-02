<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=168254;
    $ans1 = $_POST["type"];
    $ans2 = $_POST["type1"];
    $ans3 = $_POST["type2"];
    $ans4 = $_POST["type3"];
    $ans5 = $_POST["type4"];
    $ans6 = $_POST["type5"];
    $ans7 = $_POST["type6"];
    $ans8 = $_POST["type7"];
    $ans9 = $_POST["type8"];
    $ans0 = $_POST["type9"];
    
    $score = 0;
    if($ans1 == 1) $score++;
    if($ans2 == 1) $score++;
    if($ans3 == 4) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 4) $score++;
    if($ans8 == 1) $score++;
    if($ans9 == 2) $score++;
    if($ans0 == 4) $score++;
    
    $_SESSION['score'] = $score;
    

   $insertQuery = "INSERT INTO data(UID,ques1,ques2,ques3,ques4,ques5,ques6,ques7,ques8,ques9,ques0) 
                    VALUES ('$phy','$ans1','$ans2','$ans3','$ans4','$ans5','$ans6','$ans7','$ans8','$ans9','$ans0')";
    
    if ($conn->query($insertQuery) === TRUE) {
        echo "<script>
                window.onload = function() {
                    document.getElementById('form3').classList.add('open-form3');
                };
              </script>";
    } else {
        echo "ERROR: " . $conn->error;
    }
}
?>
<html>
<head>
<title>GENERAL/PHYSICS/Test-4</title>
<link rel="icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="satya.css"/>
    <script>
        function validateForm() {
            var radios = document.querySelectorAll('input[type="radio"]:checked');
            if (radios.length < 10) { // Assuming 5 questions are required to be answered
                alert("Please answer all questions.");
                return false;
            }
            return true;
        }
    </script>

</head>
<body class="color">
<div class="icon">
               <h2 class="logo">MOCK TEST</h2>
           </div>
                <div class="menu">
                   <ul> 
                    <li><a href="general.html">HOME</a><li></li>
                    <li><a href="about.html">ABOUT</a><li></li>
                    <li><a href="services.html">SERVICE</a><li></li>
                    <li><a href="contact.html">CONTACT</a><li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
 <center class="textcolor"><h1 align="center"> PHYSICS - TEST:4/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="phy4.php" onsubmit="return validateForm()">
           <li> A smooth block is released from rest on a 45<sup>0</sup> inclined plane and it slides a distance 'd'. The time taken to slide is 'n' times that on a smooth inclined plane. The coefficient of friction is 
            <ol type="A">
        <li > <input type="radio" name="type" value=1 >&mu;<sub>k</sub> = 1 - (1/n<sup>2</sup>)
        <li>  <input type="radio" name="type" value=2>&mu;<sub>k</sub> = &Sqrt;1 - (1/n<sup>2</sup>)
        <li> <input type="radio" name="type" value=3>   &mu;<sub>k</sub> =1 / 1 - (n<sup>2</sup>)
        <li><input type="radio" name="type" value=4>&mu;<sub>k</sub> =  &radic;1 / 1 - (n<sup>2</sup>)
        </ol>  </br>
        <li> A body is projected at an angle other than 90<sup>0</sup> with the horizontal with some velocity. If the time of ascent of the body is 1 second, then the maximum height it can reach is (take g= 10ms<sup>-2</sup>
            <ol type="A">
        <li > <input type="radio" name="type1" value=1>5 m
        <li>  <input type="radio" name="type1" value=2>10 m
        <li> <input type="radio" name="type1" value=3>2.5 m
        <li><input type="radio" name="type1" value=4>75 m
        </ol>  </br>
        <li> A bullet fired from a gun  falls at a distance half of its maximum range. The angle of projection of the bullet is 
            <ol type="A">
        <li > <input type="radio" name="type2" value=1>45<sup>0</sup>
        <li>  <input type="radio" name="type2" value=2>60<sup>0</sup>
        <li> <input type="radio" name="type2" value=3>30<sup>0</sup>
        <li><input type="radio" name="type2" value=4 >15<sup>0</sup>
        </ol>  </br>
        <li> A body is thrown vertically upwards with a velocity. Select the incorrect statements from the following </br>
                    <ol type="I">
        <li > Both velocity and acceleration are zero at its highest point.
        <li>  Velocity is maximum and acceleration is zero at the highest point
        <li> Velocity is maximum and acceleration 'g' downwards at its highest point
        </ol>  </br>
            <ol type="A">
        <li > <input type="radio" name="type3" value=1 >I, II and III
        <li>  <input type="radio" name="type3" value=2>II and III
        <li> <input type="radio" name="type3" value=3>I and II
        <li><input type="radio" name="type3" value=4>I and III
        </ol>  </br>
        <li> A person standing on a tower of height 60 m throws an object upwards with velocity of 40 m/s at an angle 30<sup>0</sup> to the horizontal. Find the total time taken by the object to gain maximum height and fall on the ground (take g= 10 m/s<sup>2</sup>)
            <ol type="A">
        <li > <input type="radio" name="type4" value=1>3 s
        <li>  <input type="radio" name="type4" value=2>20 s
        <li> <input type="radio" name="type4" value=3 >6 s     
        <li><input type="radio" name="type4" value=4>16 s
        </ol>  </br>
        <li> A bucket full of water is drawn up by a person. In this case the work done by the gravitational force is 
            <ol type="A">
        <li > <input type="radio" name="type5" value=1 >Negative because the force and displacemnt are in opposite directions
        <li>  <input type="radio" name="type5" value=2>Positive because the force and displacemnt are in the same directions
        <li> <input type="radio" name="type5" value=3>Negative because the force and displacemnt are in the same directions
        <li><input type="radio" name="type5" value=4>Positive because the force and displacemnt are in opposite directions
        </ol>  </br>
        <li> When a long spring is strechted by x cm, its potential energy is U. If the spring is stretched by Nx cm, the potential energy stored in it will be 
            <ol type="A">
        <li > <input type="radio" name="type6" value=1>U/N
        <li>  <input type="radio" name="type6" value=2>NU
        <li> <input type="radio" name="type6" value=3>N<sup>2</sup>U
        <li><input type="radio" name="type6"  value=4>U/N<sup>2</sup>
        </ol>  </br>
        <li> Which of the following is a non-renewable source of energy ? 
            <ol type="A">
        <li > <input type="radio" name="type7" value=1 >Coal
        <li>  <input type="radio" name="type7" value=2>Solar
        <li> <input type="radio" name="type7" value=3>Geothermal
        <li><input type="radio" name="type7" value=4>Tidal
        </ol>  </br>
        <li> If a class room has dimensions 20 x 15 x 5 m<sup>3</sup> and reverbation time 1.5 sec, the total absorption of all surfaces and the average absorption coefficient will be 
            <ol type="A">
        <li > <input type="radio" name="type8" value=1>0.7 and 69
        <li>  <input type="radio" name="type8" value=2 >69 and 0.07
        <li> <input type="radio" name="type8" value=3>6.9 and 0.7
        <li><input type="radio" name="type8" value=4>0.69 and 0.7
        </ol>  </br>
        <li> A source of sound of frequency 450 cycles/sec is stationary but an observer is moving towards the source with 34 m/sec speed. If the speed of sound is 340 m/sec, the apparent frequency will be 
            <ol type="A">
        <li > <input type="radio" name="type9" value=1 >410 cycles/sec
        <li>  <input type="radio" name="type9" value=2>500 cycles/sec
        <li> <input type="radio" name="type9" value=3>550 cycles/sec 
        <li><input type="radio" name="type9" value=4 >495 cycles/sec
        </ol>  </br>
         </ol>
                  
        <center> <input type="submit" class="satya" value="Complete" name="complete"/></center></form>
<div class="form3" id="form3">
    <h2>Your Score:</h2>
    <h1>
        <span id="score">
            <?php
              
                if (isset($_SESSION['score'])) {
                    $score = $_SESSION['score'];
                    echo $score . '/10'; 

                    
                } else {
                    echo '0/10'; 
                    echo "<p>Better Luck Next Time</p>";  
                }
            ?>
        </span>
    </h1>
<?php
if ($score >= 8) {
                        echo "<p>Excellent!</p>";
                    } elseif ($score >= 5) {
                        echo "<p>Good!</p>";
                    } else {
                        echo "<p>Better Luck Next Time</p>";
                    }
?>
    <button class="ans" onclick="answer()">KEY</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="rem" onclick="closeform3()">OK</button>
</div>
<button style="display:inline-block;" class="satya" onclick="back()"><< Back</button>
<button style="display:inline-block;position:absolute;left:90%" class="satya" onclick="Next()">Next >></button>
    </body>
<script>
function answer()
{

window.location="phykey4.php"
}
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
        
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>

<script>
function Next() {
    <?php session_unset(); ?>
    window.location = "phy5.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "phy3.php";
}
</script>
 </html>