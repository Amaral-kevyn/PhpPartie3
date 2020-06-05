<!--Exercice 3 Variable-->
<?php 
    $title = 'Exercice 3';
    include 'header.php';
    
    $firstNumber = 100;
    $secondNumber = 55;
?>
    <h1>Exercice 3</h1>
    <p><?php
        do {
            echo ' '.($firstNumber * $secondNumber);
            $firstNumber --;            
        }while($firstNumber >= 10);
    ?></p>

<?php 
    include 'footer.php';
?>