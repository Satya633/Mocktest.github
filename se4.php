<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=1954;
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
    if($ans1 == 1) $score++;
    if($ans2 == 4) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 2) $score++;
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
<html>
<head>
<title>SOFTWARE-ENGINEERING/TEST</title>
<link rel="icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="satya.css"/>
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
        <center class="textcolor">  <h1 align="center">SOFTWARE-ENGINEERING - TEST:4/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font">
<form method="post" action="se4.php" onsubmit="return validateForm()">
    <li>What does UML stand for?</br>
        <ol type="A">
            <li><input type="radio" name="type1" value="1"> Unified Modeling Language</li>
            <li><input type="radio" name="type1" value="2"> Unified Modeling Language</li>
            <li><input type="radio" name="type1" value="3"> Universal Modeling Language</li>
            <li><input type="radio" name="type1" value="4"> Unified Markup Language</li>
        </ol><br>
    </li>

    <li>What is a primary goal of software testing?</br>
        <ol type="A">
            <li><input type="radio" name="type2" value="1"> To find bugs</li>
            <li><input type="radio" name="type2" value="2"> To ensure performance</li>
            <li><input type="radio" name="type2" value="3"> To meet user requirements</li>
            <li><input type="radio" name="type2" value="4" id="ans1"> To ensure software quality</li>
        </ol><br>
    </li>

    <li>What is a characteristic of Agile methodology?</br>
        <ol type="A">
            <li><input type="radio" name="type3" value="1"> Sequential phases</li>
            <li><input type="radio" name="type3" value="2"> Documentation-heavy</li>
            <li><input type="radio" name="type3" value="3" id="ans2"> Iterative development</li>
            <li><input type="radio" name="type3" value="4"> Fixed scope</li>
        </ol><br>
    </li>

    <li>What is a requirement specification?</br>
        <ol type="A">
            <li><input type="radio" name="type4" value="1"> A detailed description of the software</li>
            <li><input type="radio" name="type4" value="2" id="ans3"> A document that describes the needs of the users</li>
            <li><input type="radio" name="type4" value="3"> A coding guideline</li>
            <li><input type="radio" name="type4" value="4"> A testing plan</li>
        </ol><br>
    </li>

    <li>Which is NOT a type of cohesion?</br>
        <ol type="A">
            <li><input type="radio" name="type5" value="1" id="ans4"> Temporal Cohesion</li>
            <li><input type="radio" name="type5" value="2"> Functional Cohesion</li>
            <li><input type="radio" name="type5" value="3"> Sequential Cohesion</li>
            <li><input type="radio" name="type5" value="4"> Communicational Cohesion</li>
        </ol><br>
    </li>

    <li>What is the primary focus of software engineering?</br>
        <ol type="A">
            <li><input type="radio" name="type6" value="1"> Coding</li>
            <li><input type="radio" name="type6" value="2" id="ans5"> Systematic development of software</li>
            <li><input type="radio" name="type6" value="3"> User interface design</li>
            <li><input type="radio" name="type6" value="4"> Project management</li>
        </ol><br>
    </li>

    <li>What is the main purpose of a software prototype?</br>
        <ol type="A">
            <li><input type="radio" name="type7" value="1"> To test the final product</li>
            <li><input type="radio" name="type7" value="2" id="ans6"> To gather user feedback</li>
            <li><input type="radio" name="type7" value="3"> To replace documentation</li>
            <li><input type="radio" name="type7" value="4"> To define requirements</li>
        </ol><br>
    </li>

    <li>Which is a software development model that allows for the evolution of the software?</br>
        <ol type="A">
            <li><input type="radio" name="type8" value="1" id="ans7"> Incremental Model</li>
            <li><input type="radio" name="type8" value="2"> Waterfall Model</li>
            <li><input type="radio" name="type8" value="3"> V-Model</li>
            <li><input type="radio" name="type8" value="4"> Spiral Model</li>
        </ol><br>
    </li>

    <li>What is meant by "technical debt"?</br>
        <ol type="A">
            <li><input type="radio" name="type9" value="1"> Code that is hard to understand</li>
            <li><input type="radio" name="type9" value="2" id="ans8"> Incomplete or suboptimal solutions</li>
            <li><input type="radio" name="type9" value="3"> Outdated technology</li>
            <li><input type="radio" name="type9" value="4"> Excessive documentation</li>
        </ol><br>
    </li>

    <li>Which model emphasizes customer collaboration?</br>
        <ol type="A">
            <li><input type="radio" name="type10" value="1"> Waterfall Model</li>
            <li><input type="radio" name="type10" value="2" id="ans9"> Agile Model</li>
            <li><input type="radio" name="type10" value="3"> V-Model</li>
            <li><input type="radio" name="type10" value="4"> Spiral Model</li>
        </ol>
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
window.location="se4key.php"
}
</script>

  
<script>
function back()
{<?php session_unset(); ?>
window.location="se3.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="se5.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>