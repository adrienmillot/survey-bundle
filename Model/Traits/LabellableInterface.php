<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model\Traits;

interface LabellableInterface
{
    /**
     * @return string|null
     */
    public function getLabel(): ?string;

    /**
     * @param string|null $prmLabel
     *
     * @return LabellableInterface
     */
    public function setLabel(?string $prmLabel): LabellableInterface;
}
