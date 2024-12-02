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
    if($ans2 == 1) $score++;
    if($ans3 == 2) $score++;
    if($ans4 == 4) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 2) $score++;
    if($ans9 == 4) $score++;
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
        <center class="textcolor">  <h1 align="center">OOPS THROUGH C++ - TEST:4/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="c++4.php" onsubmit="return validateForm()">
           <li>Which type of constructor doesn't take any arguments?
            <ol type="A">
        <li > <input type="radio" name="type" value="1"id="satya">Default
        <li>  <input type="radio" name="type" value="2">Parameterized
        <li> <input type="radio" name="type" value="3">Copy constructor
        <li><input type="radio" name="type" value="4">Nonargumented
        </ol>  </br>
        <li>Which of the following gets called when an object is being created?
            <ol type="A">
        <li > <input type="radio" name="type1" value="1"  id="satya1">Constructor
        <li>  <input type="radio" name="type1" value="2" >Virtual function
        <li> <input type="radio" name="type1" value="3" >Destructors
        <li><input type="radio" name="type1" value="4" >Main
            </ol>   </br>
        <li>Find the wrong statement about Abstract class in C++
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >We can't create its object
        <li>  <input type="radio" name="type2" value="2"  id="satya2">We can't create pointers to an abstract class
        <li> <input type="radio" name="type2" value="3">It contains at least one purenvirtual function
        <li><input type="radio" name="type2" value="4" >We can create references to an abstract class
            </ol> </br>
            <li>In case of inheritance in c++ where both base and derived class are having constructors when an object of derived class is created then__________
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >Constructor of Derived class will be invoked first
            <li>  <input type="radio" name="type3" value="2" >Constructor of Base class will be invoked first
            <li> <input type="radio" name="type3" value="3"  >Constructor of Derived class will be executed first followed by Base class
            <li><input type="radio" name="type3" value="4" id="satya3">Constructor of Base class will be executed first followed by Derived class
                </ol> </br>
                <li>What is the implict pointer that is passed as the first argument for an non static member function in C++?
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >'self' pointer
                <li>  <input type="radio" name="type4" value="2" >std::auto_ptr pointer
                <li> <input type="radio" name="type4" value="3">'Myself' pointer
                <li><input type="radio" name="type4" value="4" id="satya4">'this' pointer
                    </ol> </br>
                    <li>Which of the following operator can be overloaded in C++?
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1"  >?
                    <li>  <input type="radio" name="type5" value="2" >::
                    <li> <input type="radio" name="type5" value="3" >.
                    <li><input type="radio" name="type5" value="4" id="satya5">==
                        </ol> </br>
                        <li>What is the output of the following program?</br></br>
&#35;include&lt;iostream.h&gt;</br>
Using namespace std;</br>
Void main()</br>
{</br>
char *s = "C++";</br>
cout&lt;&lt;s&lt;&lt;" ";</br>
S++;</br>
cout&lt;&lt;c&lt;&lt;" ";</br>
}</br></br>
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  >C++C++
                        <li>  <input type="radio" name="type6" value="2" id="satya6">C++ ++
                        <li> <input type="radio" name="type6" value="3">++ ++
                        <li><input type="radio" name="type6" value="4" >Compile error
                            </ol> </br>
                            <li>__________is used to write a single character to output file in C++
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" >cin()
                            <li>  <input type="radio" name="type7" value="2" id="sekhar7">Put()
                            <li> <input type="radio" name="type7" value="3" >get()
                            <li><input type="radio" name="type7" value="4" >getW()
                                </ol> </br>
                                <li>In C++, dynamic memory allocations is done using________operator
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >calloc()
                                <li>  <input type="radio" name="type8" value="2" >malloc()
                                <li> <input type="radio" name="type8" value="3" >allocate()
                                <li><input type="radio" name="type8" value="4" id="sekhar8">New
                                    </ol> </br>
                                    <li> Which function is used to perform some action whrn the object is to be destroyed?
            <ol type="A">
      <li > <input type="radio" name="type9" value="1" id="sekhar9">finalize()
         <li>  <input type="radio" name="type9" value="2" >delete()
       <li> <input type="radio" name="type9" value="3"  >main()
        <li><input type="radio" name="type9" value="4" >remove()
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

window.location="c++4key.php"
}
</script>

    <script>
        function back()
{<?php session_unset(); ?>
window.location="c++3.php"
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