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
    if($ans3 == 1) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 2) $score++;
    if($ans9 == 2) $score++;
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
<title>C++/TEST</title>
<link rel="stylesheet" href="satya.css"/>
<link rel="icon" href="logo.png" type="image/x-icon">
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
        <center class="textcolor">  <h1 align="center">OOPS THROUGH C++ - TEST:5/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="C++5.php" onsubmit="return validateForm()">
           <li>Reuse of an existing class can be done by using_____________.
            <ol type="A">
        <li > <input type="radio" name="type" value="1"id="satya">Inheritance
        <li>  <input type="radio" name="type" value="2">Polymorphism
        <li> <input type="radio" name="type" value="3">Abstraction
        <li><input type="radio" name="type" value="4">Data Binding
        </ol>  </br>
        <li>The manipulator &lt;&lt;endl has the effect of printing a __________ character.
            <ol type="A">
        <li > <input type="radio" name="type1" value="1"  id="satya1">'\n'
        <li>  <input type="radio" name="type1" value="2" >'\t'
        <li> <input type="radio" name="type1" value="3" >'\b'
        <li><input type="radio" name="type1" value="4" >'\v'
            </ol>   </br>
        <li>When delete is used to deallocate memory for a C++ class object, the objects _______ is called before the objects memory is deallocated.
            <ol type="A">
        <li > <input type="radio" name="type2" value="1"  id="satya2">Destructor
        <li>  <input type="radio" name="type2" value="2" >Constructor
        <li> <input type="radio" name="type2" value="3">base class
        <li><input type="radio" name="type2" value="4" >Child classes
            </ol> </br>
            <li>The loop statements terminated by a semicolon is __________.
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >for
            <li>  <input type="radio" name="type3" value="2" >while
            <li> <input type="radio" name="type3" value="3"  id="satya3">do-while
            <li><input type="radio" name="type3" value="4" >switch
                </ol> </br>
                <li>Using parantheses() with___________statements in C++ programming is optional.
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >exit
                <li>  <input type="radio" name="type4" value="2" >main
                <li> <input type="radio" name="type4" value="3">clrscr
                <li><input type="radio" name="type4" value="4" id="satya4">return
                    </ol> </br>
                    <li>Which of the following statements are true:</br>
<ol type="A">
<li>Overloading operators are only for classes
<li>Overloaded operators have different syntax from the original operator
<li>Only existing operators can be overloaded
</ol>
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1"  >A & B
                    <li>  <input type="radio" name="type5" value="2" >B & C
                    <li> <input type="radio" name="type5" value="3" id="satya5">A & C
                    <li><input type="radio" name="type5" value="4" >A,B & C
                        </ol> </br>
                        <li>When a class is not used creating objects, it is called as______class.
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  >Virtual
                        <li>  <input type="radio" name="type6" value="2" >Base
                        <li> <input type="radio" name="type6" value="3" id="satya6">Abstract
                        <li><input type="radio" name="type6" value="4" >Friend
                            </ol> </br>
                            <li>The name of the array is itself a__________________.
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" >Object
                            <li>  <input type="radio" name="type7" value="2" id="sekhar7">Pointer
                            <li> <input type="radio" name="type7" value="3" >Variable
                            <li><input type="radio" name="type7" value="4" >Reference
                                </ol> </br>
                                <li>The function that shifts the associated file's input file pointer is____________.
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >seekp()
                                <li>  <input type="radio" name="type8" value="2" id="sekhar8">seekg()
                                <li> <input type="radio" name="type8" value="3" >tellp()
                                <li><input type="radio" name="type8" value="4" >tellg()
                                    </ol> </br>
                                    <li>The derived class without pure virtual function is called as___________.
            <ol type="A">
      <li > <input type="radio" name="type9" value="1" >Abastract class
         <li>  <input type="radio" name="type9" value="2" >Pure derived class
       <li> <input type="radio" name="type9" value="3"  >Container class
        <li><input type="radio" name="type9" value="4" id="sekhar9">Concrete class
                                        </ol> 
        </ol> 
<center><input type="submit" class="satya" name="complete" value="Complete"/></center>
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
    </body>
<script>
function answer()
{

window.location="c++5key.php"
}
</script>

    <script>
function back()
{<?php session_unset(); ?>
window.location="c++4.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="C++5.php"

        }
   
            </script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>