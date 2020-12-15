<!-- Create una variabile con un paragrafo.
Leggete da un parametro GET della querystring una "badword"
Sostituite all'interno del paragrafo tutte le occorrenze della "badword" con *** (3 asterischi).
Stampate a schermo il paragrafo censurato e la lunghezza del paragrafo originale. -->

<?php
    $word = $_GET['badword'];

    $paragraph = $word . ' ' . 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    $lenght_para_uncensored = count(str_split($paragraph));

    $paragraph_censored = str_replace($word, '***', $paragraph);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-badwords</title>
    </head>
    <body>
        <h1>No-Badwords</h1>
        <p> <?php echo $paragraph_censored ?> </p>
        <span>Length uncensured paragraph: <?php echo $lenght_para_uncensored ?></span>
    </body>
</html>
