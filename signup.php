<?php

session_start();

 include('dbconnection.php');

 

 if(isset($_POST['continue']))

{



 $name=$_POST['name'];

  $email=$_POST['email'];

   $contact=$_POST['contact'];

    $password=$_POST['pwd'];

	 $cpassword=$_POST['cpwd'];

	$res1=mysql_query("select * from user_details where email='$email'");

	$count=mysql_num_rows($res1);

	

	if($count!=0)

	{

			

					 echo "<script>alert('You Have Already Registered Please Login..');</script>";			 

	

	}

 	 else

 	{

	

				 $query="insert into user_details values('','$name','$email','$contact','$password')";

		 $result=mysql_query($query);

		 if($result)

 		{

			 

			 header('location:login.php');

 		}

 	}



}

 ?>



<!DOCTYPE html>

<html>

<head>

<title>guddubazar/newuser</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />



  

  <script type="text/javascript">



function validate()

{

	if (document.form1.name.value=="")

	

	{

		alert("Name Is Required!");

		document.form1.name.focus();

		return false;

		}

		if(document.form1.email.value=="")

		{ alert("Email Is Required");

		document.form1.email.focus();

		return false;

		}

		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value))  

  {  

  }  

   else

   {

	    alert("Invalid email address!")  

		document.form1.email.focus();

    	return (false);

 	}

	



		

		

		if(document.form1.contact.value=="")

		{ alert("Contact No Is Required");

		document.form1.contact.focus();

		return false;

		}

	

		if(  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(form1.contact.value))

		{

		}

		else

		{

		 alert("Invalid Contact number")  

		document.form1.contact.focus();

    	return (false);

		}

		

					if(document.form1.pwd.value=="")

					{

						alert("Password Is Required");

						document.form1.pwd.focus();

						return false;

						}

						

						

						if(document.form1.cpwd.value != document.form1.pwd.value )

						{

							alert("password doesnot match!!");

							document.form1.cpwd.focus();

							return false;

							}

		

		

	}

	 </script>

</head>

<body>



<div style="width:100%; height:auto;">



   <!--header --><div style="height:120px; width:100%; background-color:#FFFFFF;border:0px solid #000000;">

  <?php include ('header.php'); ?>

   </div>



  <!--menu--> <div style="height:45px; width:100%; background-color:#66CCFF; border:0px solid #269FB2;">

    <?php include ('menu.php'); ?>

   </div><!--menu close-->

  

  <!--cc--><div style="height:auto; width:100%;border:0px solid #269FB2;">
 

<!--slider down data-->            

            <div style="height:500px;; width:1050px;  margin-top:20px; margin:auto; border:0px solid #000000; background-color:#FFFFFF;  ">

            <div style="height:35px; width:1050px; border:0px solid #000000; margin-top:10px; background-color:#00CC66; border-radius:5px; color:#000000;">

         <font style=" font-size:18px;"><b>Account Information</b></font>

            </div>

            <!--registration form--><div style="border:1px solid #999999; border-radius:5px; height:400px; width:600px; float:left; margin-left:200px; margin-top:20px;">

            <form name="form1" method="post" onSubmit="return validate();">

            <table border="0" style="width:600px;" cellspacing="8">

            <tr style="background-color:#FFFFFF; color:#828282;; height:30px;"><td colspan="2"><font color="#000000"><b>Contact Information</b></font></td></tr>

            <tr><td><font color="#000000">Name</font><font color="#FF0000">*</font></td><td><input type="text" name="name" style="width:300px; height:25px;"></td></tr>

            <tr><td><font color="#000000">E-Mail Id</font><font color="#FF0000">*</font></td><td><input type="text" name="email" style="width:300px; height:25px;"></td></tr>

            

            <tr><td><font color="#000000">Contact Number</font><font color="#FF0000">*</font></td><td><input type="text" name="contact" style="width:300px; height:25px;"></td></tr>

          <tr style="background-color:#FFFFFF; color:#828282;height:30px;"><td colspan="2"><font color="#000000"><b>Password</b></font></td></tr>

            <tr><td><font color="#000000">Password</font><font color="#FF0000">*</font></td><td><input type="password" name="pwd" style="width:300px; height:25px;"></td></tr>

            <tr><td><font color="#000000">Password Confirmation</font><font color="#FF0000">*</font></td><td><input type="password" name="cpwd" style="width:300px; height:25px;"></td></tr>

           

            <tr><td colspan="2" align="center"><input type="submit" name="continue" value="Submit" style="border:1px solid #999999; border-radius:5px; height:35px; width:80px; font-size:16px; margin-right:25px; background-color:#00CCCC" align="middle"></td></tr>

            

            

            </table></form>

            

            </div><!--registration form-->

           

      </div><!--slider down close-->

       <!--footer--><div style="width:100%; background-color:#996666; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->





</body>

</html>