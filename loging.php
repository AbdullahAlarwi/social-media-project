<?php 

 if ($_POST['username']=='Abdullah' and $_POST['password']=='123'){
    header('location:index.html');
 }else{
    header('location:error.html');

 }



?>