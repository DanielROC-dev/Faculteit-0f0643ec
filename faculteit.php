<?php
echo "> van welk getal wil je de faculteit weten" . PHP_EOL;
$aantal = readline("> ");
$totaal = 1;
if (is_numeric($aantal)) {
    for ($tell = 1; $tell <= $aantal; $tell++) 
    { 
        $totaal = $totaal * $tell;
       
    }
}
else
{
    exit("> je moeder");
}
echo "> " . ($totaal);