<?php
//--------------------------------------------------------------------------------------//
//                                       *SNACK 1                                       //
//--------------------------------------------------------------------------------------//

/*Creare una funzione che restituisce un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
Stampare i numeri in pagina.*/
?>

<?php

//Creo la funzione per generare i 15 numeri random
function getRandomNumbs()
{
//Creo un array vuoto
$randomNumbers = [];
    //Ciclo for per generare 15 numeri random e pusharli in randomNumbers
    for ($i = 0; $i < 15; $i++) {
        $randNumb = rand(0, 100);
        array_push($randomNumbers, $randNumb);
        echo $randomNumbers[$i] .'<br>';
    } 
};
    //Chiamo la funzione
    echo getRandomNumbs();
?>
