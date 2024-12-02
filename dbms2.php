<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=4213192;
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
    if($ans3 == 1) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 3) $score++;
    if($ans9 == 4) $score++;
    if($ans0 == 3) $score++;
    
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
<title>DATA BASE MANAGEMENT SYSTEM(DBMS)</title>
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
        <center class="textcolor">  <h1 align="center">DATA BASE MANAGEMENT SYSTEM(DBMS) - TEST:2/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="dbms2.php" onsubmit="return validateForm()">
<li> The programming language that has the ability to create new data types is called 
<ol type="A">
<li><input type="radio" name="type" value="1" >Overloaded
<li><input type="radio" name="type" value="2" >Encapsulated
<li><input type="radio" name="type" value="3" >Reprehensible
<li><input type="radio" name="type" value="4" id="ans1" >Extensible
</ol></br>
<li> RDBMS stores data in ___________ format.
<ol type="A">
<li><input type="radio" name="type1" value="1"  id="ans2" >File
<li><input type="radio" name="type1" value="2" >Table
<li><input type="radio" name="type1" value="3" >Matrix
<li><input type="radio" name="type1" value="4" >Tuples
</ol></br>
<li> Which of the following query list the "number of students in each district is"
<ol type="A">
<li><input type="radio" name="type2" value="1" >SELECT COUNT(Student ID),District FROM Students GROUP BY District
<li><input type="radio" name="type2" value="2" id="ans3">SELECT COUNT(Student ID),District FROM Students ORDER BY District
<li><input type="radio" name="type2" value="3" >SELECT Student ID,District FROM Students GROUP BY District
<li><input type="radio" name="type2" value="4"  >SELECT COUNT(Student ID),District FROM Students
</ol></br>
<li> _______ Key is used to link two tables together.
<ol type="A">
<li><input type="radio" name="type3" value="1" id="ans4">Foreign
<li><input type="radio" name="type3" value="2" >Primary
<li><input type="radio" name="type3" value="3"  >Secondary
<li><input type="radio" name="type3" value="4" >Join
</ol></br>
<li> _________ is used to organize tables in a manner that reduces redundancy.
<ol type="A">
<li><input type="radio" name="type4" value="1" id="ans5">Normalization
<li><input type="radio" name="type4" value="2">Join
<li><input type="radio" name="type4" value="3"  >Delete
<li><input type="radio" name="type4" value="4" >Update Normalization
</ol></br>
<li> ________ key can contain a unique and not null values in relational database
<ol type="A">
<li><input type="radio" name="type5" value="1" id="ans6">Primary
<li><input type="radio" name="type5" value="2" >Check
<li><input type="radio" name="type5" value="3" >Unique
<li><input type="radio" name="type5" value="4" >Integrity
</ol></br>
<li> ____________ Language changes the structure of the table through create, alter, drop operations.
<ol type="A">
<li><input type="radio" name="type6" value="1" >Data Control
<li><input type="radio" name="type6" value="2" >Data Manipulation
<li><input type="radio" name="type6" value="3" id="ans7">Data Definition
<li><input type="radio" name="type6" value="4" >Data Query
</ol></br>
<li> _________ is not a scalar data type in PL/SQL.
<ol type="A">
<li><input type="radio" name="type7" value="1" >VARCHAR2
<li><input type="radio" name="type7" value="2" >DATE
<li><input type="radio" name="type7" value="3" id="ans8" >RECORD
<li><input type="radio" name="type7" value="4" >NUMBER
</ol></br>
<li> What is the maximum number of triggers you can apply on a single table ?
<ol type="A">
<li><input type="radio" name="type8" value="1" >5
<li><input type="radio" name="type8" value="2" >8
<li><input type="radio" name="type8" value="3" >10
<li><input type="radio" name="type8" value="4" id="ans9">12
</ol></br>
<li> _________ database stores data in documents
<ol type="A">
<li><input type="radio" name="type9" value="1"  >PostgreSQL
<li><input type="radio" name="type9" value="2" >SQL
<li><input type="radio" name="type9" value="3" id="ans10">NoSQL
<li><input type="radio" name="type9" value="4" >PL/SQL
</ol></br>
</ol>
<center><input type="submit" class="satya" name="complete" value="Complete"/></center>
</form>
 <button style="display:inline-block;" class="satya" onclick="back()"><< Back</button>
<button style="display:inline-block;position:absolute;left:90%" class="satya" onclick="Next()">Next >></button>
</body>
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

window.location="dbms2key.php"
}
</script>

<script>

function homepage()
{<?php session_unset(); ?>
window.location="dbms.php"
}
function Next()
{<?php session_unset(); ?>
window.location="dbms3.php"
}
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>