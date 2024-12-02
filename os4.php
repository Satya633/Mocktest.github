<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=15194;
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
    if($ans3 == 3) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 1) $score++;
    if($ans9 == 3) $score++;
    if($ans0 == 3) $score++;
    
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
<title>Operating System/Test-4</title>
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
   <center class="textcolor"> <h1 align="center">OPERATING SYSTEM: TEST-4/5</H1>
<H3 ALIGN="center">ANSWER THE FOLLOWING QUESTIONS</H3></center>
<ol type="1"  class="font" ><form method="post" action="os4.php" onsubmit="return validateForm()">
<li>In the_____algorithm, the disk arm starts at one end of the disk and moves toward the other end, servicing requests till the other end of the disk.At the other end, the directions is reversed and servici g continues.
   <ol type="A">
<li><input type="radio" name="type" value="1" >LOOK
<li><input type="radio" name="type" value="2" id="ans1">SCAN
<li><inPut type="radio" name="type" value="3" >C-SCAN
<li><input type="radio" name="type" value="4">C-LOOK
</ol></br>
<li>An SJF algorithm is simply a priority algorithm where the priority is________
 <ol type="A">
<li><input type="radio" name="type1" value="1" id="ans2">the predicted next CPU burst
<li><input type="radio" name="type1" value="2">the inverse of the predicted next CPU burst
<li> <input type="radio" name="type1" value="3" >the current CPU burst
<li><input type="radio" name="type1" value="4" >anything the user wants
</ol></br>
<li>The list of process wating at an I/O device are in_____________
<ol type="A">
<li><input type="radio" name="type2" value="1" >Ready queue
<li><input type="radio" name="type2" value="2">Job queue
<li><input type="radio" name="type2" value="3" id="ans3">Device queue
<li><input type="radio" name="type2" value="4">Waiting queue
</ol></br>
<li>Consider the 3 processes shown in the table:</br>
<table border="1"><tr><th>Process</th><th>Arrival time</th><th>Time units required</th></tr>
<tr><td>P1</td><td>0</td><td>5</td></tr>
<tr><td>P2</td><td>1</td><td>7</td></tr>
<tr><td>P3</td><td>5</td><td>4</td></tr></table></br>
The completiion order of the 3 processes under the policies FCFS and Round Robin scheduling with CPU quantumn of 2 time units is_____________
<ol type="A">
<li><input type="radio" name="type3" value="1" >FCFS:P1,P2,P3 RR:P1,P2,P3
<li><input type="radio" name="type3" value="2" id="ans4">FCFS:P1,P2,P3 RR:P1,P3,P2
<li><input type="radio" name="type3" value="3" >FCFS:P1,P3,P2 RR:P1,P2,P3
<li><input type="radio" name="type3" value="4">FCFS:P1,P3,P2 RR:P1,P3,P2
</ol></br>
<li>There are 200 tracks on a disk platter and the pending requests have come in the order : 36,69,167,76,42,51,126,12,and 199.Assume the arm is located at the 100<sup>th</sup> track and moving towards track 200.If the sequence of access scheduling policy is used?
<ol type="A">
<li><input type="radio" name="type4" value="1" >SCAN 
<li><input type="radio" name="type4" value="2" >Shortest Seek Time First
<li><input type="radio" name="type4" value="3" id="ans5">C-SCAN
<li><input type="radio" name="type4" value="4">FCFS
</ol></br>
<li>When the time slice of Round Robin scheduling is large, its behaviour is similar to______
<ol type="A">
<li><input type="radio" name="type5" value="1" id="ans6">FCFS
<li><input type="radio" name="type5" value="2" >Shortest job first
<li><input type="radio" name="type5" value="3" >Priority scheduling
<li><input type="radio" name="type5" value="4">Shortest remaining time first
</ol></br>
<li>If a resource pre-emption is used to eliminate deadlock, the process holding it so far has to be
<ol type="A">
<li><input type="radio" name="type6" value="1" >Aborted
<li><input type="radio" name="type6" value="2" >Queued
<li><input type="radio" name="type6" value="3" id="ans7">Rolled back
<li><input type="radio" name="type6" value="4" >Termiated
</ol></br>
<li>How to avoid starvation of processes?
<ol type="A">
<li><input type="radio" name="type7" value="1" id="ans8">Include aging in the priority scheme
<li><input type="radio" name="type7" value="2">Include the number of resources in resource pre-emption
<li><input type="radio" name="type7" value="3" >Randomly select processes for resource allocation
<li><input type="radio" name="type7" value="4" >Randomly select processes for CPU allocation
</ol></br>
<li>A virtual memory system has an address space of 8 k words, a memory space of 4 k words, and page and block sizes of 1 k words. Find the number of page faults using LRU policy, for following page refrences
<ol type="A">
<li><input type="radio" name="type8" value="1" >5
<li><input type="radio" name="type8" value="2" >7
<li><input type="radio" name="type8" value="3" id="ans9">9
<li><input type="radio" name="type8" value="4">10
</ol></br>
<li>Which is true with refrence to Working Set model for page replacement?
<ol type="A">
<li><input type="radio" name="type9" value="1" >It refers to static page replacement algorithm
<li><input type="radio" name="type9" value="2" >It refers to local page replacement algorithm
<li><input type="radio" name="type9" value="3" id="ans10">It dynamically provides frames for the process as per its needs
<li><input type="radio" name="type9" value="4" >It increases thrashing
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
window.location="os4key.php"
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
{<?php session_unset(); ?>
window.location="os5.php"
}
function back()
{<?php session_unset(); ?>
window.location="os3.php"
}
</script>
</html>