<?php

// 1. Benoem de namespace
namespace Game;
// 2. Voeg de Player class toe via een use-statement
use Game\Player;
// 3. Maak de PremiumPlayer Class aan. Zorg ervoor dat deze class de Player class extend.
class PremiumPlayer extends Player{
    public int $bonus;

    public function __construct(string $name, int $level, int $bonus){
        parent::__construct($name, $level);
        $this->bonus = $bonus;
    }

    public function description(){
        return "Speler $this->name is op level $this->level met een bonus van $this->bonus.";
    }
}
// 4. Geef deze class de $bonus property.

// 5. Geef de class een constructor die de naam, level en bonus invult.

// 6. Overschrijf de "description()" functie die het volgende returnt:
// "Speler [name] is op level [level] met een bonus van [bonus]."