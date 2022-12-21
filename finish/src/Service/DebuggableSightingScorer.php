<?php

namespace App\Service;

use App\Entity\BigFootSighting;
use App\Model\BigFootSightingScore;
use App\Model\DebuggableBigFootSightingScore;

class DebuggableSightingScorer extends SightingScorer
{
    public function score(BigFootSighting $sighting): DebuggableBigFootSightingScore
    {
        $startTime = microtime(true);
        $bfsScore = parent::score($sighting);

        return new DebuggableBigFootSightingScore(
            $bfsScore->getScore(),
            microtime(true) - $startTime
        );
    }
}
