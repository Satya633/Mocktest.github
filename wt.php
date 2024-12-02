<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=23201;
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
    if($ans2 == 4) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 2) $score++;
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
        <center class="textcolor">  <h1 align="center">WEB-TECHNOLOGY - TEST:1/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="wt.php" onsubmit="return validateForm()"> 
<li>
            Which method is used to create a hyperlink to "myexams.html"?
            <ol type="A">
                <li><input type="radio" name="type" value="1">&lt;LINK SRC = "myexams.html"&gt;</li>
                <li><input type="radio" name="type" value="2">&lt;A SRC = "myexams.html"&gt;</li>
                <li><input type="radio" name="type" value="3">&lt;BODY LINK = "myexams.html"&gt;</li>
                <li><input type="radio" name="type" value="4" id="ans1">&lt;A HREF = "myexams.html"&gt;</li>
            </ol></br>
        </li>
        <li>
            Which of the following is a valid IP address?
            <ol type="A">
                <li><input type="radio" name="type1" value="1">498.11.497.67</li>
                <li><input type="radio" name="type1" value="2">192.168.321.10</li>
                <li><input type="radio" name="type1" value="3">1.899.432.456</li>
                <li><input type="radio" name="type1" value="4" id="ans2">192.168.36.115</li>
            </ol></br>
        </li>
        <li>
            What is the output of the following PHP code?<br>
            &lt;?php<br>
            $X = 10;<br>
            $y = 20;<br>
            if($X &gt; $y + $y != 3)<br>
            print "today";<br>
            else<br>
            print "tomorrow";<br>
            ?&gt;
            <ol type="A">
                <li><input type="radio" name="type2" value="1">tomorrow</li>
                <li><input type="radio" name="type2" value="2" id="ans3">today</li>
                <li><input type="radio" name="type2" value="3">Error</li>
                <li><input type="radio" name="type2" value="4">No output</li>
            </ol></br>
        </li>
        <li>
            Which of the following protocols is used for e-mail services?
            <ol type="A">
                <li><input type="radio" name="type3" value="1">SMAP</li>
                <li><input type="radio" name="type3" value="2" id="ans4">SMTP</li>
                <li><input type="radio" name="type3" value="3">SMIP</li>
                <li><input type="radio" name="type3" value="4">SMOP</li>
            </ol></br>
        </li>
        <li>
            Which of the following is not a web server?
            <ol type="A">
                <li><input type="radio" name="type4" value="1" id="ans5">Microsoft Bing</li>
                <li><input type="radio" name="type4" value="2">Apache Tomcat</li>
                <li><input type="radio" name="type4" value="3">Microsoft IIS</li>
                <li><input type="radio" name="type4" value="4">Oracle Web Tier</li>
            </ol></br>
        </li>
        <li>
            Which one is the method of the Connection object in ADO.Net?
            <ol type="A">
                <li><input type="radio" name="type5" value="1" id="ans6">open()</li>
                <li><input type="radio" name="type5" value="2">new()</li>
                <li><input type="radio" name="type5" value="3">ConnectionOpen()</li>
                <li><input type="radio" name="type5" value="4">connectionStart()</li>
            </ol></br>
        </li>
        <li>
            Which one of the following statements instantiates the <b>mysqli</b> class in PHP programming?
            <ol type="A">
                <li><input type="radio" name="type6" value="1">mysqli=new mysqli()</li>
                <li><input type="radio" name="type6" value="2" id="ans7">$mysqli=new mysqli()</li>
                <li><input type="radio" name="type6" value="3">$mysqli->new mysqli()</li>
                <li><input type="radio" name="type6" value="4">mysqli->new mysqli()</li>
            </ol></br>
        </li>
        <li>
            Which of the following functions is used to erase all session variables stored in the current session?
            <ol type="A">
                <li><input type="radio" name="type7" value="1">session_destroy()</li>
                <li><input type="radio" name="type7" value="2" id="ans8">session_unset()</li>
                <li><input type="radio" name="type7" value="3">session_change()</li>
                <li><input type="radio" name="type7" value="4">session_remove()</li>
            </ol></br>
        </li>
        <li>
            How can you make a bulleted list with numbers?
            <ol type="A">
                <li><input type="radio" name="type8" value="1">&lt;dl&gt;</li>
                <li><input type="radio" name="type8" value="2" id="ans9">&lt;ol&gt;</li>
                <li><input type="radio" name="type8" value="3">&lt;list&gt;</li>
                <li><input type="radio" name="type8" value="4">&lt;ul&gt;</li>
            </ol></br>
        </li>
        <li>
            Which of the following statements is true?
            <ol type="A">
                <li><input type="radio" name="type9" value="1">Attribute names must be in uppercase</li>
                <li><input type="radio" name="type9" value="2" id="ans10">Attribute names must be quoted</li>
                <li><input type="radio" name="type9" value="3">Attribute names minimization is mandatory</li>
                <li><input type="radio" name="type9" value="4">Attribute names must not be quoted</li>
            </ol></br>
</ol>
<center><input type="submit" class="satya" value="Complete"name="complete"/></center>
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
window.location="wtkey.php"
}
</script>

<script>
function back()
{<?php session_unset(); ?>
window.location="course.html"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="wt2.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>