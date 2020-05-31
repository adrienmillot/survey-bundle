<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Traits;

use amillot\SurveyBundle\Model\Traits\ValidableInterface;

trait Validable
{
    protected $valid = false;

    /**
     * {@inheritDoc}
     */
    public function isValid(): bool
    {
        return $this->valid;
    }

    /**
     * {@inheritDoc}
     */
    public function setValid(bool $prmValid): ValidableInterface
    {
        $this->valid = $prmValid;

        return $this;
    }
}
