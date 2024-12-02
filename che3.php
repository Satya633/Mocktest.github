<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3853;
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
    if($ans1 == 3) $score++;
    if($ans2 == 1) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 4) $score++;
    if($ans9 == 3) $score++;
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
<title>Chemistry/Test-3</title>
<link rel="stylesheet" href="satya.css"/>
<link rel="icon" href="logo.png" type="image/x-icon">
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
                    <li><a href="#">TEST-3</a>
<ul class="dropdown">
<li><a href="chemistry.php">TEST-1</a></li>
<li><a href="che2.php">TEST-2</a></li>
<li><a href="che4.php">TEST-4</a></li>
<li><a href="che5.php">TEST-5</a></li>
<li><a href="che6.php">TEST-6</a></li>
<li><a href="che7.php">TEST-7</a></li>
<li><a href="che8.php">TEST-8</a></li>
<li><a href="che9.php">TEST-9</a></li>
<li><a href="che10.php">TEST-10</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
       <center class="textcolor"> <h1 align="center">CHEMISTRY-TEST: 3/10</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center>
         <ol type="1" class="font"><form method="post" action="che3.php" onsubmit="return validateForm()">
           <li> Isoprene is a monomer of 
            <ol type="A">
        <li > <input type="radio" name="1" value="1">Strach
        <li>  <input type="radio" name="1" value="1">Cellouse
        <li> <input type="radio" name="1" value="1">Natural rubber       
        <li><input type="radio" name="1" value="1">Lignin
        </ol>  </br>
        <li> Buna-S is a copolymer of 
            <ol type="A">
        <li > <input type="radio" name="2" value="1">Butadiene and Styrene
        <li>  <input type="radio" name="2" value="2">Butadiene and Acrylonitrile
        <li> <input type="radio" name="2" value="3">Butadiene and Isoprene    
        <li><input type="radio" name="2" value="4">Formaldehyde and Styrene
        </ol>  </br>   
        <li> Main constituent of natural gas is
            <ol type="A">
        <li > <input type="radio" name="3" value="1">Ethane
        <li>  <input type="radio" name="3" value="2"> Methane 
        <li> <input type="radio" name="3" value="3">Butane
        <li><input type="radio" name="3" value="4">Carbon Monoxide
        </ol>  </br>
        <li> Ozone Layer present is at 
            <ol type="A">
        <li > <input type="radio" name="4" value="1">Staratosphere
        <li>  <input type="radio" name="4" value="2">Inosphere 
        <li> <input type="radio" name="4" value="3">Thermosphere    
        <li><input type="radio" name="4" value="4">Atomsphere
        </ol>  </br>
        <li> The amount of DO required to aerobically decompose biodegenrable organic matter of a given volume of water is 
            <ol type="A">
        <li > <input type="radio" name="5" value="1">Biochemical Oxygen Demand
        <li>  <input type="radio" name="5" value="2">Biological Oxygen Demand
        <li> <input type="radio" name="5"  value="3">Chemical Oxygen demand
        <li><input type="radio" name="5" value="4\">Biomagnification
        </ol>  </br>
        <li>  The nucleus consists of      
    <ol type="A">
        <li > <input type="radio" name="6" value="1">Proton and electron
        <li>  <input type="radio" name="6" value="2">Proton and Neutron
        <li> <input type="radio" name="6" value="3">Proton and Duterium
        <li><input type="radio" name="6" value="4">Proton and Photan
        </ol>  </br>
        <li> The shape of P-orbital is 
            <ol type="A">
        <li > <input type="radio" name="7" value="1">spherical
        <li>  <input type="radio" name="7" value="2">Dumbbell
        <li> <input type="radio" name="7" value="3">Double Dumbbell 
        <li><input type="radio" name="7" value="4">Oval
  </ol>  </br>
        <li> The maximum number of electrons that a f-orbital can accomodate is     
       <ol type="A">
        <li > <input type="radio" name="8" value="1">2
        <li>  <input type="radio" name="8" value="2">6
        <li> <input type="radio" name="8" value="3" >10
        <li> <input type="radio" name="8" value="4">14
        </ol>  </br>
        <li> In NaCl formation Sodium is donating........electrons 
            <ol type="A">
        <li > <input type="radio" name="9" value="1">0
        <li>  <input type="radio" name="9" value="2">2
        <li> <input type="radio" name="9"  value="3">1   
        <li><input type="radio" name="9" value="4">3
        </ol>  </br>
        <li> O<sub>2</sub> molecule contains
            <ol type="A">
        <li > <input type="radio" name="10"  value="1">Covalent bond
        <li>  <input type="radio" name="10" value="2">Ionic bond
        <li> <input type="radio" name="10" value="3">Hydrogen bond
        <li><input type="radio" name="10" value="4">Metalic bond
        </ol>  </br>
         </ol>
                  
        <center> <input type="submit" class="satya" name="complete" value="Complete"/></center></form>

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
<script>
function answer()
{

window.location="che3key.php"
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
function back()
{<?php session_unset(); ?>
window.location="che2.php"
}
function Next()
{<?php session_unset(); ?>
window.location="che4.php"
}

</script>
 </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    