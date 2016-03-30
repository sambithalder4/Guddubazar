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

<title>guddubazar/cartdetails</title>

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

  

   
  

  <!--sliderall close-->

<!--slider down data-->            

            <div style="height:auto; width:1050px;   margin:auto; border:1px solid #EBEBEB; background-color:#FFFFFF;  ">

            <div style="height:40px; width:1050px; height:auto; border:0px solid #000000; padding-top:5px; background-color:#FFFFFF; border-radius:5px; color:#000000;">

         <font style=" font-size:18px;"> &nbsp; <b>Your Cart Details</b></font>

            </div>

          

            <table border="0" style="width:1050px; height:30px; background-color:#66CCFF;">

            <tr height="30">

            <td width="75" align="center"><b>S.No.</b></td>

             <td width="75" align="center"><b>Remove.</b></td>

            <td width="300" align="center"><b>Item</b></td>

            <td width="350" align="center"><b>Item Description</b></td>

            <td width="100" align="center"><b>Quantity</b></td>

            <td width="200" align="center"><b>Price(Rs.)</b></td>

            </tr>

            </table>

            <table border="0">

        

            <tr style="background-color:#FFFFFF;">

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

            <td width="75" align="center" style="background-color:#FFFFFF;"><?php echo $i;?></td>

             <td width="75" align="center" style="background-color:#FFFFFF;"><a href="cartdel.php?code2=<?php echo $row['ser_no'];?>" style="text-decoration:none;"><img src="images/icon_cart.png"></a></td>

            <td width="300" align="center" style="background-color:#FFFFFF;"><img src="images/<?php echo $row['image1'];?>" height="80" width="110" style="border:0px solid #000000;" ></td>

            <td width="350" align="center" style="background-color:#FFFFFF;"><?php echo $row['product_name'];?></td>

            <td width="100" align="center" style="background-color:#FFFFFF;"><?php echo $row['quantity'];?></td>

             <td width="200" align="center" style="background-color:#FFFFFF;"><?php echo'Rs.'.$price;?></td>

            

             </tr>

            <?php

			$i=$i+1;

$amt=$amt+$price;
$_SESSION['amt']=$amt;

		}

		

		?> 

        <tr style="background-color:#FFFFFF; height:30px; ">

        <td width="100" style="background-color:#FFFFFF;"></td>

       <td width="100" style="background-color:#FFFFFF;"></td>

      <td width="300" style="background-color:#FFFFFF;"></td>

       <td width="350" style="background-color:#FFFFFF;"></td>

       <td  width="100" align="center" bgcolor="#66CCFF"><b>Total</b></td>

       <td  width="200" align="center" bgcolor="#66CCFF"><?php echo" <font color='#000000'> <b>Rs. </b></font>" .$amt;?></td>

            </tr></table>

            <div style="width:1050px; height:50px; margin-bottom:20px; border:0px solid #000000; margin-top:50px; margin-right:20px;"align="right">

            <div style="width:300px; height:50px; border:0px solid #000000; " ><a href="index.php"><img src="images/bt_continue_shopping.png"></a>&nbsp;&nbsp;&nbsp;
            
            <a href="#"><img src="images/bt_prced.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

            </div>

    

        </div><!--slider down close-->

            

         
         

       <!--footer--><div style="width:100%; background-color:#996666; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->





</body>

</html>

