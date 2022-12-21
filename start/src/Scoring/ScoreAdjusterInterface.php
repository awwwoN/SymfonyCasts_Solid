<?php

namespace App\Scoring;

interface ScoreAdjusterInterface
{
    public function adjustScore(int $finalScore, BigFootSighting $sighting): int;
}