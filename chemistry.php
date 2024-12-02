<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3851;
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
    if($ans1 == 3) $score++;
    if($ans2 == 1) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 2) $score++;
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
<title>Chemistry/Test-1</title>
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
                    <li><a href="#">TEST-1</a>

<ul class="dropdown">
<li><a href="che2.php">TEST-2</a></li>
<li><a href="che3.php">TEST-3</a></li>
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
       <center class="textcolor"> <h1 align="center">CHEMISTRY-TEST: 1/10</h1>
<h3 align="center">Answer the following Questions : </h3></center> 
<ol type="1" class="font" ><form method="post" action="chemistry.php" onsubmit="return validateForm()">
<li> The splitting of spectral lines in a strong magnetic field is called 
<ol type="A">
<li><input type="radio" name="type" value="1">Stark Effect
<li><input type="radio" name="type" value="2">Pauli Exclusion Principle
<li><input type="radio" name="type" value="3">Zeeman Effect 
<li><input type="radio" name="type" value="4">Aufbau Effect
</ol></br>
<li> Bohr's model can explain
<ol type="A">
<li><input type="radio" name="type1" value="1">The spectrum of hydrogen atom only
<li><input type="radio" name="type1" value="2">The spectrum of hydrogen molecule 
<li><input type="radio" name="type1" value="3">The solar spectrum
<li><input type="radio" name="type1" value="4">Spectrum of an atom or ion containing one electron only
</ol></br>
<li> The maximum number of electrons that a d-orbital can accomodate is
<ol type="A">
<li><input type="radio" name="type2" value="1">2
<li><input type="radio" name="type2" value="2">6
<li><input type="radio" name="type2"  value="3">10
<li><input type="radio" name="type2" value="4">14
</ol></br>
<li> N<sub>2</sub> molecule contains 
<ol type="A">
<li><input type="radio" name="type3" value="1">Covalent bond
<li><input type="radio" name="type3" value="1">Ionic bond
<li><input type="radio" name="type3" value="1">Hydrogen bond
<li><input type="radio" name="type3" value="1">Metallic bond
</ol></br>
<li> One mole of any of the particle contains 
<ol type="A">
<li><input type="radio" name="type4" value="1">6.023X 10<sup>-23</sup>
<li><input type="radio" name="type4" value="2">6.022X 10<sup>23</sup>
<li><input type="radio" name="type4" value="3">60.23X 10<sup>23</sup>
<li><input type="radio" name="type4" value="4">6.022X 10<sup>25</sup>
</ol></br>
<li> The normality of the solution obtained by dissolving 4 gm of NaOH in 1 Litre is
<ol type="A">
<li><input type="radio" name="type5" value="1">1N
<li><input type="radio" name="type5" value="2">0.1N
<li><input type="radio" name="type5" value="3">0.5N
<li><input type="radio" name="type5" value="4">0.02N
</ol></br>
<li> Molecular weight of H<sub>2</sub>SO<sub>4</sub> is
<ol type="A">
<li><input type="radio" name="type6" value="1">92
<li><input type="radio" name="type6" value="2">96
<li><input type="radio" name="type6" value="3">98
<li><input type="radio" name="type6" value="4">99
</ol></br>
<li> A Lewis acid is a substance which 
<ol type="A">
<li><input type="radio" name="type7" value="1">Accept protons 
<li><input type="radio" name="type7" value="2">Accept a lone pair of electrons 
<li><input type="radio" name="type7" value="3">Donate protons 
<li><input type="radio" name="type7" value="4">Donate a lone pair of electrons 
</ol></br>
<li> P<sup>H</sup> of a solution is 9.5, the solution is 
<ol type="A">
<li><input type="radio" name="type8" value="1">Basic
<li><input type="radio" name="type8" value="2">Acidic
<li><input type="radio" name="type8" value="3">neutral
<li><input type="radio" name="type8" value="4">Amphoteric
</ol></br>
<li> Magnesium Atomic number is 12, which of the following is the electronic configuration 
<ol type="A">
<li><input type="radio" name="type9" value="1">1S<sup>2</sup>2S<sup>1</sup>2P<sup>6</sup>3S<sup>2</sup>
<li><input type="radio" name="type9" value="2">1S<sup>2</sup>2S<sup>2</sup>2P<sup>5</sup>3S<sup>2</sup>
<li><input type="radio" name="type9"  value="3">1S<sup>2</sup>2S<sup>2</sup>2P<sup>6</sup>3S<sup>2</sup>
<li><input type="radio" name="type9" value="4">1S<sup>2</sup>2S<sup>2</sup>2P<sup>6</sup>3S<sup>1</sup>3d<sup>1</sup>
</ol></br>
</ol>
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
<script>
function answer()
{

window.location="chemistrykey.php"
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
{ <?php session_unset(); ?>
window.location="general.html"
}
</script>
<script>
function Next()
{<?php session_unset(); ?>
window.location="che2.php"
}
</script>
</html>