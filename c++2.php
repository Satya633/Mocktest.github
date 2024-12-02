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
    if($ans1 == 2) $score++;
    if($ans2 == 1) $score++;
    if($ans3 == 1) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 3) $score++;
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
        <center class="textcolor">  <h1 align="center">OOPS THROUGH C++ - TEST:2/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="c++2.php" onsubmit="return validateForm()">
           <li>How can one implement the run-time polymorphism in the c++ programming language?
            <ol type="A">
        <li > <input type="radio" name="type" value="1">By using the Template
        <li>  <input type="radio" name="type" value="2"id="satya">By using both the virtual functions and inheritance
        <li> <input type="radio" name="type" value="3">By using thte concepts of inheritance
        <li><input type="radio" name="type"value="4">By using only the virtual functions
        </ol>  </br>
        <li>Which of the following refers to using the existing code instead of rewriting it?
            <ol type="A">
        <li > <input type="radio" name="type1" value="1"  id="satya1">Inheritance
        <li>  <input type="radio" name="type1" value="2" >Encapsulation
        <li> <input type="radio" name="type1" value="3" >Abstraction
        <li><input type="radio" name="type1" value="4" >Polymorphism
            </ol>   </br>
        <li>If class C is derived from class B,Which is derived from class A, all through public inheritance, then class C member function can access
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" id="satya2">Protected data in A and B
        <li>  <input type="radio" name="type2" value="2"  >Protected and public data only in C and B
        <li> <input type="radio" name="type2" value="3">Private data in A and B
        <li><input type="radio" name="type2" value="4" >Protected and public data only in C
            </ol> </br>
            <li>Which is the correct statement about pure virtual functions?
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >They should be defined inside a base class
            <li>  <input type="radio" name="type3" value="2" >Pure keyword should be used to declare a pure virtual function
            <li> <input type="radio" name="type3" value="3"  id="satya3">Pure vurtual function is implemented in derived classes
            <li><input type="radio" name="type3" value="4" >Pure virtual function cannot be implemented in derived classes
                </ol> </br>
                <li>Which of the following operator cannot be used to overload when that function is declared as a friend function?
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >-=
                <li>  <input type="radio" name="type4" value="2" >||
                <li> <input type="radio" name="type4" value="3">==
                <li><input type="radio" name="type4" value="4" id="satya4">[]
                    </ol> </br>
                    <li>Which of the following gives the memory address of the first element in an array?
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1"  >array[0];
                    <li>  <input type="radio" name="type5" value="2" >array[1];
                    <li> <input type="radio" name="type5" value="3" >array(1);
                    <li><input type="radio" name="type5" value="4" id="satya5">array;
                        </ol> </br>
                        <li>What is a friend function in c++?
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  id="satya6">A function that can access all the private,protected and public members of a class
                        <li>  <input type="radio" name="type6" value="2" >A function that is not allowed to access any member of any class
                        <li> <input type="radio" name="type6" value="3">A function that is allowed to access public and protected members of a class
                        <li><input type="radio" name="type6" value="4" >A function that is allowed to access public and protected members of a class
                            </ol> </br>
                            <li>Which of the following cannot be used with the virtual keyword?
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" >Class
                            <li>  <input type="radio" name="type7" value="2" >Member functions
                            <li> <input type="radio" name="type7" value="3" id="sekhar7">Constructors
                            <li><input type="radio" name="type7" value="4" >Destructors
                                </ol> </br>
                                <li>What happens if a class does not have a name?
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >It will not have a constructor
                                <li>  <input type="radio" name="type8" value="2" id="sekhar8">It will not have a destructor
                                <li> <input type="radio" name="type8" value="3" >It is not allowed
                                <li><input type="radio" name="type8" value="4" >It will neither have a constructor nor a destructor
                                    </ol> </br>
                                    <li> Which of the following is not a type of inheritance?
            <ol type="A">
      <li > <input type="radio" name="type9" value="1" >Multiple
         <li>  <input type="radio" name="type9" value="2" >Multilevel
       <li> <input type="radio" name="type9" value="3"  id="sekhar9">Distributive
        <li><input type="radio" name="type9" value="4" >Hierarchial
                                        </ol> 
        </ol> 
<center><input type="submit" class="satya" value="Complete" name="complete"/></center>
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

window.location="c++2key.php"
}
</script>

    <script>
function back()
{<?php session_unset(); ?>
window.location="c++.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="c++3.php"

        }
   
            </script>
 <script type="text/javascript">  
       let form3 = document.getElementById('form3')
        
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>