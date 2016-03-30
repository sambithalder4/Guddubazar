<?php session_start();?>

<!DOCTYPE html>

<html>

<head>

<title>guddubazar</title>

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



<!--slider down data--> 

 <div style="height:auto; width:1050px; margin:auto;   border:0px solid #000000; background-color:#FFFFFF; ">           

                        <table style="height:auto; width:1050px; margin-top:140px; margin:auto; border:0px solid #000000; ">

<tr><td style=" margin-bottom:250px; ">

<div style="height:auto;border:0px solid #000000; width:650px; float:left;">  

<p style="margin-left:20px; margin-top:20px; margin-right:40px;" align="justify">

	 <?php





			include('dbconnection.php');

$server=mysql_query("select * from static where page='contact'");

while($get=mysql_fetch_array($server))

{

       echo $get['details'];

}



?>

</p>

        

        </div><!--slider down close-->
   </td></tr></table>        

         </div>

       <!--footer--><div style="width:100%; background-color:#996666; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->

           





</body>

</html>



