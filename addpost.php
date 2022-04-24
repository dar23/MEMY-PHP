<?php 


if(isset($_POST['submit']) && isset($_POST['tekst'])    && !empty($_POST['tekst']) && !empty($_FILES['plik']) ){        //w warunkach nie zapisuj w  formie zmiennej bo szlag wszysttko trafi :) 
    
   
    $text=$_POST['tekst'];
    $img_name=$_FILES['plik']['name'];
    $img_loc=$_FILES['plik']['tmp_name'];
    $local="uploads/";
    $target=move_uploaded_file($img_loc,$local.$img_name);



 

        $sql_image="INSERT  INTO posts(id,article,image) VALUES ('$id','$text','$img_name')";                         
              $conn->query($sql_image);

              header('Location: index.php');
              exit;
          

    }
    
 

?>