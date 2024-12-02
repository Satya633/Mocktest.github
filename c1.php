<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=31;
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
    if($ans2 == 2) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 4) $score++;
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
<title>C-Language/Test-1</title>
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
       <center class="textcolor"> <h1 align="center">C AND DATA STRUCTURE-TEST:1/5</h1>
        <H2 align="center">ANSWER THE FOLLOWING QUESTIONS : </h2></center> 
         <ol type="1" class="font"><form method="post" action="c1.php" onsubmit="return validateForm()">
           <li> Evaluting expression consisting of operands and operators is an application of _____________ data structure.
            <ol type="A">
        <li > <input type="radio" name="type" value="1" id="sekhar">Stack
        <li>  <input type="radio" name="type" value="2">Queue 
        <li> <input type="radio" name="type" value="3">Tree        
        <li><input type="radio" name="type" value="4">Graph
        </ol>  </br>
        <li> Example of Non linear Data structure is ____________
            <ol type="A">
        <li > <input type="radio" name="type1" value="1" >Stack
        <li>  <input type="radio" name="type1" value="2" id="sekhar1">Trees
        <li> <input type="radio" name="type1" value="3">Queue       
        <li><input type="radio" name="type1" value="4">Linked list
            </ol>   </br>
        <li>The best case time complexity of quick sort is ___________
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" > O(log n)
        <li>  <input type="radio" name="type2" value="2" id="sekhar2">O(n log n)
        <li> <input type="radio" name="type2" value="3">O(n²)
        <li><input type="radio" name="type2" value="4" >O(1)        
            </ol> </br>
            <li>In ________ queue, the element can be inserted or removed from both the ends of the queue
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" id="sekhar3">Dequeue
            <li>  <input type="radio" name="type3" value="2"  >Priority Queue
            <li> <input type="radio" name="type3" value="3"> Circular Queue
            <li><input type="radio" name="type3" value="4" > Linear Queue            
                </ol> </br>
                <li> Implementation of Depth First search is done using _________
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >Circular queue
                <li>  <input type="radio" name="type4" value="2" >Linear queue
                <li> <input type="radio" name="type4" value="3" id="sekhar4">Stack
                <li><input type="radio" name="type4" value="4">Double ended queue            
                    </ol> </br>
                    <li>________ tree traversal technique prints the elements of binary search tree in ascending order 
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1" >Pre order
                    <li>  <input type="radio" name="type5" value="2" >Post order 
                    <li> <input type="radio" name="type5" value="3">Inverse order
                    <li><input type="radio" name="type5" value="4" id="sekhar5" >In order         
                        </ol> </br>
                        <li> One of the applications of Queue is ___________
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1" >Evaluation post fix expression 
                        <li>  <input type="radio" name="type6" value="2">Recursion
                        <li> <input type="radio" name="type6" value="3"> Post order implementation
                        <li><input type="radio" name="type6" value="4"  id="sekhar6">Memory Management    
                            </ol> </br>
                            <li>________ sorting technique gives the best performance will irrespective data distribution.
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" id="sekhar7">Merge sort
                            <li>  <input type="radio" name="type7" value="2" >Quick sort
                            <li> <input type="radio" name="type7" value="3">Insertion sort
                            <li><input type="radio" name="type7" value="4" >Bubble sort         
                                </ol> </br>
                                <li> Polynomial manipulations are one of the application of ___________ data structure
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >Stack
                                <li>  <input type="radio" name="type8" value="2" >Tree
                                <li> <input type="radio" name="type8" value="3" id="sekhar8">Linked list
                                <li><input type="radio" name="type8" value="4" >Graph       
                                    </ol> </br>
                                    <li> __________ data structure requires multiple runs of traversals
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" >Linear
                                    <li>  <input type="radio" name="type9" value="2" >Array
                                    <li> <input type="radio" name="type9" value="3" id="sekhar9" >Non Linear
                                    <li><input type="radio" name="type9" value="4">Differential 
                                        </ol> 
        </ol> 
      <center><input type="submit" value="Complete" name="complete" class="satya" /></center></form>
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
</div></div></body>
<script>
function answer()
{
window.location="c1key.php"
}
</script>

   <script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
         
        }
</script>
<script>
function back()
{<?php session_unset(); ?>
window.location="course.html"
}
function Next()
{ <?php session_unset(); ?>
window.location="c2.php"
}

</script>
 </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          