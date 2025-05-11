<?php

// 1. Benoem de namespace
namespace Game;
// 2. Maak de Player Class aan
class Player {
    public string $name;
    public int $level;

    public function __construct(string $name, int $level){
        $this->name = $name;
        $this->level = $level;
    }

    public function description(){
        return "Speler $this->name is op level $this->level.";
    }
}
// 3. Geef de class de $name en $level properties

// 4. Geef de class een constructor die de naam en level invult

// 5. Maak de functie "description()" die de volgende tekst returned:
// "Speler [name] is op level [level]."