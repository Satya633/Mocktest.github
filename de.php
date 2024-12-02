<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=451;
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
    if($ans1 == 2) $score++;
    if($ans2 == 3) $score++;
    if($ans3 == 4) $score++;
    if($ans4 == 4) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 4) $score++;
    if($ans9 == 2) $score++;
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
<title>DIGITAL-ELECTRONICS/Test-1</title>
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
                    <li><a href="course.html">HOME</a><li></li>
                    <li><a href="about.html">ABOUT</a><li></li>
                    <li><a href="services.html">SERVICE</a><li></li>
                    <li><a href="contact.html">CONTACT</a><li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
       <center class="textcolor"> <h1 align="center">DIGITAL-ELECTRONICS-TEST:1/5</h1>
        <H2 align="center">ANSWER THE FOLLOWING QUESTIONS : </h2></center> 
         <ol type="1" class="font"><form method="post" action="de.php" onsubmit="return validateForm()">
           <li>The table containing present state of output, next state of the output and the inputs is called
            <ol type="A">
        <li > <input type="radio" name="type" value="1" >Truth table
        <li>  <input type="radio" name="type" value="2" >State table
        <li> <input type="radio" name="type" value="3" id="satya">Excitation table
        <li><input type="radio" name="type" value="4">Transition table
        </ol>  </br>
        <li>A sequential circuit with 10 states will have
            <ol type="A">
        <li > <input type="radio" name="type1" value="1" >0 Flip-flops
        <li>  <input type="radio" name="type1" value="2"  >10 Flip-flops
        <li> <input type="radio" name="type1" value="3" id="satya1">4 Flip-flops
        <li><input type="radio" name="type1" value="4">5 Flip-flops
            </ol>   </br>
        <li>A binary number can be multiplied by 2 or divided by 2 with help of 
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >AND gate
        <li>  <input type="radio" name="type2" value="2"  >sequential circuit
        <li> <input type="radio" name="type2" value="3" id="satya2">shift register
        <li><input type="radio" name="type2" value="4">any combinational circuit
            </ol> </br>
            <li>A five bit binary counter uses flip flops with propagation delat time of 10ns each. The maximum possible time required for change of state will be 
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >10ns
            <li>  <input type="radio" name="type3" value="2"  >0.5ns
            <li> <input type="radio" name="type3" value="3" >2ns
            <li><input type="radio" name="type3" value="4" id="satya3">50ns
                </ol> </br>
                <li> The Boolean expression (A+C)(AB'+AC)(A'C'+B') can be simplified to 
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" id="satya4">AB'
                <li>  <input type="radio" name="type4" value="2" >AB+A'C
                <li> <input type="radio" name="type4" value="3">A'B+BC
                <li><input type="radio" name="type4" value="4" >AB+BC
                    </ol> </br>
                    <li>The 2's compliment representation of the decimal value -15 is  
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1"  >01111
                    <li>  <input type="radio" name="type5" value="2" >11111
                    <li> <input type="radio" name="type5" value="3">11110
                    <li><input type="radio" name="type5" value="4" id="satya5">10001
                        </ol> </br>
                        <li>Let * be defined as x*y=x'+y,let z=x*y. Then the value of z*x is 
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  >x'+y
                        <li>  <input type="radio" name="type6" value="2" id="satya6">x
                        <li> <input type="radio" name="type6" value="3" >0
                        <li><input type="radio" name="type6" value="4" >1
                            </ol> </br>
                            <li>SR latch is made by cross coupling two NAND gates, if S=R=0, then it will result in 
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" >Q=0,Q'=1
                            <li>  <input type="radio" name="type7" value="2" >Q=1,Q'=0
                            <li> <input type="radio" name="type7" value="3" id="sekhar7">Q=1,Q'=1
                            <li><input type="radio" name="type7" value="4" >indeterminate state
                                </ol> </br>
                                <li>Assume that all the numbers are requested in 2's complement, then which of the following is divisible by 11111011?
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >11100100
                                <li>  <input type="radio" name="type8" value="2" id="sekhar8">11100111
                                <li> <input type="radio" name="type8" value="3" >11010111
                                <li><input type="radio" name="type8" value="4" >11011011
                                    </ol> </br>
                                    <li>If (73)<sub>x</sub>=(54)<sub>y</sub> in a number system then the possible values of x and y are 
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" id="sekhar9">8,11
                                    <li>  <input type="radio" name="type9" value="2"  >8,16
                                    <li> <input type="radio" name="type9" value="3" >10,12
                                    <li><input type="radio" name="type9" value="4">9,13
                                        </ol> 
        </ol> 
        <center> <input type="submit" value="Complete" name="complete" class="satya"/>
</center></form>
<button style="display:inline-block;" class="satya" onclick="back()"><< Back </button>
<button style="display:inline-block;position:absolute;left:90%" class="satya" onclick="Next()">Next >></button>
</body>

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
</div>
  <script type="text/javascript">  
       let form3 = document.getElementById('form3')
        
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
<script>
function ans(){
window.location="dekey.php"
}
function back()
{<?php session_unset(); ?>
window.location="course.html"
}
function Next()
{<?php session_unset(); ?>
window.location="de2.php"
}
</script>
 </html>