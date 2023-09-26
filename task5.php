<?php
 
function password_generate($chars)
{
    // Define character sets for different types of characters
    $_alphaSmall = 'abcdefghijklmnopqrstuvwxyz';            // small letters
    $_alphaCaps  = strtoupper($_alphaSmall);                // CAPITAL LETTERS
    $_numerics   = '1234567890';                            // numerics
    $_specialChars = '`~!@#$%^&*()-_=+]}[{;:,<.>/?\'"\|';   // Special Characters

    // Combine all character
    $data = $_alphaSmall . $_alphaCaps . $_numerics . $_specialChars;

    // Generate the password
    return substr(str_shuffle($data), 0, $chars);
}

// Generate a 12-character password
echo password_generate(12) . "\n";

