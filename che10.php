<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=38510;
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
    if($ans3 == 1) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 3) $score++;
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
<title>Chemistry/Test-10</title>
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
                    <li><a href="#">TEST-10</a>
<ul class="dropdown">
<li><a href="chemistry.php">TEST-1</a></li>
<li><a href="che2.php">TEST-2</a></li>
<li><a href="che3.php">TEST-3</a></li>
<li><a href="che4.php">TEST-4</a></li>
<li><a href="che5.php">TEST-5</a></li>
<li><a href="che6.php">TEST-6</a></li>
<li><a href="che7.php">TEST-7</a></li>
<li><a href="che8.php">TEST-8</a></li>
<li><a href="che9.php">TEST-9</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
       <center class="textcolor"> <h1 align="center">CHEMISTRY-TEST: 10/10</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center>
         <ol type="1" class="font"><form method="post" action="che10.php" onsubmit="return validateForm()">
           <li> Vulcanisation of rubber is mainly by the addition of 
            <ol type="A">
        <li > <input type="radio" name="1" value="1">Oxygen gas
        <li>  <input type="radio" name="1" value="2">Magnesium oxide
        <li> <input type="radio" name="1" value="3">Sulphur
        <li><input type="radio" name="1" value="4">Zinc oxide
        </ol>  </br>
        <li> During the refining of petroleum. Which of the following is used to remove sulphur impurity : 
            <ol type="A">
        <li > <input type="radio" name="2"  value="1" >Copper Oxide
        <li>  <input type="radio" name="2" value="2">Copper Sulphide
        <li> <input type="radio" name="2" value="3">Magnesium chloride
        <li><input type="radio" name="2" value="4">Magnesium sulphate
        </ol>  </br>   
        <li> Which of the oxide of nitrogen is not a common pollutant ?
            <ol type="A">
        <li > <input type="radio" name="3" value="1">N<sub>2</sub>O<sub>5</sub>
        <li>  <input type="radio" name="3" value="2">N<sub>2</sub>O
        <li> <input type="radio" name="3"  value="3">NO
        <li><input type="radio" name="3" value="4">NO<sub>2</sub>
        </ol>  </br>
        <li> DDT is  
            <ol type="A">
        <li > <input type="radio" name="4" value="1">Nitorgen containing insecticide
        <li>  <input type="radio" name="4" value="2">Biodegradable pollutant
        <li> <input type="radio" name="4" value="3">Non-Biodegradable pollutant
        <li><input type="radio" name="4" value="4">An antibiotic
        </ol>  </br>
        <li> According to Bohr's theory of hydrogen atom, the angular momentum of electron in fourth orbit of H-atom is equal to 
            <ol type="A">
        <li > <input type="radio" name="5" value="1">h/2&#960;
        <li>  <input type="radio" name="5" value="2">2h/&#960;
        <li> <input type="radio" name="5"  value="3">3h/2&#960;
        <li><input type="radio" name="5" value="4">4h/&#960;
        </ol>  </br>
        <li> The quantum number which describes the shape of an atomic orbital is 
    <ol type="A">
        <li > <input type="radio" name="6" value="1">Azimuthal Quantum Number
        <li>  <input type="radio" name="6" value="2">Principal Quantum Number
        <li> <input type="radio" name="6" value="3">Spin Quantum Number
        <li><input type="radio" name="6" value="4">Magnetic Quantum Number
        </ol>  </br>
        <li> Identify the element in which the ratio of s-electrons to p-electrons is 3:5
            <ol type="A">
        <li > <input type="radio" name="7"  value="1">P
        <li>  <input type="radio" name="7" value="2">Al
        <li> <input type="radio" name="7" value="3">S
        <li><input type="radio" name="7" value="4">K
  </ol>  </br>
        <li> The pair of molecules in which the central atom has octet fo electrons is 
       <ol type="A">
        <li > <input type="radio" name="8" value="1">BeCl<sub>2</sub>, BF<sub>3</sub>
        <li>  <input type="radio" name="8" value="2" >H<sub>2</sub>O, BeCl<sub>2</sub>
        <li> <input type="radio" name="8" value="3">H<sub>2</sub>O, NH<sub>3</sub>
        <li> <input type="radio" name="8" value="4">NH<sub>3</sub>, BF<sub>3</sub>
        </ol>  </br>
        <li> The electronic configuration of an element M is [Ne]3S<sup>1</sup> and that of element X is [He]2S<sup>2</sup>2P<sup>5</sup>. The type of bond present between M and X is 
            <ol type="A">
        <li > <input type="radio" name="9" value="1">Covalent Bond
        <li>  <input type="radio" name="9" value="2">Electrovalent Bond
        <li> <input type="radio" name="9" value="3">Co-ordinate Covalent Bond
        <li><input type="radio" name="9" value="4">Hydrogen Bond
        </ol>  </br>
        <li> The absolute weight of one molecule of water (in g) is (N<sub>A</sub>=6x10<sup>23</sup>mol<sup>-1</sup>)
            <ol type="A">
        <li > <input type="radio" name="10" value="1" >1.5 X 10<sup>-23</sup>
        <li>  <input type="radio" name="10" value="2">3.0 X 10<sup>-23</sup>
        <li> <input type="radio" name="10" value="3" >4.5 X 10<sup>-23</sup>
        <li><input type="radio" name="10" value="4">2.0 X 10<sup>-23</sup>
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

window.location="che10key.php"
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
window.location="che9.php"
}
function Next()
{<?php session_unset(); ?>
window.location="che10.php"
}
</script>
 </html>