<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=23205;
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
    if($ans2 == 2) $score++;
    if($ans3 == 4) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 2) $score++;
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
        <center class="textcolor">  <h1 align="center">WEB-TECHNOLOGY - TEST:5/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font">
<form method="post" action="wt5.php" onsubmit="return validateForm()">
<li>What does "error 404" or "Not Found" error while accessing a URL mean?</br>
<ol type="A">
<li><input type="radio" name="type1" id="ans1" value="1">The server could not find the requested URL
<li><input type="radio" name="type1" value="2">The requested HTML file is not available
<li><input type="radio" name="type1" value="3">The path to the interpreter of the script is not valid
<li><input type="radio" name="type1" value="4">The requested HTML file does not have sufficient permissions
</ol></br>

<li>Which of the following methods acts as a constructor function in a PHP class?
<ol type="A">
<li><input type="radio" name="type2" value="1">class_name()
<li><input type="radio" name="type2" id="ans2" value="2">__construct()
<li><input type="radio" name="type2" value="3">constructor
<li><input type="radio" name="type2" value="4">constructor()
</ol></br>

<li>Which of the following functions returns the number of characters in a string variable?
<ol type="A">
<li><input type="radio" name="type3" value="1">count($variable)
<li><input type="radio" name="type3" value="2">strcount($variable)
<li><input type="radio" name="type3" value="3">len($variable)
<li><input type="radio" name="type3" id="ans3" value="4">strlen($variable)
</ol></br>

<li>What will be the output of the following PHP code?</br>
&lt;?php</br>
function hi()</br>
{</br>
echo "Hello World";</br>
}</br>
$function_holder="hi";</br>
$function_holder();</br>
?&gt;</br>
<ol type="A">
<li><input type="radio" name="type4" value="1">Error
<li><input type="radio" name="type4" value="2">No output
<li><input type="radio" name="type4" id="ans4" value="3">Hello World
<li><input type="radio" name="type4" value="4">hi
</ol></br>

<li>In PHP, which of the following functions is used to sort an array in descending order?
<ol type="A">
<li><input type="radio" name="type5" value="1">sort()
<li><input type="radio" name="type5" value="2">asort()
<li><input type="radio" name="type5" id="ans5" value="3">rsort()
<li><input type="radio" name="type5" value="4">dsort()
</ol></br>

<li>What will be the output of the following PHP code?</br>
&lt;?php</br>
function a()</br>
{</br>
function b()</br>
{</br>
echo 'BB';</br>
}</br>
echo 'AA';</br>
}
a();</br>
b();</br>
?&gt;</br>
<ol type="A">
<li><input type="radio" name="type6" value="1">AA
<li><input type="radio" name="type6" value="2">BBAA
<li><input type="radio" name="type6" id="ans6" value="3">AABB
<li><input type="radio" name="type6" value="4">Error
</ol></br>

<li>A function in PHP which starts with ____ (double underscore) is known as ____________?
<ol type="A">
<li><input type="radio" name="type7" value="1">User-Defined Function
<li><input type="radio" name="type7" id="ans7" value="2">Magic Function
<li><input type="radio" name="type7" value="3">Built-in Function
<li><input type="radio" name="type7" value="4">Default Function
</ol></br>

<li>_______ object is used to fill a DataSet/Data Table with query results in ADO.NET?
<ol type="A">
<li><input type="radio" name="type8" value="1">DataSet
<li><input type="radio" name="type8" id="ans8" value="2">DataAdapter
<li><input type="radio" name="type8" value="3">DataTable
<li><input type="radio" name="type8" value="4">DataReader
</ol></br>

<li>__________ method is used to change the data in the database such as update, delete, or insert statements?
<ol type="A">
<li><input type="radio" name="type9" value="1">ExecuteReader()
<li><input type="radio" name="type9" value="2">ExecuteScalar()
<li><input type="radio" name="type9" value="3">ExecuteXML()
<li><input type="radio" name="type9" id="ans9" value="4">ExecuteNonQuery()
</ol></br>

<li>How to create a hyperlink in HTML?
<ol type="A">
<li><input type="radio" name="type10" id="ans10" value="1">&lt;a href="www.XYZ.com"&gt;XYZ.com&lt;/a&gt;
<li><input type="radio" name="type10" value="2">&lt;a url="www.XYZ.com"&gt;XYZ.com&lt;/a&gt;
<li><input type="radio" name="type10" value="3">&lt;a link="www.XYZ.com"&gt;XYZ.com&lt;/a&gt;
<li><input type="radio" name="type10" value="4">&lt;a&gt;www.XYZ.com&lt;/a&gt;
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
function answer()
{
window.location="wt5key.php"
}
</script>

<script>
function back()
{<?php session_unset(); ?>
window.location="wt4.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="wt5.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>