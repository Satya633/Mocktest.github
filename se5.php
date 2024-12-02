<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=1955;
    $ans1 = $_POST["type11"];
    $ans2 = $_POST["type12"];
    $ans3 = $_POST["type13"];
    $ans4 = $_POST["type14"];
    $ans5 = $_POST["type15"];
    $ans6 = $_POST["type16"];
    $ans7 = $_POST["type17"];
    $ans8 = $_POST["type18"];
    $ans9 = $_POST["type19"];
    $ans0 = $_POST["type20"];
    
    $score = 0;
    if($ans1 == 2) $score++;
    if($ans2 == 1) $score++;
    if($ans3 == 1) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 2) $score++;
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
        <center class="textcolor">  <h1 align="center">SOFTWARE-ENGINEERING - TEST:5/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font">
<form method="post" action="se5.php" onsubmit="return validateForm()">
           <li>What is the major drawback of the Spiral Model?
            <ol type="A">
        <li > <input type="radio" name="type11" value="1" >Higher amount of risk analysis
        <li>  <input type="radio" name="type11" value="1" >Strong approval and documentation control
        <li> <input type="radio" name="type11" value="2" id="satya">Doesn't work well for smaller projects
        <li><input type="radio" name="type11" value="2" >Additional functionalities are added later on
        </ol>  </br>
        <li>In Software Engineering, "Are we buiding the product right?"statement refers to
            <ol type="A">
        <li > <input type="radio" name="type12" value="1" >Validation
        <li>  <input type="radio" name="type12" value="1"  id="satya1">Verifcation
        <li> <input type="radio" name="type12" value="2" >Confirmation
        <li><input type="radio" name="type12" value="2" >Justification
</ol>  </br>
        <li>Software Design objective should be
            <ol type="A">
        <li > <input type="radio" name="type13" value="1" id="satya2">Maximum module cohesion and minimize the module coupling
        <li>  <input type="radio" name="type13" value="1"  >Minimize module cohesion and maximum the module coupling
        <li> <input type="radio" name="type13" value="2" >Maximize module cohesion and maximum the module coupling
        <li><input type="radio" name="type13" value="2" >Minimize module cohesion and Minimize the module coupling
            </ol> </br>
            <li>In capability Maturity Model, Which one of the following is not a maturity level?
                <ol type="A">
            <li > <input type="radio" name="type14" value="1" >Intial
            <li>  <input type="radio" name="type14" value="1"  id="satya3">Measurable
            <li> <input type="radio" name="type14" value="2" >Repeatable
            <li><input type="radio" name="type14" value="2" >Optimized
                </ol> </br>
                <li>Alpha and Beta testing refers to
                    <ol type="A">
                <li > <input type="radio" name="type15" value="1" >White Box Testing
                <li>  <input type="radio" name="type15" value="1" >Black Box Testing
                <li> <input type="radio" name="type15" value="2" >System Testing
                <li><input type="radio" name="type15" value="2" id="satya4">Acceptance Testing
                    </ol> </br>
                    <li>Modules A and B Operates on the same input and output then the cohesion
                        <ol type="A">
                    <li > <input type="radio" name="type16" value="1"  >Linear Cohesion
                    <li>  <input type="radio" name="type16" value="1" id="satya5">Communicational Cohesion
                    <li> <input type="radio" name="type16" value="2">Temporal Cohesion
                    <li><input type="radio" name="type16" value="2" >Random Cohesion
                        </ol> </br>
                        <li>Regression Testing is mainly associated to
                            <ol type="A">
                        <li > <input type="radio" name="type17" value="1"  id="satya6">Functional Testing
                        <li>  <input type="radio" name="type17" value="1" >Development Testing
                        <li> <input type="radio" name="type17" value="2" >Dataflow Testing
                        <li><input type="radio" name="type17" value="2" >Maintence Testing
                            </ol> </br>
                            <li>Basic Path testing is related to
                                <ol type="A">
                            <li > <input type="radio" name="type18" value="1" >System Testing
                            <li>  <input type="radio" name="type18" value="1" id="sekhar7">White Box Testing
                            <li> <input type="radio" name="type18" value="2" >Black Box Testing
                            <li><input type="radio" name="type18" value="2" >Unit Testing
                                </ol> </br>
                                <li>
                                    <ol type="A">
                                <li > <input type="radio" name="type19" value="1" >Procedural Design
                                <li>  <input type="radio" name="type19" value="1" id="sekhar8">Data Design
                                <li> <input type="radio" name="type19" value="2" >Archirectural Design 
                                <li><input type="radio" name="type19" value="2" >Module Design
                                    </ol> </br>
                                    <li>Design Phase usually follows
                                        <ol type="A">
                                    <li > <input type="radio" name="type20" value="1" id="sekhar9">Top-Down
                                    <li>  <input type="radio" name="type20" value="1"  >Bottom -Up
                                    <li> <input type="radio" name="type20" value="2" >Random
                                    <li><input type="radio" name="type20" value="2">End-End
                                        </ol> 
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
window.location="se5key.php"
}
</script>

  
<script>
function back()
{<?php session_unset(); ?>
window.location="se4.php"
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