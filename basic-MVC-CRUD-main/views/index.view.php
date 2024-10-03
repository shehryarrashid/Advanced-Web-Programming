
<?php 
require('utils/header.php');
require('utils/nav.php'); 
?>
    <h1>Here's a list of films</h1>

    <?php
    // The results from the database are returned as an array
    // Use a foreach loop to iterate over the array and display the each film
    foreach ($films as $film) {
        echo "<p>";
        // Construct a link to the show.php page e.g. <a href="show.php?id=2">Winter's Bone</a>
        echo "<a href='show.php?id={$film["id"]}'>";
        // Display the film's title
        echo $film["title"];
        echo "</a>";
        echo "</p>";
    }
    ?>
<?php require('utils/footer.php'); ?>