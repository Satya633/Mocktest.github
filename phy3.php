<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=168253;
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
    if($ans2 == 2) $score++;
    if($ans3 == 4) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 4) $score++;
    if($ans8 == 2) $score++;
    if($ans9 == 2) $score++;
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
<title>GENERAL/PHYSICS/Test-3</title>
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
 <center class="textcolor"><h1 align="center"> PHYSICS - TEST:3/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="phy3.php" onsubmit="return validateForm()">
<li>The ratio of specifies heats for a mono atomix gas is given by
<ol type="A">
<li><input type="radio" name="type" value=1 >7/5
<li><input type="radio" name="type" value=2 >5/2
<li><input type="radio" name="type" value=3 id="ans">5/3
<li><input type="radio" name="type" value=4 >9/5
</ol></br>
<li>Two identical sample of a gas are allowed to expand (i) isothermally (ii) adiabatically. Work done is
<ol type="A">
<li><input type="radio" name="type1" value=1 >More in the adiabatic process
<li><input type="radio" name="type1" value=2 id="ans1">More in the isothermal process
<li><input type="radio" name="type1" value=3 >Equal in both process
<li><input type="radio" name="type1" value=4 >No work done in any process
</ol></br>
<li>The heat required to raise 0.5 Kg of sand from 30<sup>0</sup> to 90<sup>0</sup> is given by (Specific Heat of sand = 830J/Kg<sup>0</sup>C)
<ol type="A">
<li><input type="radio" name="type2" value=1 >23450J
<li><input type="radio" name="type2" value=2 >54560J
<li><input type="radio" name="type2" value=3 >4578J
<li><input type="radio" name="type2" value=4 id="ans2">24900J
</ol></br>
<li>A ray of light will undergo total internal reflection if it
<ol type="A">
<li><input type="radio" name="type3" value=1 id="ans3">Travels from denser medium to rarer medium & angle of incidence should be greater than critical angle
<li><input type="radio" name="type3" value=2 >Travels from rarer medium to denser medium & angle of incidence should be greater than critical angle
<li><input type="radio" name="type3" value=3 >Travels from denser medium to rarer medium & angle of incidence should be less than critical angle
<li><input type="radio" name="type3" value=4 >Travels from rarer medium to denser medium & angle of incidence should be less than critical angle
</ol></br>
<li>The explusion of a magnetic field from the interior of a superconductor, a phenomemon is known as
<ol type="A">
<li><input type="radio" name="type4" value=1 >Isotopic effect
<li><input type="radio" name="type4" value=2 >BCS theory
<li><input type="radio" name="type4" value=3 id="ans4">Meissener effect
<li><input type="radio" name="type4" value=4 >London theory
</ol></br>
<li>The dimensions of premeability is
<ol type="A">
<li><input type="radio" name="type5" value=1 id="ans5">MLT<sup>2</sup>A<sup>-2</sup>
<li><input type="radio" name="type5" value=2 >MLT<sup>-1</sup>A<sup>-2</sup>
<li><input type="radio" name="type5" value=3 >MLT<sup>-2</sup>A<sup>-1</sup>
<li><input type="radio" name="type5" value=4 >MLT<sup>1</sup>A<sup>-1</sup>
</ol></br>
<li>If velocity(V), force(F) and energy(E) are taken as fundamental units, then dimensional formula for mass will be
<ol type="A">
<li><input type="radio" name="type6" value=1 >V<sup>0</sup>FE<sup>2</sup>
<li><input type="radio" name="type6" value=2 >VF<sup>2</sup>E<sup>0</sup>
<li><input type="radio" name="type6" value=3 >V<sup>2</sup>F<sup>0</sup>E
<li><input type="radio" name="type6" value=4 id="ans6">V<sup>2</sup>F<sup>0</sup>E
</ol></br>
<li>Vector A extends from the origin to s point having coordinates (7,70<sup>0</sup>) and vector B extends from the origin to a point having polar coordinate(4,130<sup>0</sup>). Find A dot B
<ol type="A">
<li><input type="radio" name="type7" value=1 >28
<li><input type="radio" name="type7" value=2 id="ans7">14
<li><input type="radio" name="type7" value=3 >0
<li><input type="radio" name="type7" value=4 >7
</ol></br>
<li>If two vectors 2i+3j-k and -4i-6j-&lambda;k are parallel to each other then value of &lambda; be
<ol type="A">
<li><input type="radio" name="type8" value=1 >2
<li><input type="radio" name="type8" value=2 id="ans8">4
<li><input type="radio" name="type8" value=3 >0
<li><input type="radio" name="type8" value=4 >6
</ol></br>
<li> The coefficient of static friction between contact surface of two bodies is 1. The contact surface of one body supports the other till the inclination is less than
<ol type="A">
<li><input type="radio" name="type9" value=1 >30<sup>0</sup>
<li><input type="radio" name="type9" value=2 id="ans9">45<sup>0</sup>
<li><input type="radio" name="type9" value=3 >60<sup>0</sup>
<li><input type="radio" name="type9" value=4 >90<sup>0</sup>
</ol></br></ol>
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
    <button class="ans" onclick="ans()">KEY</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="rem" onclick="closeform3()">OK</button>
</div></div>

<button style="display:inline-block;" class="satya" onclick="back()"><< Back</button>
<button style="display:inline-block;position:absolute;left:90%" class="satya" onclick="Next()">Next >></button>


</body>
           
  <script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
<script>
function ans(){
window.location = "phy3key.php"
}
function Next() {
    <?php session_unset(); ?>
    window.location = "phy4.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "phy2.php";
}
</script>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              