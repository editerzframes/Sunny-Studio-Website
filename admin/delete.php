<?php


$var1 = $_GET['value'];
echo doSomething($var1);
function doSomething($var) {
          include ('dbConfig.php');

   
    

    
$sql1 = "DELETE FROM poses WHERE pose_id='".$var."' ";
$result1 = $db->query($sql1);
      if($result1){
               echo "<script> location.href='http://localhost/sunny/admin/profile.php/'; </script>";
            }
}

  ?>