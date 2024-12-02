<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3854;
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
    if($ans2 == 2) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 1) $score++;
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
<title>Chemistry/Test-4</title>
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
                    <li><a href="#">TEST-4</a>
<ul class="dropdown">
<li><a href="chemistry.php">TEST-1</a></li>
<li><a href="che2.php">TEST-2</a></li>
<li><a href="che3.php">TEST-3</a></li>
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
       <center class="textcolor"> <h1 align="center">CHEMISTRY-TEST: 4/10</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font"><form method="post" action="che4.php" onsubmit="return validateForm()">
           <li> The normality of 2.3 M H<sub>2</sub>SO<sub>4</sub> solution is
            <ol type="A">
        <li > <input type="radio" name="type" value="1" >0.46 N
        <li>  <input type="radio" name="type" value="2">0.23 N
        <li> <input type="radio" name="type" value="3" >2.3 N    
        <li><input type="radio" name="type" value="4" id="sekhar">4.6 N
        </ol>  </br>
        <li> 8 grams os substance of molecular weight 40 is dissolved in 250 g of water. Then the molality of the solution is
            <ol type="A">
        <li > <input type="radio" name="type1" value="1" >0.4
        <li>  <input type="radio" name="type1" value="2" id="sekhar1">0.8
        <li> <input type="radio" name="type1" value="3">0.2
        <li><input type="radio" name="type1" value="4">0.6
            </ol>   </br>
        <li>The pH value of 0.05M Ba(OH)<sub>2</sub> solution is
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >10
        <li>  <input type="radio" name="type2" value="2" >12
        <li> <input type="radio" name="type2" value="3" id="sekhar2">13
        <li><input type="radio" name="type2" value="4" >11    
            </ol> </br>
            <li>Which of the following molecule is not a Lewis Base?
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >H<sub>2</sub>O
            <li>  <input type="radio" name="type3" value="2"  id="sekhar3">BF<sub>3</sub>
            <li> <input type="radio" name="type3" value="3" >NH<sub>3</sub>
            <li><input type="radio" name="type3" value="4" >CO
                </ol> </br>
                <li> During the electrolysis of brine, 710g of Cl<sub>2</sub> was liberated at anode. The weight of NaOH formed
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" id="sekhar4">800 g
                <li>  <input type="radio" name="type4" value="2" >400 g
                <li> <input type="radio" name="type4" value="3" >80 g
                <li><input type="radio" name="type4" value="4">40 g    
                    </ol> </br>
                    <li>__________is a brand of polyster textile fiber that is wrinkle resistant and strong
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1" >Cellulose
                    <li>  <input type="radio" name="type5" value="2" id="sekhar5">Dacron
                    <li> <input type="radio" name="type5" value="3">Bakelite
                    <li><input type="radio" name="type5" value="4"  >Nylon
                        </ol> </br>
                        <li>Water gas is a mixture of
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1" id="sekhar6">H<sub>2</sub> + CO
                        <li>  <input type="radio" name="type6" value="2" >N<sub>2</sub> + CO
                        <li> <input type="radio" name="type6" value="3">H<sub>2</sub> + CO<sub>2</sub>
                        <li><input type="radio" name="type6" value="4"  >H<sub>2</sub> + CH<sub>4</sub>
                            </ol> </br>
                            <li>Which of the following is not a green house gas?
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" id="sekhar7">Co
                            <li>  <input type="radio" name="type7" value="2" >CO<sub>2</sub>
                            <li> <input type="radio" name="type7" value="3">Water Vapour
                            <li><input type="radio" name="type7" value="4" >CH<sub>4</sub> 
                                </ol> </br>
                                <li> Burning of the fossil fuels causes
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >Global warming
                                <li>  <input type="radio" name="type8" value="2" >Ozone depletion
                                <li> <input type="radio" name="type8" value="3" id="sekhar8">Acid rain
                                <li><input type="radio" name="type8" value="4" >Eutrophication
                                    </ol> </br>
                                    <li> Which among the following is insoluble in water?
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" >Alcohol
                                    <li>  <input type="radio" name="type9" value="2" >Ammonia
                                    <li> <input type="radio" name="type9" value="3"  id="sekhar9">Benzene
                                    <li><input type="radio" name="type9" value="4">Acetone
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
window.location="che4key.php"
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
window.location="che3.html"
}
function Next()
{ <?php session_unset(); ?>
window.location="che5.php"
}

</script>
 </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               