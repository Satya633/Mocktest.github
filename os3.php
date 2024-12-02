<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=15193;
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
    if($ans3 == 1) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 4) $score++;
    if($ans8 == 3) $score++;
    if($ans9 == 2) $score++;
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
<title>Operating System/Test-3</title>
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
   <center class="textcolor"> <h1 align="center">OPERATING SYSTEM: TEST-3/5</H1>
<H3 ALIGN="center">ANSWER THE FOLLOWING QUESTIONS</H3></center>
<ol type="1"  class="font" ><form method="post" action="os3.php" onsubmit="return validateForm()">
<li>The Basic Input Output System(BIOS) resides in
   <ol type="A">
<li><input type="radio" name="type" value="1" >RAM
<li><input type="radio" name="type" value="2" id="ans1">ROM
<li><inPut type="radio" name="type" value="3" >The CPU
<li><input type="radio" name="type" value="4">Memory Cache
</ol></br>
<li>The Banker's algorithm is used
 <ol type="A">
<li><input type="radio" name="type1" value="1" >to rectify deadlock
<li><input type="radio" name="type1" value="2">to detect deadlock
<li> <input type="radio" name="type1" value="3" >to prevent deadlock
<li><input type="radio" name="type1" value="4" id="ans2">to solve deadlock
</ol></br>
<li>First-in-First-Out(FIFO)scheduling is
<ol type="A">
<li><input type="radio" name="type2" value="1" id="ans3">Non-Preemptive Scheduling
<li><input type="radio" name="type2" value="2">Preemptive Scheduling
<li><input type="radio" name="type2" value="3" >Fair Share Scheduling
<li><input type="radio" name="type2" value="4">Deadline Scheduling
</ol></br>
<li>The interval from the time of submission of a process to the time of completion is terned as______________
<ol type="A">
<li><input type="radio" name="type3" value="1" >Waiting time 
<li><input type="radio" name="type3" value="2" id="ans4">turnaround time 
<li><input type="radio" name="type3" value="3" >response time
<li><input type="radio" name="type3" value="4">throughput
</ol></br>
<li>What is a process control block?
<ol type="A">
<li><input type="radio" name="type4" value="1" >Process type variable
<li><input type="radio" name="type4" value="2" id="ans5">A Data Structure to store information of a process
<li><input type="radio" name="type4" value="3" >A secondary storage section
<li><input type="radio" name="type4" value="4">A block in memory
</ol></br>
<li>A computer system has 6 tape drivers, with 'n' processes competing for them.Each process may need 3 tape drivers. The maximum value of 'n' for which the system is guranteed to be deadlock free
<ol type="A">
<li><input type="radio" name="type5" value="1" >1
<li><input type="radio" name="type5" value="2" id="ans6">2
<li><input type="radio" name="type5" value="3" >3
<li><input type="radio" name="type5" value="4">4
</ol></br>
<li>The address of a page table in memory is pointed by______
<ol type="A">
<li><input type="radio" name="type6" value="1" >stack pointer
<li><input type="radio" name="type6" value="2" >page register
<li><input type="radio" name="type6" value="3">program counter
<li><input type="radio" name="type6" value="4" id="ans7">page table base register
</ol></br>
<li>Consider a computer with 8M bytes of main memory and a 128K bytes cache.The cache block size is 4K bytes. It uses a direct mapping scheme for cache management.How many different main memory blocks can map onto a given physical cache block?
<ol type="A">
<li><input type="radio" name="type7" value="1" >2048
<li><input type="radio" name="type7" value="2">8
<li><input type="radio" name="type7" value="3" id="ans8">64
<li><input type="radio" name="type7" value="4" >256
</ol></br>
<li>A multilevel page table is preferred in comparison to a single level page table for translating virtual address to physical address because_________
<ol type="A">
<li><input type="radio" name="type8" value="1" >it reduces the memory access time to read or write a memory location
<li><input type="radio" name="type8" value="2" id="ans9">it helps to reduce the size of the page table needed to implemented the virtual address space of a process
<li><input type="radio" name="type8" value="3" >it is required by the translation lookaside buffer
<li><input type="radio" name="type8" value="4">it helps to reduce the number of page faults in page replacement algorithms
</ol></br>
<li>The time taken to move the disk arm the desired cylinder is called the___________
<ol type="A">
<li><input type="radio" name="type9" value="1" >poistioning time
<li><input type="radio" name="type9" value="2" >random access time
<li><input type="radio" name="type9" value="3" id="ans10">seek time
<li><input type="radio" name="type9" value="4" >rotational latency
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
window.location="os3key.php"
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
window.location="os4.php"
}
function back()
{<?php session_unset(); ?>
window.location="os2.php"
}
</script>
</html>