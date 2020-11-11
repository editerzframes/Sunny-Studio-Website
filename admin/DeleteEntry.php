<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>balganeshking</title>
<link href="http://localhost/sunny/admin/electivecommitteestyle.css" rel="stylesheet" type="text/css">
</head>
<body>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SECOND HEADER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
   <div id="top-text">
<!--
    <img class="logo floatLeft" alt="Logo"  />
      
-->
    <h1 class="textheader2 textheader2-1size" style="text-align:left">BAL GANESH KING</h1>
<!--    <h2 class="textheader2 textheader2-2size" style="text-align:left">Registered under the societies registration act XXI of 1860</h2>-->
    </div>


<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<button style="margin-left:30px; margin-top:30px; float:left" class="button" onClick="parent.location='http://localhost/sunny/admin/profile.php'">Back ></button>

    <button style="margin-right:30px; margin-top:30px; float:right" class="button" onClick="parent.location='http://localhost/sunny/admin/logout.php'">Logout</button>
    


<div id="myDIVevent">
<?php
    include ('dbConfig.php');
    

$sql = "SELECT * FROM poses ORDER BY poseupload DESC ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    
    echo "<tr><th>Pose Name</th><th>Creator Name</th><th>Place</th><th>Category</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
      
       $delete ='myown()';
        
        echo "<tr>

<td> ". $row["pose_name"]. "</td>
<td>". $row["creator_name"]. "</td>
<td>". $row["place"]. "</td>
<td>". $row["category"]. "</td>

         <td>   <button  id='" .$row["pose_id"]. "' onclick='".$delete."'>Delete</button> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

    mysqli_close($db);

?>
   
    </div>
  <script>
     function myown() {
  var txt;
      var e = window.event,
       btn = e.target || e.srcElement;
  
  if (confirm("Press a button!")) {
    okPressed(btn.id);
  } else {
//     cancel pressed
  }
}
function okPressed(clicked_id){
    
    window.location = "delete.php?value="+clicked_id;
    
   
}
    </script>
</body>
</html> 