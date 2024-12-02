<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=35;
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
    if($ans2 == 1) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 2) $score++;
    if($ans9 == 2) $score++;
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
<title>C-Language/Test-5</title>
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
      <center class="textcolor"> <h1 align="center">C AND DATA STRUCTURE-TEST:5/5</h1>
        <H2 align="center">ANSWER THE FOLLOWING QUESTIONS : </h2></center> 
         <ol type="1" class="font"><form method="post" action="c5.php" onsubmit="return validateForm()">
           <li>How many times the following code prints the string "hello".</br>
for(i=1;i<=1000;i++);</br>
printf("hello");</br></br>
            <ol type="A">
        <li > <input type="radio" name="type" value="1" >1
        <li>  <input type="radio" name="type" value="2" >1000
        <li> <input type="radio" name="type" value="3" >0
        <li><input type="radio" name="type" value="4">Syntax error
        </ol>  </br>
        <li>What is the following program doing?</br>
&#35;include&lt;stdio.h&gt;</br>
int main()</br>
{</br>
int a;</br>
a=1,2,3;</br>
printf("%d",a);</br>
return 0;</br>
}</br></br>
            <ol type="A">
        <li > <input type="radio" name="type1" value="1" >1
        <li>  <input type="radio" name="type1" value="2"  >3
        <li> <input type="radio" name="type1" value="3" id="satya1">Compile Error
        <li><input type="radio" name="type1" value="4">Run time Error
            </ol>   </br>
        <li>What will be the output of the c program?</br>
&#35;include&lt;stdio.h&gt;</br>
int main()</br>
{</br>
char *ptr;
char string[]="learn C from 2braces.com";</br>
ptr=string;</br>
ptr+=6;</br>
printf("%s",ptr);</br>
return 0;</br>
}</br></br>
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >Compilation Error
        <li>  <input type="radio" name="type2" value="2"  >Runtime Error
        <li> <input type="radio" name="type2" value="3" >from 2braces.com
        <li><input type="radio" name="type2" value="4">C from 2braces.com
            </ol> </br>
            <li>Which of the following mode argument is used to truncate in flies?
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >a
            <li>  <input type="radio" name="type3" value="2" id="satya3" >w
            <li> <input type="radio" name="type3" value="3" >f
            <li><input type="radio" name="type3" value="4" >t
                </ol> </br>
                <li>Find the post order by using the given pre-order and in-order.</br>
Inorder Traversal in[] = {4,2,5,1,3,6}</br>
Preorder Transversal pre[] = {1,2,4,5,3,6}</br></br>
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >Post-Order post={4,2,5,6,3,1}
                <li>  <input type="radio" name="type4" value="2" >Post-Order post={2,6,3,4,5,1}
                <li> <input type="radio" name="type4" value="3">Post-Order post={4,5,2,6,1,3}
                <li><input type="radio" name="type4" value="4" id="satya4">Post-Order post={4,5,2,6,3,1}
                    </ol> </br>
                    <li>A text file is the one in which the data is stored in 
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1" id="satya5" >ASCII code
                    <li>  <input type="radio" name="type5" value="2" >Octal code
                    <li> <input type="radio" name="type5" value="3">Binary code
                    <li><input type="radio" name="type5" value="4" >Text code
                        </ol> </br>
                        <li>Memory efficient Doubly linked list is also called as________
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  id="satya6">XOR linked list
                        <li>  <input type="radio" name="type6" value="2" >Circular single linked list
                        <li> <input type="radio" name="type6" value="3" >NOR linked list 
                        <li><input type="radio" name="type6" value="4" >single linked list
                            </ol> </br>
                            <li>Which of the following funciton sets first n characters of a string to a given character___
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" >strinit()
                            <li>  <input type="radio" name="type7" value="2" id="sekhar7">strnset()
                            <li> <input type="radio" name="type7" value="3" >strset()
                            <li><input type="radio" name="type7" value="4" >streset()
                                </ol> </br>
                                <li>The time complexity of a quick sort algorithm which makes use of madian found by an O(n) algorithm as pivot element is________
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >O(n<sup>2</sup>)
                                <li>  <input type="radio" name="type8" value="2" id="sekhar8">O(nlogn)
                                <li> <input type="radio" name="type8" value="3" >O(nloglogn)
                                <li><input type="radio" name="type8" value="4" >O(n)
                                    </ol> </br>
                                    <li>What is the corresponding postfix expression for the given infix expression a+b*(c^d-e)^(f+g*h)-i
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" >abc^de-fg+*^*+i-
                                    <li>  <input type="radio" name="type9" value="2"  >abcde^-fg*+*^h*+i-
                                    <li> <input type="radio" name="type9" value="3" id="sekhar9">abcd^e-fgh*+^*+i-
                                    <li><input type="radio" name="type9" value="4">ab^-dc*+ef^gh*+i-
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
window.location="c5key.php"
}
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
         
        }
</script><script>
function back()
{<?php session_unset(); ?>
window.location="c4.php"
}
function Next()
{ <?php session_unset(); ?>
window.location="c5.php"
}

</script>
 </html>