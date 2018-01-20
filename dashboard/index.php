
<?php

include 'includes/header.php';


?>


<div class="page">

    <div class="container">
        <div class="row">

 <?php
 
 if(isset($_GET['page'])){
    $page =$_GET['page'];
    switch($page ){
      case 'edit' :
       include 'page/edit.php'; 


    }



}
?>

        </div>
    </div>




</div>

<?php include 'includes/footer.php'?>

