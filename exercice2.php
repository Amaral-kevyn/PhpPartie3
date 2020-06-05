<!--Exercice 2 Variable-->
<?php 
    $title = 'Exercice 2';
    include 'header.php';
    $first = 0;
    $second = 5;
?>
    <h1>Exercice 2</h1>
    <p><?php
        do {
            echo ' '.($first * $second);
            $first ++;            
        }while($first <= 20);
    ?></p>

<?php 
    include 'footer.php';
?>