<?php
session_start();

if ( $_SESSION[ "sidx" ] == "" || $_SESSION[ "sidx" ] == NULL ) {
	header( 'Location:studentlogin' );
}

$userid = $_SESSION[ "sidx" ];
$userfname = $_SESSION[ "fname" ];
$userlname = $_SESSION[ "lname" ];
?>
<?php include('studenthead.php'); ?>
<!DOCTYPE html>
<body>
<header>
	<div class="fill" style="background-image:url('images/book.jpg');"></div>

<div class="container">
	<div class="row">
		<div class="col-md-5">
			<!--Student will select the exam-->

			<h3> Welcome <a href="welcomestudent"><?php echo "<span style='color:red'>".$userfname." ".$userlname."</span>";?></a></h3>
			<label for="Exam"><h4>Select Exam:</h4></label>
			<div>

				<a href="takeexam2?id=<?php echo " PHP "; ?>"><input type="submit" value="PHP Exam" name="PHP" class="btn btn-primary" style="padding: 10px 20px; font-size: 25px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;

				<a href="takeexam2?id=<?php echo " .NET "; ?>"><input type="submit" value=".NET Exam" name="dotnet" class="btn btn-primary" style="padding: 10px 20px; font-size: 25px;" ></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<br>
				<br>
				<a href="takeexam2?id=<?php echo " PHP "; ?>"><input type="submit" value="Python Exam" name="PHP" class="btn btn-primary" style="padding: 10px 20px; font-size: 25px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;

				<a href="takeexam2?id=<?php echo " PHP "; ?>"><input type="submit" value="Java Exam" name="PHP" class="btn btn-primary" style="padding: 10px 20px; font-size: 25px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<br>
				<br>
				<a href="takeexam2?id=<?php echo " PHP "; ?>"><input type="submit" value="C# Exam" name="PHP" class="btn btn-primary" style="padding: 10px 20px; font-size: 25px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;

				<a href="takeexam2?id=<?php echo " PHP "; ?>"><input type="submit" value="C++ Exam" name="PHP" class="btn btn-primary" style="padding: 10px 20px; font-size: 25px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<br>
				<br>

				<a href="takeexam2?id=<?php echo " PHP "; ?>"><input type="submit" value="SQL Exam" name="PHP" class="btn btn-primary" style="padding: 10px 20px; font-size: 25px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;

				<a href="takeexam2?id=<?php echo " PHP "; ?>"><input type="submit" value=" Exam" name="PHP" class="btn btn-primary" style="padding: 10px 20px; font-size: 25px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<br>
				<br>

				<a href="takeexam2?id=<?php echo " PHP "; ?>"><input type="submit" value="PHP Exam" name="PHP" class="btn btn-primary" style="padding: 10px 20px; font-size: 25px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;

				<a href="takeexam2?id=<?php echo " PHP "; ?>"><input type="submit" value="PHP Exam" name="PHP" class="btn btn-primary" style="padding: 10px 20px; font-size: 25px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;

			</div>
		</div>
	</div>
</div>
</header>
</body>
</html>
<?php include('allfoot.php'); ?>