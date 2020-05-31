<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Traits;

use amillot\SurveyBundle\Model\SurveyInterface;
use amillot\SurveyBundle\Model\Traits\SurveyListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait SurveyListAware
{
    protected $surveys;

    public function __construct()
    {
        $this->surveys = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addSurvey(SurveyInterface $prmSurvey): SurveyListAwareInterface
    {
        if (!$this->surveys->contains($prmSurvey)) {
            $this->surveys->add($prmSurvey);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getSurveys(): Collection
    {
        return $this->surveys;
    }

    /**
     * {@inheritDoc}
     */
    public function removeSurvey(SurveyInterface $prmSurvey): SurveyListAwareInterface
    {
        if ($this->surveys->contains($prmSurvey)) {
            $this->surveys->removeElement($prmSurvey);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSurveys(Collection $prmSurveys): SurveyListAwareInterface
    {
        $this->surveys = $prmSurveys;

        return $this;
    }
}
