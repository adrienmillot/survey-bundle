<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model\Traits;

use amillot\SurveyBundle\Model\SurveyInterface;
use Doctrine\Common\Collections\Collection;

interface SurveyListAwareInterface
{
    /**
     * @param SurveyInterface $prmSurvey
     *
     * @return SurveyListAwareInterface
     */
    public function addSurvey(SurveyInterface $prmSurvey): SurveyListAwareInterface;

    /**
     * @return Collection
     */
    public function getSurveys(): Collection;

    /**
     * @param SurveyInterface $prmSurvey
     *
     * @return SurveyListAwareInterface
     */
    public function removeSurvey(SurveyInterface $prmSurvey): SurveyListAwareInterface;

    /**
     * @param Collection $prmSurveys
     *
     * @return SurveyListAwareInterface
     */
    public function setSurveys(Collection $prmSurveys): SurveyListAwareInterface;
}
