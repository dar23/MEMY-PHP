<?php require("connection.php");?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="hamburger.css">
    <link rel="stylesheet" href="menu.css">    
    <link rel="stylesheet" href="post_repeat.css">
    <link rel="stylesheet" href="paginator.css">
    <script src="admin.js" async ></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<input id="toggle" type="checkbox" style="visibility:hidden"></input>

<label for="toggle" class="hamburger">
  <div class="top-bun"></div>
  <div class="meat"></div>
  <div class="bottom-bun"></div>
</label>
<?

require("pagination.php");


?>




<div class="form_display">
      <form method="post"  enctype="multipart/form-data" autocomplete="of" class="formpost" >
        
          <textarea type="text" name="tekst"></textarea>
          <label><em>Wybierz plik z komputera</em></label>
          <input type="file" name="plik" title="ślij plika..."></input>
          <label><em>numeracja postu</em></label>
          <input type="checkbox" name="number_post" class="number_post" ></input>
          <input type="submit" name="submit"></input>
          <input type="submit" value="Usuń" name="deletes"></input>

      </form>
</div>

<?php 

require("delete.php");
require("addpost.php");


require("pagination.php");


  echo '<div class="container">';
      
     
    
                      while($record_image = mysqli_fetch_assoc($result)) {
                        echo '<div class="white_place_container">';
                        echo '<div class="post_container">';
                        echo '<div class="article">'.'<div class="record_image">'.$record_image['id'].'</div>'.'   '.$record_image['article'].'</div>';  
                        echo '<img class="pic" src="uploads/'.$record_image['image'].'">';               
                        echo '</div>';
                        echo '</div>';
                        }
             
                        
   echo  '</div>' ;  
   
   
  
   
   
 ?>

</body>
</html>