<?php

require_once ('card.php');


$boxeFrancaise = new Card("boxe Française", "../../image/photo-boxe.jpg", 'Photo boxe Française', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quod veritatis 
sequi inventore amet corporis quibusdam animi maiores dignissimos pariatur?');

$kickBoxing = new Card("Kick boxing", "../../image/boxe2.jpg","Photo Kick boxing", 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quod veritatis 
sequi inventore amet corporis quibusdam animi maiores dignissimos pariatur?');

$grappling = new Card("grappling", "../../image/boxe3.jpg", "Photo grappling", 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quod veritatis 
sequi inventore amet corporis quibusdam animi maiores dignissimos pariatur?');

$pancrace = new Card("pancrace", "../../image/JUDO.jpg", "Photo pancrace", 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quod veritatis 
sequi inventore amet corporis quibusdam animi maiores dignissimos pariatur?');

$judo = new Card("judo", "../../image/JUDO.jpg", "Photo judo", 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quod veritatis 
sequi inventore amet corporis quibusdam animi maiores dignissimos pariatur?');

$juJitsu = new Card("ju Jitsu", "../../image/JIUJITSU.jpg", "Photo jujitsu", 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quod veritatis 
sequi inventore amet corporis quibusdam animi maiores dignissimos pariatur?');

$cards = [$boxeFrancaise, $kickBoxing, $grappling, $pancrace, $judo,$juJitsu];
