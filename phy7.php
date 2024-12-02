<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=168257;
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
    if($ans2 == 2) $score++;
    if($ans3 == 4) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 3) $score++;
    if($ans7 == 4) $score++;
    if($ans8 == 4) $score++;
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
<title>GENERAL/PHYSICS/Test-7</title>
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
 <center class="textcolor"><h1 align="center"> PHYSICS - TEST:7/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="phy7.php" onsubmit="return validateForm()">
           <li> A pump can take out 7200 Kg of water per hour from a 100 m deep well. If the efficiency of the pump is 50% then power of the pump is (g= 10 ms<sup>-2</sup>)
            <ol type="A">
        <li > <input type="radio" name="1" value=1>2 KW
        <li>  <input type="radio" name="1" value=2 id="ans1">4KW
        <li> <input type="radio" name="1" value=3> 7.2 KW
        <li><input type="radio" name="1" value=4>3.6 KW
        </ol>  </br>
        <li> When a force F=i + 2j + 3k acts on a body to move it from r1=i + j + k to r2=i - j + 2k, then the work done by the force is 
            <ol type="A">
        <li > <input type="radio" name="2" value=1>-3 J
        <li>  <input type="radio" name="2" value=2 id="ans2">-1 J
        <li> <input type="radio" name="2" value=3 >2 J
        <li><input type="radio" name="2" value=4>3 J
        </ol>  </br>
        <li> The K.E. of a body moving with a speed of 10 m/s is 30 J. If its speed becomes 30 m/s, then its K.E. will be
            <ol type="A">
        <li > <input type="radio" name="3" value=1>10 J
        <li>  <input type="radio" name="3" value=2>90 J
        <li> <input type="radio" name="3" value=3>180 J
        <li><input type="radio" name="3" value=4 id="ans3">270 J
        </ol>  </br>
        <li> The maximum speed of a particle executing SHM is 1 m/s and maximum accelration is 1.57 m/s<sup>2</sup>. Its time period is
            <ol type="A">
        <li > <input type="radio" name="4" value=1>Increase
        <li>  <input type="radio" name="4" value=2 id="ans4">Decrease
        <li> <input type="radio" name="4" value=3 >Remain same
        <li><input type="radio" name="4" value=4 >Becomes erratic
        </ol>  </br>
        <li> A light spring supports 200 gm weight at its lower end, it oscillates with a period of 1 sec. How much weight must be removed from the lower end to reduce the period to 0.5 sec ?
               <ol type="A">
        <li > <input type="radio" name="5" value=1>100 gm
        <li>  <input type="radio" name="5" value=2>50 gm
        <li> <input type="radio" name="5" value=3 id="ans5">150 gm
        <li><input type="radio" name="5" value=4>200 gm
        </ol>  </br>
        <li> The velocity of sound in any medium depends upon
            <ol type="A">
        <li > <input type="radio" name="6" value=1>Intensity and elasticity
        <li>  <input type="radio" name="6" value=2>Amplitude and density
        <li> <input type="radio" name="6" value=3 id="ans6">elasticity and density
        <li><input type="radio" name="6" value=4>Amplitude and elasticity
        </ol>  </br>
        <li> The beat frequency produced by the vibrations of x1= A sin(320&pi;t) and x2= A sin(326&pi;t) is 
            <ol type="A">
        <li > <input type="radio" name="7" value=1>6
        <li>  <input type="radio" name="7" value=2>4
        <li> <input type="radio" name="7" value=3>2
        <li><input type="radio" name="7" value=4 id="ans7">3
        </ol>  </br>
        <li> The Boyle's law is stated by PV = C,C depends on  
            <ol type="A">
        <li > <input type="radio" name="8" value=1>Nature of gas
        <li>  <input type="radio" name="8" value=2>Atomic weight of gas
        <li> <input type="radio" name="8" value=3>Temperature of gas
        <li><input type="radio" name="8" value=4id="ans8">Quantity and temperature of gas
        </ol>  </br>
        <li> The equation of state for 5g of oxygen(O<sub>2</sub>) at pressure P and temperature T, When occupying a volume V, will be(R is universal constant)
            <ol type="A">
        <li > <input type="radio" name="9" value=1>PV = 5RT
        <li>  <input type="radio" name="9" value=2>PV = 5/2 RT
        <li> <input type="radio" name="9" value=3>PV = 5/16 RT
        <li><input type="radio" name="9" id="ans9" value=4>PV = 5/32 RT
        </ol>  </br>
        <li> The volume of a gas at constant pressure 0f 10<sup>3</sup>N/m<sup>2</sup> expands by 0.25M<sup>3</sup>. The work done in this process is 
             <ol type="A">
        <li > <input type="radio" name="10"  value=1>25 J
        <li>  <input type="radio" name="10" value=2>50 J
        <li> <input type="radio" name="10" value=3 id="ans10">250 J
        <li><input type="radio" name="10" value=4>5 J
        </ol>  </br>
         </ol>
                  
        <center> <input type="submit" class="satya" name="complete"value="Complete"/></center></form>
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

window.location="phy7key.php"
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
    window.location = "phy8.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "phy6.php";
}
</script>
 </html>
