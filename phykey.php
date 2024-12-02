<?php
// Database connection parameters
include 'connect.php';

// Retrieve user inputs
$que1=2;
$que2=3;
$que3=3;
$que4=2;
$que5=1;
$que6=1;
$que7=1;
$que8=3;
$que9=4;
$que0=3;
$o=1;
$t=2;
$th=3;
$f=4;

 $sql = "SELECT * FROM data WHERE UID='168251' ORDER BY id DESC LIMIT 1";
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
<link rel="stylesheet" href="satya.css"/>
<link rel="icon" href="logo.png" type="image/x-icon"><style>
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
     <center class="textcolor">  <h1 align="center">PHYSICS TEST-1/10</h1>
        <h1>KEY-PAPER</h1></center>
         <ol type="1" class="font">
           <li> The Dimension of the Ratio of angular momentum and linear momentum is
            <ol type="A">
          <?php
 if ($ques1 == $que1) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s"><input type="radio">L<sup>0</div>';
            echo '<div id="s2" class="s correct"><input type="radio">L<sup>1</div>';
            echo '<div id="s3" class="s "><input type="radio">L<sup>2 </div>';
            echo '<div id="s4" class="s "><input type="radio">L<sup>3</div>';
        } else if($ques1 == $o) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s incorrect"><input type="radio">L<sup>0</div>';
            echo '<div id="s2" class="s correct"><input type="radio">L<sup>1</div>';
            echo '<div id="s3" class="s "><input type="radio">L<sup>2 </div>';
            echo '<div id="s4" class="s "><input type="radio">L<sup>3</div>';
        }
else if($ques1 == $f) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s"><input type="radio">L<sup>0</div>';
            echo '<div id="s2" class="s correct"><input type="radio">L<sup>1</div>';
            echo '<div id="s3" class="s "><input type="radio">L<sup>2 </div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">L<sup>3</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s"><input type="radio">L<sup>0</div>';
            echo '<div id="s2" class="s correct"><input type="radio">L<sup>1</div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">L<sup>2 </div>';
            echo '<div id="s4" class="s "><input type="radio">L<sup>3</div>';
    }?>

        </ol>  </br>
        <li> One Fermi ism equivalent to 
            <ol type="A"><?php
        if ($ques2 == $que2) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s"><input type="radio">10<sup>-12</sup> meter</div>';
            echo '<div id="s2" class="s "><input type="radio">10<sup>12</sup> meter</div>';
            echo '<div id="s3" class="s correct"><input type="radio">10<sup>-15</sup> meter </div>';
            echo '<div id="s4" class="s "><input type="radio">10<sup>15</sup> meter</div>';
        } else if($ques2 == $o) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s incorrect"><input type="radio">10<sup>-12</sup> meter</div>';
            echo '<div id="s2" class="s "><input type="radio">10<sup>12</sup> meter</div>';
            echo '<div id="s3" class="s correct"><input type="radio">10<sup>-15</sup> meter </div>';
            echo '<div id="s4" class="s "><input type="radio">10<sup>15</sup> meter</div>';
        }
else if($ques2 == $f) {
echo '<div id="s1" class="s"></div>';
          echo '<div id="s1" class="s"><input type="radio">10<sup>-12</sup> meter</div>';
            echo '<div id="s2" class="s "><input type="radio">10<sup>12</sup> meter</div>';
            echo '<div id="s3" class="s correct"><input type="radio">10<sup>-15</sup> meter </div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">10<sup>15</sup> meter</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
          echo '<div id="s1" class="s"><input type="radio">10<sup>-12</sup> meter</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">10<sup>12</sup> meter</div>';
            echo '<div id="s3" class="s correct"><input type="radio">10<sup>-15</sup> meter </div>';
            echo '<div id="s4" class="s "><input type="radio">10<sup>15</sup> meter</div>';
    }?>
        </ol>  </br>
        <li> A cat is situated at point A (0,3,4) and a rat is situated at a point (5,3,-8).The Cat is free to move but the rat is always at rest. Find the minimum distance travelled by cat to catch the rat
            <ol type="A">
       <?php
 if ($ques3 == $que3) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s"><input type="radio">5 units</div>';
            echo '<div id="s2" class="s "><input type="radio">12 units</div>';
            echo '<div id="s3" class="s correct"><input type="radio">13 units </div>';
            echo '<div id="s4" class="s "><input type="radio">17 units</div>';
        } else if($ques3 == $o) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s incorrect"><input type="radio">5 units</div>';
            echo '<div id="s2" class="s "><input type="radio">12 units</div>';
            echo '<div id="s3" class="s correct"><input type="radio">13 units </div>';
            echo '<div id="s4" class="s "><input type="radio">17 units</div>';
        }
else if($ques3 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s"><input type="radio">5 units</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">12 units</div>';
            echo '<div id="s3" class="s correct"><input type="radio">13 units </div>';
            echo '<div id="s4" class="s "><input type="radio">17 units</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s"><input type="radio">5 units</div>';
            echo '<div id="s2" class="s "><input type="radio">12 units</div>';
            echo '<div id="s3" class="s correct"><input type="radio">13 units </div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">17 units</div>';
    }?>
 </ol>  </br>
        <li> Find the values of X and Y for which vector -><sub>A</sub>=(6^i+X^j+2^k) and -><sub>B</sub>=(5^i+6^j-Y^k) may be Parallel
            <ol type="A">
       <?php
 if ($ques4 == $que4) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s "><input type="radio">X= 0, Y= 2/3</div>';
            echo '<div id="s2" class="s correct"><input type="radio">X= -36/5, Y= 5/3</div>';
            echo '<div id="s3" class="s "><input type="radio">X= -15/3, Y= 5/3</div>';
            echo '<div id="s4" class="s "><input type="radio">X= 36/5, Y= 15/4</div>';
        } else if($ques4 == $th) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s "><input type="radio">X= 0, Y= 2/3</div>';
            echo '<div id="s2" class="s correct"><input type="radio">X= -36/5, Y= 5/3</div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">X= -15/3, Y= 5/3</div>';
            echo '<div id="s4" class="s "><input type="radio">X= 36/5, Y= 15/4</div>';
        }
else if($ques4 == $o) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s incorrect"><input type="radio">X= 0, Y= 2/3</div>';
            echo '<div id="s2" class="s correct"><input type="radio">X= -36/5, Y= 5/3</div>';
            echo '<div id="s3" class="s "><input type="radio">X= -15/3, Y= 5/3</div>';
            echo '<div id="s4" class="s "><input type="radio">X= 36/5, Y= 15/4</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s "><input type="radio">X= 0, Y= 2/3</div>';
            echo '<div id="s2" class="s correct"><input type="radio">X= -36/5, Y= 5/3</div>';
            echo '<div id="s3" class="s "><input type="radio">X= -15/3, Y= 5/3</div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">X= 36/5, Y= 15/4</div>';
    }?>
</ol>  </br>
        <li> The Velocity of a body moving along a straight line with uniform deceleration 'a' reduces by 3/4 of its initial velocity. The total time of motion of the body is
            <ol type="A">
       <?php
 if ($ques5 == $que5) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s correct"><input type="radio">3u/4a</div>';
            echo '<div id="s2" class="s "><input type="radio">4a/3u</div>';
            echo '<div id="s3" class="s "><input type="radio">3u x 4a</div>';
            echo '<div id="s4" class="s "><input type="radio">Zero</div>';
        } else if($ques5 == $th) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">3u/4a</div>';
            echo '<div id="s2" class="s "><input type="radio">4a/3u</div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">3u x 4a</div>';
            echo '<div id="s4" class="s "><input type="radio">Zero</div>';
        }
else if($ques5 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">3u/4a</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">4a/3u</div>';
            echo '<div id="s3" class="s "><input type="radio">3u x 4a</div>';
            echo '<div id="s4" class="s "><input type="radio">Zero</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">3u/4a</div>';
            echo '<div id="s2" class="s "><input type="radio">4a/3u</div>';
            echo '<div id="s3" class="s "><input type="radio">3u x 4a</div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">Zero</div>';
    }?></ol>  </br>
        <li> A Stone thrown vertically upwards with a speed of 'u' m/s attains a height 'h1'. Another stone thrown vertically upwards from the same point with a speed of u/s m/s attains a height 'h2' . Choose the correct relation
            <ol type="A">
       <?php
 if ($ques6 == $que6) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s correct"><input type="radio">h2=h1/9</div>';
            echo '<div id="s2" class="s "><input type="radio">h2=h1/19</div>';
            echo '<div id="s3" class="s "><input type="radio">h2=h1/3</div>';
            echo '<div id="s4" class="s "><input type="radio">h2=3h1</div>';
        } else if($ques6 == $th) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">h2=h1/9</div>';
            echo '<div id="s2" class="s "><input type="radio">h2=h1/19</div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">h2=h1/3</div>';
            echo '<div id="s4" class="s "><input type="radio">h2=3h1</div>';
        }
else if($ques6 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">h2=h1/9</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">h2=h1/19</div>';
            echo '<div id="s3" class="s "><input type="radio">h2=h1/3</div>';
            echo '<div id="s4" class="s "><input type="radio">h2=3h1</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">h2=h1/9</div>';
            echo '<div id="s2" class="s "><input type="radio">h2=h1/19</div>';
            echo '<div id="s3" class="s "><input type="radio">h2=h1/3</div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">h2=3h1</div>';
    }?></ol>  </br>
        <li> The Horizontal range of projectile is 4&Sqrt;3 times of its maximum height. Its angle of projectile will be
            <ol type="A">
       <?php
 if ($ques7 == $que7) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s correct"><input type="radio">30<sup>0</sup></div>';
            echo '<div id="s2" class="s "><input type="radio">60<sup>0</sup></div>';
            echo '<div id="s3" class="s "><input type="radio">90<sup>0</sup> </div>';
            echo '<div id="s4" class="s "><input type="radio">45<sup>0</sup></div>';
        } else if($ques7 == $th) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">30<sup>0</sup></div>';
            echo '<div id="s2" class="s "><input type="radio">60<sup>0</sup></div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">90<sup>0</sup> </div>';
            echo '<div id="s4" class="s "><input type="radio">45<sup>0</sup></div>';
        }
else if($ques7 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s correct"><input type="radio">30<sup>0</sup></div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">60<sup>0</sup></div>';
            echo '<div id="s3" class="s "><input type="radio">90<sup>0</sup> </div>';
            echo '<div id="s4" class="s "><input type="radio">45<sup>0</sup></div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
          echo '<div id="s1" class="s correct"><input type="radio">30<sup>0</sup></div>';
            echo '<div id="s2" class="s "><input type="radio">60<sup>0</sup></div>';
            echo '<div id="s3" class="s "><input type="radio">90<sup>0</sup> </div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">45<sup>0</sup></div>';
    }?></ol>  </br>
        <li> The Range of Projectile fired at an angle of 15<sup>0</sup> is 30m. If it is fired with the same speed at an angle of 45<sup>0</sup>, its range will be
            <ol type="A">
       <?php
 if ($ques8 == $que8) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s "><input type="radio">50m</div>';
            echo '<div id="s2" class="s "><input type="radio">30m</div>';
            echo '<div id="s3" class="s correct"><input type="radio">60m</div>';
            echo '<div id="s4" class="s "><input type="radio">100m</div>';
        } else if($ques8 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s "><input type="radio">50m</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">30m</div>';
            echo '<div id="s3" class="s correct"><input type="radio">60m</div>';
            echo '<div id="s4" class="s "><input type="radio">100m</div>';
        }
else if($ques8 == $f) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s "><input type="radio">50m</div>';
            echo '<div id="s2" class="s "><input type="radio">30m</div>';
            echo '<div id="s3" class="s correct"><input type="radio">60m</div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">100m</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s incorrect"><input type="radio">50m</div>';
            echo '<div id="s2" class="s "><input type="radio">30m</div>';
            echo '<div id="s3" class="s correct"><input type="radio">60m</div>';
            echo '<div id="s4" class="s "><input type="radio">100m</div>';
    }?></ol>  </br>
        <li> When a body slides down an inclined plane with of coefficient of friction as &mu;, then its acceleratiion is given by 
            <ol type="A">
       <?php
 if ($ques9 == $que9) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s "><input type="radio">g(&mu; sin&theta; + cos&theta;)</div>';
            echo '<div id="s2" class="s "><input type="radio">g(&mu; sin&theta; - cos&theta;)</div>';
            echo '<div id="s3" class="s "><input type="radio">g(sin&theta; + &mu; cos&theta;)</div>';
            echo '<div id="s4" class="s correct"><input type="radio">g(sin&theta; -&mu; cos&theta;)</div>';
        } else if($ques9 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s "><input type="radio">g(&mu; sin&theta; + cos&theta;)</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">g(&mu; sin&theta; - cos&theta;)</div>';
            echo '<div id="s3" class="s "><input type="radio">g(sin&theta; + &mu; cos&theta;)</div>';
            echo '<div id="s4" class="s correct"><input type="radio">g(sin&theta; -&mu; cos&theta;)</div>';
        }
else if($ques9 == $o) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s incorrect"><input type="radio">g(&mu; sin&theta; + cos&theta;)</div>';
            echo '<div id="s2" class="s "><input type="radio">g(&mu; sin&theta; - cos&theta;)</div>';
            echo '<div id="s3" class="s "><input type="radio">g(sin&theta; + &mu; cos&theta;)</div>';
            echo '<div id="s4" class="s correct"><input type="radio">g(sin&theta; -&mu; cos&theta;)</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s "><input type="radio">g(&mu; sin&theta; + cos&theta;)</div>';
            echo '<div id="s2" class="s "><input type="radio">g(&mu; sin&theta; - cos&theta;)</div>';
            echo '<div id="s3" class="s incorrect"><input type="radio">g(sin&theta; + &mu; cos&theta;)</div>';
            echo '<div id="s4" class="s correct"><input type="radio">g(sin&theta; -&mu; cos&theta;)</div>';
    }?></ol>  </br>
        <li> A body is in equilibrium on a rough inclined plane under its own weight. If the angle of inclination of the inclined plane is '&alpha;' and the angle of friction is '&lambda;' then
            <ol type="A">
       <?php
 if ($ques0 == $que0) {
echo '<div id="s1" class="s"></div>';
            echo '<div id="s1" class="s "><input type="radio">&alpha; > &lambda;</div>';
            echo '<div id="s2" class="s "><input type="radio">&alpha; > &lambda;/2</div>';
            echo '<div id="s3" class="s correct"><input type="radio">&alpha; = &lambda; </div>';
            echo '<div id="s4" class="s "><input type="radio">&alpha; >= &lambda;</div>';
        } else if($ques0 == $t) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s "><input type="radio">&alpha; > &lambda;</div>';
            echo '<div id="s2" class="s incorrect"><input type="radio">&alpha; > &lambda;/2</div>';
            echo '<div id="s3" class="s correct"><input type="radio">&alpha; = &lambda; </div>';
            echo '<div id="s4" class="s "><input type="radio">&alpha; >= &lambda;</div>';
        }
else if($ques0 == $o) {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s incorrect"><input type="radio">&alpha; > &lambda;</div>';
            echo '<div id="s2" class="s "><input type="radio">&alpha; > &lambda;/2</div>';
            echo '<div id="s3" class="s correct"><input type="radio">&alpha; = &lambda; </div>';
            echo '<div id="s4" class="s "><input type="radio">&alpha; >= &lambda;</div>';
        }
    else {
echo '<div id="s1" class="s"></div>';
           echo '<div id="s1" class="s "><input type="radio">&alpha; > &lambda;</div>';
            echo '<div id="s2" class="s "><input type="radio">&alpha; > &lambda;/2</div>';
            echo '<div id="s3" class="s correct"><input type="radio">&alpha; = &lambda; </div>';
            echo '<div id="s4" class="s incorrect"><input type="radio">&alpha; >= &lambda;</div>';
    }?>
<center><button class="satya" onclick="back()"><< BACK</button></center>
</html>   
<script>
function back(){
window.location="phy.php"
}
</script>                                                                                                                                                                                                                                                       