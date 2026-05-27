<?php

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
//      $users = [
//          ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
//      ];
// Pusha il codice su GitHub con il nome php_04_nome_cognome.

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Luca', 'surname' => 'Rossi', 'gender' => 'M'],
    ['name' => 'Giulia', 'surname' => 'Bianchi', 'gender' => 'F'],
    ['name' => 'Elisa', 'surname' => 'Gallo', 'gender' => 'F'],
    ['name' => 'Ari', 'surname' => 'Costa', 'gender' => 'NB'],
    ['name' => 'Federico', 'surname' => 'De Luca', 'gender' => 'M'],
    ['name' => 'Noa', 'surname' => 'Rinaldi', 'gender' => 'NB'],
    ['name' => 'Francesca', 'surname' => 'Ricci', 'gender' => 'F'],
];

foreach ($users as $user) {
    if ($user['gender'] === 'M') {
        echo "Buongiorno Sig. {$user['name']} {$user['surname']}\n";
    } elseif ($user['gender'] === 'F') {
        echo "Buongiorno Sig.ra {$user['name']} {$user['surname']}\n";
    } else {
        echo "Buongiorno {$user['name']} {$user['surname']}\n";
    }
}