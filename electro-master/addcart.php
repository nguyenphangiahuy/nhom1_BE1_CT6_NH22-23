<?php session_start(); 
if(isset($_GET['id'])):
    $id = $_GET['id'];
    
    if(isset($_SESSION['cart'][$id])):
        $_SESSION['cart'][$id]++;
        $_SESSION['qty']++;
    else:
        $_SESSION['cart'][$id] = 1;
        $_SESSION['qty']++;
    endif;
endif;
header('location:store.php');
?>
