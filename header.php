<!--main--><div style="height:118px; width:1150px; margin:auto; border:0px solid #990000;">
<!--logo--><div style="width:150px; height:115px; float:left; border:0px solid #FFFFFF;"><a href="index.php"><img src="images/mylogo.jpg"  height="80" width="150"/></a></div><!--logo close-->
<!--right--><div style="height:115px; width:990px; margin-top:0px; border:0px solid #FF0000; float:left;">
<!--menu--><div style="width:900px; height:30px; float:left; border:0px solid #CCCC00; font-size:12px;" align="right">
 <a href="index.php" style="text-decoration:none;color:#FFFFFF;"><font color="#3300CC" face="Times New Roman" size="+1" /><b>Home</b></a>&nbsp;  &nbsp;

<a href="signup.php" style="text-decoration:none;color:#FFFFFF;">
<font color="#3300CC" face="Times New Roman" size="+1" /><b>Signup</b></a>&nbsp;   &nbsp;

<a href="myaccount.php" style="text-decoration:none;color:#FFFFFF;"><font color="#3300CC" face="Times New Roman" size="+1" /><b>My Account</b></a>&nbsp;   &nbsp;
<a href="cartdetails.php" style="text-decoration:none;color:#FFFFFF;"><font color="#3300CC" face="Times New Roman" size="+1" /><b>My Cart</b></a>&nbsp;   &nbsp;
<?php


if(isset($_SESSION['email'])&& isset($_SESSION['pwd']))
{
	?>


 <a href="logout.php" style="text-decoration:none;"><font color="#3300CC" face="Times New Roman" size="+1" /><b>Log Out</b></a>


 <?php
}
else
{
	?>
    <a href="login.php" style="text-decoration:none;"><font color="#3300CC" face="Times New Roman" size="+1" /><b>Log In</b></a>
   <?php
    }
?>


 
</div><!--menu close-->
<div style="height:80px; width:490px; border:0px solid #FF0000; float:left;" align="center">
  <strong style="color:#000000; font-size:32px; font-family:"Courier New", Courier, monospace; margin-top:0px;" align="center"><b>welcome to <font color="#0099FF">GUDDU</font><font color="#FF3366">BAZAR</font></b></strong>

</div>


<div style="border:0px solid #FF0000; width:400px; margin-top:30px; height:50px; float:left;" align="right">

<?php
include 'dbconnection.php';

if(isset($_SESSION['email'] )&& isset($_SESSION['pwd']))
{

$email=$_SESSION['email'];
    $query="select * from user_details where email='$email'";
			 $result=mysql_query($query);
			while($row=mysql_fetch_array($result))

	      {
		  ?>
		  <p style=" color:#000000; font-family:'Garamond'; font-size:20px;"><b>Hi  <font style=" font-size:20px;">&nbsp; <?php echo $row['name'];?>!</font></b></p>


          <?php
}
}
?>
</div>


</div><!--right close-->

</div><!--main close-->