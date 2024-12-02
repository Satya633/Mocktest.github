<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3855;
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
    if($ans2 == 3) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 3) $score++;
    if($ans9 == 1) $score++;
    if($ans0 == 2) $score++;
    
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
<title>Chemistry/Test-5</title>
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
                    <li><a href="#">TEST-5</a>
<ul class="dropdown">
<li><a href="chemistry.php">TEST-1</a></li>
<li><a href="che2.php">TEST-2</a></li>
<li><a href="che3.php">TEST-3</a></li>
<li><a href="che4.php">TEST-4</a></li>
<li><a href="che6.php">TEST-6</a></li>
<li><a href="che7.php">TEST-7</a></li>
<li><a href="che8.php">TEST-8</a></li>
<li><a href="che9.php">TEST-9</a></li>
<li><a href="che10.php">TEST-10</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
       <center class="textcolor"> <h1 align="center">CHEMISTRY-TEST: 5/10</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font"><form method="post" action="che5.php" onsubmit="return validateForm()">
           <li> Pauli's Exclusion principles states that two electrons in same orbital have
            <ol type="A">
        <li > <input type="radio" name="type" value="1" >same spins
        <li>  <input type="radio" name="type" value="2">different spins
        <li> <input type="radio" name="type" value="3" id="sekhar">opposite spins
        <li><input type="radio" name="type" value="4" >vertical spins
        </ol>  </br>
        <li> orbits in which electrons move according to Bohr are
            <ol type="A">
        <li > <input type="radio" name="type1" value="1" >elliptical
        <li>  <input type="radio" name="type1" value="2" >cylindrical
        <li> <input type="radio" name="type1" value="3" id="sekhar1">circular
        <li><input type="radio" name="type1" value="4">oval
            </ol>   </br>
        <li>Phosphorus has an atomic number of 15. A stable phosphorus atom has an electronic configuration of
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >1s<sup>2</sup>2s<sup>2</sup>2p<sup>6</sup>3p<sup>5</sup>
        <li>  <input type="radio" name="type2" value="2" id="sekhar2">1s<sup>2</sup>2s<sup>2</sup>2p<sup>6</sup>3s<sup>2</sup>3p<sup>3</sup>
        <li> <input type="radio" name="type2" value="3" >1s<sup>2</sup>2s<sup>2</sup>2p<sup>6</sup>3s<sup>2</sup>3p<sup>1</sup>4s<sup>2</sup>
        <li><input type="radio" name="type2" value="4" >1s<sup>2</sup>1p<sup>6</sup>1d<sup>7</sup>  
            </ol> </br>
            <li>NaCl is classified as having what kind of bonds in the sloid phase?
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >H<sub>2</sub>Covalent
            <li>  <input type="radio" name="type3" value="2"  id="sekhar3">Ionic
            <li> <input type="radio" name="type3" value="3" >Polar
            <li><input type="radio" name="type3" value="4" >vander Waals
                </ol> </br>
                <li> The Bond formed due to sharing of electrons is
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >Ionic bond
                <li>  <input type="radio" name="type4" value="2" >Metallic bond
                <li> <input type="radio" name="type4" value="3" >Polar bond
                <li><input type="radio" name="type4" value="4" id="sekhar4">Covalent bond 
                    </ol> </br>
                    <li>The normality of solution obtained by didolving 5.3 grams of Na<sub>2</sub>CO<sub>3</sub> in 1 litre solution is
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1" >1N
                    <li>  <input type="radio" name="type5" value="2" id="sekhar5">0.1N
                    <li> <input type="radio" name="type5" value="3">0.05N
                    <li><input type="radio" name="type5" value="4"  >0.5N
                        </ol> </br>
                        <li>The following solution has same molarity and normality
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1" >Na<sub>2</sub>CO<sub>3</sub>
                        <li>  <input type="radio" name="type6" value="2" id="sekhar6">NaCl
                        <li> <input type="radio" name="type6" value="3">H<sub>2</sub>SO<sub>4</sub>
                        <li><input type="radio" name="type6" value="4"  >K<sub>2</subCr<sub>2</sub>O<sub>7</sub>
                            </ol> </br>
                            <li>5 moles of a solute is disssolved in 10 litres of solution. What is its molarity?
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" >5 M
                            <li>  <input type="radio" name="type7" value="2" >2 M
                            <li> <input type="radio" name="type7" value="3" id="sekhar7">0.5 M
                            <li><input type="radio" name="type7" value="4" >0.2 M
                                </ol> </br>
                                <li> Process in which acids (H<sup>+</sup>) and base (OH<sup>-</sup>) react to form salts and water is called 
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" id="sekhar8">Neutralization
                                <li>  <input type="radio" name="type8" value="2" >Halogenation
                                <li> <input type="radio" name="type8" value="3" >Hydrogenenation
                                <li><input type="radio" name="type8" value="4" >Hydrolysis
                                    </ol> </br>
                                    <li> A substance that donates a pair of electrons to form cooridante covalent bond is called
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" >Lewis acid
                                    <li>  <input type="radio" name="type9" value="2" id="sekhar9">Lewis base
                                    <li> <input type="radio" name="type9" value="3"  >Bronsted-Lowry acid
                                    <li><input type="radio" name="type9" value="4">Bronsted-Lowry base
                                        </ol> 
        </ol> 
      <center><input type="submit" value="Complete" name="complete" class="satya"/></center></form>
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
window.location="che5key.php"
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
window.location="che4.php"
}
function Next()
{ <?php session_unset(); ?>
window.location="che6.php"
}

</script>
 </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   