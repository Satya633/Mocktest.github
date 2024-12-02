<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=454;
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
    if($ans3 == 4) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 1) $score++;
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
<title>DIGITAL-ELECTRONICS/Test-4</title>
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
       <center class="textcolor"> <h1 align="center">DIGITAL-ELECTRONICS-TEST:4/5</h1>
        <H2 align="center">ANSWER THE FOLLOWING QUESTIONS : </h2></center> 
         <ol type="1" class="font"><form method="post" action="de4.php" onsubmit="return validateForm()">
           <li>Simplest Registers only consists of
            <ol type="A">
        <li > <input type="radio" name="type11" value="1" >Counter
        <li>  <input type="radio" name="type11" value="2" >EPROM
        <li> <input type="radio" name="type11" value="3" >latch
        <li><input type="radio" name="type11" value="4" id="satya">flip-flop
        </ol>  </br>
        <li>Which of the following is a Universal gate?
            <ol type="A">
        <li > <input type="radio" name="type12" value="1" >AND gate
        <li>  <input type="radio" name="type12" value="2"  >OR gate
        <li> <input type="radio" name="type12" value="3" id="satya1">NAND gate
        <li><input type="radio" name="type12" value="4" >NOR gate
            </ol>   </br>
        <li>(x')' is a 
            <ol type="A">
        <li > <input type="radio" name="type13" value="1" >complement
        <li>  <input type="radio" name="type13" value="2"  >dual complement
        <li> <input type="radio" name="type13" value="3" >reflection
        <li><input type="radio" name="type13" value="4" id="satya2">duality
            </ol> </br>
            <li>A Multiplexer is also called as a
                <ol type="A">
            <li > <input type="radio" name="type14" value="1" >Coder
            <li>  <input type="radio" name="type14" value="2"  >parallel adder
            <li> <input type="radio" name="type14" value="3" id="satya3">Data selector
            <li><input type="radio" name="type14" value="4" >NOR gate
                </ol> </br>
                <li>A Binary variable can take the values
                    <ol type="A">
                <li > <input type="radio" name="type15" value="1" >0 only
                <li>  <input type="radio" name="type15" value="2" >0 and -1
                <li> <input type="radio" name="type15" value="3" id="satya4">0 and 1
                <li><input type="radio" name="type15" value="4" >1 and 2
                    </ol> </br>
                    <li>(1010.011)<sub>2</sub> =
                        <ol type="A">
                    <li > <input type="radio" name="type16" value="1"  >(10.365)<sub>10</sub>
                    <li>  <input type="radio" name="type16" value="2" id="satya5">(10.375)<sub>10</sub>
                    <li> <input type="radio" name="type16" value="3">(11.365)<sub>10</sub>
                    <li><input type="radio" name="type16" value="4" >(11.375)<sub>10</sub>
                        </ol> </br>
                        <li>Each square in a karnaugh map represents a 
                            <ol type="A">
                        <li > <input type="radio" name="type17" value="1"  >Point
                        <li>  <input type="radio" name="type17" value="2" >value
                        <li> <input type="radio" name="type17" value="3" id="satya6">minterm
                        <li><input type="radio" name="type17" value="4" >maxterm
                            </ol> </br>
                            <li>Circuit whose output depends on directly present input is called
                                <ol type="A">
                            <li > <input type="radio" name="type18" value="1" id="sekhar7">combinational circuit
                            <li>  <input type="radio" name="type18" value="2" >sequential circuit
                            <li> <input type="radio" name="type18" value="3" >combinational sequence
                            <li><input type="radio" name="type18" value="4" >series
                                </ol> </br>
                                <li>The purpose of the microprocessor id to control______________
                                    <ol type="A">
                                <li > <input type="radio" name="type19" value="1" >Processing
                                <li>  <input type="radio" name="type19" value="2" id="sekhar8">Memory
                                <li> <input type="radio" name="type19" value="3" >Switches
                                <li><input type="radio" name="type19" value="4" >Tasks
                                    </ol> </br>
                                    <li>The decimal equivalent of hex number 1A53 is
                                        <ol type="A">
                                    <li > <input type="radio" name="type20" value="1" id="sekhar9">6739
                                    <li>  <input type="radio" name="type20" value="2"  >6793
                                    <li> <input type="radio" name="type20" value="3" >6973
                                    <li><input type="radio" name="type20" value="4">6379
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
window.location="de4key.php"
}
function back()
{<?php session_unset(); ?>
window.location="de3.php"
}
function Next()
{<?php session_unset(); ?>
window.location="de5.php"
}
</script>
 </html>