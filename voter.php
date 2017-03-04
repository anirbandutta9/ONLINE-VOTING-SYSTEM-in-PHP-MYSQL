<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> What is your favorite programming language? <BR>
<input type="radio" name="lan" value="java">  JAVA<BR>
<input type="radio" name="lan" value="python">PYTHON<BR>
<input type="radio" name="lan" value="c++">   C++<BR>
<input type="radio" name="lan" value="php">   PHP<BR>
<input type="radio" name="lan" value=".net">  .NET<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
