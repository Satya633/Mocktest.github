<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3852;
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
    if($ans2 == 3) $score++;
    if($ans3 == 4) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 3) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 3) $score++;
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
<title>Chemistry/Test-2</title>
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
                    <li><a href="#">TEST-2</a>
<ul class="dropdown">
<li><a href="chemistry.php">TEST-1</a></li>
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
       <center class="textcolor"> <h1 align="center">CHEMISTRY-TEST: 2/10</h1>
        <H4 align="center">ANSWER THE FOLLOWING QUESTIONS : </h4></center>
         <ol type="1" class="font"><form method="post" action="che2.php" onsubmit="return validateForm()">
           <li> Laws of electrolysis were given by 
            <ol type="A">
        <li > <input type="radio" name="1" value="1">Ostwaid 
        <li>  <input type="radio" name="1" value="2">Faraday
        <li> <input type="radio" name="1" value="3">Arrhenius       
        <li><input type="radio" name="1" value="4">Volta
        </ol>  </br>
        <li> Common electrolyte used in the salt bridge 
            <ol type="A">
        <li > <input type="radio" name="2" value="1">NaOH
        <li>  <input type="radio" name="2" value="2">NaCO<sub>3</sub>
        <li> <input type="radio" name="2" value="3" >KCI     
        <li><input type="radio" name="2" value="4">KOH
        </ol>  </br>   
        <li> Standard Reduction potential of an element is equal to 
            <ol type="A">
        <li > <input type="radio" name="3" value="1">1 X its reduction potential
        <li>  <input type="radio" name="3" value="2">-1 X its standard oxidation potential
        <li> <input type="radio" name="3" value="3">-1 X its reduce potential
        <li><input type="radio" name="3" value="4">1 X its standard oxidation potential
        </ol>  </br>
        <li> The standard emf for the cell reaction, Zn+Cu<sup>+2</sup>-> Cu + Zn<sup>2+</sup> is 1.10 V at 25<sup>0</sup>C. The emf of the cell reaction when 0.1 M Cu<sup>+2 </sup>and 0.1 M Zn<sup>+2</sup> solutions are used at 25<sup>0</sup>C is 
            <ol type="A">
        <li > <input type="radio" name="4" value="1">1.10V
        <li>  <input type="radio" name="4" value="2">0.11V
        <li> <input type="radio" name="4" value="3">-1.10V      
        <li><input type="radio" name="4" value="4">-0.11v
        </ol>  </br>
        <li> Which chemical is responsible for permanent hardness of water 
            <ol type="A">
        <li > <input type="radio" name="5" value="1">KCI
        <li>  <input type="radio" name="5" value="2">MgCl<sub>2</sub>
        <li> <input type="radio" name="5"  value="3">NaCl
        <li><input type="radio" name="5" value="4">AgCl
        </ol>  </br>
        <li> Permutit is chemically            
    <ol type="A">
        <li > <input type="radio" name="6" value="1">Sodium Silicate
        <li>  <input type="radio" name="6" value="2">Aliminium Silicate
        <li> <input type="radio" name="6" value="3">Hydrated Sodium alimino silicate
        <li><input type="radio" name="6" value="4">Caliclum silicate 
        </ol>  </br>
        <li> The cation exchange resin possesses
            <ol type="A">
        <li > <input type="radio" name="7" value="1" >Acidic group
        <li>  <input type="radio" name="7" value="2">Basic group
        <li> <input type="radio" name="7" value="3">Amphoteric group   
        <li><input type="radio" name="7" value="4">Benzo group
  </ol>  </br>
        <li> Chemically the rust is            
       <ol type="A">
        <li > <input type="radio" name="8" value="1">Fe<sub>2</sub>O<sub>3</sub>
        <li>  <input type="radio" name="8" value="2">Fe<sub>2</sub>O<sub>3</sub>.FeO
        <li> <input type="radio" name="8" value="3" >Fe<sub>2</sub>O<sub>3</sub>.XH<sub>2</sub>O
        <li> <input type="radio" name="8" value="4">Fe<sub>2</sub>O<sub>3</sub>.NH<sub>3</sub>
        </ol>  </br>
        <li> Galvanizing is the process of coating iron with 
            <ol type="A">
        <li > <input type="radio" name="9" value="1">Mg
        <li>  <input type="radio" name="9" value="2">Cu
        <li> <input type="radio" name="9" value="3">Au     
        <li><input type="radio" name="9" value="4">Zn
        </ol>  </br>
        <li> Which of the following is not a thermoplastic
            <ol type="A">
        <li > <input type="radio" name="10"  value="1">Bakelite
        <li>  <input type="radio" name="10" value="2">Polystyrene
        <li> <input type="radio" name="10" value="3">Polythene
        <li><input type="radio" name="10" value="4">Nylon
        </ol>  </br>
         </ol>
                  
        <center> <input type="submit" class="satya" name="complete" value="Complete" /></center></form>

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

window.location="che2key.php"
}
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
        function openform3(){
        form3.classList.add('open-form3');
        }
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>


<script>
function back()
{<?php session_unset(); ?>
window.location="chemistry.php"
}
function Next()
{<?php session_unset(); ?>
window.location="che3.php"
}

</script>
 </html>