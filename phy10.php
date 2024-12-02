<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=1682510;
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
    if($ans2 == 1) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 3) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 2) $score++;
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
<title>GENERAL/PHYSICS/Test-10</title>
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
 <center class="textcolor"><h1 align="center"> PHYSICS - TEST:10/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="phy10.php" onsubmit="return validateForm()">
<li>Quality of sound is decided by
<ol type="A">
<li><input type="radio" name="type" value=1 >loudness
<li><input type="radio" name="type" value=2 >intensity
<li><input type="radio" name="type" value=3 >number of overtones
<li><input type="radio" name="type" value=4 >frequency
</ol></br>
<li>Inaudibility limit is
<ol type="A">
<li><input type="radio" name="type1" value=1 >one hundrenth of initial intensity
<li><input type="radio" name="type1" value=2 >one tenth of initial intensity
<li><input type="radio" name="type1" value=3 >one thoudandth of initial intensity
<li><input type="radio" name="type1" value=4 id="ans1">one millionth of initial intensity
</ol></br>
<li>A Carnot's engine operates with source at 127<sup>0</sup>C and sink at 27<sup>0</sup>C. If the source supplies 40 kJ of heat energy, the work done by the engine is
<ol type="A">
<li><input type="radio" name="type2" value=1 >30 kJ
<li><input type="radio" name="type2" value=2 id="ans2">10 kJ
<li><input type="radio" name="type2" value=3 >4 kJ
<li><input type="radio" name="type2" value=4 >1 kJ
</ol></br>
<li>A monoatomic gas initially at 17<sup>0</sup>C is suddenly compressed to one eight of it's original volume.The temperature after compression is
<ol type="A">
<li><input type="radio" name="type3" value=1 id="ans3">1160K
<li><input type="radio" name="type3" value=2 >36.25K
<li><input type="radio" name="type3" value=3 >2320K
<li><input type="radio" name="type3" value=4 >887K
</ol></br>
<li>Two cylinders of volumes 20 cc and 30 cc hace gases at pressure 40 cm and 50 cm of Hg under the same temperature. If they are connected by a very narrow pipe the pressure in cm of Hg will be
<ol type="A">
<li><input type="radio" name="type4" value=1 >45
<li><input type="radio" name="type4" value=2 >50
<li><input type="radio" name="type4" value=3 id="ans4">46
<li><input type="radio" name="type4" value=4 >15
</ol></br>
<li>In an adiabatic expaqnsion,  a gas does 25J of work while in an adiabatic compression 100J of work is done on a gas. The change of internal energy in the two processes respectively are
<ol type="A">
<li><input type="radio" name="type5" value=1 >25J and -100J
<li><input type="radio" name="type5" value=2 id="ans5">-25J and 100J
<li><input type="radio" name="type5" value=3 >-25J and -100J
<li><input type="radio" name="type5" value=4 >25J and 100J
</ol></br>
<li>The volume of one mole of an ideal gas changes from V to 2V at temperature of 300 K. If R is universal gas constant, then work done in this process is
<ol type="A">
<li><input type="radio" name="type6" value=1 id="ans6">300Rln2
<li><input type="radio" name="type6" value=2 >600Rln2
<li><input type="radio" name="type6" value=3 >300ln2
<li><input type="radio" name="type6" value=4 >600ln2
</ol></br>
<li>The maximum kinetic energy of the photoelectrons emitted from a surface is dpendent on the 
<ol type="A">
<li><input type="radio" name="type7" value=1 >intensity of incident radiation
<li><input type="radio" name="type7" value=2 >potential of the collector electrode
<li><input type="radio" name="type7" value=3 id="ans7">frequency of incident radiation
<li><input type="radio" name="type7" value=4 >angle of incident of radiation of the surface
</ol></br>
<li>In an optical fibre, relation between refractive index of core(n1) and refractive index of cladding(n2) is
<ol type="A">
<li><input type="radio" name="type8" value=1 >n1&gt;n2
<li><input type="radio" name="type8" value=2 >n1&lt;n2
<li><input type="radio" name="type8" value=3 >n1=n2
<li><input type="radio" name="type8" value=4 >n1&lt;&lt;n2
</ol></br>
<li> Three vectors A,B and C satisfy the relation A.B=0 and A.C=0. The vector A is parallel to
<ol type="A">
<li><input type="radio" name="type9" value=1 >B
<li><input type="radio" name="type9" value=2 >C
<li><input type="radio" name="type9" value=3 >B.C
<li><input type="radio" name="type9" value=4 >BxC
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
    <button class="ans" onclick="answer()">KEY</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
function answer(){
window.location="phy10key.php"
}
function Next() {
    <?php session_unset(); ?>
    window.location = "phy10.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "phy9.php";
}
</script>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                      