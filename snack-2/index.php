<?php
//--------------------------------------------------------------------------------------//
//                                       *SNACK 2                                       //
//--------------------------------------------------------------------------------------//

/*Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). 
Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno.*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Array di ipotetici studenti
    $hypotheticStudents = [
        [
            "firstname" => "Papa",
            "surname" => "Francesco",
            "vote" => [3, 4, 5, 4]
        ],
        [
            "firstname" => "Silvio",
            "surname" => "Berlusconi",
            "vote" => [8, 7, 7, 9]
        ],
        [
            "firstname" => "Maurizio",
            "surname" => "Costanzo",
            "vote" => [8, 10, 7, 4]
        ],
    ];


    for ($i = 0; $i < count($hypotheticStudents); $i++) {
        /* calcolo la media dei voti */
        $averageGrades = array_sum($hypotheticStudents[$i]['vote']) / count($hypotheticStudents[$i]['vote']);
        /* stampo nome cognome e media dei voti */
        echo "Name:{$hypotheticStudents[$i]['firstname']} <br> Surname : {$hypotheticStudents[$i]['surname']} <br> Media Voti: {$averageGrades} <br> <hr>  ";
    };

    ?>

</body>

</html>