<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=23204;
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
    if($ans1 == 2) $score++;
    if($ans2 == 2) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 4) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 3) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 3) $score++;
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
        <center class="textcolor">  <h1 align="center">WEB-TECHNOLOGY - TEST:4/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font">
<form method="post" action="wt4.php" onsubmit="return validateForm()">
<li>If you want to merge two or more rows in a table, which attribute can you use?
<ol type="A">
<li><input type="radio" name="type1" value="1">Rowmerge
<li><input type="radio" name="type1" id="ans1" value="2">Rowspan
<li><input type="radio" name="type1" value="3">Colmerge
<li><input type="radio" name="type1" value="4">Colspan
</ol></br>

<li>When form data contains sensitive or personal information, which method is more preferable?
<ol type="A">
<li><input type="radio" name="type2" value="1">Get method
<li><input type="radio" name="type2" id="ans2" value="2">Post method
<li><input type="radio" name="type2" value="3">Host method
<li><input type="radio" name="type2" value="4">Put method
</ol></br>

<li>HTML documents are transmitted from web servers to the web browsers using_____________?
<ol type="A">
<li><input type="radio" name="type3" value="1">FTP
<li><input type="radio" name="type3" id="ans3" value="2">HTTP
<li><input type="radio" name="type3" value="3">XML
<li><input type="radio" name="type3" value="4">JSP
</ol></br>

<li>Which built-in function will add a value to the end of an array in PHP?
<ol type="A">
<li><input type="radio" name="type4" value="1">Array_unshift()
<li><input type="radio" name="type4" value="2">Into_array()
<li><input type="radio" name="type4" value="3">Inend_array()
<li><input type="radio" name="type4" id="ans4" value="4">Array_push()
</ol></br>

<li>What will be the output of the following PHP code?</br>
&lt;php</br>
$number=array("4","hello",2);</br>
echo(array_sum($number));</br>
?&gt;</br>
<ol type="A">
<li><input type="radio" name="type5" value="1">4hello2
<li><input type="radio" name="type5" value="2">4
<li><input type="radio" name="type5" value="3">2
<li><input type="radio" name="type5" id="ans5" value="4">6
</ol></br>

<li>Which of the following is used to access MySQL database in PHP?
<ol type="A">
<li><input type="radio" name="type6" value="1">mysqlconnect() function
<li><input type="radio" name="type6" value="2">mysql-connect()
<li><input type="radio" name="type6" id="ans6" value="3">mysql_connect() function
<li><input type="radio" name="type6" value="4">sql_connect() function
</ol></br>

<li>Which of the following is used in PHP to store data in a session?
<ol type="A">
<li><input type="radio" name="type7" id="ans7" value="1">$_SESSION
<li><input type="radio" name="type7" value="2">SYS_SESSION
<li><input type="radio" name="type7" value="3">$SESSION
<li><input type="radio" name="type7" value="4">$_SESSIONS
</ol></br>

<li>___________ Object is used to fill a Dataset/Data Table with query results in ADO.NET.
<ol type="A">
<li><input type="radio" name="type8" value="1">Data Reader
<li><input type="radio" name="type8" value="2">DataSet
<li><input type="radio" name="type8" id="ans8" value="3">DataAdapter
<li><input type="radio" name="type8" value="4">DataTables
</ol></br>

<li>ADO.NET Data Adapter provides the communication between_________?
<ol type="A">
<li><input type="radio" name="type9" value="1">Data object and DataSet
<li><input type="radio" name="type9" value="2">Data object and data source
<li><input type="radio" name="type9" value="3">Dataset and Database
<li><input type="radio" name="type9" id="ans9" value="4">Dataset and data Sources
</ol></br>

<li>__________ is used to store the data within the documents on the server.
<ol type="A">
<li><input type="radio" name="type10" id="ans10" value="1">XML
<li><input type="radio" name="type10" value="2">HTML
<li><input type="radio" name="type10" value="3">DHTML
<li><input type="radio" name="type10" value="4">CGI
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
window.location="wt4key.php"
}
</script>

<script>
function back()
{<?php session_unset(); ?>
window.location="wt3.php"
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