<?php
  session_start();
  include 'session.php';
  if (isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Alex Toro - User Profile</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="profile">
  <img src="http://image005.flaticon.com/1/svg/145/145867.svg" />
  <?php
            $nsql="SELECT * FROM `usuario` WHERE `alias`= '".$_SESSION['username']."'";
            $name = mysqli_query($conexion, $nsql);
            while ($resname=mysqli_fetch_array($name)) {
              echo $resname['nombre']." ".$resname['apellidos'];
              
  ?>



  
  <div class="bar">
    <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
  </div>
  <h2>Position: SharePoint Expert</h2>
  <h2>Department: IT Solutions</h2>
  <h2>Level: II | OPs</h2>
</div>
  
  
</body>
</html>
