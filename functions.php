<?php
function isPalindroma($parola)
{
    // Inizializza la variabile come falso
    $isPalindroma = false;
    $parole = [];
    // Aggiungi la parola all'array
    $parole[] = $parola;
    // Inverti la parola
    $parolaInvertita = strrev($parola);
    // Controlla se la parola è palindroma
    if ($parola === $parolaInvertita) {
        $isPalindroma = true;
    }
    return $isPalindroma;
}