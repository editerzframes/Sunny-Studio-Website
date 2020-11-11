<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="http://localhost/sunny/admin/style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SECOND HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
  <div id="top-text">
<!--
    <img class="logo floatLeft" alt="Logo"  />
      
-->
    <h1 class="textheader2 textheader2-1size" style="text-align:left">SUNNY STUDIO</h1>
<!--    <h2 class="textheader2 textheader2-2size" style="text-align:left">Registered under the societies registration act XXI of 1860</h2>-->
    </div>

<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="http://localhost/karan/admin/logout.php/">Log Out</a></b>

</div>
    
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<button class="button" onClick="parent.location='http://localhost/sunny/admin/newEntry.php'">New Entry</button>
<button class="button" onClick="parent.location='http://localhost/sunny/admin/DeleteEntry.php'"> Update Entry</button>

   
</body>
</html> 