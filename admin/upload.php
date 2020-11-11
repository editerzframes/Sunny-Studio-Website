<?php
// Include the database configuration file
include ('dbConfig.php');
header('Location: http://localhost/sunny/admin/profile.php/');

$statusMsg = '';

// File upload path
$poseName =$_POST['pose_name'];
$originalposeName =$_POST['original_pose_name'];
$creatorName =$_POST['creator_name'];
$place =$_POST['place'];
$category =$_POST['category'];

if(isset($_POST["submit"])){
    
    $poseName = stripslashes($poseName);
$poseName = mysqli_real_escape_string($db, $poseName);
     $originalposeName = stripslashes($originalposeName);
$originalposeName = mysqli_real_escape_string($db, $originalposeName);
 $creatorName = stripslashes($creatorName);
$creatorName = mysqli_real_escape_string($db, $creatorName);
 $place = stripslashes($place);
$place = mysqli_real_escape_string($db, $place);
 $category = stripslashes($category);
$category = mysqli_real_escape_string($db, $category);
 
    
    
            $insert = mysqli_query($db, "INSERT into poses (pose_name, original_pose_name, creator_name, set_designer, category, poseupload) VALUES ('".$poseName."', '".$originalposeName."', '".$creatorName."', '".$place."', '".$category."', NOW())");
            
            if($insert){
                $statusMsg = "The file has been uploaded successfully.";
                
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }



?>