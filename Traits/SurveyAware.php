<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Traits;

use amillot\SurveyBundle\Model\SurveyInterface;
use amillot\SurveyBundle\Model\Traits\SurveyAwareInterface;

trait SurveyAware
{
    protected $survey;

    /**
     * {@inheritDoc}
     */
    public function getSurvey(): ?SurveyInterface
    {
        return $this->survey;
    }

    /**
     * {@inheritDoc}
     */
    public function setSurvey(?SurveyInterface $prmSurvey): SurveyAwareInterface
    {
        $this->survey = $prmSurvey;

        return $this;
    }
}
