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
    if($ans1 == 2) $score++;
    if($ans2 == 3) $score++;
    if($ans3 == 4) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 3) $score++;
    if($ans9 == 4) $score++;
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
        <center class="textcolor">  <h1 align="center">OOPS THROUGH C++ - TEST:1/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="c++.php" onsubmit="return validateForm()">
           <li>Wrapping data and its related functionality into a single entity is known as 
            <ol type="A">
        <li > <input type="radio" name="type"value="1">Abstraction
        <li>  <input type="radio" name="type"value="2" id="satya">Encapsulation
        <li> <input type="radio" name="type" value="3">Polymorphism
        <li><input type="radio" name="type" value="4">Modularity
        </ol>  </br>
        <li>Which of the following explains polymorphism?
            <ol type="A">
        <li > <input type="radio" name="type1" value="1"  >int func(int,int);float func1(float,float);
        <li>  <input type="radio" name="type1" value="2" >int func(int);int func(int);
        <li> <input type="radio" name="type1" value="3" id="satya1">int func(float);float func(int,int,char);
        <li><input type="radio" name="type1" value="4" >int func(int);float func(int);
            </ol>   </br>
        <li>Which of the following feature of OOPs is not used in the following C++ code?</br>
Class A{</br>
int i;</br>
public:</br>
void print(){cout&lt;&lt;"hello"&lt;&lt;i;}</br>
}</br>
class B: public A{</br>
int j;</br>
public:</br>
void assign(int a ){j=a;}</br>
}</br></br>
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >Abstraction
        <li>  <input type="radio" name="type2" value="2"  >Encapsulation
        <li> <input type="radio" name="type2" value="3">Inheritance
        <li><input type="radio" name="type2" value="4" id="satya2">Polymorphism
            </ol> </br>
            <li>In C++, Whenever a class contains two constructors, the constructors are
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >default constructors
            <li>  <input type="radio" name="type3" value="2" >destructors
            <li> <input type="radio" name="type3" value="3"  id="satya3">Overloaded
            <li><input type="radio" name="type3" value="4" >Static
                </ol> </br>
                <li>Which of the following is not a type of Constructor?
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" id="satya4">Friend Constructor
                <li>  <input type="radio" name="type4" value="2" >Copy Constructor
                <li> <input type="radio" name="type4" value="3">Default constructor
                <li><input type="radio" name="type4" value="4">Parameterized Constructor
                    </ol> </br>
                    <li>What is the output of the code below?</br>
    &#35;include&lt;iostream&gt;</br>
   using namespce std;</br>
   class point{ </br>
private:</br>
int X;</br>
int Y;</br>
public:</br>
Point(int i,int j);//constructor</br>
};</br>
Point::Point(int i=0,int j=0){</br>
x=i;</br>
y=j;</br>
cout&lt;&lt;"Constructor called";</br>
}</br>
int main()</br>
{</br>
Point t1, *t2;</br>
return 0;</br>
}</br></br>
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1"  >Constructor called Constructor called
                    <li>  <input type="radio" name="type5" value="2" id="satya5">Constructor called
                    <li> <input type="radio" name="type5" value="3">Garbage value
                    <li><input type="radio" name="type5" value="4">error   
                        </ol> </br>
                        <li>Which of the following is correct?
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  > Base class pointer object cannot point to a derived class object
                        <li>  <input type="radio" name="type6" value="2" id="satya6">Derived class ointer object cannot point to a base class object
                        <li> <input type="radio" name="type6" value="3">A derived class cannot have pointer objects
                        <li><input type="radio" name="type6" value="4" >A base class cannot have pointer objects
                            </ol> </br>
                            <li>Which of the following cannot be friend?
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" id="sekhar7">Function
                            <li>  <input type="radio" name="type7" value="2" >Class
                            <li> <input type="radio" name="type7" value="3">Object
                            <li><input type="radio" name="type7" value="4" >Operator function
                                </ol> </br>
                                <li>How run-time polymorphisms are implemented in C++?
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >Using Inheritance
                                <li>  <input type="radio" name="type8" value="2" >Using Virtual functions
                                <li> <input type="radio" name="type8" value="3" >Using Templates
                                <li><input type="radio" name="type8" value="4" id="sekhar8" >Using Inheritance and Virtual functions        
                                    </ol> </br>
                                    <li>Which of the following is an abstract data type?
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" >int
                                    <li>  <input type="radio" name="type9" value="2" >string
                                    <li> <input type="radio" name="type9" value="3" id="sekhar9" >class
                                    <li><input type="radio" name="type9" value="4">float
                                        </ol> 
        </ol> 
<center><input type="submit" class="satya" name="complete" value="Complete" /></center>
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

window.location="c++key.php"
}
</script>

    <script>  
function back()
{<?php session_unset(); ?>
window.location="course.html"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="c++2.php"

        }
   
            </script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        