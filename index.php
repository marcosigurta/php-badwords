<!-- GOAL: Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

<?php
$testo = ucwords('macchina cane gatto macchina ciao sasso macchina');
$var = $_GET['word'];

$lung =  strlen($testo);
var_dump($testo);
$replace = str_replace(ucwords($var), "***", $testo);
?>
<h1> <?php echo$testo ?></h1>
<h2> Lunghezza: <?php echo$lung; ?></h2>
<h2> Rimpiazzare parola: <?php echo$replace; ?> </h2>