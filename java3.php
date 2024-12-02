<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=1012213;
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
    if($ans2 == 2) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 4) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 3) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 2) $score++;
    if($ans9 == 2) $score++;
    if($ans0 == 4) $score++;
    
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
        <center class="textcolor">  <h1 align="center">JAVA - TEST:3/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="java3.php" onsubmit="return validateForm()"> 
<li>Which of the following are not keywords in java?
<ol type="A">
<li><input type="radio" name="type" value="1" >Int
<li><input type="radio" name="type" value="2">Static
<li><input type="radio" name="type" value="3" >Final
<li><input type="radio" name="type" value="4"  id="ans1">Virtual
</ol></br>
<li>_________keyword signifies the property that the value of the variable cannot be changed
<ol type="A">
<li><input type="radio" name="type1" value="1"  >static
<li><input type="radio" name="type1" value="2" id="ans2">final
<li><input type="radio" name="type1" value="3" >public
<li><input type="radio" name="type1" value="4" >volatile
</ol></br>
<li> Which of the following does not have a super class?
<ol type="A">
<li><input type="radio" name="type2" value="1" >System
<li><input type="radio" name="type2" value="2" id="ans3">Object
<li><input type="radio" name="type2" value="3" >Integer
<li><input type="radio" name="type2" value="4"  >Exception
</ol></br>
<li>____________event will be notified when the scroll bar is manipulated
<ol type="A">
<li><input type="radio" name="type3" value="1" >Action event
<li><input type="radio" name="type3" value="2"  >Item event
<li><input type="radio" name="type3" value="3" >Window event
<li><input type="radio" name="type3" value="4" id="ans4">Adjustment event
</ol></br>
<li>Scanner class is available in____________package
<ol type="A">
<li><input type="radio" name="type4" value="1" >java.io
<li><input type="radio" name="type4" value="2"  >java.net
<li><input type="radio" name="type4" value="3" >java.lang
<li><input type="radio" name="type4" value="4" id="ans5">java.util
</ol></br>
<li>_________method used to initialize a thred execution
<ol type="A">
<li><input type="radio" name="type5" value="1" >Resume
<li><input type="radio" name="type5" value="2" >Run
<li><input type="radio" name="type5" value="3" id="ans6">Start
<li><input type="radio" name="type5" value="4" >Init
</ol></br>
<li>Which one of the following is not access modifiers in Java?
<ol type="A">
<li><input type="radio" name="type6" value="1" >Protected
<li><input type="radio" name="type6" value="2" id="ans7">Void
<li><input type="radio" name="type6" value="3" >Public
<li><input type="radio" name="type6" value="4" >Private
</ol></br>
<li>___________method compares the string objecs in Java
<ol type="A">
<li><input type="radio" name="type7" value="1" >compare
<li><input type="radio" name="type7" value="2" id="ans8">Compare To
<li><input type="radio" name="type7" value="3">equalsTo
<li><input type="radio" name="type7" value="4" >Similar
</ol></br>
<li>Which of the following is serializable?
<ol type="A">
<li><input type="radio" name="type8" value="1" id="ans9">Interface
<li><input type="radio" name="type8" value="2" >Class
<li><input type="radio" name="type8" value="3" >object
<li><input type="radio" name="type8" value="4" >Exception
</ol></br>
<li> What is the environment variable that contains a list of directors where java looks for classes referenced in a program
<ol type="A">
<li><input type="radio" name="type9" value="1" >Path class
<li><input type="radio" name="type9" value="2" >Search path
<li><input type="radio" name="type9" value="3" >Path dir
<li><input type="radio" name="type9" value="4" id="ans10">Class path
</ol></br>
</ol>
<center><input type="submit" class="satya" value="Complete" name="complete" /></center>
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
</div></body>
<script>
function answer()
{

window.location="java3key.php"
}
</script>

<script>
function back()
{<?php session_unset(); ?>
window.location="java2.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="java4.php"

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