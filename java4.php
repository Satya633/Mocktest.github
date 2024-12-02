<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=1012214;
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
    if($ans4 == 2) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 3) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 2) $score++;
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
        <center class="textcolor">  <h1 align="center">JAVA - TEST:4/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="java4.php" onsubmit="return validateForm()"> 
<li>The final block is executed in java
<ol type="A">
<li><input type="radio" name="type" value="1">Only when a checked exception is thrown
<li><input type="radio" name="type" value="2">Only when an unchecked exception is thrown
<li><input type="radio" name="type" value="3">Only when an exception is thrown
<li><input type="radio" name="type" value="4" id="ans1">Irrespective of whether an exception is thrown or not
</ol></br>
<li>The number of bytes needed to store a number which is a data type double is
<ol type="A">
<li><input type="radio" name="type1" value="1" id="ans2">8
<li><input type="radio" name="type1" value="2">4
<li><input type="radio" name="type1" value="3">2
<li><input type="radio" name="type1" value="4">1
</ol></br>
<li> Which component is used to compile, debug and execute the java programs?
<ol type="A">
<li><input type="radio" name="type2" value="1">JRE
<li><input type="radio" name="type2" value="2">JIT
<li><input type="radio" name="type2" value="3" id="ans3">JDK
<li><input type="radio" name="type2" value="4">JVM
</ol></br>
<li>What is truncation in Java?
<ol type="A">
<li><input type="radio" name="type3" value="1">Floating-point value assigned to a floating type
<li><input type="radio" name="type3" value="2" id="ans4">Floating-point value assigned to an integer type
<li><input type="radio" name="type3" value="3">Integer value assigned to floating type
<li><input type="radio" name="type3" value="4">Integer value assigned to integer type
</ol></br>
<li>What of these are selection statements in Java?
<ol type="A">
<li><input type="radio" name="type4" value="1">break
<li><input type="radio" name="type4" value="2">continue
<li><input type="radio" name="type4" value="3">for()
<li><input type="radio" name="type4" value="4" id="ans5">if()
</ol></br>
<li>Which of these packages contain the exception stack overflow in Java?
<ol type="A">
<li><input type="radio" name="type5" value="1">java.io
<li><input type="radio" name="type5" value="2">java.system
<li><input type="radio" name="type5" value="3" id="ans6">java.lang
<li><input type="radio" name="type5" value="4">java.util
</ol></br>
<li>Which one of the following option leads to the portability and security of java?
<ol type="A">
<li><input type="radio" name="type6" value="1" id="ans7">Bytecode is executed by JVM
<li><input type="radio" name="type6" value="2">The applet makes the java code secure and portable
<li><input type="radio" name="type6" value="3">Use of exception handling
<li><input type="radio" name="type6" value="4">Dynamic binding between objects
</ol></br>
<li>What is the return type of the hashCode() method in the object class?
<ol type="A">
<li><input type="radio" name="type7" value="1">Object
<li><input type="radio" name="type7" value="2" id="ans8">int
<li><input type="radio" name="type7" value="3">long
<li><input type="radio" name="type7" value="4">void
</ol></br>
<li>Evaluate the following Java expression, if x=3, y=5 and z=10: ++z+y-y+z+x++
<ol type="A">
<li><input type="radio" name="type8" value="1">24
<li><input type="radio" name="type8" value="2">23
<li><input type="radio" name="type8" value="3">20
<li><input type="radio" name="type8" value="4" id="ans9">25
</ol></br>
<li>Which of this class is super class of every class in Java?
<ol type="A">
<li><input type="radio" name="type9" value="1">String class
<li><input type="radio" name="type9" value="2" id="ans10">Object class
<li><input type="radio" name="type9" value="3">Abstract class
<li><input type="radio" name="type9" value="4">Array List class
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

window.location="java4key.php"
}
</script>

<script>
function back()
{<?php session_unset(); ?>
window.location="java3.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="java5.php"

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