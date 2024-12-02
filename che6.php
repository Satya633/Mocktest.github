<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3856;
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
    if($ans3 == 2) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 1) $score++;
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
<title>Chemistry/Test-6</title>
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
                    <li><a href="#">TEST-6</a>
<ul class="dropdown">
<li><a href="chemistry.php">TEST-1</a></li>
<li><a href="che2.php">TEST-2</a></li>
<li><a href="che3.php">TEST-3</a></li>
<li><a href="che4.php">TEST-4</a></li>
<li><a href="che5.php">TEST-5</a></li>
<li><a href="che7.php">TEST-7</a></li>
<li><a href="che8.php">TEST-8</a></li>
<li><a href="che9.php">TEST-9</a></li>
<li><a href="che10.php">TEST-10</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
       <center class="textcolor"> <h1 align="center">CHEMISTRY-TEST: 6/10</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font"><form method="post" action="che6.php" onsubmit="return validateForm()">
           <li> One Faraday is equal to
            <ol type="A">
        <li > <input type="radio" name="type" value="1" >99650 C
        <li>  <input type="radio" name="type" value="2">93100 C
        <li> <input type="radio" name="type" value="3" id="sekhar">96500 C
        <li><input type="radio" name="type" value="4" >94500 C
        </ol>  </br>
        <li> The cell reduction of a cell is Mg(s) + 2H<sup>+</sup>(aq)&arr;Mg<sup>2+</sup>(aq)+H<sub>2</sub>(g). If the standard reduction potential of Zn is -2.372V, Then the emf of the cell is
            <ol type="A">
        <li > <input type="radio" name="type1" value="1" id="sekhar1">+2.372V
        <li>  <input type="radio" name="type1" value="2" >-2.372V
        <li> <input type="radio" name="type1" value="3" >0.00V
        <li><input type="radio" name="type1" value="4">-1.372V
            </ol>   </br>
        <li>Galvanic cells are the cells which convert
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >Electrical energy to chemical energy
        <li>  <input type="radio" name="type2" value="2" id="sekhar2">Chemical energy to electrical energy
        <li> <input type="radio" name="type2" value="3" >Chemical energy into free energy
        <li><input type="radio" name="type2" value="4" >O=Potential energy to kinetic energy
            </ol> </br>
            <li>Mass of substance produced at electrode is directly proportional to the quantity of electricity passed.This is known as
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >Faraday's second law
            <li>  <input type="radio" name="type3" value="2"  id="sekhar3">Faraday's first law
            <li> <input type="radio" name="type3" value="3" >Newton's third law
            <li><input type="radio" name="type3" value="4" >Newton's first law
                </ol> </br>
                <li> Hardness of water is expressed in terms of equivalent of
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >Na<sub>2</sub>CO<sub>3</sub>
                <li>  <input type="radio" name="type4" value="2" >K<sub>2</sub>CO<sub>3</sub>
                <li> <input type="radio" name="type4" value="3" >MgCO<sub>3</sub>
                <li><input type="radio" name="type4" value="4" id="sekhar4">CaCO<sub>3</sub>
                    </ol> </br>
                    <li>Temporary hardness is caused by 
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1" id="sekhar5">Carbonates of calcium and magnesium
                    <li>  <input type="radio" name="type5" value="2" >Chlorides of calcium and magnesium
                    <li> <input type="radio" name="type5" value="3">Sulphates of calcium and magnesium
                    <li><input type="radio" name="type5" value="4"  >Nitrates of Calcium
                        </ol> </br>
                        <li>The exhausted zeolite bed can be regenrated by washing with
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1" id="sekhar6">NaCl
                        <li>  <input type="radio" name="type6" value="2" >dil.NaOH
                        <li> <input type="radio" name="type6" value="3">dil.HCL
                        <li><input type="radio" name="type6" value="4"  >Distilled water
                            </ol> </br>
                            <li>Corrosion is an example of
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" id="sekhar7">Oxidation
                            <li>  <input type="radio" name="type7" value="2" >Reduction
                            <li> <input type="radio" name="type7" value="3" >Electolysis
                            <li><input type="radio" name="type7" value="4" >Halogenation
                                </ol> </br>
                                <li> The composition of rust is 
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >Fe(OH)<sub>3</sub>
                                <li>  <input type="radio" name="type8" value="2" >FeCl<sub>3</sub>
                                <li> <input type="radio" name="type8" value="3" >FeO
                                <li><input type="radio" name="type8" value="4" id="sekhar8">Fe<sub>2</sub>O<sub>3</sub>.xH<sub>2</sub>O
                                    </ol> </br>
                                    <li> Which one of the following statement is not true?
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" id="sekhar9">Natural rubber has the trans-configuration at every double bond
                                    <li>  <input type="radio" name="type9" value="2" >Buna-S is a copolymer of butadiene and styrene
                                    <li> <input type="radio" name="type9" value="3"  >Natural rubber is a 1,4-polymer of isoprene
                                    <li><input type="radio" name="type9" value="4">In vulcanization, the formation of sulphur bridges between different chains makes rubber harder and stronger
                                        </ol> 
        </ol> 
      <center><input type="submit" value="Complete" name="complete" class="satya" onclick="display()"/></center></form>
<button style="display:inline-block;" class="satya" onclick="back()"><< Back</button>
<button style="display:inline-block;position:absolute;left:90%" class="satya" onclick="Next()">Next >></button>
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
</div></div></body>
<script>
function answer()
{
window.location="che6key.php"
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
window.location="che5.php"
}
function Next()
{ <?php session_unset(); ?>
window.location="che7.php"
}

</script>
 </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     