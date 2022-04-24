<?php 




$post_on_site=5; //ile postów na stronie   

$select_post="SELECT  DISTINCT id,article,image FROM posts  "; 

$result=$conn->query($select_post);


$number_of_result=mysqli_num_rows($result); //liczba postów z bazy danych;


$number_of_page= ceil($number_of_result/$post_on_site); 



if(!isset($_GET['page'])){

$page=1;


}else{


$page=$_GET['page'];


}



$page_first_result = ($page-1) * $post_on_site;   





$sql="SELECT  DISTINCT id,article,image FROM posts LIMIT $page_first_result,$post_on_site "; 
$result=$conn->query($sql);

echo '<div class="paginator" >';

for($page=1;$page<=$number_of_page;$page++){

  
    echo '<a href="index.php?page='.$page.'" style="font-size:20px;">' .$page . '</a>'.' '; 
  
} 


echo  '</div>' ;  





?>