<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3857;
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
    if($ans4 == 2) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 3) $score++;
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
<title>Chemistry/Test-7</title>
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
                    <li><a href="#">TEST-7</a>
<ul class="dropdown">
<li><a href="chemistry.php">TEST-1</a></li>
<li><a href="che2.php">TEST-2</a></li>
<li><a href="che3.php">TEST-3</a></li>
<li><a href="che4.php">TEST-4</a></li>
<li><a href="che5.php">TEST-5</a></li>
<li><a href="che6.php">TEST-6</a></li>
<li><a href="che8.php">TEST-8</a></li>
<li><a href="che9.php">TEST-9</a></li>
<li><a href="che10.php">TEST-10</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
       <center class="textcolor"> <h1 align="center">CHEMISTRY-TEST: 7/10</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center>
         <ol type="1" class="font"><form method="post" action="che7.php" onsubmit="return validateForm()">
           <li> Hardness of water is conventionally expressed in terms of equivalent amount of 
            <ol type="A">
        <li > <input type="radio" name="1" value="1">MgCO<sub>3</sub>
        <li>  <input type="radio" name="1" value="2">CaCO<sub>3</sub>
        <li> <input type="radio" name="1" value="3">Na<sub>2</sub>CO<sub>3</sub>
        <li><input type="radio" name="1" value="4">K<sub>2</sub>CO<sub>3</sub>
        </ol>  </br>
        <li> Zero hardness of water is achieved by 
            <ol type="A">
        <li > <input type="radio" name="2"   value="1">using lime soda process
        <li>  <input type="radio" name="2" value="2">excess lime treatment
        <li> <input type="radio" name="2" value="3">using excess alum dosage 
        <li><input type="radio" name="2" value="4">ion-exchange method
        </ol>  </br>   
        <li> What is the hardness of water in terms of CaCO<sub>3</sub> equivalent is carried with 
            <ol type="A">
        <li > <input type="radio" name="3" value="1">Evolution of oxygen
        <li>  <input type="radio" name="3" value="2">Absorption of oxygen
        <li> <input type="radio" name="3"  value="3">Evolution of hydrogen
        <li><input type="radio" name="3" value="4">Absorption of hydrogen
        </ol>  </br>
        <li> Which of the following metal oxide film is protective from corrosion ? 
            <ol type="A">
        <li > <input type="radio" name="4" value="1">Porous
        <li>  <input type="radio" name="4" value="2">NON-Porous
        <li> <input type="radio" name="4" value="3">Volatile
        <li><input type="radio" name="4" value="4">Unstable
        </ol>  </br>
        <li> Which of the following is the thermosetting plastic ?
            <ol type="A">
        <li > <input type="radio" name="5" value="1">PVC
        <li>  <input type="radio" name="5" value="2">Teflon
        <li> <input type="radio" name="5"  value="3">Polystyrene
        <li><input type="radio" name="5" value="4">Bakelite
        </ol>  </br>
        <li> Ebonite is 
    <ol type="A">
        <li > <input type="radio" name="6" value="1">Highly vulcanized rubber
        <li>  <input type="radio" name="6" value="2">PVC
        <li> <input type="radio" name="6" value="3">Synthetic rubber
        <li><input type="radio" name="6" value="4">Polystyrene
        </ol>  </br>
        <li> Buna-S rubber is made up of the monomers of 
            <ol type="A">
        <li > <input type="radio" name="7"  value="1">1,3 butadiene and acrylonitrile
        <li>  <input type="radio" name="7" value="2">1,3 butadiene and styrene 
        <li> <input type="radio" name="7" value="3">1,3 butadiene and formaldehyde
        <li><input type="radio" name="7" value="4">1,3 butadiene and phenol
  </ol>  </br>
        <li> Compostion of water gas is 
       <ol type="A">
        <li > <input type="radio" name="8" value="1">CO+N<sub>2</sub>
        <li>  <input type="radio" name="8" value="2">Co+CH<sub>4</sub>
        <li> <input type="radio" name="8"  value="3">CO+H<sub>2</sub>
        <li> <input type="radio" name="8" value="4">CH<sub>4</sub>+N<sub>2</sub>
        </ol>  </br>
        <li> Which of the following is not a green gas 
            <ol type="A">
        <li > <input type="radio" name="9" value="1">Hydrogen
        <li>  <input type="radio" name="9" value="2">Carbon monoxide
        <li> <input type="radio" name="9"  value="3">Methane
        <li><input type="radio" name="9" value="4">Nitrous oxide
        </ol>  </br>
        <li> Photochemical smog is due to the presence of 
            <ol type="A">
        <li > <input type="radio" name="10" value="1" >Oxide of carbon
        <li>  <input type="radio" name="10" value="2">Lead
        <li> <input type="radio" name="10"  value="3">Oxide of sulphur
        <li><input type="radio" name="10" value="4">Oxide of nitrogen
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
</div></div>



<button style="display:inline-block;" class="satya" onclick="back()"><< Back</button>
<button style="display:inline-block;position:absolute;left:90%" class="satya" onclick="Next()">Next >></button>

    </body>
<script>
function answer()
{

window.location="che7key.php"
}
</script>
  <script type="text/javascript">  
       let form3 = document.getElementById('form3')
                  function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>


<script>
function back()
{<?php session_unset(); ?>
window.location="che6.php"
}
function Next()
{<?php session_unset(); ?>
window.location="che8.php"
}

</script>
 </html>