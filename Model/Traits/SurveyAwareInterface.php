<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model\Traits;

use amillot\SurveyBundle\Model\SurveyInterface;

interface SurveyAwareInterface
{
    /**
     * @return SurveyInterface|null
     */
    public function getSurvey(): ?SurveyInterface;

    /**
     * @param SurveyInterface|null $prmSurvey
     *
     * @return SurveyAwareInterface
     */
    public function setSurvey(?SurveyInterface $prmSurvey): SurveyAwareInterface;
}
