<?php 
use MyApp\Game\Game;

require_once realpath("vendor/autoload.php");

$player = new Game();
$gameController = new \MyApp\Game\GameController();