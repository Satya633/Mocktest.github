<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=168255;
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
    if($ans2 == 1) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 4) $score++;
    if($ans8 == 1) $score++;
    if($ans9 == 4) $score++;
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
<title>GENERAL/PHYSICS/Test-5</title>
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
 <center class="textcolor"><h1 align="center"> PHYSICS - TEST:5/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="phy5.php" onsubmit="return validateForm()">
           <li> A simple pendulum has a time period T in vaccum. Its time period when it is completely immersed in a liquid of density one-eighth of the density of material of the bob is  
            <ol type="A">
        <li > <input type="radio" name="type" value=1>&#x221A;7/8 T
        <li>  <input type="radio" name="type" value=2>&#x221A;5/8 T
        <li> <input type="radio" name="type" value=3>&#x221A;3/8 T
        <li><input type="radio" name="type" value=4 >&#x221A;8/7 T
        </ol>  </br>
        <li> A particle executes simple harmonic motion represented by displacement function as x(t)= A sin(&omega;t+&Phi;). If the position and velocity of the particle at t= 0 s are 2 cm and 2&omega; cms<sup>-1</sup> respectively, then its amplitude is x &#x221A;2 cm where the value of x is 
            <ol type="A">
        <li > <input type="radio" name="type1" value=1 >2
        <li>  <input type="radio" name="type1" value=2>2&#x221A;2
        <li> <input type="radio" name="type1" value=3>4
        <li><input type="radio" name="type1" value=4>1
        </ol>  </br>
        <li> An observer standing between two parallel cliffs emits an intense sound note. If two successive echoes are heard after 5 s and 7 s, then distance between the cliffs is (velocity of sound is 340 m/s)
            <ol type="A">
        <li > <input type="radio" name="type2" value=1>850 m
        <li>  <input type="radio" name="type2" value=2>1190 m
        <li> <input type="radio" name="type2" value=3>2040 m
        <li><input type="radio" name="type2" value=4>340 m
        </ol>  </br>
        <li> M grams of steam at 100<sup>0</sup> C is mixed with 200 g of ice at its melting point in a thermally insulated container. If it produced liquid water at 40<sup>0</sup> [heat of vaporization of water is 540 cal/g and heat of fusion of ice is 80 cal/g] the value of M is 
            <ol type="A">
        <li > <input type="radio" name="type3" value=1>20
        <li>  <input type="radio" name="type3" value=2>80
        <li> <input type="radio" name="type3" value=3 >40
        <li><input type="radio" name="type3" value=4>10
        </ol>  </br>
        <li>  Which type of ideal gas will have the largest value for C<sub>p</sub> - C<sub>v</sub>           
               <ol type="A">
        <li > <input type="radio" name="type4" value=1>Polyatomic
        <li>  <input type="radio" name="type4" value=2>Diatomic
        <li> <input type="radio" name="type4" value=3>Monoatomic     
        <li><input type="radio" name="type4" value=4 >The value will be same for all
        </ol>  </br>
        <li>  In thermodynamics, heat and work are
            <ol type="A">
        <li > <input type="radio" name="type5" value=1>Path functions
        <li>  <input type="radio" name="type5" value=2>Intensive thermodynamic state variables
        <li> <input type="radio" name="type5" value=3>Extensive thermodynamics state variables
        <li><input type="radio" name="type5" value=4 >Point functions
        </ol>  </br>
        <li> For an adiabatic expansion of an ideal gas, the fractional change in its pressure is equal to (where &gamma; is the ratio of specific heats) : 
            <ol type="A">
        <li > <input type="radio" name="type6" value=1>- &gamma; v/dv
        <li>  <input type="radio" name="type6" value=2>- &gamma; dv/v
        <li> <input type="radio" name="type6" value=3>- 1/&gamma; v/dv
        <li><input type="radio" name="type6" value=4 >- 1/&gamma; dv/v
        </ol>  </br>
        <li> Which of the following processes must violate the first law of thermodynamics ?
            <ol type="A">
        <li > <input type="radio" name="type7" value=1>W>0, Q>o, and &Delta; E<sub>int</sub><0
        <li>  <input type="radio" name="type7" value=2 >W>0, Q<o, and &Delta; E<sub>int</sub>0
        <li> <input type="radio" name="type7" value=3 >W<0, Q>o, and &Delta; E<sub>int</sub><0
        <li><input type="radio" name="type7" value=4 >W>0, Q<o, and &Delta; E<sub>int</sub>=0
        </ol>  </br>
        <li> The critical angle for total internal reflection is maximum for 
            <ol type="A">
        <li > <input type="radio" name="type8" value=1>Red light
        <li>  <input type="radio" name="type8" value=2>Blue light
        <li> <input type="radio" name="type8" value=3>Ultraviolet rays
        <li><input type="radio" name="type8" value=4 >Infrated rays
        </ol>  </br>
        <li> Photon of frequency ( f ) has a momentum ( p ) associated with it. If c is the velocity of light, the momentum is 
            <ol type="A">
        <li > <input type="radio" name="type9"  value=1>hf/c
        <li>  <input type="radio" name="type9" value=2>f/c
        <li> <input type="radio" name="type9" value=3>hfc
        <li><input type="radio" name="type9" value=4>hf/c<sup>2</sup>
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

window.location="phy5key.php"
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
    window.location = "phy6.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "phy4.php";
}
</script>
 </html>