<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=1012212;
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
    if($ans1 == 1) $score++;
    if($ans2 == 4) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 4) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 4) $score++;
    if($ans9 == 4) $score++;
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
<title>JAVA/TEST</title>
<link rel="stylesheet" href="satya.css"/>
<link rel="icon" href="logo.png" type="image/x-icon">
<script>
        function validateForm() {
            var radios = document.querySelectorAll('input[type="radio"]:checked');
            if (radios.length < 10) { 
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
        <center class="textcolor">  <h1 align="center">JAVA - TEST:2/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="java2.php" onsubmit="return validateForm()"> 
<li>Which of the following option leads to the portability and security of java?
<ol type="A">
<li><input type="radio" name="type" value="1"id="ans1" >Bytecode is executed by JVM
<li><input type="radio" name="type" value="2" >The applet makes the java code secure and portable
<li><input type="radio" name="type" value="3" >Use of exception handlimg
<li><input type="radio" name="type" value="4"  >Dynamic binding between objects
</ol></br>
<li>Evaluate the following Java Expression, if x=3, y=5, and z=10:</br>
++z+y-y+z+x++
<ol type="A">
<li><input type="radio" name="type1" value="1"  >20
<li><input type="radio" name="type1" value="2" >23
<li><input type="radio" name="type1" value="3" >24
<li><input type="radio" name="type1" value="4" id="ans2">25
</ol></br>
<li> When we create a string using a new operator in java, in which memory this string is stored?
<ol type="A">
<li><input type="radio" name="type2" value="1" >Stack
<li><input type="radio" name="type2" value="2" >String memory
<li><input type="radio" name="type2" value="3" id="ans3">Heap memory
<li><input type="radio" name="type2" value="4"  >Random storage space
</ol></br>
<li>Which of the following modifiers can be used for a variable so that it can be accessed by any thread or a part of a program?
<ol type="A">
<li><input type="radio" name="type3" value="1" >global
<li><input type="radio" name="type3" value="2"  >transient
<li><input type="radio" name="type3" value="3" >default
<li><input type="radio" name="type3" value="4" id="ans4">volatile
</ol></br>
<li>Which of these methods can be used to make the main thread to be executed last among all the threads?
<ol type="A">
<li><input type="radio" name="type4" value="1" >stop()
<li><input type="radio" name="type4" value="2" id="ans5" >sleep()
<li><input type="radio" name="type4" value="3" >join()
<li><input type="radio" name="type4" value="4">call()
</ol></br>
<li>Which method can be defined only once in a program?
<ol type="A">
<li><input type="radio" name="type5" value="1" id="ans6">main method
<li><input type="radio" name="type5" value="2" >finalize method
<li><input type="radio" name="type5" value="3" >static method
<li><input type="radio" name="type5" value="4" >private method
</ol></br>
<li>Which of these packages contains the exception stack overflow in java?
<ol type="A">
<li><input type="radio" name="type6" value="1" id="ans7">java.lang
<li><input type="radio" name="type6" value="2" >java.util
<li><input type="radio" name="type6" value="3" >java.io
<li><input type="radio" name="type6" value="4" >java.system
</ol></br>
<li>Which of these keywords can be used to prevent method overriding?
<ol type="A">
<li><input type="radio" name="type7" value="1" >Static
<li><input type="radio" name="type7" value="2" id="ans8">Constant
<li><input type="radio" name="type7" value="3" >Protected
<li><input type="radio" name="type7" value="4" >Final
</ol></br>
<li>Which of these keywords must be used to inherit a class?
<ol type="A">
<li><input type="radio" name="type8" value="1" >Super
<li><input type="radio" name="type8" value="2" >This
<li><input type="radio" name="type8" value="3" >Extent
<li><input type="radio" name="type8" value="4" id="ans9">Extends
</ol></br>
<li> Which component is used to compile, debug and execute the java program?
<ol type="A">
<li><input type="radio" name="type9" value="1" >JVM
<li><input type="radio" name="type9" value="2" id="ans10">JDK
<li><input type="radio" name="type9" value="3" >JRE
<li><input type="radio" name="type9" value="4" >JIT
</ol></br>
</ol>
<center><input type="submit" class="satya" value="Complete"name="complete" /></center>
</form>
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
</div>
</body>
<script>
function answer()
{

window.location="java2key.php"
}
</script>

<script>
function back()
{<?php session_unset(); ?>
window.location="java.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="java3.php"

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
</html>