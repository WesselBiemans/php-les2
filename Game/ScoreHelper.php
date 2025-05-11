<?php

// 1. Benoem de namespace
namespace Game;
// 2. Maak de ScoreHelper Class aan
class ScoreHelper{
    public static function calculateScore($level, $bonus = 0){
        $score = $level * 10 + $bonus;
        return "Score: $score";
    }
}
// 3. Maak de static functie "calculateScore()" aan. Deze functie neemt de 2 parameters "$level" en "$bonus = 0".
// De functie berekent de score volgens de volgende formule: (level * 10) + bonus. 
// Ten slotte returnt de functie: "Score: [score]".