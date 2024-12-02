<?php
// Database connection parameters
include 'connect.php';

// Retrieve user inputs
$que1=4;
$que2=3;
$que3=2;
$que4=1;
$que5=4;
$que6=1;
$que7=1;
$que8=4;
$que9=1;
$que0=1;
$o=1;
$t=2;
$th=3;
$f=4;

$sql = "SELECT * FROM data WHERE UID='168252' ORDER BY id DESC LIMIT 1";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // Output data of each row
      while($row = $result->fetch_assoc()) {
           $ques1=$row["ques1"];
           $ques2=$row["ques2"];
           $ques3=$row["ques3"];
           $ques4=$row["ques4"];
           $ques5=$row["ques5"];
           $ques6=$row["ques6"];
           $ques7=$row["ques7"];
           $ques8=$row["ques8"];
           $ques9=$row["ques9"];
           $ques0=$row["ques0"];
              }
    }

?>
<html>
<head>
<title>ECET-MOCKTEST/GENERAL/PHYSICS/Key-paper</title>
<link rel="icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="satya.css"/>
<style>
    .s {
        width: 400px;
        height: 40px;
        margin-bottom:10px;
    }

    .correct {
        border:5px solid green;
       border-radius: 10px;
    }
    .incorrect {
border:5px solid red;
      border-radius: 10px;
    }
</style>
</head>

    <body>
     <center class="textcolor">  <h1 align="center">PHYSICS TEST-2/10</h1>
        <h1>KEY-PAPER</h1></center>
         <ol type="1" class="font">
           <li> A ball of mass 1 kg collides with a wall with speed 8 ms<sup>-1</sup> and rebounds on the same line with the same speed. If mass of the wall is taken as infinite, the work done by the ball on the wall is
            <ol type="A">
          <?php
 if ($ques1 == $que1) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s"><input type="radio">6 J</div>';
            echo '<div id="s2" class="s "><input type="radio">8 J</div>';
            echo '<div id="s3" class="s "><input type="radio">9 J </div>';
            echo '<div id="s4" class="s correct"><input type="radio">zero</div>';
        } else if($ques1 == $o) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s incorrect"><input type="radio">6 J</div>';
            echo '<div id="s2" class="s "><input type="radio">8 J</div>';
            echo '<div id="s3" class="s "><input type="radio">9 J </div>';
            echo '<div id="s4" class="s correct"><input type="radio">zero</div>';
        }
else if($ques1 == $t) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s"><input type="radio">6 J</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">8 J</div>';
            echo '<div id="s3" class="s "><input type="radio">9 J </div>';
            echo '<div id="s4" class="s correct"><input type="radio">zero</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s"><input type="radio">6 J</div>';
            echo '<div id="s2" class="s "><input type="radio">8 J</div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">9 J </div>';
            echo '<div id="s4" class="s correct"><input type="radio">zero</div>';
    }?>

        </ol>  </br>
        <li> A pump motor is used to deliver water at a certain rate from a given pipe, To obtain thrice as much water from the same pipe in the same time,power of the motor has to be increased 
            <ol type="A"><?php
        if ($ques2 == $que2) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s"><input type="radio">3 times</div>';
            echo '<div id="s2" class="s "><input type="radio">9 times</div>';
            echo '<div id="s3" class="s correct"><input type="radio">27 times </div>';
            echo '<div id="s4" class="s "><input type="radio">81 times</div>';
        } else if($ques2 == $o) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s incorrect"><input type="radio">3 times</div>';
            echo '<div id="s2" class="s "><input type="radio">9 times</div>';
            echo '<div id="s3" class="s correct"><input type="radio">27 times </div>';
            echo '<div id="s4" class="s "><input type="radio">81 times</div>';
        }
else if($ques2 == $f) {
echo '<div id="s1" class="s"></div>';
          echo '<div id="s1" class="s"><input type="radio">3 times</div>';
            echo '<div id="s2" class="s "><input type="radio">9 times</div>';
            echo '<div id="s3" class="s correct"><input type="radio">27 times </div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">81 times</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
          echo '<div id="s1" class="s"><input type="radio">3 times</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">9 times</div>';
            echo '<div id="s3" class="s correct"><input type="radio">27 times </div>';
            echo '<div id="s4" class="s "><input type="radio">81 times</div>';
    }?>
        </ol>  </br>
        <li> The energy required to accelerate a car from rest to 10 ms<sup>-1</sup> is E. What energy will be required to accelerate the car from 10 ms<sup>-1</sup> to 20 ms<sup>-1</sup>?
            <ol type="A">
       <?php
 if ($ques3 == $que3) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s"><input type="radio">E</div>';
            echo '<div id="s2" class="s correct"><input type="radio">3E</div>';
            echo '<div id="s3" class="s "><input type="radio">5E</div>';
            echo '<div id="s4" class="s "><input type="radio">7E</div>';
        } else if($ques3 == $o) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s incorrect"><input type="radio">E</div>';
            echo '<div id="s2" class="s correct"><input type="radio">3E</div>';
            echo '<div id="s3" class="s "><input type="radio">5E</div>';
            echo '<div id="s4" class="s "><input type="radio">7E</div>';
        }
else if($ques3 == $th) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s"><input type="radio">E</div>';
            echo '<div id="s2" class="s correct"><input type="radio">3E</div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">5E</div>';
            echo '<div id="s4" class="s "><input type="radio">7E</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s"><input type="radio">E</div>';
            echo '<div id="s2" class="s correct"><input type="radio">3E</div>';
            echo '<div id="s3" class="s "><input type="radio">5E</div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">7E</div>';
    }?>
 </ol>  </br>
        <li> The time period of a simple pendulumn of infinite length is (R<sub>e</sub> = radius of earth)
            <ol type="A">
       <?php
 if ($ques4 == $que4) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s correct"><input type="radio">T = 2&pi;&Sqrt;R<sub>e</sub>/g</div>';
            echo '<div id="s2" class="s "><input type="radio">T= 2&pi;&Sqrt;2R<sub>e</sub>/g</div>';
            echo '<div id="s3" class="s "><input type="radio">T = 2&pi;&Sqrt;R<sub>2e</sub>/g</div>';
            echo '<div id="s4" class="s "><input type="radio">&infinte;</div>';
        } else if($ques4 == $th) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">T = 2&pi;&Sqrt;R<sub>e</sub>/g</div>';
            echo '<div id="s2" class="s "><input type="radio">T= 2&pi;&Sqrt;2R<sub>e</sub>/g</div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">T = 2&pi;&Sqrt;R<sub>2e</sub>/g</div>';
            echo '<div id="s4" class="s "><input type="radio">&infinte;</div>';
        }
else if($ques4 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">T = 2&pi;&Sqrt;R<sub>e</sub>/g</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">T= 2&pi;&Sqrt;2R<sub>e</sub>/g</div>';
            echo '<div id="s3" class="s "><input type="radio">T = 2&pi;&Sqrt;R<sub>2e</sub>/g</div>';
            echo '<div id="s4" class="s "><input type="radio">&infinte;</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">T = 2&pi;&Sqrt;R<sub>e</sub>/g</div>';
            echo '<div id="s2" class="s "><input type="radio">T= 2&pi;&Sqrt;2R<sub>e</sub>/g</div>';
            echo '<div id="s3" class="s "><input type="radio">T = 2&pi;&Sqrt;R<sub>2e</sub>/g</div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">&infinte;</div>';
    }?>
</ol>  </br>
        <li> A particle executes SHM of amplitude 5 cm and period 3 s. The velocity of the particle at a distance 4 cm from the mean position (take &pi; = 3) is
            <ol type="A">
       <?php
 if ($ques5 == $que5) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s "><input type="radio">8 cms<sup>-1</sup></div>';
            echo '<div id="s2" class="s "><input type="radio">12 cms<sup>-1</sup></div>';
            echo '<div id="s3" class="s "><input type="radio">4 cms<sup>-1</sup></div>';
            echo '<div id="s4" class="s correct"><input type="radio">6 cms<sup>-1</sup></div>';
        } else if($ques5 == $o) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s incorrect"><input type="radio">8 cms<sup>-1</sup></div>';
            echo '<div id="s2" class="s "><input type="radio">12 cms<sup>-1</sup></div>';
            echo '<div id="s3" class="s "><input type="radio">4 cms<sup>-1</sup></div>';
            echo '<div id="s4" class="s correct"><input type="radio">6 cms<sup>-1</sup></div>';
        }
else if($ques5 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s "><input type="radio">8 cms<sup>-1</sup></div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">12 cms<sup>-1</sup></div>';
            echo '<div id="s3" class="s "><input type="radio">4 cms<sup>-1</sup></div>';
            echo '<div id="s4" class="s correct"><input type="radio">6 cms<sup>-1</sup></div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s "><input type="radio">8 cms<sup>-1</sup></div>';
            echo '<div id="s2" class="s "><input type="radio">12 cms<sup>-1</sup></div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">4 cms<sup>-1</sup></div>';
            echo '<div id="s4" class="s correct"><input type="radio">6 cms<sup>-1</sup></div>';
    }?></ol>  </br>
        <li> A particle is executing SHM with amplitude &alpha; and has maximum velocity 'v'. Its speed at displacement &alpha;/2 will be
            <ol type="A">
       <?php
 if ($ques6 == $que6) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s correct"><input type="radio">0.866 v</div>';
            echo '<div id="s2" class="s "><input type="radio">v/2</div>';
            echo '<div id="s3" class="s "><input type="radio">v</div>';
            echo '<div id="s4" class="s "><input type="radio">v/4</div>';
        } else if($ques6 == $th) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">0.866 v</div>';
            echo '<div id="s2" class="s "><input type="radio">v/2</div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">v</div>';
            echo '<div id="s4" class="s "><input type="radio">v/4</div>';
        }
else if($ques6 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">0.866 v</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">v/2</div>';
            echo '<div id="s3" class="s "><input type="radio">v</div>';
            echo '<div id="s4" class="s "><input type="radio">v/4</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">0.866 v</div>';
            echo '<div id="s2" class="s "><input type="radio">v/2</div>';
            echo '<div id="s3" class="s "><input type="radio">v</div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">v/4</div>';
    }?></ol>  </br>
        <li> A whistle of frequency 1000 Hz is sounded on a car travelling towars a cliff with velocity of 18 ms<sup>-1</sup> normal to the cliff.If velocity of sound = 330 ms<sup>-1</sup>, then the appear frequency of the echo as heard by the car driver is nearly
            <ol type="A">
       <?php
 if ($ques7 == $que7) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s correct"><input type="radio">1115 Hz</div>';
            echo '<div id="s2" class="s "><input type="radio">115 Hz</div>';
            echo '<div id="s3" class="s "><input type="radio">67 Hz</div>';
            echo '<div id="s4" class="s "><input type="radio">47.2 Hz</div>';
        } else if($ques7 == $th) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">1115 Hz</div>';
            echo '<div id="s2" class="s "><input type="radio">115 Hz</div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">67 Hz</div>';
            echo '<div id="s4" class="s "><input type="radio">47.2 Hz</div>';
        }
else if($ques7 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">1115 Hz</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">115 Hz</div>';
            echo '<div id="s3" class="s "><input type="radio">67 Hz</div>';
            echo '<div id="s4" class="s "><input type="radio">47.2 Hz</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
          echo '<div id="s1" class="s correct"><input type="radio">1115 Hz</div>';
            echo '<div id="s2" class="s "><input type="radio">115 Hz</div>';
            echo '<div id="s3" class="s "><input type="radio">67 Hz</div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">47.2 Hz</div>';
    }?></ol>  </br>
        <li> An open window is a perfect
            <ol type="A">
       <?php
 if ($ques8 == $que8) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s "><input type="radio">Refector of sound</div>';
            echo '<div id="s2" class="s "><input type="radio">Absorber of sound</div>';
            echo '<div id="s3" class="s "><input type="radio">Scatter</div>';
            echo '<div id="s4" class="s correct"><input type="radio">Refractor</div>';
        } else if($ques8 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s "><input type="radio">Refector of sound</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">Absorber of sound</div>';
            echo '<div id="s3" class="s "><input type="radio">Scatter</div>';
            echo '<div id="s4" class="s correct"><input type="radio">Refractor</div>';
        }
else if($ques8 == $th) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s "><input type="radio">Refector of sound</div>';
            echo '<div id="s2" class="s "><input type="radio">Absorber of sound</div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">Scatter</div>';
            echo '<div id="s4" class="s correct"><input type="radio">Refractor</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s incorrect"><input type="radio">Refector of sound</div>';
            echo '<div id="s2" class="s "><input type="radio">Absorber of sound</div>';
            echo '<div id="s3" class="s "><input type="radio">Scatter</div>';
            echo '<div id="s4" class="s correct"><input type="radio">Refractor</div>';
    }?></ol>  </br>
        <li> A gas is found to obey P<sup>2</sup>V = constant. The intial temperature and volume are T<sub>0</sub> & V<sub>0</sub>. If the gas expands to volume 2V<sub>0</sub>, then the final temperature is 
            <ol type="A">
       <?php
 if ($ques9 == $que9) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s correct"><input type="radio">&Sqrt;2 T<sub>0</sub></div>';
            echo '<div id="s2" class="s "><input type="radio">2T<sub>0</sub></div>';
            echo '<div id="s3" class="s "><input type="radio">T<sub>0</sub>/2</div>';
            echo '<div id="s4" class="s "><input type="radio">T<sub>0</sub>/&Sqrt;2</div>';
        } else if($ques9 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">&Sqrt;2 T<sub>0</sub></div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">2T<sub>0</sub></div>';
            echo '<div id="s3" class="s "><input type="radio">T<sub>0</sub>/2</div>';
            echo '<div id="s4" class="s "><input type="radio">T<sub>0</sub>/&Sqrt;2</div>';
        }
else if($ques9 == $th) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">&Sqrt;2 T<sub>0</sub></div>';
            echo '<div id="s2" class="s "><input type="radio">2T<sub>0</sub></div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">T<sub>0</sub>/2</div>';
            echo '<div id="s4" class="s "><input type="radio">T<sub>0</sub>/&Sqrt;2</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">&Sqrt;2 T<sub>0</sub></div>';
            echo '<div id="s2" class="s "><input type="radio">2T<sub>0</sub></div>';
            echo '<div id="s3" class="s "><input type="radio">T<sub>0</sub>/2</div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">T<sub>0</sub>/&Sqrt;2</div>';
    }?></ol>  </br>
        <li> The constant ideal gas equation is known as
            <ol type="A">
       <?php
 if ($ques0 == $que0) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s correct"><input type="radio">Universal gas constant</div>';
            echo '<div id="s2" class="s "><input type="radio">Pressure constant</div>';
            echo '<div id="s3" class="s "><input type="radio">Temperature constant </div>';
            echo '<div id="s4" class="s "><input type="radio">Boltzmann constant</div>';
        } else if($ques0 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">Universal gas constant</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">Pressure constant</div>';
            echo '<div id="s3" class="s "><input type="radio">Temperature constant </div>';
            echo '<div id="s4" class="s "><input type="radio">Boltzmann constant</div>';
        }
else if($ques0 == $th) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">Universal gas constant</div>';
            echo '<div id="s2" class="s "><input type="radio">Pressure constant</div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">Temperature constant </div>';
            echo '<div id="s4" class="s "><input type="radio">Boltzmann constant</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">Universal gas constant</div>';
            echo '<div id="s2" class="s "><input type="radio">Pressure constant</div>';
            echo '<div id="s3" class="s "><input type="radio">Temperature constant </div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">Boltzmann constant</div>';
    }?>
<center><button class="satya" onclick="back()"><< BACK</button></center>
</html> 
<script>
function back(){
window.location="phy3.php"
}
</script>
                                                                                                                                                                                                                                                         