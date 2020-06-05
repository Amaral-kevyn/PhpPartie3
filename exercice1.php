<!--Exercice 1 Variable-->
<?php 
    $title = 'Exercice 1';

    include 'header.php';
    $i = 0;
?>
    <h1>Exercice 1</h1>
    <p><?php
        for ($i; $i <= 10; $i++){
            echo ' '.$i;
        }
    ?></p>
<?php 
    include 'footer.php';
?>