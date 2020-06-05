<!--Exercice 4 Variable-->
<?php 
    $title = 'Exercice 4';
    include 'header.php';

    $i = 1;
?>
    
<h1>Exercice 4</h1>

<p>
    <?php
        
        do{
            echo $i;
            $i = $i + ($i / 2 );
        }while($i <= 10);
        
    ?>
</p>

<?php 
    include 'footer.php';
?>