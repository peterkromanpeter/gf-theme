<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("../slpw/sitelokpw.php");
?>


<!DOCTYPE html>
<html lang="da">
<head>
    <!-- Check for title--> 
    <title>Titel</title>

    <meta charset="utf-8" lang="da">

    <script type="text/javascript">
    var blabfolderpath="/slpw/plugin_blab/"
    </script>
    <link rel="stylesheet" type="text/css" href="/slpw/plugin_blab/blab.css">
    <script type="text/javascript" src="/slpw/plugin_blab/sarissa.js"></script>
    <script type="text/javascript" src="/slpw/plugin_blab/blab.js"></script>
    <link rel="stylesheet" type="text/css" href="/slpw/plugin_blab/blab.css">
    <script type="text/javascript">
    var memberprofilepage=1
    </script>
    <?php
    if (function_exists('startwhoisonline'))
        startwhoisonline('profileimage,name');
    ?>



    <meta name="viewport" content="width=device-width; initial-scale=1.0">  
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<body>


   <!-- Page content start-->        
   <div class="w3-row" >

    <!-- Page header start-->  
    <div class="w3-row" style="background-color:#666666">
        <div class="w3-col w3-mobile" style=" width: 25%; padding-top: 12px; padding-left: 10px; height: 80px; background-color:#666666;">
            <div class="w3-container w3-hide-small">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>        
                <ins class="adsbygoogle" 
                style="display:inline-block;width:250px;height:60px"
                data-ad-client="ca-pub-3626513934315518"
                data-ad-slot="8001567329"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>

        <div class="w3-col w3-mobile" style="width: 65%; margin:0; height: 80px; background-color:#666666;">
            <div class="w3-container">
                <input type="text" style="-webkit-font-smoothing:antialiased;-webkit-transition:color .2s ease-in-out;-moz-transition:color .2s ease-in-out;-o-transition:color .2s ease-in-out;-ms-transition:color .2s ease-in-out;transition:color .2s ease-in-out;font-family: Lucida Blackletter; text-docoration:none; font-weight:bold; font-size: 48px; text-align:center; text-shadow: 5px 5px 10px #191919;color: #FFFFFF; background-color:#666666; margin-left:0px; border-style:none; height:80px;" value="Titel">
            </div>
        </div>

        <div class="w3-col w3-mobile" style="width: 10%; padding-left: 5px; height:80px; background-color:#666666;">
           <div class="w3-container">    
            <input type="image" style= "margin-top: 5px; margin-buttom: 5px; margin-right: 5 px; width: 70px; background-color: #666666;" <img src= "<?php echo $slprofileimage;?>">
        </div>
    </div>

</div> 
<!-- Page Header end-->


<!-- Top Menubar start-->

<?php include('gf_theme_topmenu-bar.php');?>  

<!-- Top Menubar end-->



<!-- Content - main 1 column, Start  -->
<div class="w3-row">


    <!-- 80% column, Start -->
    <div class="w3-col w3-mobile" style= "width:100%; margin-top: 10px; margin-left: 10px; margin-bottom:10px; padding-bottom: 10px; text-align: left;"> 


        <!-- 32/32/32 content - 3 columns, Start -->

        <!-- Column1 --> 
        <div class="w3-col w3-mobile" style="width:32%; margin-top: 10px; margin-left: 10px; margin-right: 5px; margin-bottom:10px; padding-bottom: 10px; text-align: left;"> 


            <p>Kolonne 1</p>



        </div>

        <!-- Column2 --> 
        <div class="w3-col w3-mobile" style="width:32%; margin-top: 30px; margin-left: 10px; margin-right: 5px; margin-bottom:10px; padding-bottom: 10px; text-align: left;"> 


            <p>Kolonne 2</p>



        </div> 

        <!-- Column3 --> 
        <div class="w3-col w3-mobile" style="width:32%; margin-top: 30px; margin-left: 10px; margin-bottom:10px; padding-bottom: 10px; text-align: left;"> 


            <p>Kolonne 3</p>



        </div>      

    </div> 
    <!-- 32/32/32 content - 3 columns, End -->   

</div> 
<!-- 80% column, End -->  




</div> 
<!-- Content - main 1 column, end  -->


<!-- Bottom-lacated sidemenu start -->

<?php include('gf_theme_sidemenu_bottom.php');?>

<!-- Bottom-lacated sidemenu end -->


<!-- Footer start-->  

<?php include('gf_theme_footer.php');?>  

<!-- Footer end--> 


</body>   
</html>