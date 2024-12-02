<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=15191;
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
    if($ans2 == 1) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 1) $score++;
    if($ans9 == 3) $score++;
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
<title>Operating System/Test-1</title>
<link rel="icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="satya.css"/>
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
   <center class="textcolor"> <h1 align="center">OPERATING SYSTEM: TEST-1/5</H1>
<H3 ALIGN="center">ANSWER THE FOLLOWING QUESTIONS</H3></center>
<ol type="1"  class="font" ><form method="post" action="os.php" onsubmit="return validateForm()">
<li>Information about a process is maintained in a_________.
   <ol type="A">
<li><input type="radio" name="type" value="1" >Stack
<li><input type="radio" name="type" value="2">Translation Look aside Buffer
<li><inPut type="radio" name="type" value="3" id="ans1">Process Control Block
<li><input type="radio" name="type" value="4">Program Control Block
</ol></br>
<li>Which of the following is crucial time while accessing data on the disk?
 <ol type="A">
<li><input type="radio" name="type1" value="1" id="ans2">Seek time
<li><input type="radio" name="type1" value="2">Rotational time
<li> <input type="radio" name="type1" value="3" >Transmission time
<li><input type="radio" name="type1" value="4" >Waiting time
</ol></br>
<li>An optimal scheduling algorithm in terms of minimizing the average waiting time of a given set of process is ___________
<ol type="A">
<li><input type="radio" name="type2" value="1">FCFS scheduling algorithm
<li><input type="radio" name="type2" value="2">Round robin scheduling algorithm
<li><input type="radio" name="type2" value="3" id="ans3">Shortest job-first scheduling algorithm
<li><input type="radio" name="type2" value="4">Priority scheduling algorithm 
</ol></br>
<li>Virtual memory is implemented using
<ol type="A">
<li><input type="radio" name="type3" value="1" >Segmentation
<li><input type="radio" name="type3" value="2">Swapping
<li><input type="radio" name="type3" value="3" id="ans4">Demand paging
<li><input type="radio" name="type3" value="4">Combining all physical memories
</ol></br>
<li>Inter process communication can be done through______________.
<ol type="A">
<li><input type="radio" name="type4" value="1" >Mails
<li><input type="radio" name="type4" value="2" id="ans5">Message passing
<li><input type="radio" name="type4" value="3" >System calls
<li><input type="radio" name="type4" value="4">Traps
</ol></br>
<li>The primary job of the operating system of a computer is to______________.
<ol type="A">
<li><input type="radio" name="type5" value="1" >Command Resources
<li><input type="radio" name="type5" value="2" id="ans6">Manage Resource
<li><input type="radio" name="type5" value="3" >Provide Utilities
<li><input type="radio" name="type5" value="4">Be user friendly
</ol></br>
<li>Paging__________.
<ol type="A">
<li><input type="radio" name="type6" value="1" id="ans7">Solves the memory fragmentation problem
<li><input type="radio" name="type6" value="2">Allows modular programming
<li><input type="radio" name="type6" value="3">Allows structured programming 
<li><input type="radio" name="type6" value="4" >Avoids deadlock
</ol></br>
<li>Mutual exclusion 
<ol type="A">
<li><input type="radio" name="type7" value="1" id="ans8">denotes that one process is in critical reason when others are excluded
<li><input type="radio" name="type7" value="2">Prevents deadlock
<li><input type="radio" name="type7" value="3">Cannot be implemented using Semaphores
<li><input type="radio" name="type7" value="4" >Is found only in the Windows NT operating system
</ol></br>
<li>Semaphore can be used for solving
<ol type="A">
<li><input type="radio" name="type8" value="1" >Wait & signal
<li><input type="radio" name="type8" value="2" >Deadlock
<li><input type="radio" name="type8" value="3" id="ans9">Synchronization
<li><input type="radio" name="type8" value="4">Priority
</ol></br>
<li>What is a shell?
<ol type="A">
<li><input type="radio" name="type9" value="1" >It is a hardware component
<li><input type="radio" name="type9" value="2" id="ans10">It is a command interpreter
<li><input type="radio" name="type9" value="3" >It is a part in compiler
<li><input type="radio" name="type9" value="4" >It is a tool in CPU scheduling
</ol></br>
</ol>
<center><input type="submit" value="complete" class="satya" name="complete"/></center>
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
<script>
function answer()
{
window.location="oskey.php"
}
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
         
        }
</script>
<script>
function Next()
{
window.location="os2.php"
<?php session_unset(); ?>
}
function back()
{<?php session_unset(); ?>
window.location="course.html"
}
</script>
</html>