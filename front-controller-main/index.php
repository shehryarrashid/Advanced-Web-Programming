<?php
//Load the models file
require("models/film.php");
//Load the controller file

require("controllers/filmController.php");
$action = "/";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

//Just for test purposes, so we can see the action.
echo "<p>The action is <strong>{$action}</strong></p>";

//Test the action value and call a function in controllers/filmController.php
if ($action === "/") {
    //Call index() in filmController
    index();
} else if ($action === "show") {
    //Call show() in filmController
    show();
} else if ($action === "create") {
    //Call create() in filmController
    create();
} else if ($action === "store") {
    //Call store() in filmController
    store();
} else if ($action === "about"){
    // Call about() in filmController
    about();
} else if ($action === "edit"){
    // Call edit() in filmController
    edit();
}else if ($action === "update"){
    // Call update() in filmController
    updateFilm();
}else if ($action === "delete"){
    // Call destroy() in filmController
    destroy();


}
