<?php
 session_start();
$uid=$_SESSION['uid'];
// $acctype=$_SESSION['acctype'];
 ?>
<!DOCTYPE html>
<html>

<head>
<style>
  
.table-container {
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-tap-highlight-color: transparent;
  margin: auto;
  max-width: 40em;
  width: 40em;
  
  overflow: hidden;
  -webkit-animation: fromTop 0.45s linear;
          animation: fromTop 0.45s linear;
}
.table-container .labels {
  position: relative;
  height: 3em;
}
.table-container .labels label {
  color: #fff !important;
  height: 100%;
  width: 3em;
  text-align: center;
  line-height: 3em;
  padding: 0 1em;
  box-sizing: border-box;
  text-align: center;
  cursor: pointer;
  position: absolute;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  transition: all 0.2s;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  border-radius: 50%;
}
.table-container .labels label:hover {
  background: rgba(255, 255, 255, 0.05);
}
.table-container .labels label .text {
  opacity: 0;
  transition: all 0.2s;
  font-size: 1.25em;
  white-space: nowrap;
  color: black;
}
.table-container .labels .left, .table-container .labels .right {
  position: absolute;
  z-index: 1;
  color: #FFF;
  line-height: 3.1em;
  pointer-events: none;
  transition: all 0.2s;
}
.table-container .labels .left {
  left: 1em;
}
.table-container .labels .right {
  right: 1em;
}
.table-container .map {
  height: 1.45em;
  display: flex;
  justify-content: space-between;
  max-width: 4em;
  margin: 0 auto;
}
.table-container .map .dot {
  width: 0.25em;
  height: 0.25em;
  background: rgba(255, 255, 255, 0.2);
  transition: all 0.25s;
  border-radius: 50%;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .map .dot:nth-of-type(1) {
  background: rgba(255, 255, 255, 0.75);
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .labels label:nth-of-type(1) {
  left: 5%;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .labels label:nth-of-type(0) {
  left: 5%;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .labels label:nth-of-type(1) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .labels label:nth-of-type(2) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .labels label:nth-of-type(3) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .labels label:nth-of-type(4) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .labels label:nth-of-type(5) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .labels label:nth-of-type(1) {
  transition: all 0.2s, background 0s !important;
  left: 50%;
  width: auto;
  pointer-events: none;
  background: none;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .labels label:nth-of-type(1) .text {
  opacity: 1;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .labels label:nth-of-type(1):last-of-type ~ .right {
  opacity: 0;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .labels label:first-of-type:nth-of-type(1) ~ .left {
  opacity: 0;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .labels label:nth-of-type(2) {
  z-index: 1;
}
.table-container input[type=radio]:nth-of-type(2):checked ~ .map .dot:nth-of-type(2) {
  background: rgba(255, 255, 255, 0.75);
}
.table-container input[type=radio]:nth-of-type(2):checked ~ .labels label:nth-of-type(1) {
  left: 5%;
}
.table-container input[type=radio]:nth-of-type(2):checked ~ .labels label:nth-of-type(2) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(2):checked ~ .labels label:nth-of-type(3) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(2):checked ~ .labels label:nth-of-type(4) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(2):checked ~ .labels label:nth-of-type(5) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(2):checked ~ .labels label:nth-of-type(2) {
  transition: all 0.2s, background 0s !important;
  left: 50%;
  width: auto;
  pointer-events: none;
  background: none;
}
.table-container input[type=radio]:nth-of-type(2):checked ~ .labels label:nth-of-type(2) .text {
  opacity: 1;
}
.table-container input[type=radio]:nth-of-type(2):checked ~ .labels label:nth-of-type(2):last-of-type ~ .right {
  opacity: 0;
}
.table-container input[type=radio]:nth-of-type(2):checked ~ .labels label:first-of-type:nth-of-type(2) ~ .left {
  opacity: 0;
}
.table-container input[type=radio]:nth-of-type(2):checked ~ .labels label:nth-of-type(3) {
  z-index: 1;
}
.table-container input[type=radio]:nth-of-type(3):checked ~ .map .dot:nth-of-type(3) {
  background: rgba(255, 255, 255, 0.75);
}
.table-container input[type=radio]:nth-of-type(3):checked ~ .labels label:nth-of-type(1) {
  left: 5%;
}
.table-container input[type=radio]:nth-of-type(3):checked ~ .labels label:nth-of-type(2) {
  left: 5%;
}
.table-container input[type=radio]:nth-of-type(3):checked ~ .labels label:nth-of-type(3) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(3):checked ~ .labels label:nth-of-type(4) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(3):checked ~ .labels label:nth-of-type(5) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(3):checked ~ .labels label:nth-of-type(3) {
  transition: all 0.2s, background 0s !important;
  left: 50%;
  width: auto;
  pointer-events: none;
  background: none;
}
.table-container input[type=radio]:nth-of-type(3):checked ~ .labels label:nth-of-type(3) .text {
  opacity: 1;
}
.table-container input[type=radio]:nth-of-type(3):checked ~ .labels label:nth-of-type(3):last-of-type ~ .right {
  opacity: 0;
}
.table-container input[type=radio]:nth-of-type(3):checked ~ .labels label:first-of-type:nth-of-type(3) ~ .left {
  opacity: 0;
}
.table-container input[type=radio]:nth-of-type(3):checked ~ .labels label:nth-of-type(4) {
  z-index: 1;
}
.table-container input[type=radio]:nth-of-type(4):checked ~ .map .dot:nth-of-type(4) {
  background: rgba(255, 255, 255, 0.75);
}
.table-container input[type=radio]:nth-of-type(4):checked ~ .labels label:nth-of-type(1) {
  left: 5%;
}
.table-container input[type=radio]:nth-of-type(4):checked ~ .labels label:nth-of-type(2) {
  left: 5%;
}
.table-container input[type=radio]:nth-of-type(4):checked ~ .labels label:nth-of-type(3) {
  left: 5%;
}
.table-container input[type=radio]:nth-of-type(4):checked ~ .labels label:nth-of-type(4) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(4):checked ~ .labels label:nth-of-type(5) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(4):checked ~ .labels label:nth-of-type(4) {
  transition: all 0.2s, background 0s !important;
  left: 50%;
  width: auto;
  pointer-events: none;
  background: none;
}
.table-container input[type=radio]:nth-of-type(4):checked ~ .labels label:nth-of-type(4) .text {
  opacity: 1;
}
.table-container input[type=radio]:nth-of-type(4):checked ~ .labels label:nth-of-type(4):last-of-type ~ .right {
  opacity: 0;
}
.table-container input[type=radio]:nth-of-type(4):checked ~ .labels label:first-of-type:nth-of-type(4) ~ .left {
  opacity: 0;
}
.table-container input[type=radio]:nth-of-type(4):checked ~ .labels label:nth-of-type(5) {
  z-index: 1;
}
.table-container input[type=radio]:nth-of-type(5):checked ~ .map .dot:nth-of-type(5) {
  background: rgba(255, 255, 255, 0.75);
}
.table-container input[type=radio]:nth-of-type(5):checked ~ .labels label:nth-of-type(1) {
  left: 5%;
}
.table-container input[type=radio]:nth-of-type(5):checked ~ .labels label:nth-of-type(2) {
  left: 5%;
}
.table-container input[type=radio]:nth-of-type(5):checked ~ .labels label:nth-of-type(3) {
  left: 5%;
}
.table-container input[type=radio]:nth-of-type(5):checked ~ .labels label:nth-of-type(4) {
  left: 5%;
}
.table-container input[type=radio]:nth-of-type(5):checked ~ .labels label:nth-of-type(5) {
  left: 95%;
}
.table-container input[type=radio]:nth-of-type(5):checked ~ .labels label:nth-of-type(5) {
  transition: all 0.2s, background 0s !important;
  left: 50%;
  width: auto;
  pointer-events: none;
  background: none;
}
.table-container input[type=radio]:nth-of-type(5):checked ~ .labels label:nth-of-type(5) .text {
  opacity: 1;
}
.table-container input[type=radio]:nth-of-type(5):checked ~ .labels label:nth-of-type(5):last-of-type ~ .right {
  opacity: 0;
}
.table-container input[type=radio]:nth-of-type(5):checked ~ .labels label:first-of-type:nth-of-type(5) ~ .left {
  opacity: 0;
}
.table-container input[type=radio]:nth-of-type(5):checked ~ .labels label:nth-of-type(6) {
  z-index: 1;
}
.table-container input[type=radio] {
  position: absolute;
  display: none;
}
.table-container .table {
  display: flex;
  background: #FFF;
  position: relative;
  min-width: 100%;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.5);
  border-radius: 5px;
  overflow: hidden;
}
.table-container .table .sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  left: 0;
  width: 40%;
  box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.25);
  z-index: 1;
  background:lightgray;
  
}
.table-container .table .data {
  width: 60%;
  display: flex;
  position: absolute;
  left: 60%;
  z-index: 0;
  transition: all 0.2s;
}

.signature{
  float: right;
  color: rgba(255, 255, 255, 0.75);;
  letter-spacing: 1px;
  font-size: .7em;
  font-style: italic;
}
.table-container .table .data .column {
  min-width: 100%;
}
.table-container .table .data .item:nth-of-type(odd) {
  background: rgba(0, 0, 0, 0.1);
}
.table-container .table .item {
  box-sizing: border-box;
  padding: 1em;
}
.table-container input[type=radio]:nth-of-type(1):checked ~ .table .data {
  left: 40%;
}
.table-container input[type=radio]:nth-of-type(2):checked ~ .table .data {
  left: -20%;
}
.table-container input[type=radio]:nth-of-type(3):checked ~ .table .data {
  left: -80%;
}
.table-container input[type=radio]:nth-of-type(4):checked ~ .table .data {
  left: -140%;
}
.table-container input[type=radio]:nth-of-type(5):checked ~ .table .data {
  left: -200%;
}
.table-container .notes {
  margin-top: 0.5em;
  color: #FFF;
  font-size: 0.85em;
}

@-webkit-keyframes fromTop {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-100%) rotateZ(25deg);
            transform: translateY(-100%) rotateZ(25deg);
  }
  80% {
    opacity: 1;
    -webkit-transform: translateY(5%) rotateZ(-5deg);
            transform: translateY(5%) rotateZ(-5deg);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

@keyframes fromTop {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-100%) rotateZ(45deg);
            transform: translateY(-100%) rotateZ(45deg);
  }
  80% {
    opacity: 1;
    -webkit-transform: translateY(5%) rotateZ(-25deg);
            transform: translateY(5%) rotateZ(-25deg);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

.markque{
   text-decoration-color: pink;
}

body{
  background-image: linear-gradient(darkgray, gray, lightgray);
    background-color: #cccccc;
}

.button {
  background-color: gray; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button3:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button4:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button4{
  float:right;
}

input[type=text] {
  float: left;

}

</style>
<?php 
//  $username='aayush';
//  $uid=201823;
  
 if(isset($uid))
{
  $con=mysqli_connect("localhost","root","","YOUR DATABASE NAME");
if (!$con) 
{
  die("database not connected");
}
else 
{
  $sql1="Select *from student_info where uid='$uid'";
  $sql2="Select *from student_info2 where uid='$uid'";

  // $sql2="Select *from student_info2 where username='$username'";
  // $sql3="Select *from student_info where name='$username'";
  $result1=mysqli_query($con,$sql1);
  $result2=mysqli_query($con,$sql2);
  // $result2=mysqli_query($con,$sql2);
  $batch='';
  $department='';
  $year='';
  if(mysqli_num_rows($result2)>0)
  {
    while($row=mysqli_fetch_array($result2))
    {
      $batch=$row['batch'];
      $department=$row['department'];
      $year=$row['year'];
    }
  }

  if (mysqli_num_rows($result1)>0) 
    {
      // echo '<div style="font-size:5em;color:red;">Inside '.$username.' wala account</div>';
      while ($row1 = mysqli_fetch_array($result1))
      {
  ?>


<body>


<div class ="markque"><marquee behavior="scroll" direction="right" scrollamount="12"><H1>WELCOME TO STUDENT INFO PAGE</H1></marquee></div>
<div class="table-container">
  <input type="radio" id="col1" name="table" checked="checked"/>
 
  <div class="labels">
    <label for="col1">
      <div class="text">YOUR ACCOUNT DETAILS.</div>
    </label>
  
    
    <div class="left"><i class="fa fa-chevron-left">&#171;</i></div>
    <div class="right"><i class="fa fa-chevron-right">&#xbb;</i></div>
  </div>



 <form action="edit_contact.php" method="post">

  <div class="table">
    <div class="sticky">
      <div class="item">NAME:</div>
      <div class="item">UID:</div>
      <div class="item">CONTACT NO:</div>
      <div class="item">Date of Birth :</div>
      <div class="item">BATCH:</div>
      <div class="item">DEPARTMENT:</div>
      <div class="item">YEAR:</div>
      
    </div>
    <div class="data">
      <div class="column">
        <div class="item"><?php echo $row1["name"];?></div>
        <div class="item"><?php echo $row1["uid"];?></div>
        <div class="item"><?php echo $row1['mobile_no']; ?></div>
        <div class="item"><?php echo $row1['dob']; ?></div>
        <div class="item"><?php echo $batch; ?></div>
        <div class="item"><?php echo $department; ?></div>
        <div class="item"><?php echo $year; ?></div>
      
      </div>
  
    
    </div>
  </div>

  <div class="signature">
    <div class="note">By: Kg Ag</div>
  </div>

 <input type="submit" class="button" value="EDIT">

    
</form>

<form action="logout.php" method="post">
<input type="submit" class="button" value="LOGOUT">
</form>
<!-- <button class="button button3" onclick="myFunction()"> EDIT</button> -->

<!-- <script>
function myFunction() {
  var txt;
  var person="";
   person = prompt("Please enter your name:", "Harry Potter");
  if (person == null || person == "") {
    txt = "User cancelled the prompt.";
  } 
  else {
 
  
   
  }

}
</script> -->




<?php
      }
      // header('Location:home_page.html');
    }

    else {
      echo "<script>alert('Account NOT found.');
        window.location.href='login.html'
      </script>";
      // header('Location:login.html');
    }
}

}

?>

  </body>
</html>








