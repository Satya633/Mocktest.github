<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=1012211;
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
    if($ans3 == 1) $score++;
    if($ans4 == 4) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 3) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 1) $score++;
    if($ans9 == 1) $score++;
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
<title>JAVA/TEST</title>
<link rel="icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="satya.css"/>
<script>
        function validateForm() {
            var radios = document.querySelectorAll('input[type="radio"]:checked');
            if (radios.length < 10) { 
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
        <center class="textcolor">  <h1 align="center">JAVA - TEST:1/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="java.php" onsubmit="return validateForm()">  
         <li>What is the output of the following code?</br></br>
  public class Solution{</br>
public static void main(String[] args){</br>
byte X=127;</br>
X++;</br>
X++;</br>
System.out.print(X);</br>
}</br>
}</br></br>
            <ol type="A">
        <li > <input type="radio" name="type" value="1"id="satya">-127
        <li>  <input type="radio" name="type" value="2">2
        <li> <input type="radio" name="type" value="3">127
        <li><input type="radio" name="type" value="4">129
        </ol>  </br>
        <li>Which of the following is a correct way to declare arrays in java?
            <ol type="A">
        <li > <input type="radio" name="type1" value="1"  >int[10] a = new int[];
        <li>  <input type="radio" name="type1" value="2" >int[] a = new int(10);
        <li> <input type="radio" name="type1" value="3" id="satya1">int [] a = new int[10];
        <li><input type="radio" name="type1" value="4" >int a[] = new int{10};
            </ol>   </br>
        <li>When array is passed to a method in java, What does the method recieve?
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" id="satya2">A refrence to the array
        <li>  <input type="radio" name="type2" value="2"  >The length of the array
        <li> <input type="radio" name="type2" value="3">A copy of the array
        <li><input type="radio" name="type2" value="4" >A copy of the first element of the array
            </ol> </br>
            <li>What is the output of the following code?</br></br>
public class Solution{</br>
public static void main(String[] args){</br>
short X=10;</br>
X=X*5;</br>
System.out.print(X);</br>
}</br>
}</br></br>
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >50
            <li>  <input type="radio" name="type3" value="2" >0
            <li> <input type="radio" name="type3" value="3"  >Exception
            <li><input type="radio" name="type3" value="4" id="satya3">Compile error
                </ol> </br>
                <li>Identify the keyword among the following that makes a variable belong to a class, rather than being defined for each instance of the class
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >private
                <li>  <input type="radio" name="type4" value="2" id="satya4">static
                <li> <input type="radio" name="type4" value="3">volatile
                <li><input type="radio" name="type4" value="4">final
                    </ol> </br>
                    <li>Identify What can directly access ans change the value of the varible X.</br>
    Package com.mypackage;</br>
   Public class Solution{</br>
   Private int X = 100; </br>
}</br></br>
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1"  >Any class
                    <li>  <input type="radio" name="type5" value="2" >Any child class of Solution class
                    <li> <input type="radio" name="type5" value="3" id="satya5">Any method of Solution class
                    <li><input type="radio" name="type5" value="4">Any class in the package com.mypackage
                        </ol> </br>
                        <li>Where is the toString() method defined?
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  >java.lang.String
                        <li>  <input type="radio" name="type6" value="2" id="satya6">java.lang.Object
                        <li> <input type="radio" name="type6" value="3">java.util
                        <li><input type="radio" name="type6" value="4" >java.lang.util
                            </ol> </br>
                            <li>Identify the output of the following program.</br></br>
                               String str="abcde";</br>
                       System.out println(str.substring(1,3));</br></br>
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" id="sekhar7">bc
                            <li>  <input type="radio" name="type7" value="2" >abc
                            <li> <input type="radio" name="type7" value="3" >cd
                            <li><input type="radio" name="type7" value="4" >bcd
                                </ol> </br>
                                <li>When is finalize() invoked in Java?
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" id="sekhar8">Just before an object is garbage collected
                                <li>  <input type="radio" name="type8" value="2" >Just before an object goes out of scope
                                <li> <input type="radio" name="type8" value="3" >Just before a variable goes out of scope
                                <li><input type="radio" name="type8" value="4" >Just before the program completes the execution
                                    </ol> </br>
                                    <li> What is the output of the below code?</br></br>
public class ThreadTest extends Thread{</br>
public void run(){</br>
System.out.println("In Run");</br>
yield();</br>
  System.out.println("Leaving run");</br>
}</br>
public static void main(String[] argv)</br>
{</br>
(new ThreadTest()).start();</br>
}</br>
}</br>
            <ol type="A">
      <li > <input type="radio" name="type9" value="1" >Compilation error in main()
         <li>  <input type="radio" name="type=9" value="2" >Compilation error in run()
       <li> <input type="radio" name="type9" value="3"  >In run
        <li><input type="radio" name="type9" value="4" id="sekhar9">In run  &nbsp; Leaving Run
                                        </ol> 
        </ol> 
<center><input type="submit" class="satya" value="Complete" name="complete" /></center>
</form>
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
</div>
    </body>
<script>
function answer()
{

window.location="JAVAKEY.PHP"
}
</script>

    <script>
       function back()
{<?php session_unset(); ?>
window.location="course.html"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="java2.php"

        }
   
           </script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       