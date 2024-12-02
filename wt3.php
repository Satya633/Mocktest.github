<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=23203;
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
    if($ans2 == 4) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 3) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 3) $score++;
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
        <center class="textcolor">  <h1 align="center">WEB-TECHNOLOGY - TEST:3/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font">
<form method="post" action="wt3.php" onsubmit="return validateForm()">
<li>_________ style sheet is used to define the style of many HTML pages.
<ol type="A">
<li><input type="radio" name="type1" value="1">Inline
<li><input type="radio" name="type1" value="2">Internal
<li><input type="radio" name="type1" id="ans1" value="3">External
<li><input type="radio" name="type1" value="4">None of the Above
</ol></br>

<li>Identify the type of error in the following php code:</br>
&lt;?php</br>
Function Sum(){</br>
......;</br>
}</br>
sum1();</br>
?&gt;</br>
<ol type="A">
<li><input type="radio" name="type2" value="1">Parser Error
<li><input type="radio" name="type2" value="2">Notice Error
<li><input type="radio" name="type2" value="3">Warning Error
<li><input type="radio" name="type2" id="ans2" value="4">Fatal Error
</ol></br>

<li>The output of the following code snippet is__________.</br>
&lt;?php</br>
$str="Welcome";</br>
Echo substr($str,3,4);</br>
?&gt;</br>
<ol type="A">
<li><input type="radio" name="type3" value="1">lcom
<li><input type="radio" name="type3" id="ans3" value="2">come
<li><input type="radio" name="type3" value="3">lc
<li><input type="radio" name="type3" value="4">co
</ol></br>

<li>Which of the following statements is true?</br>
A. Sessions are Secure</br>
B. Cookies store large amount of data</br>
C. Sessions store information in client machine</br>
<ol type="A">
<li><input type="radio" name="type4" id="ans4" value="1">A only
<li><input type="radio" name="type4" value="2">B only
<li><input type="radio" name="type4" value="3">C only
<li><input type="radio" name="type4" value="4">A & B only
</ol></br>

<li>&lt;? Php</br>
$a = array(10,20,30);</br>
Echo implode('@',$a);</br>
?&gt;</br>
The output of the above program is____________
<ol type="A">
<li><input type="radio" name="type5" id="ans5" value="1">10@20@30
<li><input type="radio" name="type5" value="2">@10
<li><input type="radio" name="type5" value="3">10@
<li><input type="radio" name="type5" value="4">10 20 30
</ol></br>

<li>Which among the following data providers is not supported by ADO.NET?
<ol type="A">
<li><input type="radio" name="type6" value="1">ODBC
<li><input type="radio" name="type6" value="2">MYSQL Server
<li><input type="radio" name="type6" id="ans6" value="3">MYAccess
<li><input type="radio" name="type6" value="4">OLEDB
</ol></br>

<li>____________ serve as a bridge between a Dataset and Data Source for retrieving stored data.
<ol type="A">
<li><input type="radio" name="type7" value="1">Data Manipulator
<li><input type="radio" name="type7" id="ans7" value="2">Data Adapter
<li><input type="radio" name="type7" value="3">Dataset Object
<li><input type="radio" name="type7" value="4">Data Reader
</ol></br>

<li>___________ is a collection of DataColumn, DataRows, and Constraints.
<ol type="A">
<li><input type="radio" name="type8" value="1">Dataset
<li><input type="radio" name="type8" value="2">Data Relations
<li><input type="radio" name="type8" id="ans8" value="3">Data Table
<li><input type="radio" name="type8" value="4">Data adapter
</ol></br>

<li>__________________ Method copies the structure of Dataset.
<ol type="A">
<li><input type="radio" name="type9" value="1">AcceptChanges()
<li><input type="radio" name="type9" id="ans9" value="2">clone()
<li><input type="radio" name="type9" value="3">copy()
<li><input type="radio" name="type9" value="4">Haschanges()
</ol></br>

<li>How can you open a link in a new browser window?
<ol type="A">
<li><input type="radio" name="type10" value="1">&lt;a href = "url" target = "new"&gt;
<li><input type="radio" name="type10" id="ans10" value="2">&lt;a href = "url" target = "_blank"&gt;
<li><input type="radio" name="type10" value="3">&lt;a href = "url" .new&gt;
<li><input type="radio" name="type10" value="4">&lt;a href = "url" target = "open"&gt;
</ol><br>
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
window.location="wt3key.php"
}
</script>

<script>
function back()
{<?php session_unset(); ?>
window.location="wt2.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="wt4.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>