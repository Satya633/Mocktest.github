<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3859;
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
    if($ans3 == 4) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 2) $score++;
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
<title>Chemistry/Test-9</title>
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
                    <li><a href="#">TEST-9</a>
<ul class="dropdown">
<li><a href="che1.php">TEST-1</a></li>
<li><a href="che2.php">TEST-2</a></li>
<li><a href="che3.php">TEST-3</a></li>
<li><a href="che4.php">TEST-4</a></li>
<li><a href="che5.php">TEST-5</a></li>
<li><a href="che6.php">TEST-6</a></li>
<li><a href="che9.php">TEST-7</a></li>
<li><a href="che8.php">TEST-8</a></li>
<li><a href="che10.php">TEST-10</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
       <center class="textcolor"> <h1 align="center">CHEMISTRY-TEST: 9/10</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font"><form method="post" action="che9.php" onsubmit="return validateForm()">
           <li> In the Danniel cell, which electrode acts as anode?
            <ol type="A">
        <li > <input type="radio" name="type" value="1" >Cu
        <li>  <input type="radio" name="type" value="2">Hg
        <li> <input type="radio" name="type" value="3" id="sekhar">Zn    
        <li><input type="radio" name="type" value="4">Pt
        </ol>  </br>
        <li> The molar conductance of HCl is more than that of NaCl because
            <ol type="A">
        <li > <input type="radio" name="type1" value="1" >NaCl is more polar than KCl
        <li>  <input type="radio" name="type1" value="2" >NaCl is ionic while HCl is covalent
        <li> <input type="radio" name="type1" value="3"id="sekhar1">Ionic mobility of H<sup>+</sup> is more than that of Na<sup>+</sup>       
        <li><input type="radio" name="type1" value="4">H<sup>+</sup> get hydrated
            </ol>   </br>
        <li>The units for electrochemical equivalent are 
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >grams
        <li>  <input type="radio" name="type2" value="2" >grams ampere
        <li> <input type="radio" name="type2" value="3">Coluomb
        <li><input type="radio" name="type2" value="4" id="sekhar2">Grams per coulomb     
            </ol> </br>
            <li>Zeolite softening process removes
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >Only permanent hardness of water
            <li>  <input type="radio" name="type3" value="2"  >Only temporary hardness of water
            <li> <input type="radio" name="type3" value="3" id="sekhar3">Both temporary and permanent hardness of water
            <li><input type="radio" name="type3" value="4" >The dissolved gases in permanent hard water         
                </ol> </br>
                <li> The permanent hardness of water is caused by the presence of
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >Bicorbantes of Ca and Mg
                <li>  <input type="radio" name="type4" value="2" >Carbonates of Na and K
                <li> <input type="radio" name="type4" value="3" id="sekhar4">Chlorides and Sulphates of Ca and Mg
                <li><input type="radio" name="type4" value="4">Phosphates of Na and K         
                    </ol> </br>
                    <li>The secondary treatment of water uses_____to consume wastes in water.
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1" >Filtration
                    <li>  <input type="radio" name="type5" value="2" >Sedimentation
                    <li> <input type="radio" name="type5" value="3">Chemicals
                    <li><input type="radio" name="type5" value="4" id="sekhar5" >Microorganisms         
                        </ol> </br>
                        <li>Difficult to monitor and very dangerous from of corrosion
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1" >Galvanic
                        <li>  <input type="radio" name="type6" value="2" id="sekhar6">Pitting
                        <li> <input type="radio" name="type6" value="3">Crevic
                        <li><input type="radio" name="type6" value="4"  >Stress
                            </ol> </br>
                            <li>When Pt and Co are electrically connected, which one gets corroded?
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" id="sekhar7">Co
                            <li>  <input type="radio" name="type7" value="2" >Pt
                            <li> <input type="radio" name="type7" value="3">None
                            <li><input type="radio" name="type7" value="4" >both     
                                </ol> </br>
                                <li> What rubber was invented when Dr. Joseph C. Patrick tried to make antifreeze?
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >Methyl rubber
                                <li>  <input type="radio" name="type8" value="2" >Chloroprene
                                <li> <input type="radio" name="type8" value="3" >Bruna N
                                <li><input type="radio" name="type8" value="4" id="sekhar8">Thiokol     
                                    </ol> </br>
                                    <li> The first plastic ever synthesized was called_________.
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1">Bakelite
                                    <li>  <input type="radio" name="type9" value="2" >Nylon
                                    <li> <input type="radio" name="type9" value="3"  >Dacron
                                    <li><input type="radio" name="type9" value="4">Cellulose
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
window.location="che9key.php"
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
window.location="che8.php"
}
function Next()
{ <?php session_unset(); ?>
window.location="che10.php"
}

</script>
 </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           