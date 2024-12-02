<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=452;
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
    if($ans2 == 1) $score++;
    if($ans3 == 1) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 1) $score++;
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
<title>DIGITAL-ELECTRONICS/Test-2</title>
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
       <center class="textcolor"> <h1 align="center">DIGITAL-ELECTRONICS-TEST:2/5</h1>
        <H2 align="center">ANSWER THE FOLLOWING QUESTIONS : </h2></center> 
         <ol type="1" class="font"><form method="post" action="de2.php" onsubmit="return validateForm()">
           <li>__________Number of states ring counter with 5 flipflops will have?
            <ol type="A">
        <li > <input type="radio" name="type" value="1" >10
        <li>  <input type="radio" name="type" value="2" >15
        <li> <input type="radio" name="type" value="3" id="satya">5
        <li><input type="radio" name="type" value="4">32
        </ol>  </br>
        <li>n-bit 2's compliment number system range for integers is
            <ol type="A">
        <li > <input type="radio" name="type1" value="1" id="satya1">-2<sup>n-1</sup>to(2<sup>n-1</sup>-1)
        <li>  <input type="radio" name="type1" value="2"  >-(2<sup>n-1</sup>-1)to(2<sup>n-1</sup>-1)
        <li> <input type="radio" name="type1" value="3" >-(2<sup>n-1</sup>)to(2<sup>n-1</sup>)
        <li><input type="radio" name="type1" value="4">-(2<sup>n-1</sup>+1)to(2<sup>n-1</sup>-1)
            </ol>   </br>
        <li>Which of the following are universal gates
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" id="satya2">NAND,NOR
        <li>  <input type="radio" name="type2" value="2"  >X-OR,X-NOR
        <li> <input type="radio" name="type2" value="3" >NAND,X-OR
        <li><input type="radio" name="type2" value="4">AND,OR
            </ol> </br>
            <li>The Fatest Logic family gate is
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" id="satya3">ECL
            <li>  <input type="radio" name="type3" value="2"  >CMOS
            <li> <input type="radio" name="type3" value="3" >TTL
            <li><input type="radio" name="type3" value="4" >ETL
                </ol> </br>
                <li>How many 4 X 1 multiplexers are required to design 8 X 1 multiplexer
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" id="satya4">2
                <li>  <input type="radio" name="type4" value="2" >3
                <li> <input type="radio" name="type4" value="3">5
                <li><input type="radio" name="type4" value="4" >8
                    </ol> </br>
                    <li>Which Flip Flop is free from race around problem
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1"  >RS Flip Flop
                    <li>  <input type="radio" name="type5" value="2" >SR Flip Flop
                    <li> <input type="radio" name="type5" value="3">JK Flip Flop
                    <li><input type="radio" name="type5" value="4" id="satya5">Master Slave JK Flip Flop
                        </ol> </br>
                        <li>(1E.42)<sub>16</sub>=(?)<sub>8</sub>
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  id="satya6">36.204
                        <li>  <input type="radio" name="type6" value="2" >36.202
                        <li> <input type="radio" name="type6" value="3" >74.204
                        <li><input type="radio" name="type6" value="4" >74.202
                            </ol> </br>
                            <li>Which logic gates among the below optins can be used to create any Boolean function economically?
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" >XOR, NAND, OR
                            <li>  <input type="radio" name="type7" value="2" >OR,NOT,XOR
                            <li> <input type="radio" name="type7" value="3" >NOR, NAND, XOR
                            <li><input type="radio" name="type7" value="4" id="sekhar7">NOR, NAND
                                </ol> </br>
                                <li>101001 - 010110 = ?
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >100110
                                <li>  <input type="radio" name="type8" value="2" id="sekhar8">010011
                                <li> <input type="radio" name="type8" value="3" >010010
                                <li><input type="radio" name="type8" value="4" >011001
                                    </ol> </br>
                                    <li>The 2's complement of the number 1101101 is
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" id="sekhar9">0010011
                                    <li>  <input type="radio" name="type9" value="2"  >0110010
                                    <li> <input type="radio" name="type9" value="3" >0111110
                                    <li><input type="radio" name="type9" value="4">0101110
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
window.location="ckey.html"
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
window.location="de2key.php"
}
function back()
{<?php session_unset(); ?>
window.location="de.php"
}
function Next()
{<?php session_unset(); ?>
window.location="de3.php"
}
</script>
 </html>