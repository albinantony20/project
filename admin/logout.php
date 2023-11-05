<?php require('../config/autoload.php');

if(session_destroy()){
    header('location: index.php');
}