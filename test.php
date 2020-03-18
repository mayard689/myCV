<?php

function indyWin()
{
    $weapons = ['fists', 'whip', 'gun'];
    $opponentWeapon = $weapons[rand(0, 2)]; // Cela permet de choisir une arme de manière aléatoire.
    $indyWeapon = '???';
    /* pistolet bat poing
       poing bat fouet
       fouet bat pistolet
    */
    switch ($opponentWeapon)
    {
        case 'gun' :
            $indyWeapon = 'whip';
            break;
        case 'fists' :
            $indyWeapon = 'gun';
            break;
        case 'whip' :
            $indyWeapon = 'fists';
            break;
    }
    return 'L\'aversaire avec ' . $opponentWeapon . ' perd contre Indy avec ' . $indyWeapon ;
}

echo(indyWin());