<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=455;
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
    if($ans1 == 1) $score++;
    if($ans2 == 2) $score++;
    if($ans3 == 1) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 1) $score++;
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
<title>DIGITAL-ELECTRONICS/Test-5</title>
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
       <center class="textcolor"> <h1 align="center">DIGITAL-ELECTRONICS-TEST:5/5</h1>
        <H2 align="center">ANSWER THE FOLLOWING QUESTIONS : </h2></center> 
         <ol type="1" class="font"><form method="post" action="#" onsubmit="return validateForm()">
           <li>Which among the following was the first version in the TTL family?
            <ol type="A">
        <li > <input type="radio" name="type11" value="1" id="satya">Standard
        <li>  <input type="radio" name="type11" value="2" >Low-Power
        <li> <input type="radio" name="type11" value="3" >Schottky
        <li><input type="radio" name="type11" value="4" >fast
        </ol>  </br>
        <li>The logical sum of all the minterms of a Boolean function of n variables is
            <ol type="A">
        <li > <input type="radio" name="type12" value="1" >0
        <li>  <input type="radio" name="type12" value="2"  id="satya1">1
        <li> <input type="radio" name="type12" value="3" >n
        <li><input type="radio" name="type12" value="4" >n(n+1)/2
            </ol>   </br>
        <li>Circuits that generals the parity bit in the receiver and transmitter are called______ and ____________respectively.
            <ol type="A">
        <li > <input type="radio" name="type13" value="1" id="satya2">Parity checker, Parity generator
        <li>  <input type="radio" name="type13" value="2"  >Parity generator, Parity checker
        <li> <input type="radio" name="type13" value="3" >Parity generator, Parity encoder
        <li><input type="radio" name="type13" value="4" >Parity encoder, Parity decoder
            </ol> </br>
            <li>The characteristic equation for the complement output of a JK flip flop is
                <ol type="A">
            <li > <input type="radio" name="type14" value="1" id="satya3">Q'(t+1)=J'Q'+KQ
            <li>  <input type="radio" name="type14" value="2"  >Q'(t+1)=J'Q'+KQ'
            <li> <input type="radio" name="type14" value="3" >Q'(t+1)=J'Q+KQ'
            <li><input type="radio" name="type14" value="4" >Q'(t+1)=J'Q'+K'Q'
                </ol> </br>
                <li>If the register has both shifts and parallel load capabillities that is reffered to as 
                    <ol type="A">
                <li > <input type="radio" name="type15" value="1" id="satya4">Universal shift register
                <li>  <input type="radio" name="type15" value="2" >Unidirectional shift register
                <li> <input type="radio" name="type15" value="3" >Bidirectional shift register
                <li><input type="radio" name="type15" value="4" >Parallel shift register
                    </ol> </br>
                    <li>The capacity of a memory unit is usually stated as the total number of________that it can store.
                        <ol type="A">
                    <li > <input type="radio" name="type16" value="1"  id="satya5">Words
                    <li>  <input type="radio" name="type16" value="2" >Bytes
                    <li> <input type="radio" name="type16" value="3">Addresses
                    <li><input type="radio" name="type16" value="4" >Bits
                        </ol> </br>
                        <li>Which among the following offers shorter read and write cycles?
                            <ol type="A">
                        <li > <input type="radio" name="type17" value="1"  >FAST RAM
                        <li>  <input type="radio" name="type17" value="2" >COMMERCIAL RAM
                        <li> <input type="radio" name="type17" value="3" id="satya6">STATIC RAM
                        <li><input type="radio" name="type17" value="4" >DYNAMIC RAM
                            </ol> </br>
                            <li>4-to-16 line decoder can be constructed with______2-to-4 line decoders with enable 
                                <ol type="A">
                            <li > <input type="radio" name="type18" value="1" >4
                            <li>  <input type="radio" name="type18" value="2" >2
                            <li> <input type="radio" name="type18" value="3" id="sekhar7">5
                            <li><input type="radio" name="type18" value="4" >8
                                </ol> </br>
                                <li>The canonical sum of product form of the function y(A,B)=A+B is
                                    <ol type="A">
                                <li > <input type="radio" name="type19" value="1" >AB+BB+A'A
                                <li>  <input type="radio" name="type19" value="2" id="sekhar8">AB+A'B+A'B'
                                <li> <input type="radio" name="type19" value="3" >BA+BA'+A'B'
                                <li><input type="radio" name="type19" value="4" >AB+AB'A'B
                                    </ol> </br>
                                    <li>(A+B)(A'*B')=?
                                        <ol type="A">
                                    <li > <input type="radio" name="type20" value="1" id="sekhar9">1
                                    <li>  <input type="radio" name="type20" value="2"  >0
                                    <li> <input type="radio" name="type20" value="3" >AB
                                    <li><input type="radio" name="type20" value="4">AB'
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
window.location="de5key.php"
}
function back()
{<?php session_unset(); ?>
window.location="de4.php"
}
function Next()
{<?php session_unset(); ?>
window.location="de5.php"
}
</script>
 </html>