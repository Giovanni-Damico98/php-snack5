<?php


function isPalindroma($parola)
{
    $isPalindroma = false;
    $parole = [];
    // Aggiungo la parola all'array
    $parole[] = $parola;
    // Invertiamo la parola
    $parolaInvertita = strrev($parola);
    if ($parola === $parolaInvertita) {
        $isPalindroma = true;
        return $isPalindroma;
    } else {
        return $isPalindroma;
    }
}