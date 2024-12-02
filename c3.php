<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=33;
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
    if($ans4 == 3) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 3) $score++;
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
<title>C-Language/Test-3</title>
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
      <center class="textcolor"> <h1 align="center">C AND DATA STRUCTURE-TEST:3/5</h1>
        <H2 align="center">ANSWER THE FOLLOWING QUESTIONS : </h2></center> 
         <ol type="1" class="font"><form method="post" action="c3.php" onsubmit="return validateForm()">
           <li>Where is the return address from an interrupt-service routine stored?
            <ol type="A">
        <li > <input type="radio" name="type" value="1" >Heap
        <li>  <input type="radio" name="type" value="2" id="satya">Stack
        <li> <input type="radio" name="type" value="3" >Queue
        <li><input type="radio" name="type" value="4">Program counter
        </ol>  </br>
        <li>What is the output of the C program?</br>
&#35;include&lt;stdio.h&gt;</br>
int main()</br>
{</br>
printf("main");</br>
main();</br>
return 0;</br>
}</br></br>
            <ol type="A">
        <li > <input type="radio" name="type1" value="1" >Compile error
        <li>  <input type="radio" name="type1" value="2"  >main
        <li> <input type="radio" name="type1" value="3" id="satya1">mainmainmainmainmainmain.......(prints until stack overflow)
        <li><input type="radio" name="type1" value="4">Runtime error
            </ol>   </br>
        <li>What is the output of the c program?</br>
&#35;include&lt;stdio.h&gt;</br>
int main()</br>
{</br>
int v=5;</br>
v=!v>6;</br>
}</br></br>
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" id="satya2">0
        <li>  <input type="radio" name="type2" value="2"  >1
        <li> <input type="radio" name="type2" value="3">5
        <li><input type="radio" name="type2" value="4">6
            </ol> </br>
            <li>Linked lists are not suitable for  the implementation of
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >Insertion sort
            <li>  <input type="radio" name="type3" value="2"  >Radix sort
            <li> <input type="radio" name="type3" value="3" id="satya3">Binary search
            <li><input type="radio" name="type3" value="4" >Polynomial manipulation       
                </ol> </br>
                <li> Let A be an Array.How do you aceess the 3<sup>rd</sup>element using pointers?
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >*A+2
                <li>  <input type="radio" name="type4" value="2" >*(*A+2)
                <li> <input type="radio" name="type4" value="3">&(A+2)
                <li><input type="radio" name="type4" value="4" id="satya4">*(A+2)
                    </ol> </br>
                    <li>What is the disadvantage of array data structures?
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1" id="satya5" >Static memory allocation
                    <li>  <input type="radio" name="type5" value="2" >Dynamic memory allocation
                    <li> <input type="radio" name="type5" value="3">Accessing elements in constant time
                    <li><input type="radio" name="type5" value="4" >Index starting at 0
                        </ol> </br>
                        <li>When a pop() operation is called on an empty queue, what is the condition called?
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  >Overflow
                        <li>  <input type="radio" name="type6" value="2" id="satya6">Underflow
                        <li> <input type="radio" name="type6" value="3" >Syntax eror
                        <li><input type="radio" name="type6" value="4" >Garbage value
                            </ol> </br>
                            <li>What is a complete binary tree?
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" >Each node has exactly zero or two children
                            <li>  <input type="radio" name="type7" value="2" >A tree in which all nodes have degree 2
                            <li> <input type="radio" name="type7" value="3" id="sekhar7">A binary tree, which is completely filled with the possible exception of the bottom level, which is filled from left to right
                            <li><input type="radio" name="type7" value="4" >A binary tree, which is completely filled with the possible exception of the bottom level, which is filled from right to left
                                </ol> </br>
                                <li>If the height of a tree with single node is considered as 1, What is the maximum number of nodes in a binary tree of height 5?
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" id="sekhar8">31
                                <li>  <input type="radio" name="type8" value="2" >7
                                <li> <input type="radio" name="type8" value="3" >13
                                <li><input type="radio" name="type8" value="4" >15
                                    </ol> </br>
                                    <li> What is the drawback of a Linked list ?
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" id="sekhar9">Random access is not possible in a linked list
                                    <li>  <input type="radio" name="type9" value="2"  >Memory is not wasted as no pre-allocation is done
                                    <li> <input type="radio" name="type9" value="3" >Insertion operation complexity
                                    <li><input type="radio" name="type9" value="4">Deletion operation complexity
                                        </ol> 
        </ol> 
        <center> <input type="submit" value="Complete" name="complete" class="satya"/>
</center></form>
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
 <script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
         
        }
</script>
<script>
function answer()
{
window.location="c3key.php"
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
window.location="c2.php"
}
function Next()
{ <?php session_unset(); ?>
window.location="c4.php"
}

</script>
 </html>