<?php require('../config/autoload.php');

if(session_destroy()){
    header('location: login.php');
}