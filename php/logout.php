<?php
session_start();
if(session_destroy())
{
    header('Location: ../main.html'); //redirect homepage
}
?>