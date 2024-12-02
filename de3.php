<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=453;
    $ans1 = $_POST["type11"];
    $ans2 = $_POST["type12"];
    $ans3 = $_POST["typ13"];
    $ans4 = $_POST["type14"];
    $ans5 = $_POST["type15"];
    $ans6 = $_POST["type16"];
    $ans7 = $_POST["type17"];
    $ans8 = $_POST["type18"];
    $ans9 = $_POST["type19"];
    $ans0 = $_POST["type20"];
    
    $score = 0;
    if($ans1 == 4) $score++;
    if($ans2 == 3) $score++;
    if($ans3 == 1) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 3) $score++;
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
<title>DIGITAL-ELECTRONICS/Test-3</title>
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
                    <li><a href="course.html">HOME</a><li></li>
                    <li><a href="about.html">ABOUT</a><li></li>
                    <li><a href="services.html">SERVICE</a><li></li>
                    <li><a href="contact.html">CONTACT</a><li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
       <center class="textcolor"> <h1 align="center">DIGITAL-ELECTRONICS-TEST:3/5</h1>
        <H2 align="center">ANSWER THE FOLLOWING QUESTIONS : </h2></center> 
         <ol type="1" class="font"><form method="post" action="de3.php" onsubmit="return validateForm()">
           <li>When will JK flip flop toggle the input?
            <ol type="A">
        <li > <input type="radio" name="type11" value="1" >J = 0, K= 0
        <li>  <input type="radio" name="type11" value="2" >J = 0, K = 1
        <li> <input type="radio" name="type11" value="3" >J = 1, K = 0
        <li><input type="radio" name="type11" value="4" id="satya">J = 1, K = 1
        </ol>  </br>
        <li>If the total number of transistors fabricated on a single chip is in the range of 300 to 3000, which integrated circuit do you prefer?
            <ol type="A">
        <li > <input type="radio" name="type12" value="1" >VLSI
        <li>  <input type="radio" name="type12" value="2"  >SSI
        <li> <input type="radio" name="type12" value="3" id="satya1">LSI
        <li><input type="radio" name="type12" value="4">MSI
            </ol>   </br>
        <li>The binary equivalent of 0.6875 is _________
            <ol type="A">
        <li > <input type="radio" name="type13" value="1" id="satya2">0.1011
        <li>  <input type="radio" name="type13" value="2"  >0.0101
        <li> <input type="radio" name="type13" value="3" >0.1001
        <li><input type="radio" name="type13" value="4">0.0011
            </ol> </br>
            <li>Which is the DeMorgan's gate equivalent to OR?
                <ol type="A">
            <li > <input type="radio" name="type14" value="1" >Negative NOR
            <li>  <input type="radio" name="type14" value="2" id="satya3" >NEGATIVE NAND
            <li> <input type="radio" name="type14" value="3" >NEGATIVE AND
            <li><input type="radio" name="type14" value="4" >NEGATIVE OR
                </ol> </br>
                <li>How many flip flops are required for the mod-16 counter?
                    <ol type="A">
                <li > <input type="radio" name="type15" value="1" >5
                <li>  <input type="radio" name="type15" value="2" id="satya4">4
                <li> <input type="radio" name="type15" value="3">6
                <li><input type="radio" name="type15" value="4" >3
                    </ol> </br>
                    <li>EPROM contents can be erased by exposing them to
                        <ol type="A">
                    <li > <input type="radio" name="type16" value="1"  >Burst of microwaves
                    <li>  <input type="radio" name="type16" value="2" >Intense heat radiations
                    <li> <input type="radio" name="type16" value="3">Infrared rays
                    <li><input type="radio" name="type16" value="4" id="satya5">Ultraviolet rays
                        </ol> </br>
                        <li>The digital logic family which has minimum power dissipation is
                            <ol type="A">
                        <li > <input type="radio" name="type17" value="1"  >TTL
                        <li>  <input type="radio" name="type17" value="2" >DTL
                        <li> <input type="radio" name="type17" value="3" id="satya6">CMOS
                        <li><input type="radio" name="type17" value="4" >RTL
                            </ol> </br>
                            <li>If the input to T-flip flop is 100 Hz signal, the final output of the two T-flipflops in cascade is
                                <ol type="A">
                            <li > <input type="radio" name="type18" value="1" >1000Hz
                            <li>  <input type="radio" name="type18" value="2" >50 Hz
                            <li> <input type="radio" name="type18" value="3" id="sekhar7">25 Hz
                            <li><input type="radio" name="type18" value="4" >200 Hz
                                </ol> </br>
                                <li>The device which changes from serial data to parallel data is 
                                    <ol type="A">
                                <li > <input type="radio" name="type19" value="1" id="sekhar8">DEMULTIPLEXER
                                <li>  <input type="radio" name="type19" value="2" >MULTIPLEXER
                                <li> <input type="radio" name="type19" value="3" >COUNTER
                                <li><input type="radio" name="type19" value="4" >FLIP-FLOP
                                    </ol> </br>
                                    <li>When simplified with Boolean Algebra, (x+y)(x+z) simplifies to
                                        <ol type="A">
                                    <li > <input type="radio" name="type20" value="1" >x(1+yz)
                                    <li>  <input type="radio" name="type20" value="2"  id="sekhar9">x+yz
                                    <li> <input type="radio" name="type20" value="3" >x+x(y+z)
                                    <li><input type="radio" name="type20" value="4">x
                                        </ol> 
        </ol> 
       <center> <input type="submit" value="Complete" name="complete" class="satya"/>
</center>
</form>
<button style="display:inline-block;" class="satya" onclick="back()"><< Back</button>
<button style="display:inline-block;position:absolute;left:90%" class="satya" onclick="Next()">Next >></button>
</body>

<script>
function answer()
{
window.location=""
}
</script>
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
window.location="de3key.php"
}
function back()
{<?php session_unset(); ?>
window.location="de2.php"
}
function Next()
{<?php session_unset(); ?>
window.location="de4.php"
}
</script>
 </html>