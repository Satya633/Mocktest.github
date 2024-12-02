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
    if($ans1 == 4) $score++;
    if($ans2 == 4) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 4) $score++;
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
        <center class="textcolor">  <h1 align="center">OOPS THROUGH C++ - TEST:3/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="c++3.php" onsubmit="return validateForm()">
           <li>Which of the following method is invoked by garbage collector implicitly?
            <ol type="A">
        <li > <input type="radio" name="type" value="1"id="satya">Destructor
        <li>  <input type="radio" name="type" value="2">Constructor
        <li> <input type="radio" name="type" value="3">Finally
        <li><input type="radio" name="type" value="4">Finalize
        </ol>  </br>
        <li>The programming language that has the ability to create new data types is called __________.
            <ol type="A">
        <li > <input type="radio" name="type1" value="1"  >Overloaded
        <li>  <input type="radio" name="type1" value="2" >Encapsulated
        <li> <input type="radio" name="type1" value="3" >Reprehensible
        <li><input type="radio" name="type1" value="4" id="satya1">Extensible
            </ol>   </br>
        <li>Which of the following statements is correct about the formal parameters in C++?
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >Parametres with which functions are called 
        <li>  <input type="radio" name="type2" value="2"  id="satya2">Prameters which are used in the definition of the function
        <li> <input type="radio" name="type2" value="3">Variables other than passsed parameters in function
        <li><input type="radio" name="type2" value="4" >Variables that are never used in the function
            </ol> </br>
            <li>Inheritance in C++ have default access specifier as
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" id="satya3">Private
            <li>  <input type="radio" name="type3" value="2" >Public
            <li> <input type="radio" name="type3" value="3"  >protected
            <li><input type="radio" name="type3" value="4" >default
                </ol> </br>
                <li>What function initializes variables in a class?
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" id="satya4">Constructor
                <li>  <input type="radio" name="type4" value="2" >Destructor
                <li> <input type="radio" name="type4" value="3">static
                <li><input type="radio" name="type4" value="4" >friend
                    </ol> </br>
                    <li>Which of the following statements is correct about virtual inhertiance?
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1"  >It is a technique to ensure that a private member of a base class can be accessed
                    <li>  <input type="radio" name="type5" value="2" >It is a technique to optimize the multiple inheritance
                    <li> <input type="radio" name="type5" value="3" >It is a technique to avoid the multiple inheritances of the class
                    <li><input type="radio" name="type5" value="4" id="satya5">It is a C++ technique to avoid multiple copies of the base class into the derived or child classes
                        </ol> </br>
                        <li>Which of the following is not true about polymorphism?
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  >Helps in redefining the same functionality
                        <li>  <input type="radio" name="type6" value="2" id="satya6">Increase overhead of function definition always
                        <li> <input type="radio" name="type6" value="3">It is a feature of OOP
                        <li><input type="radio" name="type6" value="4" >Ease in readbilitybof program
                            </ol> </br>
                            <li>The object of the class can be created in any function when a constructor is defined wih this access specifier
                                <ol type="A">
                            <li > <input type="radio" name="type9" value="1" >Ny access specifier
                            <li>  <input type="radio" name="type9" value="2" >Private
                            <li> <input type="radio" name="type9" value="3" id="sekhar7">Public
                            <li><input type="radio" name="type9" value="4" >Protected
                                </ol> </br>
                                <li>Which feature of the OOp reduces the use of the nested classes?
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" id="sekhar8">Inheritance
                                <li>  <input type="radio" name="type8" value="2" >Binding
                                <li> <input type="radio" name="type8" value="3" >Abstraction
                                <li><input type="radio" name="type8" value="4" >Encapsulation
                                    </ol> </br>
                                    <li> Which feature of OOP is exhibited by the function overriding?
            <ol type="A">
      <li > <input type="radio" name="type9" value="1" id="sekhar9">Polymorphism
         <li>  <input type="radio" name="type9" value="2" >Encapsulation
       <li> <input type="radio" name="type9" value="3"  >Abstraction
        <li><input type="radio" name="type9" value="4" >Inheritance
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

window.location="c++3key.php"
}
</script>

    <script>
function back()
{<?php session_unset(); ?>
window.location="c++2.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="c++4.php"

        }
   
            </script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>