<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=168259;
    $ans1 = $_POST["1"];
    $ans2 = $_POST["2"];
    $ans3 = $_POST["3"];
    $ans4 = $_POST["4"];
    $ans5 = $_POST["5"];
    $ans6 = $_POST["6"];
    $ans7 = $_POST["7"];
    $ans8 = $_POST["8"];
    $ans9 = $_POST["9"];
    $ans0 = $_POST["10"];
    
    $score = 0;
    if($ans1 == 2) $score++;
    if($ans2 == 4) $score++;
    if($ans3 == 4) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 4) $score++;
    if($ans9 == 3) $score++;
    if($ans0 == 2) $score++;
    
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
<title>GENERAL/PHYSICS/Test-9</title>
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
 <center class="textcolor"><h1 align="center"> PHYSICS - TEST:9/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="phy9.php" onsubmit="return validateForm()">
           <li> A stone is thrown vertically upwards. When stone is at half of its maximum height, its speed is 10 ms<sup>-1</sup>, then the maximum height attained by the stone is ( g= 10 m/s<sup>2</sup>)
            <ol type="A">
        <li > <input type="radio" name="1" value=1 >25 m
        <li>  <input type="radio" name="1" value=2 id="ans1">10 m
        <li> <input type="radio" name="1" value=3 >15 m
        <li><input type="radio" name="1" value=4 >20 m
        </ol>  </br>
        <li> Identify the correct option
            <ol type="A">
        <li > <input type="radio" name="2" value=1>Static friction depends on the area of contact
        <li>  <input type="radio" name="2" value=2>Kintetic friction depends on the area of contact
        <li> <input type="radio" name="2" value=3>Coefficient of static friction does not depend on the area of the surface is contact 
        <li><input type="radio" name="2" value=4 id="ans2">Coefficient of kinetic friction is less than the coefficient of static friction
        </ol>  </br>
        <li> The coefficient of friction between the tyres and the road is 0.25. The maximum spped with which a car can be driven round a curve of radius 40 m without skidding is (assume g= 10 m/s<sup>2</sup>)
            <ol type="A">
        <li > <input type="radio" name="3" value=1>40 m/s<sup>-1</sup>
        <li>  <input type="radio" name="3" value=2>20 m/s<sup>-1</sup>
        <li> <input type="radio" name="3" value=3>15 m/s<sup>-1</sup>
        <li><input type="radio" name="3" value=4 id="ans3">10 m/s<sup>-1</sup>
        </ol>  </br>
        <li> During a projectile motion, if the maximum height is equal to the horizontal range, then the angle of projection with the horizontal is
            <ol type="A">
        <li > <input type="radio" name="4" value=1>tan<sup>-1</sup>(1)
        <li>  <input type="radio" name="4" value=2>tan<sup>-1</sup>(2)
        <li> <input type="radio" name="4" value=3 id="ans4">tan<sup>-1</sup>(4)
        <li><input type="radio" name="4" value=4>tan<sup>-1</sup>(3)
        </ol>  </br>
        <li> The potential energy of a certain spring when strecthed through a distance S is 10 joule. The amount of work (in joule) that must be done on this spring to strecth it through additional discuss S will be 
               <ol type="A">
        <li > <input type="radio" name="5" value=1 id="ans5">30
        <li>  <input type="radio" name="5" value=2>40
        <li> <input type="radio" name="5" value=3>10
        <li><input type="radio" name="5" value=4>20
        </ol>  </br>
        <li> A machine gun fires six bullets per second into a target. The mass of each bullets is 3 g and the speed is 500 m/s. The power delivered to the bullets is
            <ol type="A">
        <li > <input type="radio" name="6" value=1>1.5 kW
        <li>  <input type="radio" name="6" value=2 id="ans6">2.25 kW
        <li> <input type="radio" name="6" value=3>0.75 kW
        <li><input type="radio" name="6" value=4>375 kW
        </ol>  </br>
        <li> Which of the following is the cheapest renewable energy ?
            <ol type="A">
        <li > <input type="radio" name="7" value=1>Solar energy
        <li>  <input type="radio" name="7" value=2>Wind energy
        <li> <input type="radio" name="7" value=3id="ans7">Hydel energy
        <li><input type="radio" name="7" value=4>Nuclear energy
        </ol>  </br>
        <li> The maximum velocity of particle executing simple harmonic motion with an amplitude of 7 mm is 4.4m/s. The time period of osicillation is 
            <ol type="A">
        <li > <input type="radio" name="8" value=1>100 s
        <li>  <input type="radio" name="8" value=2>10 s
        <li> <input type="radio" name="8" value=3>0.1 s
        <li><input type="radio" name="8" value=4 id="ans8">0.01 s
        </ol>  </br>
        <li> Two waves of lengths 50 cm and 51 cm produced 12 beats per second. The velocity of sound is
            <ol type="A">
        <li > <input type="radio" name="9" value=1>340 m/s
        <li>  <input type="radio" name="9" value=2>331 m/s
        <li> <input type="radio" name="9" value=3 id="ans9">306 m/s
        <li><input type="radio" name="9" value=4>360 m/s
        </ol>  </br>
        <li> The apparent frequency of the whistle of an engine changes in the ratio 9 : 8 as the engine passes a stationary observer. if the velocity of the sound is 340 ms<sup>-1</sup>, then the velocity of the engine is  
             <ol type="A">
        <li > <input type="radio" name="10"  value=1>40 m/s
        <li>  <input type="radio" name="10"value=2 id="ans10">20 m/s
        <li> <input type="radio" name="10" value=3>340 m/s
        <li><input type="radio" name="10" value=4>180 m/s
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

window.location="phy9key.php"
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
    window.location = "phy10.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "phy8.php";
}
</script>
 </html>