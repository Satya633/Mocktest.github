<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=1952;
    $ans1 = $_POST["type1"];
    $ans2 = $_POST["type2"];
    $ans3 = $_POST["type3"];
    $ans4 = $_POST["type4"];
    $ans5 = $_POST["type5"];
    $ans6 = $_POST["type6"];
    $ans7 = $_POST["type7"];
    $ans8 = $_POST["type8"];
    $ans9 = $_POST["type9"];
    $ans0 = $_POST["type10"];
    
    $score = 0;
    if($ans1 == 2) $score++;
    if($ans2 == 3) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 2) $score++;
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
<html>
<head>
<title>SOFTWARE-ENGINEERING/TEST</title>
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
        <center class="textcolor">  <h1 align="center">SOFTWARE-ENGINEERING - TEST:2/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font">
<form method="post" action="se2.php" onsubmit="return validateForm()">
    <li>Which of the following is a non-functional requirement?</br>
        <ol type="A">
            <li><input type="radio" name="type1" value="1"> Usability</li>
            <li><input type="radio" name="type1" value="2" id="ans"> Performance</li>
            <li><input type="radio" name="type1" value="3"> Functionality</li>
            <li><input type="radio" name="type1" value="4"> Reliability</li>
        </ol><br>
    </li>

    <li>Which of the following is NOT a software development phase?</br>
        <ol type="A">
            <li><input type="radio" name="type2" value="1"> Implementation</li>
            <li><input type="radio" name="type2" value="2"> Maintenance</li>
            <li><input type="radio" name="type2" value="3" id="ans1"> Design Review</li>
            <li><input type="radio" name="type2" value="4"> Testing</li>
        </ol><br>
    </li>

    <li>Which type of testing checks system interactions?</br>
        <ol type="A">
            <li><input type="radio" name="type3" value="1"> Unit Testing</li>
            <li><input type="radio" name="type3" value="2"> Functional Testing</li>
            <li><input type="radio" name="type3" value="3" id="ans2"> Integration Testing</li>
            <li><input type="radio" name="type3" value="4"> Regression Testing</li>
        </ol><br>
    </li>

    <li>What is a feature of the Waterfall Model?</br>
        <ol type="A">
            <li><input type="radio" name="type4" value="1"> Iterative process</li>
            <li><input type="radio" name="type4" value="2"> Phased approach</li>
            <li><input type="radio" name="type4" value="3" id="ans3"> Linear sequence</li>
            <li><input type="radio" name="type4" value="4"> Customer involvement</li>
        </ol><br>
    </li>

    <li>Which testing method is used to check individual components?</br>
        <ol type="A">
            <li><input type="radio" name="type5" value="1"> Integration Testing</li>
            <li><input type="radio" name="type5" value="2" id="ans4"> Unit Testing</li>
            <li><input type="radio" name="type5" value="3"> System Testing</li>
            <li><input type="radio" name="type5" value="4"> Acceptance Testing</li>
        </ol><br>
    </li>

    <li>What is a use case?</br>
        <ol type="A">
            <li><input type="radio" name="type6" value="1"> A type of testing</li>
            <li><input type="radio" name="type6" value="2" id="ans5"> A description of a system’s behavior</li>
            <li><input type="radio" name="type6" value="3"> A software prototype</li>
            <li><input type="radio" name="type6" value="4"> A project management tool</li>
        </ol><br>
    </li>

    <li>What does the acronym SDLC stand for?</br>
        <ol type="A">
            <li><input type="radio" name="type7" value="1"> System Development Life Cycle</li>
            <li><input type="radio" name="type7" value="2" id="ans6"> Software Development Life Cycle</li>
            <li><input type="radio" name="type7" value="3"> System Design Life Cycle</li>
            <li><input type="radio" name="type7" value="4"> Software Design Life Code</li>
        </ol><br>
    </li>

    <li>What is the main purpose of requirements gathering?</br>
        <ol type="A">
            <li><input type="radio" name="type8" value="1"> To write code</li>
            <li><input type="radio" name="type8" value="2" id="ans7"> To understand user needs</li>
            <li><input type="radio" name="type8" value="3"> To test software</li>
            <li><input type="radio" name="type8" value="4"> To manage the team</li>
        </ol><br>
    </li>

    <li>Which of the following is a type of black box testing?</br>
        <ol type="A">
            <li><input type="radio" name="type9" value="1"> White Box Testing</li>
            <li><input type="radio" name="type9" value="2" id="ans8"> Functional Testing</li>
            <li><input type="radio" name="type9" value="3"> Unit Testing</li>
            <li><input type="radio" name="type9" value="4"> Integration Testing</li>
        </ol><br>
    </li>

    <li>What is the purpose of a code review?</br>
        <ol type="A">
            <li><input type="radio" name="type10" value="1"> To write documentation</li>
            <li><input type="radio" name="type10" value="2" id="ans9"> To improve code quality</li>
            <li><input type="radio" name="type10" value="3"> To fix bugs</li>
            <li><input type="radio" name="type10" value="4"> To speed up development</li>
        </ol><br>
    </li>
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
</div>
</body>

<script>
function answer()
{
window.location="se2key.php"
}
</script>

  
<script>
function back()
{<?php session_unset(); ?>
window.location="se.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="se3.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>