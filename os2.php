<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=15192;
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
    if($ans2 == 4) $score++;
    if($ans3 == 1) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 3) $score++;
    if($ans9 == 3) $score++;
    if($ans0 == 4) $score++;
    
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
<title>Operating System/Test-2</title>
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
   <center class="textcolor"> <h1 align="center">OPERATING SYSTEM: TEST-2/5</H1>
<H3 ALIGN="center">ANSWER THE FOLLOWING QUESTIONS</H3></center>
<ol type="1"  class="font" ><form method="post" action="os2.php" onsubmit="return validateForm()">
<li>A page fault occurs
   <ol type="A">
<li><input type="radio" name="type" value="1" id="ans1">When the page is not in the memory
<li><input type="radio" name="type" value="2">When the page is in the memory
<li><inPut type="radio" name="type" value="3" >When the process enters the blocked state
<li><input type="radio" name="type" value="4">When the process is in the ready state
</ol></br>
<li>A process said to be in _______state if it was waiting for an event that will never occur
 <ol type="A">
<li><input type="radio" name="type1" value="1" >Safe
<li><input type="radio" name="type1" value="2">Unsafe
<li> <input type="radio" name="type1" value="3" >Starvation
<li><input type="radio" name="type1" value="4" id="ans2">Dead lock
</ol></br>
<li>____________program loads the operating system and initializes all aspects of system.
<ol type="A">
<li><input type="radio" name="type2" value="1">Boot strap loader
<li><input type="radio" name="type2" value="2">Init
<li><input type="radio" name="type2" value="3" id="ans3">Kernal
<li><input type="radio" name="type2" value="4">Micro kernal
</ol></br>
<li>Software may trigger an interrupt by executing a special operation called__________
<ol type="A">
<li><input type="radio" name="type3" value="1" >Event Handling
<li><input type="radio" name="type3" value="2">Interrupt Servicing
<li><input type="radio" name="type3" value="3" id="ans4">System call
<li><input type="radio" name="type3" value="4">Loader
</ol></br>
<li>Which is npt the state of a process?
<ol type="A">
<li><input type="radio" name="type4" value="1" >Running
<li><input type="radio" name="type4" value="2" >Waiting
<li><input type="radio" name="type4" value="3" id="ans5">Killed
<li><input type="radio" name="type4" value="4">Ready
</ol></br>
<li>_____________time is the interval from the time of submission of a process to the time of completion
<ol type="A">
<li><input type="radio" name="type5" value="1" id="ans6">Turn around
<li><input type="radio" name="type5" value="2" >Waiting
<li><input type="radio" name="type5" value="3" >Execution
<li><input type="radio" name="type5" value="4">Running
</ol></br>
<li>___________CPU scheduling algorithm suffers from starvation.
<ol type="A">
<li><input type="radio" name="type6" value="1" >FCFS
<li><input type="radio" name="type6" value="2" id="ans7">Priority
<li><input type="radio" name="type6" value="3">Time sharing
<li><input type="radio" name="type6" value="4" >Round robin
</ol></br>
<li>Operations of semaphore are ______________
<ol type="A">
<li><input type="radio" name="type7" value="1" >Add and sub
<li><input type="radio" name="type7" value="2">Push and Pull
<li><input type="radio" name="type7" value="3" id="ans8">Wait and signal
<li><input type="radio" name="type7" value="4" >Hold and Wait
</ol></br>
<li>The purpose of banker's algorithm is_______________
<ol type="A">
<li><input type="radio" name="type8" value="1" >Deadlock Recovery
<li><input type="radio" name="type8" value="2" >Deadlock Prevention
<li><input type="radio" name="type8" value="3" id="ans9">Deadlock Avoidance
<li><input type="radio" name="type8" value="4">No preemption
</ol></br>
<li>Which of the memory allocation scheme is faster?
<ol type="A">
<li><input type="radio" name="type9" value="1" >Best fit
<li><input type="radio" name="type9" value="2" >Worst fit
<li><input type="radio" name="type9" value="3" >Paging
<li><input type="radio" name="type9" value="4" id="ans10">First fit
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
window.location="os2key.php"
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
window.location="os3.php"
}
function back()
{<?php session_unset(); ?>
window.location="os.php"
}
</script>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  