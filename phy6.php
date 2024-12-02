<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=168256;
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
    if($ans2 == 1) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 4) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 3) $score++;
    if($ans9 == 4) $score++;
    if($ans0 == 3) $score++;
    
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
<title>GENERAL/PHYSICS/Test-6</title>
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
 <center class="textcolor"><h1 align="center"> PHYSICS - TEST:6/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="phy6.php" onsubmit="return validateForm()">
           <li> N Kg<sup>-1</sup> is the unit of 
            <ol type="A">
        <li > <input type="radio" name="1" value=1>Velocity
        <li>  <input type="radio" name="1" value=2 id="ans1">Acceleration
        <li> <input type="radio" name="1" value=3> Force
        <li><input type="radio" name="1" value=4>Momentum
        </ol>  </br>
        <li> A system has basic dimensions as density 'D', velocity 'V' and area 'A'. The dimensional representation of force in this system is 
            <ol type="A">
        <li > <input type="radio" name="2" value=1id="ans2">A V<sup>2</sup>D
        <li>  <input type="radio" name="2" value=2>A V D<sup>2</sup>
        <li> <input type="radio" name="2" value=3>A<sup>2</sup> V D
        <li><input type="radio" name="2" value=4>A<sup>0</sup> V<sup>2</sup>D
        </ol>  </br>
        <li> If the magnitude of vectors A, B and C are 5,4 and 3 units respectively and A= B + c, then the angle between vectors A and C is 
            <ol type="A">
        <li > <input type="radio" name="3" value=1>Cos<sup>-1</sup>(4/5)
        <li>  <input type="radio" name="3" value=2>II
        <li> <input type="radio" name="3" value=3 id="ans3">Cos<sup>-1</sup>(3/5)
        <li><input type="radio" name="3" value=4 >Sin<sup>-1</sup>(3/4)
        </ol>  </br>
        <li> If the sum of two unit vectors is also a unit vector, then the magnitude of their difference is
            <ol type="A">
        <li > <input type="radio" name="4" value=1>1
        <li>  <input type="radio" name="4" value=2>1/2
        <li> <input type="radio" name="4" value=3>1/&radic;2
        <li><input type="radio" name="4" value=4 id="ans4">&radic;3
        </ol>  </br>
        <li> A particle starting from rest moves in a straight line with uniform, acceleration a. The average velocity of the particle in first 's' distance is         
               <ol type="A">
        <li > <input type="radio" name="5" value=1 id="ans5">&radic;as/2
        <li>  <input type="radio" name="5" value=2>&radic;3as/2
        <li> <input type="radio" name="5" value=3>&radic;2as
        <li><input type="radio" name="5" value=4>as
        </ol>  </br>
        <li> A projectile is thrown with speed u making angle &#415; with the horizontal at t= 0. It just crosses two points of equal height at time t= 1s and t= 3s respectively. The maximum height attained by the projectile is (take g = 10 ms<sup>-2</sup>)
            <ol type="A">
        <li > <input type="radio" name="6" value=1>10 m
        <li>  <input type="radio" name="6" value=2 id="ans6">20 m
        <li> <input type="radio" name="6" value=3>15 m
        <li><input type="radio" name="6" value=4>22 m
        </ol>  </br>
        <li> A body is falling from height 'H' takes time 'T' seconds to reach the ground. The time taken to cover the first half of height is 
            <ol type="A">
        <li > <input type="radio" name="7" value=1 id="ans7">T/&radic;2
        <li>  <input type="radio" name="7" value=2>&radic;2T
        <li> <input type="radio" name="7" value=3>&radic;3T
        <li><input type="radio" name="7" value=4>T/&radic;3
        </ol>  </br>
        <li> A body sliding on ice with a velocity 8 ms<sup>-1</sup> comes to rest after travelling 40 m. The coefficient of friction between the body and ice is (g = 10 ms<sup>-2</sup> 
            <ol type="A">
        <li > <input type="radio" name="8" value=1>0.02
        <li>  <input type="radio" name="8" value=2>0.05
        <li> <input type="radio" name="8" value=3 id="ans8">0.08
        <li><input type="radio" name="8" value=4>0.2
        </ol>  </br>
        <li> If a body placed on a rough inclined plane pf gradient 1 in 4, just begins to slide, then coefficient of friction between the plane and body is
            <ol type="A">
        <li > <input type="radio" name="9" value=1>2/&radic;15
        <li>  <input type="radio" name="9" value=2>1/&radic;2
        <li> <input type="radio" name="9" value=3>1/&radic;5
        <li><input type="radio" name="9" value=4 id="ans9">1/&radic;15
        </ol>  </br>
        <li> A cube of 10 N weight rests on a rough inclined plane of slope 3 in 5. If the coefficient of friction between plane and cube is 0.6, then minimum force required to start the cube moving up the plane is 
            <ol type="A">
        <li > <input type="radio" name="10"  value=1>2N
        <li>  <input type="radio" name="10" value=2>6N
        <li> <input type="radio" name="10" value=3 id="ans10">10.8N
        <li><input type="radio" name="10" value=4 >4.5N
        </ol>  </br>
         </ol>
                  
        <center> <input type="submit" class="satya" name="complete" value="Complete" /></center></form>
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

window.location="phy6key.php"
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
    window.location = "phy7.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "phy5.php";
}
</script>
 </html>