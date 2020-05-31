<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Traits;

use amillot\SurveyBundle\Model\Traits\WeightableInterface;

trait Weightable
{
    protected $weight;

    /**
     * {@inheritDoc}
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * {@inheritDoc}
     */
    public function setWeight(?int $prmWeight): WeightableInterface
    {
        $this->weight = $prmWeight;

        return $this;
    }
}
