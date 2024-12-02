<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=168258;
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
    if($ans3 == 2) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 2) $score++;
    if($ans9 == 1) $score++;
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
<title>GENERAL/PHYSICS/Test-8</title>
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
 <center class="textcolor"><h1 align="center"> PHYSICS - TEST:8/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="phy8.php" onsubmit="return validateForm()">
           <li> For an adiabatic expansion of a perfect gas the value of &Delta;P/p is equal to 
            <ol type="A">
        <li > <input type="radio" name="1" value=1>&Delta;V/V
        <li>  <input type="radio" name="1" value=2 id="ans1">&gamma; &Delta;V/V
        <li> <input type="radio" name="1" value=3>- &gamma; &Delta;V/V
        <li><input type="radio" name="1" value=4>&gamma; -&Delta;V/V
        </ol>  </br>
        <li> First law of Thermodynamics is a special Case of 
            <ol type="A">
        <li > <input type="radio" name="2" value=1>Boyle's law
        <li>  <input type="radio" name="2" value=2>Charles law
        <li> <input type="radio" name="2" value=3>Law of conservation of mass
        <li><input type="radio" name="2" value=4 id="ans2">Law of conservation of energy
        </ol>  </br>
        <li> If the critical angle of total internal reflection from a medium to vaccum is 30<sup>0</sup>, the velocity of light in the medium is 
            <ol type="A">
        <li > <input type="radio" name="3" value=1>3 x 10<sup>8</sup> m/s
        <li>  <input type="radio" name="3" value=2 id="ans3">1.5 x 10<sup>8</sup> m/s
        <li> <input type="radio" name="3" value=3>&radic;3 x 10<sup>8</sup> m/s
        <li><input type="radio" name="3" value=4>2 x 10<sup>8</sup> m/s
        </ol>  </br>
        <li> Light rays of wave length 4.36 x 10<sup>-7</sup> m incidient on a metal surface of work function 1.24eV.The stopping potential required to stop thenemission of photoelectrons is 
            <ol type="A">
        <li > <input type="radio" name="4" value=1 id="ans4">1.6 eV
        <li>  <input type="radio" name="4" value=2>1.24 eV
        <li> <input type="radio" name="4" value=3>3.2 eV
        <li><input type="radio" name="4" value=4>4.8 eV
        </ol>  </br>
        <li> Young's modulus of steel is 2 x 10<sup>11</sup> N/m<sup>2</sup>. Its value is dyne/cm<sup>2</sup> is 
               <ol type="A">
        <li > <input type="radio" name="5" value=1 id="ans5">2 X 10<sup>12</sup>
        <li>  <input type="radio" name="5" value=2>2 X 10<sup>10</sup>
        <li> <input type="radio" name="5" value=3>2 X 10<sup>8</sup>
        <li><input type="radio" name="5" value=4>2 X 10<sup>-11</sup>
        </ol>  </br>
        <li> Dimension of velocity gradient is 
            <ol type="A">
        <li > <input type="radio" name="6" value=1 id="ans6">[M<sup>0</sup>L<sup>0</sup>T<sup>-1</sup>]
        <li>  <input type="radio" name="6" value=2>[ML<sup>-1</sup>T<sup>-1</sup>]
        <li> <input type="radio" name="6" value=3>[M<sup>0</sup>LT<sup>-1</sup>]
        <li><input type="radio" name="6" value=4>[ML<sup>0</sup>T<sup>-1</sup>]
        </ol>  </br>
        <li> Unit vector parallel to the resultant of vectors A = 4i - 3j and B= 8i + 8j will be 
            <ol type="A">
        <li > <input type="radio" name="7" value=1>24i + 5j/13
        <li>  <input type="radio" name="7" value=2 id="ans7">12i + 5j/13
        <li> <input type="radio" name="7" value=3>6i + 5j/13
        <li><input type="radio" name="7" value=4>12i + 5j/13
        </ol>  </br>
        <li> The resultant of two forces 3P and 2P is R. If the first force is doubled then the resultant is also doubled. The angle between the two forces is 
            <ol type="A">
        <li > <input type="radio" name="8" value=1>60<sup>0</sup>
        <li>  <input type="radio" name="8"value=2 id="ans8">120<sup>0</sup>
        <li> <input type="radio" name="8" value=3>30<sup>0</sup>
        <li><input type="radio" name="8" value=4>135<sup>0</sup>
        </ol>  </br>
        <li> A particle is projected vertically upward with a speed of 40 m/s, then the velocity of the particle 2 seconds before it reaches the maximum height is (take g= 10 M/s<sup>2</sup>) 
            <ol type="A">
        <li > <input type="radio" name="9" value=1id="ans9">20 m/s<sup>2</sup>
        <li>  <input type="radio" name="9" value=2>4.2 m/s<sup>2</sup>
        <li> <input type="radio" name="9" value=3>9.8 m/s<sup>2</sup>
        <li><input type="radio" name="9" value=4>10 m/s<sup>2</sup>
        </ol>  </br>
        <li> A car is moving with constant acceleration covered the distance between two points 60 m apart in 6 s. Its speed as it passes the second point 15 m/s. The acceleration is 
             <ol type="A">
        <li > <input type="radio" name="10"  value=1>1/3 ms<sup>-2</sup>
        <li>  <input type="radio" name="10" value=2>2/3 ms<sup>-2</sup>
        <li> <input type="radio" name="10" value=3>3/5 ms<sup>-2</sup>
        <li><input type="radio" name="10" value=4id="ans10">5/3 ms<sup>-2</sup>
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

window.location="phy8key.php"
}
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
        function openform3(){
        form3.classList.add('open-form3');
        }
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>

<script>
function Next() {
    <?php session_unset(); ?>
    window.location = "phy9.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "phy7.php";
}
</script>
 </html>