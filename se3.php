<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=1953;
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
    if($ans1 == 3) $score++;
    if($ans2 == 2) $score++;
    if($ans3 == 1) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 4) $score++;
    if($ans8 == 2) $score++;
    if($ans9 == 1) $score++;
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
        <center class="textcolor">  <h1 align="center">SOFTWARE-ENGINEERING - TEST:3/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
        <ol type="1" class="font">
<form method="post" action="se3.php" onsubmit="return validateForm()">
    <li>What is the major drawback of the Spiral Model?</br>
        <ol type="A">
            <li><input type="radio" name="type1" value="1"> Higher amount of risk analysis</li>
            <li><input type="radio" name="type1" value="2"> Strong approval and documentation control</li>
            <li><input type="radio" name="type1" value="3" id="ans"> Doesn't work well for smaller projects</li>
            <li><input type="radio" name="type1" value="4"> Additional functionalities are added later on</li>
        </ol><br>
    </li>

    <li>In Software Engineering, "Are we building the product right?" statement refers to</br>
        <ol type="A">
            <li><input type="radio" name="type2" value="1"> Validation</li>
            <li><input type="radio" name="type2" value="2" id="ans1"> Verification</li>
            <li><input type="radio" name="type2" value="3"> Confirmation</li>
            <li><input type="radio" name="type2" value="4"> Justification</li>
        </ol><br>
    </li>

    <li>Software Design objective should be</br>
        <ol type="A">
            <li><input type="radio" name="type3" value="1" id="ans2"> Maximum module cohesion and minimize module coupling</li>
            <li><input type="radio" name="type3" value="2"> Minimize module cohesion and maximum module coupling</li>
            <li><input type="radio" name="type3" value="3"> Maximize module cohesion and maximum module coupling</li>
            <li><input type="radio" name="type3" value="4"> Minimize module cohesion and minimize module coupling</li>
        </ol><br>
    </li>

    <li>In Capability Maturity Model, which one of the following is not a maturity level?</br>
        <ol type="A">
            <li><input type="radio" name="type4" value="1"> Initial</li>
            <li><input type="radio" name="type4" value="2" id="ans3"> Measurable</li>
            <li><input type="radio" name="type4" value="3"> Repeatable</li>
            <li><input type="radio" name="type4" value="4"> Optimized</li>
        </ol><br>
    </li>

    <li>Alpha and Beta testing refers to</br>
        <ol type="A">
            <li><input type="radio" name="type5" value="1"> White Box Testing</li>
            <li><input type="radio" name="type5" value="2"> Black Box Testing</li>
            <li><input type="radio" name="type5" value="3"> System Testing</li>
            <li><input type="radio" name="type5" value="4" id="ans4"> Acceptance Testing</li>
        </ol><br>
    </li>

    <li>Modules A and B operate on the same input and output then the cohesion</br>
        <ol type="A">
            <li><input type="radio" name="type6" value="1"> Linear Cohesion</li>
            <li><input type="radio" name="type6" value="2" id="ans5"> Communicational Cohesion</li>
            <li><input type="radio" name="type6" value="3"> Temporal Cohesion</li>
            <li><input type="radio" name="type6" value="4"> Random Cohesion</li>
        </ol><br>
    </li>

    <li>Regression Testing is mainly associated with</br>
        <ol type="A">
            <li><input type="radio" name="type7" value="1" id="ans6"> Functional Testing</li>
            <li><input type="radio" name="type7" value="2"> Development Testing</li>
            <li><input type="radio" name="type7" value="3"> Dataflow Testing</li>
            <li><input type="radio" name="type7" value="4"> Maintenance Testing</li>
        </ol><br>
    </li>

    <li>Basic Path testing is related to</br>
        <ol type="A">
            <li><input type="radio" name="type8" value="1"> System Testing</li>
            <li><input type="radio" name="type8" value="2" id="ans7"> White Box Testing</li>
            <li><input type="radio" name="type8" value="3"> Black Box Testing</li>
            <li><input type="radio" name="type8" value="4"> Unit Testing</li>
        </ol><br>
    </li>

    <li>Design Phase usually follows</br>
        <ol type="A">
            <li><input type="radio" name="type9" value="1" id="ans8"> Top-Down</li>
            <li><input type="radio" name="type9" value="2"> Bottom-Up</li>
            <li><input type="radio" name="type9" value="3"> Random</li>
            <li><input type="radio" name="type9" value="4"> End-End</li>
        </ol><br>
    </li>

    <li>Which of the following is a software process model?</br>
        <ol type="A">
            <li><input type="radio" name="type10" value="1" id="ans9"> Waterfall Model</li>
            <li><input type="radio" name="type10" value="2"> V-Model</li>
            <li><input type="radio" name="type10" value="3"> Incremental Model</li>
            <li><input type="radio" name="type10" value="4"> All of the above</li>
        </ol><br>
    </li>
</ol>

<center><input type="submit" class="satya" value="Complete" name="complete"/></center>
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
window.location="se3key.php"
}
</script>

  
<script>
function back()
{<?php session_unset(); ?>
window.location="se2.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="se4.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>