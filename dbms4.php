<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=4213194;
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
    if($ans2 == 2) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 3) $score++;
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
        <center class="textcolor">  <h1 align="center">DATA BASE MANAGEMENT SYSTEM(DBMS) - TEST:4/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="dbms4.php" onsubmit="return validateForm()">
<li>What is the output of the SQL statement:
SELECT SUBSTR('Hello World',2,3)FROM DUAL;
<ol type="A">
<li><input type="radio" name="type" value="1" >el
<li><input type="radio" name="type" value="2" >e
<li><input type="radio" name="type" value="3" id="ans1">ell
<li><input type="radio" name="type" value="4"  >Hello
</ol></br>
<li>Which of the following creates a virtual relation for storing the query?
<ol type="A">
<li><input type="radio" name="type1" value="1"  >Function
<li><input type="radio" name="type1" value="2"id="ans2" >View
<li><input type="radio" name="type1" value="3" >Procedure
<li><input type="radio" name="type1" value="4" >Join
</ol></br>
<li>Wrapping data and it's related functionality into a single entity is known as 
<ol type="A">
<li><input type="radio" name="type2" value="1" >Abstraction
<li><input type="radio" name="type2" value="2" id="ans3">Encapsultion
<li><input type="radio" name="type2" value="3" >Polymorphism
<li><input type="radio" name="type2" value="4"  >Modularity
</ol></br>
<li>In an E-R diagram,attributes are represented by
<ol type="A">
<li><input type="radio" name="type3" value="1" >Rectangle
<li><input type="radio" name="type3" value="2" id="ans4">Ellipse
<li><input type="radio" name="type3" value="3"  >Square
<li><input type="radio" name="type3" value="4">Triangle
</ol></br>
<li>Which of the following operation is used if we are instered in only certain columns of a table?
<ol type="A">
<li><input type="radio" name="type4" value="1" id="ans5">PROJECTION
<li><input type="radio" name="type4" value="2">SELECTION
<li><input type="radio" name="type4" value="3"  >UNION
<li><input type="radio" name="type4" value="4" >JOIN
</ol></br>
<li>Which two files are used during the operation od the DBMS?
<ol type="A">
<li><input type="radio" name="type5" value="1">Query language and utilities
<li><input type="radio" name="type5" value="2" >DML and query language
<li><input type="radio" name="type5" value="3" id="ans6">Data dictionary and transaction log
<li><input type="radio" name="type5" value="4" >Data dictionary and query language
</ol></br>
<li>Consider the join of relation R with relation S.If R has m tuples and S has n tuples, then the maximum size of join would be:
<ol type="A">
<li><input type="radio" name="type6" value="1" id="ans7">Mn
<li><input type="radio" name="type6" value="2" >m+n 
<li><input type="radio" name="type6" value="3" >(m+n)/2
<li><input type="radio" name="type6" value="4">2(m+n)
</ol></br>
<li>Tables in second normal form(2NF):
<ol type="A">
<li><input type="radio" name="type7" value="1" id="ans8">Eliminate all hidden dependencies
<li><input type="radio" name="type7" value="2" >Eliminate the possibility of insertion anomalies
<li><input type="radio" name="type7" value="3" >Have a composite key
<li><input type="radio" name="type7" value="4" >Have all non-key fields depend on the whole primary key
</ol></br>
<li>Which of the normal form is based on multivalued dependencies?
<ol type="A">
<li><input type="radio" name="type8" value="1" >First
<li><input type="radio" name="type8" value="2" >Second
<li><input type="radio" name="type8" value="3" >Third
<li><input type="radio" name="type8" value="4" id="ans9">Fourth
</ol></br>
<li>A data dictionary is a repository that manages___________
<ol type="A">
<li><input type="radio" name="type9" value="1"  >Memory
<li><input type="radio" name="type9" value="2" id="ans10">Metadata
<li><input type="radio" name="type9" value="3">Database schema
<li><input type="radio" name="type9" value="4">Data Validator
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

window.location="dbms4key.php"
}
</script>

<script>
function back()
{<?php session_unset(); ?>
window.location="dbms3.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="dbms5.php"

        }

</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>