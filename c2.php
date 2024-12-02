<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=32;
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
    if($ans3 == 2) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 4) $score++;
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
<title>C-Language/Test-2</title>
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
      <center class="textcolor"> <h1 align="center">C AND DATA STRUCTURE-TEST:2/5</h1>
        <H2 align="center">ANSWER THE FOLLOWING QUESTIONS : </h2></center> 
         <form method="post" action="c2.php" onsubmit="return validateForm()"><ol type="1" class="font">
           <li>Which of the following is not a derived data type in c ?
            <ol type="A">
        <li > <input type="radio" name="type" value="1">Structure
        <li>  <input type="radio" name="type" value="2" >Pointer
        <li> <input type="radio" name="type" value="3" id="satya">Enumeration        
        <li><input type="radio" name="type" value="4">Array
        </ol>  </br>
        <li>The declaration shown below refers to </br>
               struct list</br>
                   { </br>
                      int info;</br>
                         struct list *prev, *next;</br>
                    };</br>
            <ol type="A">
        <li > <input type="radio" name="type1" value="1" id="satya1" >Doubley linked list
        <li>  <input type="radio" name="type1" value="2" >Circular linked list with head
        <li> <input type="radio" name="type1" value="3">Single linked list      
        <li><input type="radio" name="type1" value="4">Circular queue
            </ol>   </br>
        <li> The total number of elements in the array A[3][4][2] is 
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >9
        <li>  <input type="radio" name="type2" value="2" id="satya2" >24
        <li> <input type="radio" name="type2" value="3">12
        <li><input type="radio" name="type2" value="4">36            
            </ol> </br>
            <li>To construct a unique binary search tree, which tree traversals are required ?
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >only post order
            <li>  <input type="radio" name="type3" value="2"  id="satya3">post order and inorder
            <li> <input type="radio" name="type3" value="3">preorder and post order
            <li><input type="radio" name="type3" value="4" >only preorder        
                </ol> </br>
                <li> What is the infix expression for the following prefix expression ? 
                                          -^AB+CD
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" id="satya4">(A^B)-(C+D)
                <li>  <input type="radio" name="type4" value="2" >(A^B)+(C-D)
                <li> <input type="radio" name="type4" value="3">(A-B)^(C+D)
                <li><input type="radio" name="type4" value="4">(A+B)^(C-D)         
                    </ol> </br>
                    <li>The number of swappings needed to sort the numbers { 7,20,6,9,30,18,4,12} into ascending order using Bubble sort 
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1" id="satya5" >14
                    <li>  <input type="radio" name="type5" value="2" >12
                    <li> <input type="radio" name="type5" value="3">13
                    <li><input type="radio" name="type5" value="4">11          
                        </ol> </br>
                        <li> To implement the recursive technique for Quick sort method, which basic data structure is required ?
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  > Queue
                        <li>  <input type="radio" name="type6" value="2" >Tree
                        <li> <input type="radio" name="type6" value="3" id="satya6">Stack
                        <li><input type="radio" name="type6" value="4" >Linked list     
                            </ol> </br>
                            <li>What will be the output of the following code ?</br>
                                #include"stdio.h"</br>
                                #include"string.h"</br>
                                void main()</br>
                                   {</br>
                                    int register a;</br>
                                     scanf("%d",&a);</br>
                                      printf("%d",&a);</br>
                                     getch();</br>
                                      }</br>
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" >25
                            <li>  <input type="radio" name="type7" value="2" >Address
                            <li> <input type="radio" name="type7" value="3">0
                            <li><input type="radio" name="type7" value="4" id="sekhar7">Compilation Error       
                                </ol> </br>
                                <li> Which of the following sorting technique is slowest ?
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >Heap sort
                                <li>  <input type="radio" name="type8" value="2" >Merge sort
                                <li> <input type="radio" name="type8" value="3" id="sekhar8">Bubble sort
                                <li><input type="radio" name="type8" value="4" >Shell sort           
                                    </ol> </br>
                                    <li> Which of the Following sorting algorithms is best if a list is already sorted ?
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" >Heap sort
                                    <li>  <input type="radio" name="type9" value="2" id="sekhar9" >Insertion sort 
                                    <li> <input type="radio" name="type9" value="3">Quick sort
                                    <li><input type="radio" name="type9" value="4">Selection sort   
                                        </ol> 
        </ol> 
        <center> <input type="submit" value="Complete" name="complete" class="satya" /></center></form>
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
</div></div>
</body>

 <script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
         
        }
</script>
<script>
function answer()
{
window.location="c2key.php"
}
</script>

  
<script>
function back()
{<?php session_unset(); ?>
window.location="c1.php"
}
function Next()
{ <?php session_unset(); ?>
window.location="c3.php"
}

</script>
 </html>