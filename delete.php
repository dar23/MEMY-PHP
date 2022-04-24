
<?php



if(isset($_POST['tekst'])){                 
       
        $id=$_POST['tekst'];
        

$del="DELETE FROM posts WHERE id='$id' "; 


$conn->query($del);

}


?>