<?php
    //check for existing session 
    session_start();
    // destroy the session 
    session_destroy();

    header('location:view.php');
?>