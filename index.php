<?php
if(isset($_SESSION['user'])){
header('Location: View/home.php');
}else{
    header('Location: login.php');
    //header('Location: View/home.php');
}
?>