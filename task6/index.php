<?php


include_once __DIR__ . "/lib/config.php";
include_once ROOT."/lib/autoload.php";



$yamahaDrum = new Instrument("Yamaha", "drums");
$fenderGuit = new Instrument("Fender", "guitar");
$ibanezBass = new Instrument("IBANEZ", "bass");
$gibsonGuit = new Instrument("Gibson", "guitar");


$james = new Musician("James Hetfield","guitarist");
$james->addInstrument($fenderGuit);

$lars = new Musician("Lars Ulrih","drummer");
$lars->addInstrument($yamahaDrum);

$kirk = new Musician("Kirk Hammet","guitarist");
$kirk->addInstrument($gibsonGuit);

$rob = new Musician("Robert Truhiljo","bass");
$rob->addInstrument($ibanezBass);


$metallica = new Band("Metallica");
$metallica->setGenre('METALL');

$metallica->addMusician($kirk);
$metallica->addMusician($rob);
$metallica->addMusician($lars);
$metallica->addMusician($james);

$cob = new Band("Children of Boddom");
$cob->setGenre('DEATH-METAL');
$cob->addMusician($james);
$cob->addMusician($kirk);


$groups [] = $metallica->getBandInfo();
$groups [] = $cob->getBandInfo();






	include_once ROOT . "/templates/index.php";
?>
