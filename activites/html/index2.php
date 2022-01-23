<?php

require_once ('card.php')


$boxeFrancaise_card = new Card("boxe Française", "$image", '$contenu');
$kickBoxing_card = new Card("Kick boxing", "$image", '$contenu');
$grappling_card = new Card("grappling", "$image", '$contenu');
$pancrace_card = new Card("pancrace", "$image", '$contenu');
$judo_card = new Card("judo", "$image", '$contenu');
$juJitsu_card = new Card("ju Jitsu", "$image", '$contenu');

console.log($boxeFrancaise_card->title);