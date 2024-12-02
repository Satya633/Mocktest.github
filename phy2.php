<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=168252;
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
    if($ans1 == 4) $score++;
    if($ans2 == 3) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 4) $score++;
    if($ans9 == 1) $score++;
    if($ans0 == 1) $score++;
    
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
<title>GENERAL/PHYSICS/Test-2</title>
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
 <center class="textcolor"><h1 align="center"> PHYSICS - TEST:2/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="phy2.php" onsubmit="return validateForm()">
<li>A ball of mass 1 kg collides with a wall with speed 8 ms<sup>-1</sup> and rebounds on the same line with the same speed. If mass of the wall is taken as infinite, the work done by the ball on the wall is
<ol type="A">
<li><input type="radio" name="type" value=1 >6 J
<li><input type="radio" name="type" value=2 >8 J
<li><input type="radio" name="type" value=3 >9 J
<li><input type="radio" name="type" value=4 id="ans">zero
</ol></br>
<li>A pump motor is used to deliver water at a certain rate from a given pipe, To obtain thrice as much water from the same pipe in the same time,power of the motor has to be increased
<ol type="A">
<li><input type="radio" name="type1" value=1 >3 times
<li><input type="radio" name="type1" value=2 >9 times
<li><input type="radio" name="type1" value=3 id="ans1">27 times
<li><input type="radio" name="type1" value=4 >81 times
</ol></br>
<li>The energy required to accelerate a car from rest to 10 ms<sup>-1</sup> is E. What energy will be required to accelerate the car from 10 ms<sup>-1</sup> to 20 ms<sup>-1</sup>?
<ol type="A">
<li><input type="radio" name="type2" value=1 >E
<li><input type="radio" name="type2" value=2 id="ans2">3E
<li><input type="radio" name="type2" value=3 >5E
<li><input type="radio" name="type2" value=4 >7E
</ol></br>
<li>The time period of a simple pendulumn of infinite length is (R<sub>e</sub> = radius of earth)
<ol type="A">
<li><input type="radio" name="type3" value=1 id="ans3">T = 2&pi;&Sqrt;R<sub>e</sub>/g
<li><input type="radio" name="type3" value=2 >T= 2&pi;&Sqrt;2R<sub>e</sub>/g
<li><input type="radio" name="type3" value=3 >T = 2&pi;&Sqrt;R<sub>2e</sub>/g
<li><input type="radio" name="type3" value=4 >&infinte;
</ol></br>
<li>A particle executes SHM of amplitude 5 cm and period 3 s. The velocity of the particle at a distance 4 cm from the mean position (take &pi; = 3) is
<ol type="A">
<li><input type="radio" name="type4" value=1 >8 cms<sup>-1</sup>
<li><input type="radio" name="type4" value=2 >12 cms<sup>-1</sup>
<li><input type="radio" name="type4" value=3 >4 cms<sup>-1</sup>
<li><input type="radio" name="type4" value=4 id="ans4">6 cms<sup>-1</sup>
</ol></br>
<li>A particle is executing SHM with amplitude &alpha; and has maximum velocity 'v'. Its speed at displacement &alpha;/2 will be
<ol type="A">
<li><input type="radio" name="type5" value=1 id="ans5">0.866 v
<li><input type="radio" name="type5" value=2 >v/2
<li><input type="radio" name="type5" value=3 >v
<li><input type="radio" name="type5" value=4 >v/4
</ol></br>
<li>A whistle of frequency 1000 Hz is sounded on a car travelling towars a cliff with velocity of 18 ms<sup>-1</sup> normal to the cliff.If velocity of sound = 330 ms<sup>-1</sup>, then the appear frequency of the echo as heard by the car driver is nearly
<ol type="A">
<li><input type="radio" name="type6" value=1 id="ans6">1115 Hz
<li><input type="radio" name="type6" value=2 >115 Hz
<li><input type="radio" name="type6" value=3 >67 Hz
<li><input type="radio" name="type6" value=4 >47.2 Hz
</ol></br>
<li>An open window is a perfect
<ol type="A">
<li><input type="radio" name="type7" value=1 >Refector of sound
<li><input type="radio" name="type7" value=2 >Absorber of sound
<li><input type="radio" name="type7" value=3 >Scatter
<li><input type="radio" name="type7" value=4 id="ans7">Refractor
</ol></br>
<li>A gas is found to obey P<sup>2</sup>V = constant. The intial temperature and volume are T<sub>0</sub> & V<sub>0</sub>. If the gas expands to volume 2V<sub>0</sub>, then the final temperature is
<ol type="A">
<li><input type="radio" name="type8" value=1 id="ans8">&Sqrt;2 T<sub>0</sub>
<li><input type="radio" name="type8" value=2 >2T<sub>0</sub>
<li><input type="radio" name="type8" value=3 >T<sub>0</sub>/2
<li><input type="radio" name="type8" value=4 >T<sub>0</sub>/&Sqrt;2
</ol></br>
<li> The constant ideal gas equation is known as
<ol type="A">
<li><input type="radio" name="type9" value=1 id="ans9">Universal gas constant
<li><input type="radio" name="type9" value=2 >Pressure constant
<li><input type="radio" name="type9" value=3 >Temperature constant
<li><input type="radio" name="type9" value=4 >Boltzmann constant
</ol></br></ol>
<center><button class="satya" name="complete">Complete</button></center></form>
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
</div></div>

<button style="display:inline-block;" class="satya" onclick="back()"><< Back</button>
<button style="display:inline-block;position:absolute;left:90%" class="satya" onclick="Next()">Next >></button>


</body>
           
<script type="text/javascript">

  <script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
<script>
function answer(){
window.location="phy2key.php"
}
function Next() {
    <?php session_unset(); ?>
    window.location = "phy3.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "phy.php";
}
</script>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                