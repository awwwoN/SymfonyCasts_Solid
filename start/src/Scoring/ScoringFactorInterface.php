<?php

namespace App\Scoring;

use App\Entity\BigFootSighting;

interface ScoringFactorInterface
{
    /**
     * Return the score they should be added to the overall score.
     *
     * This method should not throw any exception for any normal reason
     */
    public function score(BigFootSighting $sighting): int;
}