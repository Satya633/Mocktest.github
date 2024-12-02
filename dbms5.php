<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=4213195;
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
    if($ans2 == 1) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 1) $score++;
    if($ans9 == 3) $score++;
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
        <center class="textcolor">  <h1 align="center">DATA BASE MANAGEMENT SYSTEM(DBMS) - TEST:5/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="dbms5.php" onsubmit="return validateForm()">
<li>In DBMS, values of one type can be converted to another domain using which of the following?
<ol type="A">
<li><input type="radio" name="type" value="1" id="ans1">Cast
<li><input type="radio" name="type" value="2" >Drop type
<li><input type="radio" name="type" value="3" >Alter type
<li><input type="radio" name="type" value="4"  >Convert
</ol></br>
<li>Which one of the following provides the ability to query information from the database and to insert tuples into, delete tuples from and modify tuples in the database?
<ol type="A">
<li><input type="radio" name="type1" value="1"  >DML
<li><input type="radio" name="type1" value="2" >DDL
<li><input type="radio" name="type1" value="3"id="ans2">Query
<li><input type="radio" name="type1" value="4" >Relational Schema
</ol></br>
<li>Which of the following creates a virtual relation for storing the query?
<ol type="A">
<li><input type="radio" name="type2" value="1" >Function
<li><input type="radio" name="type2" value="2" id="ans3">View
<li><input type="radio" name="type2" value="3" >Procedure
<li><input type="radio" name="type2" value="4"  >Triggers
</ol></br>
<li>Data integrity constraints are used to:
<ol type="A">
<li><input type="radio" name="type3" value="1" >Control who is allowed access to the data
<li><input type="radio" name="type3" value="2" >Ensure that duplicate records are not entered into the table
<li><input type="radio" name="type3" value="3"  id="ans4">Improve the quality of data entered for a specific property
<li><input type="radio" name="type3" value="4" >Prevent users from changing the values stored in the table
</ol></br>
<li>Database___________is the logical design of the database and database_________is a snapshot of the data in the database at a given instant of time
<ol type="A">
<li><input type="radio" name="type4" value="1" >Instance,schema
<li><input type="radio" name="type4" value="2">Relation,Schema
<li><input type="radio" name="type4" value="3"  >Relation,Domain
<li><input type="radio" name="type4" value="4"id="ans5">Schema,Instance
</ol></br>
<li>We indicate roles in E-R diagrams by labelling the lines that connect__________to________
<ol type="A">
<li><input type="radio" name="type5" value="1" >Diamond,diamond
<li><input type="radio" name="type5" value="2" >Rectangle,diamond
<li><input type="radio" name="type5" value="3" >Rectangle,rectangle
<li><input type="radio" name="type5" value="4" id="ans6">Diamond,rectangle
</ol></br>
<li>If we want to retain all duplicates, we must write_____in place of union.
<ol type="A">
<li><input type="radio" name="type6" value="1" id="ans7">Union all
<li><input type="radio" name="type6" value="2" >Union some
<li><input type="radio" name="type6" value="3" >Intersect all
<li><input type="radio" name="type6" value="4" >Intersect some
</ol></br>
<li>Using which of the following can a user request information from a database?
<ol type="A">
<li><input type="radio" name="type7" value="1" id="ans8">Query
<li><input type="radio" name="type7" value="2" >Relation
<li><input type="radio" name="type7" value="3" >Structure
<li><input type="radio" name="type7" value="4" >Compiler
</ol></br>
<li>______________ is a set of one or more attributes taken collectively to uniquely identify a record.
<ol type="A">
<li><input type="radio" name="type8" value="1" >Primary Key
<li><input type="radio" name="type8" value="2" >Foreign Key
<li><input type="radio" name="type8" value="3" id="ans9">Super Key
<li><input type="radio" name="type8" value="4" >Candidate Key
</ol></br>
<li> Which forms have a relation that contains information about a single entity?
<ol type="A">
<li><input type="radio" name="type9" value="1"  id="ans10">4NF
<li><input type="radio" name="type9" value="2" >2NF
<li><input type="radio" name="type9" value="3">5NF
<li><input type="radio" name="type9" value="4" >3NF
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
function answer(){
window.location="dbms5key.php"
}
function back()
{<?php session_unset(); ?>
window.location="dbms4.php"
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