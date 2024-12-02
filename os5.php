<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=15195;
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
    if($ans2 == 4) $score++;
    if($ans3 == 1) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 3) $score++;
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
<title>Operating System/Test-5</title>
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
   <center class="textcolor"> <h1 align="center">OPERATING SYSTEM: TEST-5/5</H1>
<H3 ALIGN="center">ANSWER THE FOLLOWING QUESTIONS</H3></center>
<ol type="1"  class="font" ><form method="post" action="os5.php" onsubmit="return validateForm()">
<li>Which is not an OS service?
   <ol type="A">
<li><input type="radio" name="type" value="1" >Program execution
<li><input type="radio" name="type" value="2" id="ans1">Networking
<li><inPut type="radio" name="type" value="3" >Error detection
<li><input type="radio" name="type" value="4">Security
</ol></br>
<li>Round robin scheduling falls under the category of_________
 <ol type="A">
<li><input type="radio" name="type1" value="1" >Dead Lock
<li><input type="radio" name="type1" value="2">Demand Paging
<li> <input type="radio" name="type1" value="3" >Non-preemptive scheduling
<li><input type="radio" name="type1" value="4" id="ans2">Preemptive scheduling
</ol></br>
<li>Which one of the following is the Dead Lock Avoidance algorithm?
<ol type="A">
<li><input type="radio" name="type2" value="1" id="ans3">Banker's algorithm
<li><input type="radio" name="type2" value="2">Round Robin algorithm
<li><input type="radio" name="type2" value="3" >Elevator algorithm
<li><input type="radio" name="type2" value="4">Karn's algorithm
</ol></br>
<li>The aim of creating Page Replacement algorithm is to____________
<ol type="A">
<li><input type="radio" name="type3" value="1" >Replaces pages faster
<li><input type="radio" name="type3" value="2" >Increase the page fault rate
<li><input type="radio" name="type3" value="3" id="ans4">Decrease the page fault rate
<li><input type="radio" name="type3" value="4">To allocate multiple pages to process
</ol></br>
<li>What are the two methods of the LRU page replacement policy that can be implemented in hardware? 
<ol type="A">
<li><input type="radio" name="type4" value="1" >Counters
<li><input type="radio" name="type4" value="2" >RAM registers
<li><input type="radio" name="type4" value="3" id="ans5">Stack and counters
<li><input type="radio" name="type4" value="4">Registers
</ol></br>
<li>Virtual memory is normally implemented by_____________
<ol type="A">
<li><input type="radio" name="type5" value="1" id="ans6">Demand Paging
<li><input type="radio" name="type5" value="2" >Buses
<li><input type="radio" name="type5" value="3" >Virtualization
<li><input type="radio" name="type5" value="4">paging
</ol></br>
<li>Process is________________
<ol type="A">
<li><input type="radio" name="type6" value="1" >Program in high level language kept on disk
<li><input type="radio" name="type6" value="2" >Contents of main memory
<li><input type="radio" name="type6" value="3" id="ans7">A program in execution
<li><input type="radio" name="type6" value="4" >a job in secondary memory
</ol></br>
<li>With paging therer is no_____________fragmentation
<ol type="A">
<li><input type="radio" name="type7" value="1" >Internal
<li><input type="radio" name="type7" value="2" id="ans8">External
<li><input type="radio" name="type7" value="3" >Demand
<li><input type="radio" name="type7" value="4" >Segmentation
</ol></br>
<li>In page memory systems, if the page size is increased, then the internal fragmentation generally____________
<ol type="A">
<li><input type="radio" name="type8" value="1" >Becomes less
<li><input type="radio" name="type8" value="2" id="ans9">Becomes more
<li><input type="radio" name="type8" value="3" >Remains constant
<li><input type="radio" name="type8" value="4">Remains equal
</ol></br>
<li>Memory management techniques in which system stores & retrieves data from secondary storage for use in main memory is called____________
<ol type="A">
<li><input type="radio" name="type9" value="1" >Fragmentation
<li><input type="radio" name="type9" value="2" id="ans10">Paging
<li><input type="radio" name="type9" value="3" >Mapping
<li><input type="radio" name="type9" value="4" >Relocating
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
window.location="os5key.php"
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
window.location="os4.php"
}
</script>
</html>