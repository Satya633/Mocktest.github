<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=23202;
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
    if($ans1 == 4) $score++;
    if($ans2 == 4) $score++;
    if($ans3 == 1) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 1) $score++;
    if($ans9 == 4) $score++;
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
<title>WEB-TECHNOLOGY/TEST</title>
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
        <center class="textcolor">  <h1 align="center">WEB-TECHNOLOGY - TEST:2/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font">
<form method="post" action="wt2.php" onsubmit="return validateForm()">
<li>What will be the output of the following PHP code?</br>
&lt;?php</br>
$color = "maroon" ;</br>
$var = $color[2];</br>
echo "$var";</br>
?&gt;</br>
<ol type="A">
<li><input type="radio" name="type1" value="1">A
<li><input type="radio" name="type1" value="2">Error
<li><input type="radio" name="type1" value="3">$Var
<li><input type="radio" name="type1" id="ans1" value="4">r
</ol></br>

<li>Correct HTML tag for the largest heading is 
<ol type="A">
<li><input type="radio" name="type2" value="1">&lt;head&gt;
<li><input type="radio" name="type2" value="2">&lt;h6&gt;
<li><input type="radio" name="type2" value="3">&lt;heading&gt;
<li><input type="radio" name="type2" id="ans2" value="4">&lt;h1&gt;
</ol></br>

<li>Which one of the following functions will convert a string to all uppercase letters? 
<ol type="A">
<li><input type="radio" name="type3" id="ans3" value="1">strtoupper()
<li><input type="radio" name="type3" value="2">uppercase()
<li><input type="radio" name="type3" value="3">str_uppercase()
<li><input type="radio" name="type3" value="4">struppercase()
</ol></br>

<li>Which attribute is used to extend the lifetime of a cookie? 
<ol type="A">
<li><input type="radio" name="type4" value="1">higher-age
<li><input type="radio" name="type4" value="2">increase-age
<li><input type="radio" name="type4" id="ans4" value="3">max-age
<li><input type="radio" name="type4" value="4">lifetime
</ol></br>

<li>If you are using the DataSet and you have to display the data in sorted order what will you do?
<ol type="A">
<li><input type="radio" name="type5" value="1">Use sort method of DataTable
<li><input type="radio" name="type5" value="2">Use Sort Method of DataSet 
<li><input type="radio" name="type5" id="ans5" value="3">Use Dataview object with each sort
<li><input type="radio" name="type5" value="4">Use datapaging and sort the data
</ol></br>

<li>What are the three primary kinds of parameters?
<ol type="A">
<li><input type="radio" name="type6" value="1">Input, Integer, String
<li><input type="radio" name="type6" value="2">Integer, String, DateTime
<li><input type="radio" name="type6" value="3">int, varchar, nvarchar
<li><input type="radio" name="type6" id="ans6" value="4">Input, Output, InputOutput
</ol></br>

<li>Which of the following is not the method of DataAdapter?
<ol type="A">
<li><input type="radio" name="type7" value="1">Fill
<li><input type="radio" name="type7" value="2">Schema
<li><input type="radio" name="type7" id="ans7" value="3">ReadData
<li><input type="radio" name="type7" value="4">Update
</ol></br>

<li>Which of the following method of the command object is best suited when you have aggregate functions in a SELECT statement?
<ol type="A">
<li><input type="radio" name="type8" id="ans8" value="1">ExecuteScalar
<li><input type="radio" name="type8" value="2">ExecuteReader
<li><input type="radio" name="type8" value="3">ExecuteNonQuery
<li><input type="radio" name="type8" value="4">Execute
</ol></br>

<li>ADO.NET provides the ability to create and process in-memory databases called?
<ol type="A">
<li><input type="radio" name="type9" value="1">Views
<li><input type="radio" name="type9" value="2">Relations
<li><input type="radio" name="type9" value="3">Tables
<li><input type="radio" name="type9" id="ans9" value="4">DataSets
</ol></br>

<li>__________ element contains meta information about the document.
<ol type="A">
<li><input type="radio" name="type10" value="1">&lt;head&gt;
<li><input type="radio" name="type10" value="2">&lt;html&gt;
<li><input type="radio" name="type10" id="ans10" value="3">&lt;!Doctype html&gt;
<li><input type="radio" name="type10" value="4">&lt;title&gt;
</ol><br>
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
function answer(){
window.location="wt2key.php"
}

function back()
{<?php session_unset(); ?>
window.location="wt.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="wt3.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>