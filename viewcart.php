<?php 

session_start();

if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

{ 

header('location:login.php'); 

	}

	 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];

    ?>







<!DOCTYPE html>

<html>

<head>

<title>guddubazar/viewcart</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />

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

            <table style="height:auto; width:1050px; margin:auto;   border:0px solid #000000; background-color:#FFFFFF; ">

           <tr><td>

            <div style="height:35px; width:1050px; border:0px solid #000000; padding-top:5px; background-color:#00CC66; border-radius:5px; color:#000000;">

         <font style=" font-size:18px; margin-left:10px;"><b>My Account</b></font>

            </div>

            <div style="margin-top:10px; width:1045px;">

           

           <div style="width:200px; height:248px;background-color:#FFFFFF;border:1px #CCCCCC solid;float:left;"><?php include('left.php'); ?></div>

            

            <!--registration form--><div style="border:0px solid #999999; border-radius:5px; height:auto; width:780px; float:left; margin-left:5px; margin-bottom:10px;">

            <div style="height:35px; width:770px; border:0px solid #000000; margin-top:5px; background-color:#FFFFFF; border-radius:5px; color:#1C7582;">

         <font style=" font-size:18px;"><font color="#000000">Your Cart Details</font></font>

            </div>

          

            <table border="0" style="width:770px; background-color:#7CE1D6;">

            <tr height="30">

            <td width="100" align="left"><font color="#000000"><b>S.No.</b></font></td>

            <td width="200" align="left"><font color="#000000"><b>Item</b></font></td>

            <td width="100" align="left"><font color="#000000"><b>Item Description</b></font></td>

            <td width="100" align="right"><font color="#000000"><b>Quantity</b></font></td>

           

            <td width="100" align="center"><font color="#000000"><b>Price(Rs.)</b></font></td>

            </tr>

            </table>

           

           

            <table>

             <tr style=" background-color:#FFFFFF; ">

             <?php 

		include('dbconnection.php');

		



			 $query="select * from shopping_cart where email='".$email."'";

			 $result=mysql_query($query);

			 $i=1;

             $amt=0;		

			while($row=mysql_fetch_array($result))

			{

			$price=$row['price']*$row['quantity'];

	      ?>

            <td width="100" align="center"><?php echo $i;?></td>

            <td width="300" align="center"><img src="images/<?php echo $row['image1'];?>" height="70" width="100" style="border:0px solid #000000;" ></td>

            <td width="100" align="center"><?php echo $row['product_name'];?></td>

            <td width="80" align="left"><?php echo $row['quantity'];?></td>

            

            <td width="100" align="left"><?php echo'Rs.'.$price;?></td>

            </tr>

            <?php

			$i=$i+1;

$amt=$amt+$price;

		}

		

		?> 

        <tr style="background-color:#7CE1D6; height:30px;"><td width="100" style="background-color:#FFFFFF;"></td>

  <td width="300" style="background-color:#FFFFFF;"></td>

  <td width="450" style="background-color:#FFFFFF;"></td>

  <td  width="100" align="center"><font color="#000000">Total</font></td>

    <td  width="100" align="center"><font color="#000000"><?php echo"Rs.".$amt;?></font></td>



</tr>            </table>



            <div style="width:770px; height:70px; border:0px solid #000000; margin-top:20px;">

            <div style="width:300px; height:50px; border:0px solid #000000; margin-left:400px;"><a href="index.php"><img src="images/bt_continue_shopping.png"></a>&nbsp;&nbsp;&nbsp;<a href="#"><img src="images/bt_prced.png"></a></div>

            </div>

    



            

            </div><!--registration form-->

           

                     

          </td> </tr>            

        </table><!--slider down close-->

       <!--footer--><div style="width:100%; background-color:#996666; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->





</body>

</html>

