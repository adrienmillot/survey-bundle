<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Traits;

use amillot\SurveyBundle\Model\Traits\LabellableInterface;

trait Labellable
{
    protected $label;

    /**
     * {@inheritDoc}
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * {@inheritDoc}
     */
    public function setLabel(?string $prmLabel): LabellableInterface
    {
        $this->label = $prmLabel;

        return $this;
    }
}
