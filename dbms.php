<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=4213191;
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
    if($ans1 == 2) $score++;
    if($ans2 == 1) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 1) $score++;
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
        <center class="textcolor">  <h1 align="center">DATA BASE MANAGEMENT SYSTEM(DBMS) - TEST:1/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="dbms.php" onsubmit="return validateForm()">
<li>The database environment has all of the following components except
<ol type="A">
<li><input type="radio" name="type" value="1" >Users
<li><input type="radio" name="type" value="2" id="ans1">Separate files
<li><input type="radio" name="type" value="3" >Database
<li><input type="radio" name="type" value="4"  >Database administration
</ol></br>
<li>Normalization of database is used to
<ol type="A">
<li><input type="radio" name="type1" value="1" id="ans2" >Eliminate redundancy
<li><input type="radio" name="type1" value="2" >Improve security
<li><input type="radio" name="type1" value="3" >Improve efficiency
<li><input type="radio" name="type1" value="4" >Minimize errors
</ol></br>
<li>E-R modelling technique is a
<ol type="A">
<li><input type="radio" name="type2" value="1" >Bottom up approach
<li><input type="radio" name="type2" value="2" id="ans3" >Top down approach
<li><input type="radio" name="type2" value="3" >Left Right approach
<li><input type="radio" name="type2" value="4" >Right Left approach
</ol></br>
<li> Which SQL keyword is used to sort the result ?
<ol type="A">
<li><input type="radio" name="type3" value="1" id="ans4" >ORDER BY
<li><input type="radio" name="type3" value="2" >SORT-ORDER
<li><input type="radio" name="type3" value="3" >SORT
<li><input type="radio" name="type3" value="4" >ORDER
</ol></br>
<li>Which normal form is adequate for normal relational database design
<ol type="A">
<li><input type="radio" name="type4" value="1" >1NF
<li><input type="radio" name="type4" value="2" >5NF
<li><input type="radio" name="type4" value="3" >4NF
<li><input type="radio" name="type4" value="4" id="ans5">3NF
</ol></br>
<li> Which of the following is not a characteristics of a relational data base model ?
<ol type="A">
<li><input type="radio" name="type5" value="1" id="ans6">Table
<li><input type="radio" name="type5" value="2" >Treelike structure
<li><input type="radio" name="type5" value="3" >Complex Logical relationships
<li><input type="radio" name="type5" value="4" >Records
</ol></br>
<li> Data items grouped together for storage purpose are called a 
<ol type="A">
<li><input type="radio" name="type6" value="1" id="ans7">Record
<li><input type="radio" name="type6" value="2" >Title list
<li><input type="radio" name="type6" value="3" >List
<li><input type="radio" name="type6" value="4" >String
</ol></br>
<li> The entity relationship  model comes under 
<ol type="A">
<li><input type="radio" name="type7" value="1" id="ans8">Object based logical model
<li><input type="radio" name="type7" value="2" >Record based logical model
<li><input type="radio" name="type7" value="3" >Physical data model
<li><input type="radio" name="type7" value="4" >Grid based logical model
</ol></br>
<li> A command that lets you change one or more fields in a record is 
<ol type="A">
<li><input type="radio" name="type8" value="1" >INSERT
<li><input type="radio" name="type8" value="2" id="ans9">MODIFY
<li><input type="radio" name="type8" value="3" >LOOK UP
<li><input type="radio" name="type8" value="4" >CHANGE
</ol></br>
<li> A file manipulation command that extracts some of the records from a file is called 
<ol type="A">
<li><input type="radio" name="type9" value="1" id="ans10">SELECT
<li><input type="radio" name="type9" value="2" >PROJECT
<li><input type="radio" name="type9" value="3" >JOIN
<li><input type="radio" name="type9" value="4" >INDEX
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

window.location="dbmskey.php"
}
</script>

<script>
function back()
{<?php session_unset(); ?>
window.location="course.html"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="dbms2.php"

        }

</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>