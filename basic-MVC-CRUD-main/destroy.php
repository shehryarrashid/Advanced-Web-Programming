<?php
//This file is the destroy controller

//Add some code in here to get this to work
require('./models/film.php');

$id = $_POST['id'];

delete($id);

//Redirect to the home page
header('Location: index.php');
die();