<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model\Traits;

interface ValidableInterface
{
    /**
     * @return bool
     */
    public function isValid(): bool;

    /**
     * @param bool $prmValid
     *
     * @return ValidableInterface
     */
    public function setValid(bool $prmValid): ValidableInterface;
}
