<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model\Traits;

interface WeightableInterface
{
    /**
     * @return int|null
     */
    public function getWeight(): ?int;

    /**
     * @param int|null $prmWeight
     *
     * @return WeightableInterface
     */
    public function setWeight(?int $prmWeight): WeightableInterface;
}
