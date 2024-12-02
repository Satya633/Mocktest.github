<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=34;
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
    if($ans2 == 3) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 4) $score++;
    if($ans8 == 3) $score++;
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
<title>C-Language/Test-4</title>
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
      <center class="textcolor"> <h1 align="center">C AND DATA STRUCTURE-TEST:4/5</h1>
        <H2 align="center">ANSWER THE FOLLOWING QUESTIONS : </h2></center> 
         <ol type="1" class="font"><form method="post" action="c4.php" onsubmit="return validateForm()">
           <li>Which sorting algorithm has the worst-case time complexity of O(n<sup>2</sup>) while other cases time complexity are much better than the worst case?
            <ol type="A">
        <li > <input type="radio" name="type" value="1" id="satya">Quick sort
        <li>  <input type="radio" name="type" value="2" >Merge sort
        <li> <input type="radio" name="type" value="3" >Insertion sort
        <li><input type="radio" name="type" value="4">Selection sort
        </ol>  </br>
        <li>What is the following program doing?</br>
main()</br>
{</br>
int d=1;</br>
do</br>
printf("%d\n",d++)</br>
while(d&lt;=9);</br>
}</br></br>
            <ol type="A">
        <li > <input type="radio" name="type1" value="1" >Adding 9 integers
        <li>  <input type="radio" name="type1" value="2"  >Adding integers from 1 to 9
        <li> <input type="radio" name="type1" value="3" id="satya1">Displaying integers from 1 to 9
        <li><input type="radio" name="type1" value="4">Adding integers from 1 to 10
            </ol>   </br>
        <li>The output of the following statements is</br>
char ch[6]={'E','n','d','\0','p'};</br>
printf("%s",ch);</br></br> 
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >Endp
        <li>  <input type="radio" name="type2" value="2"  >End0
        <li> <input type="radio" name="type2" value="3" id="satya2">End
        <li><input type="radio" name="type2" value="4">Error
            </ol> </br>
            <li>What is the output of the following program?</br>
main()</br>
{</br>
int i=4,z=12;</br>
if(i=5||z>50)</br>
printf("Hello");</br>
else</br>
printf("Hi")</br>
}</br></br>
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" id="satya3">Hello
            <li>  <input type="radio" name="type3" value="2"  >Hi
            <li> <input type="radio" name="type3" value="3" >Syntax error
            <li><input type="radio" name="type3" value="4" >HelloHi
                </ol> </br>
                <li> An infix expression can be converted to a postfix expression using a ___________
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" id="satya4">stack
                <li>  <input type="radio" name="type4" value="2" >queue
                <li> <input type="radio" name="type4" value="3">dequeue
                <li><input type="radio" name="type5" value="4" >tree
                    </ol> </br>
                    <li>A sorted file contains 16 items. Using binary search, the maximum number of comparisons to search for an item in this file is 
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1"  >15
                    <li>  <input type="radio" name="type5" value="2" id="satya5">4
                    <li> <input type="radio" name="type5" value="3">8
                    <li><input type="radio" name="type5" value="4" >1
                        </ol> </br>
                        <li>If the In-order and pre-order traversal of a binary tree are D,B,F,E,G,H,A,C and A,B,D,E,F,G,H,C respectively, then the post-order traversal of that tree is
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  >D,F,G,A,B,C,H,E
                        <li>  <input type="radio" name="type6" value="2" >F,H,D,G,E,B,C,A
                        <li> <input type="radio" name="type6" value="3" >C,G,H,F,E,D,B,A
                        <li><input type="radio" name="type6" value="4" id="satya6">D,F,H,G,E,B,C,A
                            </ol> </br>
                            <li>How many distinct binary search trees can be formed which contain the integers 1,2,3?
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" >3
                            <li>  <input type="radio" name="type7" value="2" >4
                            <li> <input type="radio" name="type7" value="3" id="sekhar7">5
                            <li><input type="radio" name="type7" value="4" >6
                                </ol> </br>
                                <li>The number of comparisons required to sort 5 numbers in ascemding order using bubble sort is
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >5
                                <li>  <input type="radio" name="type8" value="2" id="sekhar8">10
                                <li> <input type="radio" name="type8" value="3" >6
                                <li><input type="radio" name="type8" value="4" >7
                                    </ol> </br>
                                    <li> Which sorting alogorithm is the best if the list is already in order?
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" >Quick sort
                                    <li>  <input type="radio" name="type9" value="2"  id="sekhar9">Insertion sort
                                    <li> <input type="radio" name="type9" value="3" >Merge sort
                                    <li><input type="radio" name="type9" value="4">Heap sort
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
   

<script>
function answer()
{
window.location="c4key.php"
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
{
window.location="c3.php"
}<?php session_unset(); ?>
function Next()
{ <?php session_unset(); ?>
window.location="c5.php"
}

</script>
</script>
 </html>