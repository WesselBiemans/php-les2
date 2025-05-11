<?php

// 1. Zorg ervoor dat eerst alle classes in de Game folder klaar zijn.

// 2. Voeg use-statements toe van alle 3 classes.
require_once "Game/Player.php";
require_once "Game/PremiumPlayer.php";
require_once "Game/ScoreHelper.php";

use Game\Player;
use Game\PremiumPlayer;
use Game\ScoreHelper;

// 3. Maak een variabele aan met een instantie van de Player class. Gebruik als naam Jan en als level 3.
$player = new Player("Jan", 3);
// 4. Voer de description() functie uit van deze Player.
echo $player->description();

echo "<br>";

// 5. Gebruik de ScoreHelper static functie om de score van deze speler te tonen
echo ScoreHelper::calculateScore($player->level);

echo "<br>";
echo "<br>";


// 6. Maak een variabele aan met een instantie van de PremiumPlayer class. Gebruik als naam Sara, als level 5, en als bonus 20.
$premiumPlayer = new PremiumPlayer("Sara", 5, 20);
// 7. Voer de description() functie uit van deze PremiumPlayer.
echo $premiumPlayer->description();

echo "<br>";


// 8. Gebruik de ScoreHelper static functie om de score van deze speler te tonen
echo ScoreHelper::calculateScore($premiumPlayer->level, $premiumPlayer->bonus);