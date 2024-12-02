<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=4213193;
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
    if($ans2 == 3) $score++;
    if($ans3 == 4) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 2) $score++;
    if($ans9 == 1) $score++;
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
        <center class="textcolor">  <h1 align="center">DATA BASE MANAGEMENT SYSTEM(DBMS) - TEST:3/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="dbms3.php" onsubmit="return validateForm()">
<li>__________is used to remove a relation from an SQL.
<ol type="A">
<li><input type="radio" name="type" value="1" id="ans1">Drop
<li><input type="radio" name="type" value="2" >Collapse
<li><input type="radio" name="type" value="3" >Delete
<li><input type="radio" name="type" value="4"  >Remove
</ol></br>
<li>_________concept indicates giving multiple forms to an entity.
<ol type="A">
<li><input type="radio" name="type1" value="1"  >Encapsulation
<li><input type="radio" name="type1" value="2" >Abstraction
<li><input type="radio" name="type1" value="3" id="ans2">Polymorphism
<li><input type="radio" name="type1" value="4">Inheritance
</ol></br>
<li>Acquiring the properties of one entity to another entity is called____________
<ol type="A">
<li><input type="radio" name="type2" value="1" >Encapsulation
<li><input type="radio" name="type2" value="2" >Abstraction
<li><input type="radio" name="type2" value="3" id="ans3">polymorphism
<li><input type="radio" name="type2" value="4"  >Inheritance
</ol></br>
<li>Consider a relation R(A,B,C,D,E,F) with the functional Dependencies F={ {A,C}&rarr;{D,E},{A,D,F}&rarr;{B,C}}.Which among the following is a trivial FD from F<sup>+</sup> which is the closure of F.
<ol type="A">
<li><input type="radio" name="type3" value="1" >{A,C}&rarr;{D,E}
<li><input type="radio" name="type3" value="2" >{A,C}&rarr;{C,E}
<li><input type="radio" name="type3" value="3"  >{A,D}&rarr;{D}
<li><input type="radio" name="type3" value="4" id="ans4">{A,D,F}&rarr;{B}
</ol></br>
<li>Which of the following conditions is satisfied in a 2NF table?
<ol type="A">
<li><input type="radio" name="type4" value="1" id="ans5">Eliminate all partial dependencies
<li><input type="radio" name="type4" value="2">Eliminate the possibility of insertion anomalies
<li><input type="radio" name="type4" value="3">Have a composite key
<li><input type="radio" name="type4" value="4" >Have all non-key fields depend on the whole primary key
</ol></br>
<li>The process of properly defining tables to provide flexibility, minimized reduncacy and data integrity is called__________
<ol type="A">
<li><input type="radio" name="type5" value="1" >Database Design
<li><input type="radio" name="type5" value="2" id="ans6">Data Normalization
<li><input type="radio" name="type5" value="3" >Data Rationalize
<li><input type="radio" name="type5" value="4" >Data Standardization
</ol></br>
<li>Which SQL query can be used to find out the number of values in a column?
<ol type="A">
<li><input type="radio" name="type6" value="1" >TOTAL
<li><input type="radio" name="type6" value="2" >SUM
<li><input type="radio" name="type6" value="3" id="ans7">COUNT
<li><input type="radio" name="type6" value="4" >ADD
</ol></br>
<li>A relationship between two tables can be created using which of the following?
<ol type="A">
<li><input type="radio" name="type7" value="1" >Primary Key
<li><input type="radio" name="type7" value="2" id="ans8">Foreign Key
<li><input type="radio" name="type7" value="3" >Candidate Key
<li><input type="radio" name="type7" value="4">Relation Key
</ol></br>
<li>A many to many relationships between two entities usually result in how many tables?
<ol type="A">
<li><input type="radio" name="type8" value="1" id="ans9">3
<li><input type="radio" name="type8" value="2" >2
<li><input type="radio" name="type8" value="3" >1
<li><input type="radio" name="type8" value="4" >4
</ol></br>
<li> What does Atomicity property signify?
<ol type="A">
<li><input type="radio" name="type9" value="1"  >A transcation always takes place
<li><input type="radio" name="type9" value="2" id="ans10">The entire transcation takes place at once or doesn't happen at all
<li><input type="radio" name="type9" value="3">Only insertion takes place in a table
<li><input type="radio" name="type9" value="4" >Once a transaction takes place.it's permanent
</ol></br>
</ol>
<center><input type="submit" class="satya" value="Complete" name="complete"/></center>
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

window.location="dbms3key.php"
}
</script>

<script>
function back()
{<?php session_unset(); ?>
window.location="dbms2.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="dbms4.php"

        }

</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    