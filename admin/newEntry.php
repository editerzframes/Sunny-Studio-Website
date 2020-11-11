<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="http://localhost/sunny/admin/electivecommitteestyle.css" rel="stylesheet" type="text/css">
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
<button style="margin-left:30px; margin-top:30px; float:left" class="button" onClick="parent.location='http://localhost/sunny/admin/profile.php'">Back ></button>

    <button style="margin-right:30px; margin-top:30px; float:right" class="button" onClick="parent.location='http://localhost/sunny/admin/logout.php'">Logout</button>
    
    
<div class="form-style-8">
  <h2>Enter the Following Details</h2>
  <form action="upload.php" method="post" enctype="multipart/form-data">

    <input type="text" id="pose_name" name="pose_name" placeholder="Pose Name"  required/>
      <br>
       <input type="text" id="original_pose_name" name="original_pose_name" placeholder="Original Pose Name"  required/>
      <br>
      <input type="text" id="creator_name" name="creator_name" placeholder="Creator Name"  required/>
      <br>
      <input type="text" id="place" name="place" placeholder="Set Designer"  required/>
   <br>
      
       <select name="category">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Couple">Couple</option>
  <option value="Group">Group</option>
  <option value="Kid">Kid</option>
</select>
      
      <br><br>
    <input name="submit" type="submit" value="Add Entry" />
<br><br>
     
  </form>
</div>
    



</body>
</html> 