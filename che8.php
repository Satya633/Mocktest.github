<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3858;
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
    if($ans3 == 3) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 2) $score++;
    if($ans9 == 1) $score++;
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
<title>Chemistry/Test-8</title>
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
                    <li><a href="#">TEST-8</a>
<ul class="dropdown">
<li><a href="chemistry.php">TEST-1</a></li>
<li><a href="che2.php">TEST-2</a></li>
<li><a href="che3.php">TEST-3</a></li>
<li><a href="che4.php">TEST-4</a></li>
<li><a href="che5.php">TEST-5</a></li>
<li><a href="che6.php">TEST-6</a></li>
<li><a href="che7.php">TEST-7</a></li>
<li><a href="che9.php">TEST-9</a></li>
<li><a href="che10.php">TEST-10</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
       <center class="textcolor"> <h1 align="center">CHEMISTRY-TEST: 8/10</h1>
                <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center>
         <ol type="1" class="font"><form method="post" action="che8.php" onsubmit="return validateForm()">
           <li> How many electrons in an atom may have the quantum numbers, n=4, m=-1/2 ?
            <ol type="A">
        <li > <input type="radio" name="1" value="1">1
        <li>  <input type="radio" name="1" value="2">2
        <li> <input type="radio" name="1" value="3">16
        <li><input type="radio" name="1" value="4">32
        </ol>  </br>
        <li> Balmer series of Hydrogen atom corresponds to which spectral region ?
            <ol type="A">
        <li > <input type="radio" name="2"   value="1">X-ray region
        <li>  <input type="radio" name="2" value="2">Ultraviolet region
        <li> <input type="radio" name="2" value="3">Infrated region 
        <li><input type="radio" name="2" value="4">visible region
        </ol>  </br>   
        <li> The electronic configuration of the Cu atom violates which principle ?
            <ol type="A">
        <li > <input type="radio" name="3" value="1">Hund's rule
        <li>  <input type="radio" name="3" value="2">Pauli Exclusion Principle
        <li> <input type="radio" name="3"  value="3">Aufbau Principle
        <li><input type="radio" name="3" value="4">Heisenberg's Uncertainty Principle
        </ol>  </br>
        <li> As compound to covalent compounds, ionic compounds generally have 
            <ol type="A">
        <li > <input type="radio" name="4" value="1">low melting points and low boiling points 
        <li>  <input type="radio" name="4" value="2">high melting points and high boiling points 
        <li> <input type="radio" name="4" value="3">low melting points and high boiling points
        <li><input type="radio" name="4" value="4">high melting points and low boiling points
        </ol>  </br>
        <li> The octet rule is not valid for the molecule 
            <ol type="A">
        <li > <input type="radio" name="5" value="1">CO<sub>2</sub>
        <li>  <input type="radio" name="5" value="2">H<sub>2</sub>O
        <li> <input type="radio" name="5"  value="3">O<sub>2</sub>
        <li><input type="radio" name="5" value="4">CO
        </ol>  </br>
        <li> Two solutions of a substance (non-electrolyte) are mixed in the following manner, 480 ml of 1.5 M first second solution. What is the molarity of the final mixture ?
    <ol type="A">
        <li > <input type="radio" name="6" value="1">1.20 M
        <li>  <input type="radio" name="6" value="2">1.50 M
        <li> <input type="radio" name="6" value="3">2.70 M
        <li><input type="radio" name="6" value="4">1.344 M
        </ol>  </br>
        <li> The equivalent mass of H<sub>3</sub>PO<sub>4</sub> in the following equation (let M be the mass of H<sub>3</sub>PO<sub>4</sub>): </br>
             &nbsp;&nbsp;&nbsp;H<sub>3</sub>PO<sub>4</sub> + Ca(OH)<sub>2</sub>  ->  CaHPO<sub>4</sub> + 2H<sub>2</sub>O
            <ol type="A">
        <li > <input type="radio" name="7"  value="1"M
        <li>  <input type="radio" name="7" value="2">M/2
        <li> <input type="radio" name="7" value="3">M/3
        <li><input type="radio" name="7" value="4">2M
  </ol>  </br>
        <li> The normality of 4%(mass/volume) NaOH solution is 
       <ol type="A">
        <li > <input type="radio" name="8" value="1">0.1 N
        <li>  <input type="radio" name="8" value="2">1.0 N
        <li> <input type="radio" name="8" value="3">0.5 N
        <li> <input type="radio" name="8" value="4">0.01 N
        </ol>  </br>
        <li> Which of the following cannot function as both Bronsted acid and base ? 
            <ol type="A">
        <li > <input type="radio" name="9" value="1">HCl
        <li>  <input type="radio" name="9" value="2">NH<sub>3</sub>
        <li> <input type="radio" name="9" value="3">HSO<sub>4</sub>
        <li><input type="radio" name="9" value="4">HCO<sub>3</sub>
        </ol>  </br>
        <li> Hydrogen gas is not liberated when the following metal is added to dil.HCl.
            <ol type="A">
        <li > <input type="radio" name="10" value="1">Mg
        <li>  <input type="radio" name="10" value="2">Zn
        <li> <input type="radio" name="10"  value="3">Ag
        <li><input type="radio" name="10" value="4">Cu
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

window.location="che8key.php"
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
window.location="che7.php"
}
function Next()
{<?php session_unset(); ?>
window.location="che9.php"
}

</script>
 </html>