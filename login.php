<?php session_start(); ?>

<?php

if(isset($_POST['submit']))

{

 	include 'dbconnection.php';

					$email=$_POST['email'];

					$password=$_POST['password'];

					//echo"$email<br>$password";

					$que="select * from user_details where email='$email' and password='$password'";

					//echo"$que<br>";

					$res=mysql_query($que);

					$count=mysql_num_rows($res);

				//	echo"QQQQQQQQQQ---------------$count";

					//echo"$res";

					while($data=mysql_fetch_array($res))

						//echo"$data[name]";

					if($count!=0)

					{

						$_SESSION['email']="$email";

						$_SESSION['pwd']="$password";

						header('location:cartdetails.php');

				}

}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>guddubazar/login</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />



</head>

<body>



<div style="width:100%; height:auto;">



   <!--header --><div style="height:120px; width:100%; background-color:#FFFFFF;border:0px solid #000000;">

  <?php include('header.php'); ?>

   </div>



  <!--menu--> <div style="height:45px; width:100%; background-color:#66CCFF; border:0px solid #269FB2;">

    <?php include ('menu.php'); ?>

   </div><!--menu close-->



  <!--cc--><div style="height:auto; width:100%;border:0px solid #269FB2;">



<!--slider down data-->

            <div style="height:500px;; width:1050px;  margin-top:20px; margin:auto; border:0px solid #000000; background-color:#FFFFFF;  ">

            <div style="height:35px; width:1050px; border:0px solid #000000; margin-top:10px; background-color:#00CC66; border-radius:5px; color:#000000;">

         <font style=" font-size:18px;"><b>&nbsp;Login</b></font>

            </div>

            <form name="form2" method="post">


            <table border="0" style="background-color:#FFFFFF; margin-top:50px ; width:500px; border:1px solid #999999; border-radius:5px; height:300px;" align="center">

<tr><td>



            <table border="0" style="background-color:#FFFFFF; margin-top:10px ; width:400px; border:0px solid #999999; border-radius:5px; height:300px;" align="center">

            <tr><td colspan="2"><font color="#000000" face="Garamond" size="+2"><b>LOGIN</b></font></td></tr>

            <tr><td><font color="#000000" face="Times New Roman"><b>Enter email</b></font></td><td><input type="text" name="email" placeholder="Enter email id"></td></tr>

            <tr><td><font color="#000000" face="Times New Roman"><b>Enter password</b></font></td><td><input type="password" name="password" placeholder="Enter password"></td></tr>

            <tr><td>

            <input type="submit" name="submit" value="LOGIN" style="border:0px solid #000000; border-radius:5px; background-color:#269FB2; height:25px; color:#FFFFFF;"></td>
			<td><font color="#333333" face="Times New Roman"><b>New to Guddubazar?</b></font></td>
			<td><a href="signup.php" style="text-decoration:none; color:#33CCCC; font-size:20px;"><b>SignUp</b></a></td></tr>

            </table>

</td></tr></table>

           </form>



        </div><!--slider down close-->


       <!--footer--><div style="width:100%; background-color:#996666; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->





</body>

</html>



