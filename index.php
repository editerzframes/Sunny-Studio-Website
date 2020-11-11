
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="http://localhost/sunny/style.css" rel="stylesheet">
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Tables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script> 
    
    
</head>
<body>

<div class="header">
 <h1 style="text-align:center"> SUNNY STUDIO </h1>
</div>

    <div class="sidenav">
        <form action="index.php" method="POST" encrypt="multipart/form-data">
            
 <div class="container11">
     
	<h2>Filter</h2>

  <ul>
      <li>
    <input type="radio" id="a-option" name="selector">
          <label for="a-option">All</label>
    <div class="check"></div>
  </li>
      
  <li>
    <input type="radio" id="b-option" name="selector">
    <label for="b-option">Male</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="c-option" name="selector">
    <label for="c-option">Female</label>
    
    <div class="check"></div>
  </li>
      
      <li>
    <input type="radio" id="d-option" name="selector">
    <label for="d-option">Couple</label>
    
    <div class="check"></div>
  </li>
      
           <li>
    <input type="radio" id="e-option" name="selector">
    <label for="e-option">Group</label>
    
    <div class="check"></div>
  </li>  
       <li>
    <input type="radio" id="f-option" name="selector">
    <label for="f-option">Kid</label>
    
    <div class="check"></div>
  </li>
</ul>
    
    
     
</div>
<br><br>
        <h2>Search</h2>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<div class="form__group">
  <input type="text" class="form__input" id="name" placeholder="Enter any Pose Name" required="" />
</div>
            <br>
            <br>
     <input type="submit" name="submit" value="Refine Search" />
</form>
</div>
<!------------------------------------------------------------------------------------------------------------->
<div class="container-table">
    <div class="container"><br>
    <table class="table table-fluid" id="myTable">
    <thead>
    <tr><th>Pose Name</th><th>Creator Name</th><th>Place</th><th>Category</th></tr>
    </thead>
    <tbody>
<?php
    include ('dbConfig.php');
    

$sql = "SELECT * FROM poses ORDER BY poseupload DESC ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
   
    while($row = $result->fetch_assoc()) {
       

        echo "<tr>

<td> ". $row["pose_name"]."</td>
<td>". $row["creator_name"]. "</td>
<td> ". $row["place"]."</td>
<td>". $row["category"]. "</td>
        </tr>";
    }
    
} 
    mysqli_close($db);

?>
    
    </tbody>
    </table>
    </div>
    </div>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
    
</body>
</html>
