<?php

require_once("./routeur.php");

get('/', 'index.php');

get('/formule', 'view/package.php');

any('/reservation', 'view/book.php');

get('/a-propos', 'view/about.php');

any('/404','view/404.php');
?>