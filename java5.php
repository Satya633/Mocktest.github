<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=1012215;
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
    if($ans2 == 3) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 4) $score++;
    if($ans9 == 1) $score++;
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
<title>JAVA/TEST</title>
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
        <center class="textcolor">  <h1 align="center">JAVA - TEST:5/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
        <ol type="1" class="font">
    <form method="post" action="java5.php" onsubmit="return validateForm()">
        <li>Which method of string class in Java is used to convert the boolean into string?
            <ol type="A">
                <li><input type="radio" name="type" value="1" id="ans1">Public static String valueOf(double I)</li>
                <li><input type="radio" name="type" value="2">Public static String valueOf(Boolean I)</li>
                <li><input type="radio" name="type" value="3">Public Boolean equals (Object anObject)</li>
                <li><input type="radio" name="type" value="4">Public static String valueOf(Object obj)</li>
            </ol></br>
        </li>
        <li>Which method is called only once during the run time of your applet?
            <ol type="A">
                <li><input type="radio" name="type1" value="1">stop()</li>
                <li><input type="radio" name="type1" value="2">paint()</li>
                <li><input type="radio" name="type1" value="3" id="ans2">init()</li>
                <li><input type="radio" name="type1" value="4">destroy()</li>
            </ol></br>
        </li>
        <li>Which of these exceptions will be thrown if we use null references for an arithmetic operation?
            <ol type="A">
                <li><input type="radio" name="type2" value="1">ArithmeticException</li>
                <li><input type="radio" name="type2" value="2" id="ans3">NullPointerException</li>
                <li><input type="radio" name="type2" value="3">IllegalAccessException</li>
                <li><input type="radio" name="type2" value="4">IllegalOperationException</li>
            </ol></br>
        </li>
        <li>Which of this method is used to find out that a thread is still running or not?
            <ol type="A">
                <li><input type="radio" name="type3" value="1">run()</li>
                <li><input type="radio" name="type3" value="2">Alive()</li>
                <li><input type="radio" name="type3" value="3" id="ans4">isAlive()</li>
                <li><input type="radio" name="type3" value="4">checkRun()</li>
            </ol></br>
        </li>
        <li>Predict the output of the following Java program<br><br>
            class test{<br>
            int i;<br>
            }<br>
            class Main{<br>
            public static void main(String args[]){<br>
            test t = new test();<br>
            System.out.println(t.i);<br>
            }<br>
            }<br>
            <ol type="A">
                <li><input type="radio" name="type4" value="1">Garbage value</li>
                <li><input type="radio" name="type4" value="2" id="ans5">0</li>
                <li><input type="radio" name="type4" value="3">compile time error</li>
                <li><input type="radio" name="type4" value="4">run time error</li>
            </ol></br>
        </li>
        <li>Which of this method of thread class is used to suspend a thread for a period of time?
            <ol type="A">
                <li><input type="radio" name="type5" value="1" id="ans6">Sleep()</li>
                <li><input type="radio" name="type5" value="2">terminate()</li>
                <li><input type="radio" name="type5" value="3">suspend()</li>
                <li><input type="radio" name="type5" value="4">stop()</li>
            </ol></br>
        </li>
        <li>Which is used to store data and partial results, as well as to perform dynamic linking, return values for methods, and dispatch exceptions?
            <ol type="A">
                <li><input type="radio" name="type6" value="1">Window</li>
                <li><input type="radio" name="type6" value="2">Panel</li>
                <li><input type="radio" name="type6" value="3" id="ans7">Frame</li>
                <li><input type="radio" name="type6" value="4">Container</li>
            </ol></br>
        </li>
        <li>Which of these is a super class of wrappers Double & Integer?
            <ol type="A">
                <li><input type="radio" name="type7" value="1">Long</li>
                <li><input type="radio" name="type7" value="2">Digits</li>
                <li><input type="radio" name="type7" value="3">Float</li>
                <li><input type="radio" name="type7" value="4" id="ans8">Number</li>
            </ol></br>
        </li>
        <li>___________ is a small program that is dynamically downloaded over the web
            <ol type="A">
                <li><input type="radio" name="type8" value="1" id="ans9">Applet</li>
                <li><input type="radio" name="type8" value="2">Dynamic Program</li>
                <li><input type="radio" name="type8" value="3">Code chef</li>
                <li><input type="radio" name="type8" value="4">Snippet</li>
            </ol></br>
        </li>
        <li>What will be the result of the following Java expression?<br>
            4 * 2 - 5 > 4 && 3 < 5 - 3<br>
            <ol type="A">
                <li><input type="radio" name="type9" value="1" id="ans10">FALSE</li>
                <li><input type="radio" name="type9" value="2">TRUE</li>
                <li><input type="radio" name="type9" value="3">0</li>
                <li><input type="radio" name="type9" value="4">1</li>
            </ol></br>
        </li>
</ol>
<center><input type="submit" class="satya" value="Complete"name="complete" /></center>
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

window.location="java5key.php"
}
</script>

<script>
function back()
{<?php session_unset(); ?>
window.location="java4.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="java5.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>