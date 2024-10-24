<?php
//This file is the update controller

//Add some code in here to get this to work
require('./models/film.php');

$id = $_POST['id'];
$title = $_POST['title'];
$year = $_POST['year'];
$duration = $_POST['duration'];

update($id,$title,$year,$duration);

//Redirect to the home page
header('Location: index.php');
die();


